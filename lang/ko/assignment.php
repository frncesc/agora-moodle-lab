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
 * Strings for component 'assignment', language 'ko', branch 'MOODLE_24_STABLE'
 *
 * @package   assignment
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = '관심이 필요한 과제가 있습니다.';
$string['addsubmission'] = '제출 추가';
$string['allowdeleting'] = '삭제 허용';
$string['allowdeleting_help'] = '<p>이를 켜 놓으면, 채점 전에는 참여자 자신이 올린 파일을 언제라도 삭제할 수 있다.</p>';
$string['allowmaxfiles'] = '올릴 파일의 최대 수';
$string['allowmaxfiles_help'] = '<p>각 참여자가 올릴 수 있는 파일의 최대 수로서, 학생들에게는 보이지 않는다. 하지만 과제 지시문에 실제로 필요한 파일의 수를 적어주기 바란다.</p>';
$string['allownotes'] = '주석 허용';
$string['allownotes_help'] = '<p>이를 켜 놓으면, 참여자들은 글 상자에 주석을 입력하여 넣을 수 있다. 이는 온라인 문서 과제와 유사하다.</p>

<p>이 글상자는 채점하는 사람과 상호 의사소통을 하거나, 좀 더 자세한 과제의 설명이나 또 다른 글쓰기 활동을 위해 쓸 수 있다.</p>';
$string['allowresubmit'] = '재제출 허용';
$string['allowresubmit_help'] = '활성화되면 학생들은 성적을 받은 후에도 (재 채점을 위해) 과제를 재 제출할 수 있도록 허용됩니다.';
$string['alreadygraded'] = '과제가 이미 채점되었고 재제출은 허용되지 않습니다.';
$string['assignment:addinstance'] = '새 과제 추가';
$string['assignmentdetails'] = '과제 세부사항';
$string['assignment:exportownsubmission'] = '내 제출 내보내기';
$string['assignment:exportsubmission'] = '제출 내보내기';
$string['assignment:grade'] = '과제 채점';
$string['assignmentmail'] = '{$a->teacher} 선생님이 제출된 \'{$a->assignment}\' 과제에 대한 의견을 달아놓으셨습니다.<br />
이것은 다음에서 볼 수 있습니다: {$a->url}';
$string['assignmentmailhtml'] = '{$a->teacher} 선생님이 제출된 \'<i>{$a->assignment}</i>\' 과제에 대한 의견을 달아놓으셨습니다. <br /><br />
<a href="{$a->url}">과제 제출</a>에서 추가된 내용을 볼 수 있을 것입니다.';
$string['assignmentmailsmall'] = '{$a->teacher} 가 과제 제출물 \'{$a->assignment}\' 에 대해 피드백을 남겼습니다. 피드백이 제출물에 첨부된 것을 볼 수 있습니다.';
$string['assignmentname'] = '과제 이름';
$string['assignmentsubmission'] = '제출 과제';
$string['assignment:submit'] = '과제 제출';
$string['assignmenttype'] = '과제 형태';
$string['assignment:view'] = '과제 보기';
$string['availabledate'] = '시작 일시';
$string['cannotdeletefiles'] = '오류가 발생하여 삭제할 수 없음';
$string['cannotviewassignment'] = '이 과제는 볼 수 없음';
$string['comment'] = '덧글';
$string['commentinline'] = '인라인 덧글';
$string['commentinline_help'] = '<p>만약 이 옵션을 선택하면, 채점되는 동안 원래의 제출물은 피드백 코멘트 부분에 복사되어 즉석에서 평(예를 들어 색깔을 달리하여)을 하는 것을 쉽게 만들거나, 원래의 텍스트를 편집할 수 있게 한다.</p>';
$string['configitemstocount'] = '온라인 과제에서 학생 제출물에 대한 주요 항목 특성';
$string['configmaxbytes'] = '이 사이트에 있는 모든 과제의 기본 최대 크기';
$string['configshowrecentsubmissions'] = '모든 사람이 최근 활동의 제출물 공지사항을 볼 수 있습니다.';
$string['confirmdeletefile'] = '다음 파일을 삭제하는 것이 확실합니까?<br /><strong>{$a}</strong>';
$string['coursemisconf'] = '강좌가 잘 못 설정되었음';
$string['currentgrade'] = '성적부에서 현재 성적';
$string['deleteallsubmissions'] = '모든 제출물 삭제';
$string['deletefilefailed'] = '파일 삭제 실패';
$string['description'] = '설명';
$string['downloadall'] = '모든 과제를 묵음 파일(zip)로 내려받음';
$string['draft'] = '초안';
$string['due'] = '과제 마감';
$string['duedate'] = '마감 일시';
$string['duedateno'] = '무기한';
$string['early'] = '{$a} 일찍 제출함';
$string['editmysubmission'] = '제출물 편집';
$string['editthesefiles'] = '파일 수정';
$string['editthisfile'] = '파일 업데이트';
$string['emailstudents'] = '학생에게 이메일로 알림';
$string['emailteachermail'] = '{$a->username}은 {$a->timeupdated} 에 \'{$a->assignment}\'에 대한 과제 제출을 업데이트 하였습니다. 업데이트한 과제는 {$a->url} 에 있습니다.';
$string['emailteachermailhtml'] = '{$a->username} 은 {$a->timeupdated} 에<i>\'{$a->assignment}\'</i>에 대한 과제 제출을 업데이트 하였습니다.<br /><br />
업데이트한 과제는 <a href="{$a->url}">웹사이트</a>에 있습니다.';
$string['emailteachers'] = '담당자에게 통지';
$string['emailteachers_help'] = '이 기능을 켜 놓으면, 학생들이 과제를 추가하거나 업데이트할 때마다 이메일로 선생님에게 알려 줍니다.

