<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Internal library of functions for module geogebra
 *
 * All the geogebra specific functions, needed to implement the module
 * logic, should go here. Never include this file from your lib.php!
 *
 * @package    mod
 * @subpackage geogebra
 * @copyright  2011 Departament d'Ensenyament de la Generalitat de Catalunya
 * @author     Sara Arjona Téllez <sarjona@xtec.cat>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/filelib.php");

    /**
    * Get an array with the languages
    *
    * @return array   The array with each language.
    */
    function geogebra_get_languages(){
        $tmplanglist = get_string_manager()->get_list_of_translations();
        $langlist = array();
        foreach ($tmplanglist as $lang=>$langname) {
            if (substr($lang, -5) == '_utf8') {   //Remove the _utf8 suffix from the lang to show
                $lang = substr($lang, 0, -5);
            }
            $langlist[$lang]=$langname;
        }
        return $langlist;
    }

    /**
    * Get an array with the file types
    *
    * @return array   The array with each file type
    */
    function geogebra_get_file_types(){
        $filetypes =  array(GEOGEBRA_FILE_TYPE_LOCAL => get_string('filetypelocal', 'geogebra'));
        $filetypes[GEOGEBRA_FILE_TYPE_EXTERNAL] = get_string('filetypeexternal', 'geogebra');
        return $filetypes;
    }    

    /**
     * Display the header and top of a page
     *
     * This is used by the view() method to print the header of view.php but
     * it can be used on other pages in which case the string to denote the
     * page in the navigation trail should be passed as an argument
     *
     * @global object
     * @param string $subpage Description of subpage to be used in navigation trail
     */
    function geogebra_view_header($geogebra, $cm, $course, $subpage='') {
        global $CFG, $PAGE, $OUTPUT;

        if ($subpage) {
            $PAGE->navbar->add($subpage);
        }

        //$PAGE->set_title($geogebra->name);
        //$PAGE->set_heading($course->fullname);

        echo $OUTPUT->header();

        groups_print_activity_menu($cm, $CFG->wwwroot . '/mod/geogebra/view.php?id=' . $cm->id);

        echo '<div class="reportlink">'.geogebra_submittedlink().'</div>';
        echo '<div class="clearer"></div>';
    }


    /**
     * Display the geogebra intro
     *
     */
    function geogebra_view_intro($geogebra, $cm, $cangrade=false, $action=null) {
        global $OUTPUT, $CFG;
        echo $OUTPUT->heading(format_string($geogebra->name, false, array('context' => $cm)));
        echo $OUTPUT->box_start('generalbox boxaligncenter', 'intro');
        echo format_module_intro('geogebra', $geogebra, $cm->id);
        echo $OUTPUT->box_end();
        $currenttab = 'view';
        if ( ($cangrade && empty($action)) || $action=='result' ){
            $currenttab = 'result';
        }
        print_tabs(geogebra_get_tabs($cm, $cangrade), $currenttab);
    }

    /**
     * Display the geogebra dates
     *
     * Prints the geogebra start and end dates in a box.
     */
    function geogebra_view_dates($geogebra, $cm, $timenow=null) {
        global $OUTPUT;
        
        if (!$geogebra->timeavailable && !$geogebra->timedue) {
            return;
        }
        
        if (is_null($timenow)) $timenow = time();

        echo $OUTPUT->box_start('generalbox boxaligncenter geogebradates', 'dates');
        if ($geogebra->timeavailable) {
            echo '<div class="title-time">'.get_string('availabledate','assignment').': </div>';
            echo '<div class="data-time">'.userdate($geogebra->timeavailable).'</div>';
        }
        if ($geogebra->timedue) {
            echo '<div class="title-time">'.get_string('duedate','assignment').': </div>';
            echo '<div class="data-time">'.userdate($geogebra->timedue).'</div>';
        }
        echo $OUTPUT->box_end();
    }
     
   /**
     * Display the geogebra applet
     *
     */
    function geogebra_view_applet($geogebra, $context, $attemptid=null, $ispreview=false, $timenow=null) {
        global $OUTPUT, $PAGE, $CFG, $USER;
        
        if (is_null($timenow)) $timenow = time();
        $isopen = (empty($geogebra->timeavailable) || $geogebra->timeavailable < $timenow);
        $isclosed = (!empty($geogebra->timedue) && $geogebra->timedue < $timenow);
        // TODO: Get attempts of current user
        $attempts = 0;
        //$attempts = geogebra_get_attempts($geogebra->id, $USER->id);
        
        if (!$ispreview && !$isopen){
            echo $OUTPUT->box(get_string('notopenyet', 'geogebra', userdate($geogebra->timeavailable)), 'generalbox boxaligncenter geogebradates');
        } else if (!$ispreview && $isclosed ) {
            echo $OUTPUT->box(get_string('expired', 'geogebra', userdate($geogebra->timedue)), 'generalbox boxaligncenter geogebradates'); 
        } else {
            if ($geogebra->maxattempts<0 || $attempts < $geogebra->maxattempts){
                parse_str($geogebra->attributes, $attributes);
                $attributes['filename'] = $geogebra->url;
   
                $PAGE->requires->js('/mod/geogebra/geogebra_view.js');
                echo '<applet id="geogebra_object" name="ggbApplet" codebase="', geogebra_get_javacodebase(), '" archive="', GEOGEBRA_ARCHIVE, '" code="', GEOGEBRA_CODE, '" width="' . $geogebra->width . 'px" height="' . $geogebra->height . 'px" align="bottom">';
                $ggbbase64 = geogebra_get_ggbbase64_content($geogebra, $context);
                //$ggbbase64 = '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';
                echo '<param name="ggbBase64" value="' . $ggbbase64 . '" />';
                echo geogebra_get_applet_param('enableLabelDrags', $attributes);
                echo geogebra_get_applet_param('showResetIcon', $attributes);
                echo geogebra_get_applet_param('showMenuBar', $attributes);
                echo geogebra_get_applet_param('showToolBar', $attributes);
                echo geogebra_get_applet_param('showToolBarHelp', $attributes);
                echo '<param name="language" value="' . $attributes['language'] . '" />';
                echo geogebra_get_applet_param('enableRightClick', $attributes);
                $attributes['framePossible'] = has_capability('mod/geogebra:gradeactivity', $context);
                echo geogebra_get_applet_param('framePossible', $attributes);
                echo '<param name="useBrowserForJS" value="true" />';
                echo get_string('warningnojava', 'geogebra');
                echo '</applet>';

                // TODO: Review to include also javascript code from GGB file
                //  print_r(geogebra_get_js_from_geogebra($filename));                
                
                // If not preview mode, load state and show submit buttons
                if (!$ispreview) {                    
                    if (!empty($attemptid)){
                        // If specified, show specific attempt
                        $attempt = geogebra_get_attempt($attemptid);
                    } else{
                        //If there is some unfinished attempt, show it
                        $attempt = geogebra_get_unfinished_attempt($geogebra->id, $USER->id);                
                    }
                    $parsedVars = null;
                    if ($attempt) {
                        parse_str($attempt->vars, $parsedVars);
                    }
                    if (isset($parsedVars['state'])) {
                        // Continue previuos attempt
                        $edu_xtec_adapter_parameters = http_build_query(array(
                            'state' => $parsedVars['state'],
                            'grade' => $parsedVars['grade'],
                            'duration' => $parsedVars['duration'],
                            'attempts' => $parsedVars['attempts']
                                ), '', '&');
                    } else {
                        // New attempt
                        $attempts = geogebra_count_finished_attempts($geogebra->id, $USER->id) + 1;
                        $edu_xtec_adapter_parameters = http_build_query(array(
                            'attempts' => $attempts
                                ), '', '&');
                    }
                    echo '<div style="geogebra_form">';
                    echo '<form id="geogebra_form" method="POST" action="attempt.php">';
                    echo '<input type="hidden" name="appletInformation" />';
                    echo '<input type="hidden" name="id" value="'.$context->instanceid.'"/>';
                    echo '<input type="hidden" name="n" value="'.$geogebra->id.'"/>';
                    echo '<input type="hidden" name="f" value="0"/>';
                    echo '<input type="submit" value="' . get_string('savewithoutsubmitting', 'geogebra') . '" />';
                    echo '<input type="submit" onclick = "this.form.f.value = 1;" value="' . get_string('submitandfinish', 'geogebra') . '" />';
                    echo '<input type="hidden" name="prevAppletInformation" value="' . $edu_xtec_adapter_parameters . '" />';
                    echo ' </form>';
                    echo '</div>';
                }                       
            }else{
                echo $OUTPUT->box(get_string('msg_noattempts', 'geogebra'), 'generalbox boxaligncenter');
            }
            geogebra_view_dates($geogebra, $context, $timenow);            
        }
    }
    
    function geogebra_get_javacodebase() {
        global $CFG;
        if (isset($CFG->geogebra_javacodebase))
            return $CFG->geogebra_javacodebase;
        return GEOGEBRA_DEFAULT_CODEBASE;
    }

    function geogebra_get_applet_param($paramName, $attributes) {
        $paramValue = (isset($attributes[$paramName]) && $attributes[$paramName]) ? 'true' : 'false';
        return '<param name="' . $paramName . '" value="' . $paramValue . '" />';
    }
    
    function geogebra_get_ggbbase64_content($geogebra, $context){
        global $CFG;
        
        $url = '';
        if (geogebra_is_valid_external_url($geogebra->url)) {
            // TODO: Get contents if specified GGB is external
            $content = file_get_contents($geogebra->url);
        } else {
            $fs = get_file_storage();
            $file = $fs->get_file($context->id, 'mod_geogebra', 'content', 0, '/', $geogebra->url);
            if ($file) {
                $content = $file->get_content();
            }    
        }
        
        return base64_encode($content);
    }


    /**
     * Display the bottom and footer of a page
     *
     * This default method just prints the footer.
     * This will be suitable for most assignment types
     */
    function geogebra_view_footer() {
        global $OUTPUT;
        echo $OUTPUT->footer();
    }

    /**
     * Returns a link with info about the state of the geogebra attempts
     *
     * This is used by view_header to put this link at the top right of the page.
     * For teachers it gives the number of attempted geogebras with a link
     * For students it gives the time of their last attempt.
     *
     * @global object
     * @global object
     * @param bool $allgroup print all groups info if user can access all groups, suitable for index.php
     * @return string
     */
    function geogebra_submittedlink($allgroups=false) {
        global $USER;
        global $CFG;

        $submitted = '';
        $urlbase = "{$CFG->wwwroot}/mod/geogebra/";

/*        $context = get_context_instance(CONTEXT_MODULE,$this->cm->id);
        if (has_capability('mod/geogebra:grade', $context)) {
            if ($allgroups and has_capability('moodle/site:accessallgroups', $context)) {
                $group = 0;
            } else {
                $group = groups_get_activity_group($this->cm);
            }
            $submitted = 'teacher';
        } else {
            if (isloggedin()) {
                $submitted = 'student';
            }
        }
*/
        return $submitted;
    }


    /**
    * Get moodle server
    *
    * @return string                myserver.com:port
    */
    function geogebra_get_server() {
        global $CFG;

        if (!empty($CFG->wwwroot)) {
            $url = parse_url($CFG->wwwroot);
        }

        if (!empty($url['host'])) {
            $hostname = $url['host'];
        } else if (!empty($_SERVER['SERVER_NAME'])) {
            $hostname = $_SERVER['SERVER_NAME'];
        } else if (!empty($_ENV['SERVER_NAME'])) {
            $hostname = $_ENV['SERVER_NAME'];
        } else if (!empty($_SERVER['HTTP_HOST'])) {
            $hostname = $_SERVER['HTTP_HOST'];
        } else if (!empty($_ENV['HTTP_HOST'])) {
            $hostname = $_ENV['HTTP_HOST'];
        } else {
            notify('Warning: could not find the name of this server!');
            return false;
        }

        if (!empty($url['port'])) {
            $hostname .= ':'.$url['port'];
        } else if (!empty($_SERVER['SERVER_PORT'])) {
            if ($_SERVER['SERVER_PORT'] != 80 && $_SERVER['SERVER_PORT'] != 443) {
                $hostname .= ':'.$_SERVER['SERVER_PORT'];
            }
        }

        return $hostname;
    }


    /**
    * Get moodle path
    *
    * @return string                /path_to_moodle
    */
    function geogebra_get_path() {
        global $CFG;

            $path = '/';
        if (!empty($CFG->wwwroot)) {
            $url = parse_url($CFG->wwwroot);
                    if (array_key_exists('path', $url)){
                            $path = $url['path'];			
                    }
        }
        return $path;
    }    
    
    function geogebra_get_filemanager_options(){
        $filemanager_options = array();
        $filemanager_options['return_types'] = 3;  // 3 == FILE_EXTERNAL & FILE_INTERNAL. These two constant names are defined in repository/lib.php
        $filemanager_options['accepted_types'] = 'archive';
        $filemanager_options['accepted_types'] =  '*'; // array('.ggb');
        $filemanager_options['maxbytes'] = 0;
        $filemanager_options['subdirs'] = 0;
        $filemanager_options['maxfiles'] = 1;
        return $filemanager_options;
    }

    function geogebra_set_mainfile($data) {
        $filename = null;
        $fs = get_file_storage();
        $cmid = $data->coursemodule;
        $draftitemid = $data->url;

        $context = get_context_instance(CONTEXT_MODULE, $cmid);
        if ($draftitemid) {
            file_save_draft_area_files($draftitemid, $context->id, 'mod_geogebra', 'content', 0, geogebra_get_filemanager_options());
        }
        
        $files = $fs->get_area_files($context->id, 'mod_geogebra', 'content', 0, 'sortorder', false);
        if (count($files) == 1) {
            // only one file attached, set it as main file automatically
            $file = reset($files);
            file_set_sortorder($context->id, 'mod_geogebra', 'content', 0, $file->get_filepath(), $file->get_filename(), 1);
            $filename = $file->get_filename();
        }
        return $filename;
    }
        
    function geogebra_is_valid_external_url($url){
        return preg_match('/(http:\/\/|https:\/\/|www).*\/*(\?[a-z+&\$_.-][a-z0-9;:@&%=+\/\$_.-]*)?$/i', $url);
    }

    function geogebra_is_valid_file($filename){
        return preg_match('/.ggb$/i', $filename);
    }
    
    
