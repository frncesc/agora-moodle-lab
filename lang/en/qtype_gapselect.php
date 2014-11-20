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
 * Strings for component 'qtype_gapselect', language 'en', branch 'MOODLE_24_STABLE'
 *
 * @package   qtype_gapselect
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Blanks for {no} more choices';
$string['answer'] = 'Answer';
$string['choices'] = 'Choices';
$string['choicex'] = 'Choice {no}';
$string['correctansweris'] = 'The correct answer is: {$a}';
$string['errorblankchoice'] = 'Please check the Choices: Choice {$a} is empty.';
$string['errormissingchoice'] = 'Please check the Question text: {$a} was not found in Choices! Only the choice numbers that exist in choices are allowed to be used a place holders.';
$string['errornoslots'] = 'The question text must contain placeholders like [[1]] to show where the missing words go.';
$string['errorquestiontextblank'] = 'You must enter some question text.';
$string['group'] = 'Group';
$string['pleaseputananswerineachbox'] = 'Please put an answer in each box.';
$string['pluginname'] = 'Select missing words';
$string['pluginnameadding'] = 'Adding a select missing words question';
$string['pluginnameediting'] = 'Editing a select missing words question';
$string['pluginname_help'] = 'Type in some question text like "The [[1]] jumped over the [[2]]", then enter the possible words to go in gaps 1 and 2 underneath.';
$string['pluginname_link'] = 'question/type/gapselect';
$string['pluginnamesummary'] = 'Missing words in some text are filled in using dropdown menus.';
$string['shuffle'] = 'Shuffle';
$string['tagsnotallowed'] = '{$a->tag} is not allowed. (Only {$a->allowed} are permitted.)';
$string['tagsnotallowedatall'] = '{$a->tag} is not allowed. (No HTML is allowed here.)';