지정된 과제물을 채점하는 선생님께만 통지됩니다. 그래서 만약 어떤 과정이 세분화된 모둠으로 진행될 때, 특정 모둠을 맡은  선생님은 그 모둠 외 다른 모둠에 속한 학생들에 관해서는 통지 받지 않습니다.

오프라인 할동에 대해서는 학생들이 아무 것도 제출하지 않기 때문에 당연히 이메일 공지를 받지 않습니다.';
$string['emptysubmission'] = '아직 아무것도 제출하지 않음';
$string['enablenotification'] = '통지메일 발송';
$string['enablenotification_help'] = '<p>이 기능을 켜 놓으면, 성적이나 피드백 내용을 학생들에게 이메일로 알려 줍니다.</p>

<p>개인적인 설정이 저장되면 채점을 하게되는 모든 제출 과제에 대해 적용될 것입니다..</p>';
$string['errornosubmissions'] = '다운로드할 제출물이 없습니다.';
$string['existingfiledeleted'] = '기존 파일 {$a} 가 지워졌습니다.';
$string['failedupdatefeedback'] = '{$a} 의 과제에 대한 평을 업데이트하는데 실패함';
$string['feedback'] = '과제평';
$string['feedbackfromteacher'] = '{$a}로 부터의 피드백';
$string['feedbackupdated'] = '{$a} 명의 과제에 대한 의견을 업데이트함';
$string['finalize'] = '제출 업데이트 방지';
$string['finalizeerror'] = '오류가 발생하여 제출이 완료되지 못함';
$string['graded'] = '채점됨';
$string['guestnosubmit'] = '죄송합니다. 손님은 과제를 제출할 수 없습니다. 답안을 제출하려면 로그인하거나 사용자 등록을 하기 바랍니다.';
$string['guestnoupload'] = '죄송합니다. 손님은 업로드할 수 없습니다.';
$string['helpoffline'] = '<p>과제가 무들 외부에서 수행되어질 때 유용합니다. 인테넷 혹은 면대면 상황에서 활용할 수 있습니다.</p> <p>학생들은 과제 설명을 볼 수 있습니다만, 파일을 올릴 수는 없습니다. 정상적으로 채점과정이 진행되며, 학생들은 성적에 대한 통지를 받을 것입니다.</p>';
$string['helponline'] = '<p>이 과제 형식은 사용자에게 표준 편집기를 이용하여 텍스트를 편집하도록 합니다. 선생님들은 온라인으로 채점할 수 있으며, 즉석에서 평이나 변경사항을 입력할 수도 있습니다.</p> <p>(만일 예전의 무들에 익숙하다면, 이 과제 형식은 저널 모듈과 동일하게 작동됩니다.)</p>';
$string['helpupload'] = '<p>이 과제 유형은 참여자들이 어떤 형태의 파일을 하나 이상 올릴 수 있도록 합니다. 이는 문서 작성기에 의한 문서, 묶음 파일 등 여러분들이 제출하라고 요구한 어떤 형태라도 가능합니다.</p>
<p>또한 이 유형은 여러 개의 반응(피드백)도 올릴 수 있도록 합니다. 반응 파일은, 개개의 참여자 작업에 서로 다른 파일이 사용될 수 있도록, 과제의 제출 전에 올려질 수 있습니다. </p>
<p>참여자들은 제출한 파일에 진행상황 혹은 여타의 문서 정보를 담은 주석도 달 수 있습니다.</p>
 <p>이런 과제 유형에 대한 제출은 참여자들에 의해 수동으로 최종 제출되어야 합니다. 당신은 언제라도 현황을 살펴볼 수 있으며, 완료되지 않은 과제는 초안으로 표시됩니다. 아직 채점하지 않은 과제는 초안 상태로 되돌릴 수 있습니다.</p>';