////////////////////////////////////////////////////////////////////////////////
// Activity sessions                                                          //
////////////////////////////////////////////////////////////////////////////////
    

    /**
    * Get user sessions
    *
    * @return array			[0=>session1,1=>session2...] where session1 is an array with keys: id,score,totaltime,starttime,done,solved,attempts. First sessions are newest.
    * @param object $geogebraid	The geogebra to get sessions
    * @param object $userid		The user id to get sessions
    */
    function geogebra_get_sessions($geogebraid, $userid) {
        global $CFG, $DB;
        
        $sessions=array();
        geogebra_normalize_date();
        $sql = "SELECT js.*
                FROM {geogebra} j, {geogebra_sessions} js 
                WHERE j.id=js.geogebraid AND js.geogebraid=? AND js.user_id=?
                ORDER BY js.session_datetime";
        $params = array($geogebraid, $userid);
        
        if($rs = $DB->get_records_sql($sql, $params)){
            $i = 0;
            foreach($rs as $session){
                    $activity = geogebra_get_activity($session);
                    $activity->attempts=$i+1;
                    $sessions[$i++]=$activity;
            }
        }
        return $sessions;
    }    
    
    /**
    * Get session activities
    *
    * @return array			[0=>act0,1=>act1...] where act0 is an array with keys: activity_id,activity_name,num_actions,score,activity_solved,qualification, total_time. First activity are oldest.
    * @param string $session_id		The session id to get actitivies
    */
    function geogebra_get_activities($session_id) {
        global $CFG, $DB;
        
        $activities = array();
        if($rs = $DB->get_records('geogebra_activities', array('session_id'=>$session_id), 'activity_id')){
            $i=0;
            foreach($rs as $activity){
                $activities[$i++]=$activity;
            }
        }
        return $activities;
    }
    
    
    /**
    * Get information about activities of specified session
    *
    * @return array		Array has these keys id,score,totaltime,starttime,done,solved,attempts
    * @param object $session	The session object
    */
    function geogebra_get_activity($session) {
        global $CFG, $DB;

        $activity = new stdClass();
        $activity->starttime=$session->session_datetime;
        $activity->session_id=$session->session_id;
        if($rs = $DB->get_record_sql("SELECT AVG(ja.qualification) as qualification, SUM(ja.total_time) as totaltime
                                 FROM {geogebra_activities} ja 
                                 WHERE ja.session_id='$session->session_id'")){
                $activity->score = round($rs->qualification,0);                
                $activity->totaltime = geogebra_format_time($rs->totaltime);
        }
        if ($rs = $DB->get_record_sql("SELECT COUNT(*) as done
                            FROM (SELECT DISTINCT ja.activity_name 
                                  FROM  {geogebra_activities} ja 
                                  WHERE ja.session_id='$session->session_id') t")){
            $activity->done=$rs->done;
        }
        
        if ($rs = $DB->get_record_sql("SELECT COUNT(*) as solved
                                FROM (SELECT DISTINCT ja.activity_name 
                                      FROM {geogebra_activities} ja 
                                      WHERE ja.session_id='$session->session_id' AND ja.activity_solved=1) t")){
            $activity->solved=$rs->solved;
        }
        
        return $activity;
    }    
        
    /**
    * Print a table data with all session activities 
    * 
    * @param string $session_id The session identifier
    */
    function geogebra_get_session_activities_html($session_id){
        $table_html='';

        // Import language strings
        $stractivity = get_string("activity", "geogebra");
        $strsolved = get_string("solved", "geogebra");
        $stractions = get_string("actions", "geogebra");
        $strtime = get_string("time", "geogebra");
        $strscore  = get_string("score", "geogebra");
        $stryes = get_string("yes");
        $strno = get_string("no");
        

        // Print activities for each session
        $activities = geogebra_get_activities($session_id);    
        if (sizeof($activities)>0){ 
            $table = new html_table();
            $table->attributes = array('class'=>'geogebra-activities-table');
            $table->head = array($stractivity, $strsolved, $stractions, $strtime, $strscore);
            foreach($activities as $activity){
                $act_percent=$activity->num_actions>0?round(($activity->score/$activity->num_actions)*100,0):0;
                $row = new html_table_row();
                $row->attributes = array('class' => ($activity->activity_solved?'geogebra-activity-solved':'geogebra-activity-unsolved') ) ;
                $row->cells = array($activity->activity_name, ($activity->activity_solved?$stryes:$strno), $activity->score.'/'.$activity->num_actions.' ('.$act_percent.'%)', geogebra_time2str($activity->total_time), $activity->qualification.'%');
                $table->data[] = $row;
            }
            $table_html = html_writer::table($table);
        }
        return $table_html;
    }
    
    /**
     * Convert specified time (in milliseconds) to XX' YY'' format
     * 
     * @param type $time time (in milliseconds) to format
     */
    function geogebra_format_time($time){
        return floor($time/60000)."' ".round(fmod($time,60000)/1000,0)."''";
    }

    /**
    * Get user activity summary
    *
    * @return object	session object with score, totaltime, activities done and solved and attempts information
    */
    function geogebra_get_sessions_summary($geogebraid, $userid) {
        global $CFG, $DB;

        geogebra_normalize_date();
        $sessions_summary = new stdClass(); 
        $sessions_summary->attempts = '';
        $sessions_summary->score = '';
        $sessions_summary->totaltime = '';
        $sessions_summary->starttime = '';
        $sessions_summary->done = '';
        $sessions_summary->solved = '';
        
        if ($rs = $DB->get_record_sql("SELECT COUNT(*) AS attempts, AVG(t.qualification) AS qualification, SUM(t.totaltime) AS totaltime, MAX(t.starttime) AS starttime
                            FROM (SELECT AVG(ja.qualification) AS qualification, SUM(ja.total_time) AS totaltime, MAX(js.session_datetime) AS starttime
                                  FROM {geogebra} j, {geogebra_sessions} js, {geogebra_activities} ja  
                                  WHERE j.id=js.geogebraid AND js.user_id='$userid' AND js.geogebraid=$geogebraid AND ja.session_id=js.session_id
                                  GROUP BY js.session_id) t")){
                $sessions_summary->attempts=$rs->attempts;
                $sessions_summary->score=round($rs->qualification,0);
                $sessions_summary->totaltime= geogebra_format_time($rs->totaltime);
                $sessions_summary->starttime=$rs->starttime;
        }

        if ($rs = $DB->get_record_sql("SELECT COUNT(*) as done
                            FROM (SELECT DISTINCT ja.activity_name 
                                  FROM {geogebra} j, {geogebra_sessions} js, {geogebra_activities} ja 
                                  WHERE j.id=js.geogebraid AND js.user_id='$userid' AND js.geogebraid=$geogebraid AND js.session_id=ja.session_id)  t")){
                $sessions_summary->done=$rs->done;
        }
        if ($rs = $DB->get_record_sql("SELECT COUNT(*) as solved
                            FROM (SELECT DISTINCT ja.activity_name 
                                  FROM {geogebra} j, {geogebra_sessions} js, {geogebra_activities} ja 
                                  WHERE j.id=js.geogebraid AND js.user_id='$userid' AND js.geogebraid=$geogebraid AND js.session_id=ja.session_id AND ja.activity_solved=1) t")){
        $sessions_summary->solved=$rs->solved;
        }
        return $sessions_summary;
    }    

    /**
     * Format time from milliseconds to string 
     *
     * @return string Formated string [x' y''], where x are the minutes and y are the seconds.	
     * @param int $time	The time (in ms)
     */
    function geogebra_time2str($time) {
        $minutes = floor($time / 60);
        $seconds = sprintf("%02s", round(fmod($time, 60), 0));
        return ($minutes > 0 ? $minutes . "' " : " ") . $seconds . "''";
    }
    
    function geogebra_view_results($geogebra, $context, $cm, $course, $action){
        global $CFG, $DB, $OUTPUT, $PAGE, $USER;
        
        // TODO: Add Javascript options to show all attempts
        //$PAGE->requires->js('/mod/geogebra/geogebra.js');
                
        // Show students list with their results
        require_once($CFG->libdir.'/gradelib.php');
        $perpage = optional_param('perpage', 10, PARAM_INT);
        $perpage = ($perpage <= 0) ? 10 : $perpage ;
        $page    = optional_param('page', 0, PARAM_INT);

        /// find out current groups mode
        $groupmode = groups_get_activity_groupmode($cm);
        $currentgroup = groups_get_activity_group($cm, true);

        /// Get all ppl that are allowed to submit geogebra
        list($esql, $params) = get_enrolled_sql($context, 'mod/geogebra:submit', $currentgroup); 
        $sql = "SELECT u.id FROM {user} u ".
               "LEFT JOIN ($esql) eu ON eu.id=u.id ".
               "WHERE u.deleted = 0 AND eu.id=u.id ";

        $users = $DB->get_records_sql($sql, $params);
        if (!empty($users)) {
            $users = array_keys($users);
        }

        // if groupmembersonly used, remove users who are not in any group
        if ($users and !empty($CFG->enablegroupmembersonly) and $cm->groupmembersonly) {
            if ($groupingusers = groups_get_grouping_members($cm->groupingid, 'u.id', 'u.id')) {
                $users = array_intersect($users, array_keys($groupingusers));
            }
        }

        // Create results table
        if (function_exists('get_extra_user_fields') ) {
            $extrafields = get_extra_user_fields($context);
        } else{
            $extrafields = array();
        }
        $tablecolumns = array_merge(array('picture', 'fullname'), $extrafields,
                array('starttime', 'attempts', 'solveddone', 'totaltime', 'grade'));

        $extrafieldnames = array();
        foreach ($extrafields as $field) {
            $extrafieldnames[] = get_user_field_name($field);
        }
        
        $strstarttime = ($action=='showall')?get_string('starttime', 'geogebra'):get_string('lastaccess', 'geogebra');

        $tableheaders = array_merge(
                array('', get_string('fullnameuser')),
                $extrafieldnames,
                array(
                    $strstarttime,
                    get_string('attempts', 'geogebra'),
                    get_string('solveddone', 'geogebra'),
                    get_string('totaltime', 'geogebra'),
                    get_string('grade'),
                ));

        require_once($CFG->libdir.'/tablelib.php');
        $table = new flexible_table('mod-geogebra-results');

        $table->define_columns($tablecolumns);
        $table->define_headers($tableheaders);
        $table->define_baseurl($CFG->wwwroot.'/mod/geogebra/view.php?id='.$cm->id.'&amp;currentgroup='.$currentgroup.'&amp;action='.$action);

        $table->sortable(true, 'lastname'); //sorted by lastname by default
        $table->collapsible(true);
        $table->initialbars(true);

        $table->column_suppress('picture');
        $table->column_suppress('fullname');

        $table->column_class('picture', 'picture');
        $table->column_class('fullname', 'fullname');
        foreach ($extrafields as $field) {
            $table->column_class($field, $field);
        }

        $table->set_attribute('cellspacing', '0');
        $table->set_attribute('id', 'attempts');
        $table->set_attribute('class', 'results generaltable generalbox');
        $table->set_attribute('width', '100%');

        $table->no_sorting('starttime'); 
        $table->no_sorting('solveddone'); 
        $table->no_sorting('totaltime'); 
        $table->no_sorting('attempts'); 
        $table->no_sorting('grade'); 

        // Start working -- this is necessary as soon as the niceties are over
        $table->setup();

        /// Construct the SQL
        list($where, $params) = $table->get_sql_where();
        if ($where) {
            $where .= ' AND ';
        }

        if ($sort = $table->get_sql_sort()) {
            $sort = ' ORDER BY '.$sort;
        }

        $ufields = user_picture::fields('u', $extrafields);
        // TODO: Review to show all users information
//        if (!empty($users)) {
        if (false) {
            $select = "SELECT $ufields ";

            $sql = 'FROM {user} u '.
                   'WHERE '.$where.'u.id IN ('.implode(',',$users).') ';

            $ausers = $DB->get_records_sql($select.$sql.$sort, $params, $table->get_page_start(), $table->get_page_size());

            $table->pagesize($perpage, count($users));
            $offset = $page * $perpage; //offset used to calculate index of student in that particular query, needed for the pop up to know who's next
            if ($ausers !== false) {
                //$grading_info = grade_get_grades($course->id, 'mod', 'geogebra', $geogebra->id, array_keys($ausers));
                $endposition = $offset + $perpage;
                $currentposition = $offset;
                $ausersObj = new ArrayObject($ausers);
                $iterator = $ausersObj->getIterator();
                $iterator->seek($currentposition);

                  while ($iterator->valid() && $currentposition < $endposition ) {
                    $auser = $iterator->current();
                    $picture = $OUTPUT->user_picture($auser);
                    $userlink = '<a href="' . $CFG->wwwroot . '/user/view.php?id=' . $auser->id . '&amp;course=' . $course->id . '">' . fullname($auser, has_capability('moodle/site:viewfullnames', $context)) . '</a>';
                    $extradata = array();
                    foreach ($extrafields as $field) {
                        $extradata[] = $auser->{$field};
                    }

                    // Sessions summary
                    $attempts = geogebra_get_user_attempts($geogebra->id, $auser->id);                    
                    $sessions_summary->attempts = 1;
                    $starttime = (sizeof($sessions)>0)?get_string('totals', 'geogebra'):(isset($sessions_summary->starttime)?date('d/m/Y H:i',strtotime($sessions_summary->starttime)):'-');
                    $grade = $sessions_summary->score; 
                    $totaltime = $sessions_summary->totaltime;
                    $attempts = $sessions_summary->attempts;
                    $row = array_merge(array($picture, $userlink), $extradata,
                            array(sizeof($attempts), $attempts, $totaltime, $grade));
                    $rowclass = (sizeof($sessions)>0)?'summary-row':'';
                    $table->add_data($row, $rowclass);
                    
                    // Forward iterator
                    $currentposition++;
                    $iterator->next();
                }
            }
        } else{
            // Show results only for specified user
            $user= $USER;
            $picture = $OUTPUT->user_picture($user);
            $userlink = '<a href="' . $CFG->wwwroot . '/user/view.php?id=' . $user->id . '&amp;course=' . $course->id . '">' . fullname($user, has_capability('moodle/site:viewfullnames', $context)) . '</a>';
            $extradata = array();
            foreach ($extrafields as $field) {
                $extradata[] = $user->{$field};
            }
            $attempts = geogebra_get_user_attempts($geogebra->id, $user->id);
            foreach ($attempts as $attempt) {
                parse_str($attempt->vars, $parsedVars);
                $numattempt = $parsedVars['attempts'];
                $duration = geogebra_time2str($parsedVars['duration']);
                $grade = $parsedVars['grade'];
                $gradecomment = !empty($attempt->gradecomment) ? shorten_text(trim(strip_tags(format_text($attempt->gradecomment))), 25) : '';
                $row = array_merge(array($picture, $userlink), $extradata,
                        array($numattempt, $duration, $grade, $gradecomment));
                $rowclass = '';
                $table->add_data($row, $rowclass);        
            }
        }       
        $table->print_html();  /// Print the whole table    
    }
    
    function geogebra_get_results_table_columns(){
        //$tablecolumns = array('picture', 'fullname', 'attempts', 'duration', 'grade', 'comment', 'datestudent', 'dateteacher', 'status');
        $tablecolumns = array('attempts', 'duration', 'grade', 'comment', 'datestudent', 'dateteacher', 'status');
        $tableheaders = array();
        foreach ($tablecolumns as $tablecolumn){
            $tableheaders[]=get_string($tablecolumn, 'geogebra');
        }
        return array('tablecolumns'=>$tablecolumns, 'tableheaders'=>$tableheaders);
    }
 
    function geogebra_view_userid_results($geogebra, $user, $context, $cm, $course, $action){
        global $CFG, $DB, $OUTPUT, $PAGE;
        
        require_once($CFG->libdir.'/tablelib.php');
        $table = new flexible_table('mod-geogebra-results');

        $tablecolumns = geogebra_get_results_table_columns();
        $table->define_columns($tablecolumns['tablecolumns']);
        $table->define_headers($tablecolumns['tableheaders']);
        $table->define_baseurl($CFG->wwwroot.'/mod/geogebra/view.php?id='.$cm->id.'&amp;action='.$action);

        $table->set_attribute('cellspacing', '0');
        $table->set_attribute('id', 'attempts');
        $table->set_attribute('class', 'results generaltable generalbox');
        $table->set_attribute('width', '100%');

        // Start working -- this is necessary as soon as the niceties are over
        $table->setup();

        /// Construct the SQL
        list($where, $params) = $table->get_sql_where();
        if ($where) {
            $where .= ' AND ';
        }

        if ($sort = $table->get_sql_sort()) {
            $sort = ' ORDER BY '.$sort;
        }

        // Show results only for specified user
        $picture = $OUTPUT->user_picture($user);
        $attempts = geogebra_get_user_attempts($geogebra->id, $user->id);
        foreach ($attempts as $attempt) {
            parse_str($attempt->vars, $parsedVars);
            $numattempt = $parsedVars['attempts'];
            $duration = geogebra_time2str($parsedVars['duration']);
            $grade = $parsedVars['grade'];
            $gradecomment = !empty($attempt->gradecomment) ? shorten_text(trim(strip_tags(format_text($attempt->gradecomment))), 25) : '';
            $datestudent = !empty($attempt->datestudent) ? userdate($attempt->datestudent) : '';
            $dateteacher = !empty($attempt->dateteacher) ? userdate($attempt->dateteacher) : '';
            $status = '<a href="' . $CFG->wwwroot . '/mod/geogebra/view.php?id=' . $cm->id . '&student=' . $user->id .'&attemptid='.$attempt->id.'"> ' . get_string('viewattempt', 'geogebra') . '</a>';
            $row = array($numattempt, $duration, $grade, $gradecomment, $datestudent, $dateteacher, $status);
            $rowclass = '';
            $table->add_data($row, $rowclass);        
        }
        $table->print_html();  /// Print the whole table    
    }    
    
    /**
     * Workaround to fix an Oracle's bug when inserting a row with date
     */
    function geogebra_normalize_date () {
        global $CFG, $DB;
        if ($CFG->dbtype == 'oci'){
            $sql = "ALTER SESSION SET NLS_DATE_FORMAT='YYYY-MM-DD HH24:MI:SS'";
            $DB->execute($sql);                        
        }        
    } 

    /**
     * Count the finished attempts done by the $userid
     */
    function geogebra_count_finished_attempts($geogebraid, $userid) {
        global $CFG, $DB;
        
        return $DB->count_records('geogebra_attempts', array('userid'=>$userid, 'geogebra'=>$geogebraid, 'finished'=>'1'));
    }


    /**
     * Return the unfinished attempt of a user. Only 1 attempt for each (user, geogebra) can be unfinished
     *
     * @param type $geogebra_id ID of an instance of this module
     * @param type $user_id ID of a user
     * @return mixed null/geogebra attempt object
     */
    function geogebra_get_unfinished_attempt($geogebraid, $userid) {
        global $DB;
        
        $attempt = $DB->get_record('geogebra_attempts', array('userid'=>$userid, 'geogebra'=>$geogebraid, 'finished'=>'0'));
        return ($attempt);
    }

    /**
     * Returns a geogebra attempt
     *
     * @param int $attemptid ID of the attempt
     * @return object attempt
     */
    function geogebra_get_attempt($attemptid) {
        global $DB;
        
        return ($DB->get_record('geogebra_attempts', array('id'=>$attemptid)));
    }

    /**
     * Returns all attempts from specified user
     *
     * @param int $userid ID of the user
     * @return array object attempt
     */
    function geogebra_get_user_attempts($geogebraid, $userid) {
        global $DB;
        
        return ($DB->get_records('geogebra_attempts', array('geogebra'=>$geogebraid, 'userid'=>$userid)));
    }

    /**
     * Creates a new geogebra attempt for specified user
     *
     * @param int $geogebraid ID of the GeoGebra activity
     * @param int $userid ID of user who has done the attempt
     * @param string $vars Attempt vars to be created
     * @param boolean $finished Attempt finished/unfinished
     * @return boolean Success/Fail
     */
    function geogebra_add_attempt($geogebraid, $userid, $vars, $finished = 1) {
        global $DB;
        
        $attempt = new stdClass();
        $attempt->geogebra = $geogebraid;
        $attempt->userid = $userid;
        $attempt->vars = $vars;
        $attempt->finished = $finished;
        $attempt->datestudent = time();

        return ($DB->insert_record('geogebra_attempts', $attempt) !== false);
    }

    /**
     * Updates an existing intance of a geogebra attempt
     * with the new data.
     *
     * @param int $attemptid ID of the attempt to be updated
     * @param string $vars Attempt vars to be updated
     * @param string $gradecomment Comment to the grade
     * @param boolean $finished Attempt finished/unfinished
     * @return boolean Success/Fail
     */
    function geogebra_update_attempt($attemptid, $vars, $actionby, $gradecomment = null, $finished = 1) {
        global $DB;

        $attempt = new stdClass();
        $attempt->id = $attemptid;
        $attempt->vars = $vars;
        $attempt->gradecomment = $gradecomment;
        $attempt->finished = $finished;
        //Modified by student or teacher
        if ($actionby == GEOGEBRA_UPDATE_STUDENT) {
            $attempt->datestudent = time();
        } else if ($actionby == GEOGEBRA_UPDATE_TEACHER) {
            $attempt->dateteacher = time();
        }

        return ($DB->update_record('geogebra_attempts', $attempt) !== false);
    }

    function geogebra_get_tabs($cm, $cangrade=false){
        global $CFG;
        
        if ($cangrade){
            $tabs[] = new tabobject('view', $CFG->wwwroot . '/mod/geogebra/view.php?id=' . $cm->id.'&action=preview', get_string('previewtab', 'geogebra'));
        } else{
            $tabs[] = new tabobject('view', $CFG->wwwroot . '/mod/geogebra/view.php?id=' . $cm->id, get_string('viewtab', 'geogebra'));
        }
        
        $tabs[] = new tabobject('result', $CFG->wwwroot . '/mod/geogebra/view.php?id=' . $cm->id.'&action=result', get_string('resultstab', 'geogebra'));
        return array($tabs);
    }
    
    /**
     * Update geogebra object specified to include in the attributes field all the information
     * 
     * @param type $geogebra 
     */
    function geogebra_updateAttributes(&$geogebra) {
        $enableRightClick = isset($geogebra->enableRightClick) && $geogebra->enableRightClick;
        $enableLabelDrags = isset($geogebra->enableLabelDrags) && $geogebra->enableLabelDrags;
        $showResetIcon = isset($geogebra->showResetIcon) && $geogebra->showResetIcon;
        $showMenuBar = isset($geogebra->showMenuBar) && $geogebra->showMenuBar;
        $showToolBar = isset($geogebra->showToolBar) && $geogebra->showToolBar;
        $showToolBarHelp = isset($geogebra->showToolBarHelp) && $geogebra->showToolBarHelp;
        $language = $geogebra->language;
        $geogebra->attributes = http_build_query(array(
            'enableRightClick' => $enableRightClick,
            'enableLabelDrags' => $enableLabelDrags,
            'showResetIcon' => $showResetIcon,
            'showMenuBar' => $showMenuBar,
            'showToolBar' => $showToolBar,
            'showToolBarHelp' => $showToolBarHelp,
            'language' => $language
                ), '', '&');

        $geogebra->showsubmit = isset($geogebra->showsubmit);
    }

    
    