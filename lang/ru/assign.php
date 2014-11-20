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
 * Strings for component 'assign', language 'ru', branch 'MOODLE_24_STABLE'
 *
 * @package   assign
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'У Вас есть задания, требующие внимания';
$string['addsubmission'] = 'Добавить ответ на задание';
$string['allowsubmissions'] = 'Разрешить пользователю продолжать представлять ответ на это задание.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Описание задания и возможность отправлять ответов доступны с <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Разрешить выполнение задания с';
$string['allowsubmissionsfromdate_help'] = 'Если дата установлена, то студенты не смогут отправить свои ответы до указанной даты. Если дата не установлена, то студенты могут представлять свои ответы сразу.';
$string['allowsubmissionsfromdatesummary'] = 'Это назначение будет приниматься с <strong>{$a}</strong>';
$string['allowsubmissionsshort'] = 'Разрешить изменять ответы';
$string['alwaysshowdescription'] = 'Всегда показывать описание';
$string['alwaysshowdescription_help'] = 'Если «Нет», то студенты не смогут видеть описание задания до даты, заданной параметром «Разрешить выполнение задания с».';
$string['applytoteam'] = 'Применить оценки и отзывы для всей группы.';
$string['assign:addinstance'] = 'Добавлять новое задание';
$string['assign:exportownsubmission'] = 'Экспортировать мои задания';
$string['assignfeedback'] = 'Модуль обратной связи';
$string['assignfeedbackpluginname'] = 'Модуль отзыва';
$string['assign:grade'] = 'Оценка задания';
$string['assign:grantextension'] = 'Разрешать продление';
$string['assignmentisdue'] = 'Задание связано';
$string['assignmentmail'] = '{$a->grader} дал(а) отзыв к Вашему ответу на задание «{$a->assignment}».

Вы можете просмотреть отзыв на свой ответ:

{$a->url}';
$string['assignmentmailhtml'] = '{$a->grader} дал(а) отзыв к Вашему ответу на задание «<i>{$a->assignment}</i>». <br /><br />
Вы можете просмотреть отзыв <a href="{$a->url}">к своему ответу на задание</a>.';
$string['assignmentmailsmall'] = '{$a->grader} дал(а) отзыв к Вашему ответу на задание «{$a->assignment}».
Вы можете просмотреть отзыв к своему ответу.';
$string['assignmentname'] = 'Название задания';
$string['assignmentplugins'] = 'Плагины задания';
$string['assignmentsperpage'] = 'Заданий на странице';
$string['assignsubmission'] = 'Плагины представления ответов';
$string['assignsubmissionpluginname'] = 'Плагины представления ответов';
$string['assign:submit'] = 'Отправка задания';
$string['assign:view'] = 'Просмотр задания';
$string['availability'] = 'Доступно';
$string['backtoassignment'] = 'Вернуться к заданию';
$string['batchoperationconfirmgrantextension'] = 'Предоставить отсрочку для всех выбранных ответов?';
$string['batchoperationconfirmlock'] = 'Заблокировать все выбранные ответы?';
$string['batchoperationconfirmreverttodraft'] = 'Вернуть выбранные ответы к статусу черновика?';
$string['batchoperationconfirmunlock'] = 'Разблокировать все ответы?';
$string['batchoperationlock'] = 'заблокировать ответы';
$string['batchoperationreverttodraft'] = 'вернуть представления к статусу  черновика';
$string['batchoperationsdescription'] = 'С выбранными';
$string['batchoperationunlock'] = 'разблокировать представление ответов';
$string['blindmarking'] = 'Оценивание вслепую';
$string['blindmarking_help'] = 'При оценивании вслепую скрывается имя студента. Настройки слепого оценивания будут заблокированы после представления ответа или оценивания этого задания.';
$string['changegradewarning'] = 'В задании есть оцененные представления и изменение оценки не будет автоматически пересчитывать существующие оценки представлений. Необходимо повторно переоценить все существующие представления, если Вы хотите изменить оценки.';
$string['choosegradingaction'] = 'Действия оценивания';
$string['chooseoperation'] = 'Выберите действие';
$string['comment'] = 'Отзыв';
$string['completionsubmit'] = 'Студент должен представить ответ на задание, чтобы завершить его';
$string['configshowrecentsubmissions'] = 'Все могут видеть уведомления об отправках и получать отчет активности.';
$string['confirmbatchgradingoperation'] = 'Вы уверены, что хотите применить {$a->operation} для студентов - {$a->count}?';
$string['confirmsubmission'] = 'Вы уверены, что хотите представить свою работу для оценивания? Вы больше не сможете изменить свой ответ.';
$string['conversionexception'] = 'Не удалось преобразовать задание. Исключение для: {$a}.';
$string['couldnotconvertgrade'] = 'Не удалось преобразовать оценку для пользователя {$a}.';
$string['couldnotconvertsubmission'] = 'Не удалось преобразовать ответ пользователя {$a}.';
$string['couldnotcreatecoursemodule'] = 'Не удалось создать модуль курса.';
$string['couldnotcreatenewassignmentinstance'] = 'Не удалось создать новый вариант задания.';
$string['couldnotfindassignmenttoupgrade'] = 'Не удалось найти старый вариант задания для обновления.';
$string['currentgrade'] = 'Текущая оценка в журнале';
$string['cutoffdate'] = 'Запретить отправку с';
$string['cutoffdatefromdatevalidation'] = 'Дата запрета отправки ответа должна быть установлена позже даты доступности задания';
$string['cutoffdate_help'] = 'Если задано, то ответы не будут приниматься  после этой даты с отсрочкой.';
$string['cutoffdatevalidation'] = 'Дата запрета отправки ответа должна быть позже установленного срока.';
$string['defaultplugins'] = 'Настройки задания по умолчанию';
$string['defaultplugins_help'] = 'Эти параметры определяют значения по умолчанию для всех новых заданий.';
$string['defaultteam'] = 'Группа по умолчанию';
$string['deleteallsubmissions'] = 'Удалить все ответы';
$string['deletepluginareyousure'] = 'Вы уверены, что хотите удалить модуль задания: {$a}?';
$string['deletepluginareyousuremessage'] = 'Вы собираетесь полностью удалить плагин задания {$a}. Это  полностью удалит из базы данных все, что связанно с этим заданием. Вы УВЕРЕНЫ, что хотите продолжить?';
$string['deletingplugin'] = 'Удаление модуля {$a}.';
$string['description'] = 'Описание';
$string['downloadall'] = 'Скачать все ответы';
$string['duedate'] = 'Последний срок сдачи';
$string['duedate_help'] = 'Время завершения задания. Ответы отправленные после этой даты будут помечены как просроченные. Для предотвращения отправки ответов после определенной даты - установите \'Запретить отправку с\'.';
$string['duedateno'] = 'Срок сдачи не ограничен';
$string['duedatereached'] = 'Сроки выполнения этого задания уже истек';
$string['duedatevalidation'] = 'Срок выполнения должен быть позже даты разрешения представления ответа.';
$string['editaction'] = 'Действия ...';
$string['editingstatus'] = 'Изменение статуса';
$string['editsubmission'] = 'Редактировать мой ответ';
$string['enabled'] = 'Доступно';
$string['errornosubmissions'] = 'Нет никаких ответов на задание';
$string['errorquickgradingvsadvancedgrading'] = 'Оценки не были сохранены, потому что в этом задании в настоящее время с используется передовое оценивание.';
$string['errorrecordmodified'] = 'Оценки не были сохранены, потому что кто-то изменил одну или несколько записей позже, чем Вы загрузили страницу.';
$string['extensionduedate'] = 'Срок продления';
$string['extensionnotafterduedate'] = 'Дата продления должна быть позже установленной даты.';
$string['extensionnotafterfromdate'] = 'Дата продления должна быть позже даты разрешения представления ответа.';
$string['feedback'] = 'Отзыв';
$string['feedbackavailablehtml'] = '{$a->username} дал(а) отзыв на Ваш ответ для «<i>{$a->assignment}</i>». <br /><br /> Вы можете просмотреть отзыв <a href="{$a->url}">к своему ответу</a>.';
$string['feedbackavailablesmall'] = '{$a->username} дал(а) отзыв для ответа  {$a->assignment}';
$string['feedbackavailabletext'] = '{$a->username} дал(а) отзыв на Ваш ответ для задания «{$a->assignment}».