$string['helpuploadsingle'] = '<p>이 과제 유형은 각각의 참여자들에게 하나의 화일을 업로드할 수 있도록 합니다.</p>
<p>화일은 워드프로세서 문서 혹은 이미지, 압축된 웹 사이트, 혹은 여러분이 요청했던 어떤 것이든 관계 없습니다.</p>';
$string['hideintro'] = '시작 일시 전에는 설명 감춤';
$string['hideintro_help'] = '<p>이를 켜 놓으면, 과제에 대한 설명이 과제 개시일 전까지는 보이지 않는다.</p>';
$string['invalidassignment'] = '잘못된 과제';
$string['invalidfileandsubmissionid'] = '누락된 파일 혹은 제출 아이디';
$string['invalidid'] = '잘못된 과제 아이디';
$string['invalidsubmissionid'] = '잘못된 과제 아이디';
$string['invalidtype'] = '잘못된 과제 유형';
$string['invaliduserid'] = '잘못된 사용자 ID';
$string['itemstocount'] = '갯수';
$string['lastgrade'] = '마지막 성적';
$string['late'] = '{$a} 늦음';
$string['maximumgrade'] = '최대 성적';
$string['maximumsize'] = '최대 용량';
$string['maxpublishstate'] = '예정일 이전에  블로그 항목에 대한 최대 가시성';
$string['messageprovider:assignment_updates'] = '과제(2.2) 통지';
$string['modulename'] = '과제 (2.2)';
$string['modulename_help'] = '<p><img alt="" src="<?php echo $CFG->wwwroot?>/mod/assignment/icon.gif" /> <b>과제제출</b></p>
<div class="indent">
과제모듈은 선생님이 학생들에게 디지털 자료를 준비하고 이를 서버에 올려 제출하게 하는 등의 업무를 상세히 기술할 수 있도록 해줍니다.
과제에는 논술을 포함하여 프로젝트, 리포트 기타 여러 유형이 포함되어 있습니다. 이 모듈에는 즉석에서 채점할 수 있는 기능이 포함되어 있습니다.
</div>';
$string['modulenameplural'] = '과제(2.2)';
$string['newsubmissions'] = '제출된 과제들';
$string['noassignments'] = '아직 주어진 과제가 없음';
$string['noattempts'] = '이 과제를 제출하려는 시도가 없었음';
$string['noblogs'] = '제출한 블로그 내용이 없음!';
$string['nofiles'] = '제출된 파일이 없음';
$string['nofilesyet'] = '아직 아무 파일도 제출하지 않았음';
$string['nomoresubmissions'] = '더이상의 제출은 허용되지 않습니다.';
$string['norequiregrading'] = '채점이 필요한 과제가 없습니다.';
$string['nosubmisson'] = '과제가 제출되지 않았습니다.';
$string['notavailableyet'] = '죄송합니다. 이 과제는 아직 이용할 수 없습니다.<br /과제에 대한 설명은 아래에 나타난 날짜 이후에 이곳에 표시될 것입니다.';
$string['notes'] = '주석';
$string['notesempty'] = '입력사항 없음';
$string['notesupdateerror'] = '주석을 올릴때 오류가 났음';
$string['notgradedyet'] = '아직 채점되지 않음';
$string['notsubmittedyet'] = '아직 제출되지 않음';
$string['onceassignmentsent'] = '일단 채점을 위한 과제가 제출되고 나면, 더 이상 파일을 삭제하거나 첨부할 수 없습니다. 계속하겠습니까?';
$string['operation'] = '작동';
$string['optionalsettings'] = '선택적인 설정';
$string['overwritewarning'] = '경고: 다시 업로드를 하면 기존의 내용과 대체됩니다';
$string['page-mod-assignment-submissions'] = '과제 모듈 제출 페이지';
$string['page-mod-assignment-view'] = '과제 모듈 주 페이지';
$string['page-mod-assignment-x'] = '모든 과제 모듈 페이지';
$string['pagesize'] = '한 페이지당 보이는 제출물';
$string['pluginadministration'] = '과제 관리';
$string['pluginname'] = '과제 (2.2)';
$string['popupinnewwindow'] = '팝업 창에서 열기';
$string['preventlate'] = '제출 기한 엄수';
$string['quickgrade'] = '신속 채점 허용';
$string['quickgrade_help'] = '활성화되면 여러 과제를 한 화페이지에서채점을 할 수 있습니다. 성적 및 평을 추가하고 "내 모든 피드백 저장" 버튼을 클릭하면 그 페이지에서의 모든 변경된 사항이 저장됩니다.';
$string['requiregrading'] = '채점 필요';
$string['responsefiles'] = '반응 파일';
$string['reviewed'] = '검토했음';
$string['saveallfeedback'] = '내 의견을 모두 저장';
$string['selectblog'] = '제출하고 싶은 블로그 목록 선택';
$string['sendformarking'] = '채점을 위한 제출';
$string['showrecentsubmissions'] = '최근 제출물 보기';
$string['submission'] = '제출';
$string['submissiondraft'] = '초안 제출';
$string['submissionfeedback'] = '과제에 대한 의견';
$string['submissions'] = '제출된 과제들';
$string['submissionsaved'] = '변경 사항 저장됨';
$string['submissionsnotgraded'] = '{$a} 제출물이 채점되지 않음';
$string['submitassignment'] = '이 양식을 사용하여 과제를 제출함';
$string['submitedformarking'] = '채점을 위한 과제가 이미 제출되었으며 업데이트할 수 없음';
$string['submitformarking'] = '과제 채점을 위한 최종 제출';
$string['submitted'] = '제출 완료';
$string['submittedfiles'] = '제출된 파일들';
$string['subplugintype_assignment'] = '과제 형태';
$string['subplugintype_assignment_plural'] = '과제 유형';
$string['trackdrafts'] = '"채점을 위한 제출"버튼 활성화';
$string['trackdrafts_help'] = '<p>제출완료 표식 버튼은 학생들로 하여금 과제 제출을 완료했다는 것을 인식할 수 있게 해 줍니다.
선생님 역시 이를 통해서 엉뚱하게 제출을 독려하거나 초기 상태로 돌리는 것을 막을 수 있습니다.</p>';
$string['typeblog'] = '블로그 게시';
$string['typeoffline'] = '오프라인 활동';
$string['typeonline'] = '온라인 문서 제출';
$string['typeupload'] = '여러개 파일 제출';
$string['typeuploadsingle'] = '한 개 파일 제출';
$string['unfinalize'] = '초안으로 복원';
$string['unfinalizeerror'] = '오류가 발생하여 제출을 초기 상태로 되돌릴 수 없음';
$string['unfinalize_help'] = '초안으로 되돌리면 학생들이 제출한 과제를 업데이트할 수 있습니다.';
$string['upgradenotification'] = '이 활동은 이전 과제 모듈에 기반합니다.';
$string['uploadafile'] = '파일 올리기';
$string['uploadbadname'] = '파일이름에 알 수 없는 문자가 포함되있어서 올릴 수 없음';
$string['uploadedfiles'] = '올려진 파일들';
$string['uploaderror'] = '서버에 파일을 저장하던 중 오류 발생';
$string['uploadfailnoupdate'] = '파일이 성공적으로 전송되었지만, 제출 상황을 업데이트할 수는 없음!';
$string['uploadfiles'] = '파일 올리기';
$string['uploadfiletoobig'] = '파일용량이 너무 큽니다.(최대 {$a} 바이트까지)';
$string['uploadnofilefound'] = '파일을 찾을 수 없음 - 업로드할 파일을 제대로 선택하셨습니까?';
$string['uploadnotregistered'] = '\'{$a}\'가 성공적으로 전송되었지만, 제출 사항이 제대로 등록되지 않았습니다!';
$string['uploadsuccess'] = '\'{$a}\' 올리기 성공';
$string['usermisconf'] = '사용자가 잘못 설정됨';
$string['usernosubmit'] = '죄송합니다. 과제를 제출하도록 허용되지 않았습니다.';
$string['viewassignmentupgradetool'] = '과제 업그레이드 도구 보기';
$string['viewfeedback'] = '과제 성적과 피드백 보기';
$string['viewmysubmission'] = '제출물 보기';
$string['viewsubmissions'] = '제출된 {$a} 개의 과제 보기';
$string['yoursubmission'] = '과제 제출';