Вы можете просмотреть отзыв на свой ответ:

{$a->url}';
$string['feedbackplugin'] = 'Модуль отзыва';
$string['feedbackpluginforgradebook'] = 'Модуль отзыва, который будет размещать комментарии в журнале оценок';
$string['feedbackpluginforgradebook_help'] = 'Только один из модулей отзыва может помещать отзыв в журнал оценок';
$string['feedbackplugins'] = 'Модули отзыва';
$string['feedbacksettings'] = 'Настройки отзыва';
$string['filesubmissions'] = 'Ответ в виде файла';
$string['filter'] = 'Фильтр';
$string['filternone'] = 'Без фильтра';
$string['filterrequiregrading'] = 'Требует оценки';
$string['filtersubmitted'] = 'Ответы и отзывы';
$string['gradeabovemaximum'] = 'Оценка должна быть меньше или равна {$a}.';
$string['gradebelowzero'] = 'Оценка должна быть больше или равна нулю.';
$string['graded'] = 'Оценено';
$string['gradedby'] = 'Оценено';
$string['gradelocked'] = 'Эта оценка заблокирована или изменена в журнале оценок.';
$string['gradeoutof'] = 'Оценка из {$a}';
$string['gradeoutofhelp'] = 'Оценка';
$string['gradeoutofhelp_help'] = 'Введите здесь оценку для ответа студента. Вы можете использовать десятичные знаки.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} отправил(а) {$a->timeupdated} новый ответ на задание <i>«{$a->assignment}».</i><br /><br />
Ответы на это задание <a href="{$a->url}">расположены на сайте</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} обновил(а) свой ответ на задание «{$a->assignment}»';
$string['gradersubmissionupdatedtext'] = '{$a->username} отправил(а) новый ответ на задание «{$a->assignment}»
Ответы на это задание доступны по адресу:
{$a->url}';
$string['gradestudent'] = 'Оценка студента: (ID = {$a->id}, ФИО = {$a->fullname}).';
$string['gradeuser'] = 'Оценка {$a}';
$string['grading'] = 'Оценивание';
$string['gradingmethodpreview'] = 'Критерии оценивания';
$string['gradingoptions'] = 'Опции';
$string['gradingstatus'] = 'Состояние оценивания';
$string['gradingstudentprogress'] = 'Оценка студентов {$a->index} из {$a->count}';
$string['gradingsummary'] = 'Резюме оценивания';
$string['grantextension'] = 'Разрешить продление';
$string['grantextensionforusers'] = 'Продление разрешено для студентов - {$a}';
$string['hiddenuser'] = 'Участник';
$string['hideshow'] = 'Скрыть / Показать';
$string['instructionfiles'] = 'Файл с инструкцией';
$string['invalidfloatforgrade'] = 'Установленная оценка не понятна: {$a}';
$string['invalidgradeforscale'] = 'Установленная оценка не допустима для текущей шкалы';
$string['lastmodifiedgrade'] = 'Последнее изменение (оценка)';
$string['lastmodifiedsubmission'] = 'Последнее изменение (ответ)';
$string['latesubmissions'] = 'Поступившие представления';
$string['latesubmissionsaccepted'] = 'Только студент(ы), которым разрешено продление, могут продолжать отвечать на задание.';
$string['locksubmissionforstudent'] = 'Предотвратить представление ответов студентами: (id={$a->id}, полное имя={$a->fullname}).';
$string['locksubmissions'] = 'Заблокировать ответы';
$string['manageassignfeedbackplugins'] = 'Управление модулями отзыва';
$string['manageassignsubmissionplugins'] = 'Управление модулями ответов на задание';
$string['maxgrade'] = 'Максимальная оценка';
$string['messageprovider:assign_notification'] = 'Уведомление о задании';
$string['modulename'] = 'Задание';
$string['modulename_help'] = 'Учебный элемент «Задание» позволяет преподавателям добавлять коммуникативные задания, собирать студенческие работы, оценивать их и предоставлять отзывы.

Студенты могут отправлять любой цифровой контент (файлы), такие как документы Word, электронные таблицы, изображения, аудио- или видео файлы. Альтернативно или дополнительно преподаватель может потребовать от студента вводитьь свой ответ непосредственно в текстовом редакторе. «Задание» может быть использоваться и для ответов вне сайта, которые выполняются в автономном режиме (например, при создании предметов искусства) и не требовать представления в цифровом виде.

При оценивании задания преподаватель может оставлять отзывы в виде комментариев, загружать файл с исправленным ответом студента или аудио-отзыв. Ответы могут быть оценены баллами, пользовательской шкалой оценивания или «продвинутыми» методами, такими как рубрики. Итоговая оценка заносится в Журнал оценок.';
$string['modulenameplural'] = 'Задания';
$string['mysubmission'] = 'Мои представленные ответы:';
$string['newsubmissions'] = 'Отправленные ответы на задания';
$string['nofiles'] = 'Файлы отсутствуют.';
$string['nograde'] = 'Нет оценки.';
$string['nolatesubmissions'] = 'Опоздавшие ответы не принимаются.';
$string['nomoresubmissionsaccepted'] = 'Ответы больше не принимать.';
$string['noonlinesubmissions'] = 'Ответ на задание должен быть представлен вне сайта';
$string['nosavebutnext'] = 'Далее';
$string['nosubmission'] = 'Ничего не было представлено';
$string['nosubmissionsacceptedafter'] = 'Не принимать ответы после';
$string['notgraded'] = 'Не оценено';
$string['notgradedyet'] = 'Пока не оценен';
$string['notifications'] = 'Уведомления';
$string['notsubmittedyet'] = 'Ответ пока не отправлен';
$string['nousersselected'] = 'Нет выбранных пользователей';
$string['numberofdraftsubmissions'] = 'Черновик';
$string['numberofparticipants'] = 'Участники';
$string['numberofsubmissionsneedgrading'] = 'Требуют оценки';
$string['numberofsubmittedassignments'] = 'Ответы';
$string['numberofteams'] = 'Группы';
$string['offline'] = 'Ответ вне сайта';
$string['open'] = 'Открыто';
$string['outlinegrade'] = 'Оценка {$a}';
$string['overdue'] = '<font color="red">Задание просрочено на: {$a}</font>';
$string['page-mod-assign-view'] = 'Главная страница модуля «Задание» и страница представления';
$string['page-mod-assign-x'] = 'Любая страница модуля «Задание»';
$string['participant'] = 'Участник';
$string['pluginadministration'] = 'Управление заданием';
$string['pluginname'] = 'Задание';
$string['preventsubmissions'] = 'Запретить пользователю повторно отвечать на это задание.';
$string['preventsubmissionsshort'] = 'Запретить изменять ответ';
$string['previous'] = 'Назад';
$string['quickgrading'] = 'Быстрая оценка';
$string['quickgradingchangessaved'] = 'Оценки сохранены';
$string['quickgrading_help'] = 'Быстрое оценивание позволяет добавить оценки (и результаты, навыки) прямо в таблице ответов. Быстрое оценивание не совместимо с «продвинутыми» методами оценивания и не рекомендуется при использовании нескольких видов оценки.';
$string['quickgradingresult'] = 'Быстрая оценка';
$string['recordid'] = 'Идентификатор';
$string['requireallteammemberssubmit'] = 'Требовать, чтобы все члены группы представили ответы';
$string['requireallteammemberssubmit_help'] = 'Если «Да», то все члены группы студентов должны нажать кнопку «Отправить» для того, чтобы ответ группы считался отправленным. Если «Нет», то ответ группы будет считаться представленным, как только любой член группы студентов нажмет на кнопку «Отправить».';
$string['requiresubmissionstatement'] = 'Требовать, чтобы студенты принимали условия представления ответов';
$string['requiresubmissionstatementassignment'] = 'Требовать, чтобы студенты принимали условия представления ответов';
$string['requiresubmissionstatementassignment_help'] = 'Требовать, чтобы студенты принимали условия представления для всех своих ответов в этом задании.';
$string['requiresubmissionstatement_help'] = 'Требовать, чтобы студенты принимали условия представления ответов для всех заданий на этом сайте Moodle. Если опция включена, то условия представления ответов могут быть включены или отключены в настройках для каждого задания.';
$string['reverttodraft'] = 'Вернуть представление к статусу черновика.';
$string['reverttodraftforstudent'] = 'Вернуть к статусу черновика представление студента:
(id={$a->id}, полное имя={$a->fullname}).';
$string['reverttodraftshort'] = 'Вернуть представление к черновику.';
$string['reviewed'] = 'Просмотрено';
$string['saveallquickgradingchanges'] = 'Сохранить все оценки';
$string['savechanges'] = 'Сохранить';
$string['savenext'] = 'Сохранить и показать следующее';
$string['scale'] = 'Шкала';
$string['selectlink'] = 'Выберите ...';
$string['selectuser'] = 'Выберите {$a}';
$string['sendlatenotifications'] = 'Уведомить преподавателей о дате закрытия задания';
$string['sendlatenotifications_help'] = 'Если «Да», то преподаватели получат специальные сообщения, когда студенты отправят свои ответы позже указанного срока. Метод сообщения задается.';
$string['sendnotifications'] = 'Уведомить преподавателей об отправке ответов';
$string['sendnotifications_help'] = 'Если этот параметр включен, то преподаватели получат  сообщения каждый раз, когда студенты отправят ответы на задание - ранее указанного срока, вовремя или позже. Метод сообщения задается.';
$string['sendsubmissionreceipts'] = 'Отправлять студентам подтверждение о получении ответа';
$string['sendsubmissionreceipts_help'] = 'Этот параметр дает возможность подтвердить студентам получение их ответов на задание. Студенты будут получать уведомления каждый раз, когда они успешно представят ответ на задание.';
$string['settings'] = 'Параметры задания';
$string['showrecentsubmissions'] = 'Показать последние ответы';
$string['submission'] = 'Ответ';
$string['submissiondrafts'] = 'Требовать нажатия кнопки «Отправить»';
$string['submissiondrafts_help'] = 'Если «Да», то студент должен нажать на кнопку «Отправить», чтобы сообщить о завершении редактирования своего ответа. Это дает возможность студентам хранить черновики ответов в системе. Если этот параметр изменяется со значения «Нет» на значение «Да», то студенческие ответы будут рассматриваться как окончательные.';
$string['submissioneditable'] = 'Студент может править свой ответ';
$string['submissionempty'] = 'Ничего не было представлено';
$string['submissionnoteditable'] = 'Студент не может исправлять этот ответ';
$string['submissionnotready'] = 'Это задание не готовы представить:';
$string['submissionplugins'] = 'Модули отправки ответов';
$string['submissionreceipthtml'] = 'Вы представили ответ на задание «<i>{$a->assignment}</i>»<br /><br /> Вы можете увидеть статус своего <a href="{$a->url}">представленного ответа на задание</a>.';
$string['submissionreceipts'] = 'Отправить подтверждение о получении ответа';
$string['submissionreceiptsmall'] = 'Вы отправили свой ответ на задание {$a->assignment}';
$string['submissionreceipttext'] = 'Вы отправили свой ответ на задание «{$a->assignment}»

Вы можете посмотреть состояние своей представленной работы:

{$a->url}';
$string['submissions'] = 'Ответы';
$string['submissionsclosed'] = 'Представление ответов закрыто';
$string['submissionsettings'] = 'Параметры ответа';
$string['submissionslocked'] = 'Ответы на это задание не принимаются';
$string['submissionslockedshort'] = 'Изменение ответов не допускается';
$string['submissionsnotgraded'] = 'Не оцененные ответы: {$a}';
$string['submissionstatement'] = 'Заявление к представленному ответу';
$string['submissionstatementacceptedlog'] = 'Заявление к представленному ответу, принятое от пользователя {$a}';
$string['submissionstatementdefault'] = 'Это мой собственный ответ на задание, кроме случаев, когда подтверждено использование ответов других людей.';
$string['submissionstatement_help'] = 'Подтверждающее заявление к   представленному ответу на задание';
$string['submissionstatus'] = 'Состояние ответа на задание';
$string['submissionstatus_'] = 'Нет ответа на задание';
$string['submissionstatus_draft'] = 'Черновик (не представлен)';
$string['submissionstatusheading'] = 'Состояние ответа';
$string['submissionstatus_marked'] = 'Оценено';
$string['submissionstatus_new'] = 'Новый ответ';
$string['submissionstatus_submitted'] = 'Ответы для оценки';
$string['submissionteam'] = 'Группы';
$string['submitaction'] = 'Отправить';
$string['submitassignment'] = 'Отправка задания';
$string['submitassignment_help'] = 'После представления ответа на задание Вы не сможете изменить его';
$string['submitted'] = 'Ответы и отзывы';
$string['submittedearly'] = 'Задание представлено заранее - {$a}';
$string['submittedlate'] = 'Задание представлено с опозданием - {$a}';
$string['submittedlateshort'] = 'Срок выполнения закончился {$a} назад';
$string['teamsubmission'] = 'Групповой ответ студентов';
$string['teamsubmissiongroupingid'] = 'Поток из групп студентов';
$string['teamsubmissiongroupingid_help'] = 'Для задания может быть использован поток  для выбора групп из групп студентов. Если  не задано, то будут использованы параметры по умолчанию.';
$string['teamsubmission_help'] = 'Если «Да», то студенты будут разделены на группы по умолчанию или определенные потоки. Ответ группы может быть распределен между членами группы. При этом все члены группы будут видеть изменения в представленных ответах.';
$string['teamsubmissionstatus'] = 'Статус группового ответа.';
$string['textinstructions'] = 'Инструкция к заданию';
$string['timemodified'] = 'Последнее изменение';
$string['timeremaining'] = 'Оставшееся время';
$string['unlocksubmissionforstudent'] = 'Разрешить представить ответы студентам: (ID = {$a->id}, ФИО = {$a->fullname}).';
$string['unlocksubmissions'] = 'Разблокировать ответы';
$string['updategrade'] = 'Обновить оценки';
$string['updatetable'] = 'Сохранить и обновить таблицу';
$string['upgradenotimplemented'] = 'Не выполнено обновление плагина ({$a->type} {$a->subtype})';
$string['userextensiondate'] = 'Продлено до: {$a}';
$string['usergrade'] = 'Оценка пользователя';
$string['userswhoneedtosubmit'] = 'Пользователи, которые должны представить ответ: {$a}';
$string['viewfeedback'] = 'Просмотр отзывов';
$string['viewfeedbackforuser'] = 'Просмотреть отзыв для пользователя {$a}';
$string['viewfull'] = 'Посмотреть полностью';
$string['viewfullgradingpage'] = 'Открыть страницу полного оценивания для предоставления отзыва';
$string['viewgradebook'] = 'Просмотр Журнала оценок';
$string['viewgrading'] = 'Просмотр/оценка всех ответов';
$string['viewgradingformforstudent'] = 'Посмотреть страницу оценивания для студента: (ID = {$a->id}, полное имя = {$a->fullname}).';
$string['viewownsubmissionform'] = 'Посмотреть страницу своих ответов на задание.';
$string['viewownsubmissionstatus'] = 'Посмотреть страницу состояния своих ответов.';
$string['viewsubmission'] = 'Просмотр ответов';
$string['viewsubmissionforuser'] = 'Посмотреть представленный ответ для пользователя: {$a}';
$string['viewsubmissiongradingtable'] = 'Просмотреть таблицу с представленными ответами';
$string['viewsummary'] = 'Посмотреть резюме';
