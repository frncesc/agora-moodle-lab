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
 * Strings for component 'feedback', language 'ru', branch 'MOODLE_24_STABLE'
 *
 * @package   feedback
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Добавить вопрос в учебный элемент';
$string['add_items'] = 'Добавить вопрос в учебный элемент';
$string['add_pagebreak'] = 'Добавить разрыв страницы';
$string['after_submit'] = 'После опроса';
$string['allowfullanonymous'] = 'Полностью анонимный';
$string['analysis'] = 'Анализ результатов';
$string['anonymous'] = 'Анонимный';
$string['anonymous_edit'] = 'Вид респондента';
$string['anonymous_user'] = 'Анонимные пользователи';
$string['append_new_items'] = 'Добавлены новые элементы';
$string['autonumbering'] = 'Автоматическая нумерация';
$string['autonumbering_help'] = 'Включает или отключает автоматизированную нумерацию каждого вопроса.';
$string['average'] = 'Средний';
$string['bold'] = 'Жирный';
$string['cancel_moving'] = 'Отменить перемещение';
$string['cannotsavetempl'] = 'Сохранение шаблонов не разрешено';
$string['captcha'] = 'Капча';
$string['captchanotset'] = 'Капча не была установлена';
$string['check'] = 'Множественный выбор с несколькими вариантами ответа';
$string['checkbox'] = 'Множественный выбор с несколькими вариантами ответа (используются флажки)';
$string['choosefile'] = 'Выберите файл';
$string['completed'] = 'завершено';
$string['completed_feedbacks'] = 'Отправить ответы';
$string['complete_the_form'] = 'Ответьте на вопросы ...';
$string['confirmdeleteentry'] = 'Вы уверены, что хотите удалить эту запись?';
$string['confirmdeleteitem'] = 'Вы уверены, что хотите удалить этот элемент?';
$string['confirmdeletetemplate'] = 'Вы уверены, что хотите удалить этот шаблон?';
$string['confirmusetemplate'] = 'Вы уверены, что хотите использовать этот шаблон?';
$string['creating_templates'] = 'Сохранить эти вопросы как новый шаблон';
$string['delete_entry'] = 'Удалить запись';
$string['delete_item'] = 'Удалить вопрос';
$string['delete_old_items'] = 'Удалить старые элементы';
$string['delete_template'] = 'Удалить шаблон';
$string['delete_templates'] = 'Удалить шаблон ...';
$string['depending'] = 'Зависимости';
$string['depending_help'] = 'Зависимые элементы позволяют Вам указать элементы, зависящие от значения других элементов.<br />
<strong>Здесь приведены примеры их использования:</strong><br />
<ul>
<li>Сначала создайте элемент, от значения которого зависят другие элементы.</li>
<li>Затем добавьте разрыв страницы.</li>
<li>Затем добавьте элемент, зависящий от значения прежнего элемента<br />
Выберите в форме создания элемент в списке "зависит от элемента" и вставьте нужное значение в текстовое поле "зависит от значения".</li>
</ul>
<strong>Структура должна выглядеть следующим образом:</strong>
<ol>
<li>Вопрос элемента 1: У Вас есть автомобиль?
Ответ: да/нет</li>
<li>Разрыв страницы</li>
<li>Вопрос элемента 2: Какого цвета Ваш автомобиль?<br />
(этот элемент зависит от элемента 1 со значением=да)</li>
<li>Вопрос элемента 3: почему у Вас нет автомобиля?<br />
(этот элемент зависит от элемента 1 со значением=нет)</li>
<li> ... другие элементы</li>
</ol>
Вот и всё. Развлекайтесь!';
$string['dependitem'] = 'Зависимые элементы';
$string['dependvalue'] = 'Значения зависимых элементов';
$string['description'] = 'Описание';
$string['dropdown'] = 'Множественный выбор с одним правильным ответом  (выпадающий список)';
$string['dropdownlist'] = 'Множественный выбор с одним правильным ответом';
$string['dropdownrated'] = 'Выпадающий список (со значениями)';
$string['drop_feedback'] = 'Удалить из этого курса';
$string['edit_item'] = 'Редактировать вопрос';
$string['edit_items'] = 'Редактировать вопросы';
$string['emailnotification'] = 'Уведомления по электронной почте';
$string['email_notification'] = 'Рассылать уведомления по электронной почте';
$string['emailnotification_help'] = 'При включенном параметре администраторы получают уведомление электронной почты о представлении ответов Обратной связи.';
$string['emailteachermail'] = '{$a->username} заполнил(а) анкету обратной связи:  "{$a->feedback}"

Вы можете просмотреть ответы здесь:
{$a->url}';
$string['emailteachermailhtml'] = '{$a->username} заполнил(а) анкету обратной связи : <i>\'{$a->feedback}\'</i><br /><br />Вы можете просмотреть ответы <a href="{$a->url}">здесь</a>.';
$string['entries_saved'] = 'Ваши ответы были сохранены. Спасибо.';
$string['export_questions'] = 'Экспортировать вопросы';
$string['export_to_excel'] = 'Экспорт в Excel';
$string['feedback:addinstance'] = 'Добавить новый учебный элемент обратной связи';
$string['feedbackclose'] = 'Использовать дату окончания';
$string['feedback:complete'] = 'Заполните анкету';
$string['feedback:createprivatetemplate'] = 'Создать личный шаблон';
$string['feedback:createpublictemplate'] = 'Создать общий шаблон';
$string['feedback:deletesubmissions'] = 'Удалить завершенные анкеты';
$string['feedback:deletetemplate'] = 'Удалить шаблон';
$string['feedback:edititems'] = 'Изменить элементы';
$string['feedback_is_not_for_anonymous'] = 'анкета обратной связи не для анонимных пользователей';
$string['feedback_is_not_open'] = 'эта анкета обратной связи не открыта';
$string['feedbackopen'] = 'Использовать дату открытия';
$string['feedback_options'] = 'Опции обратной связи';
$string['feedback:receivemail'] = 'Получать уведомления по электронной почте';
$string['feedback:view'] = 'Просматривать анкету обратной связи';
$string['feedback:viewanalysepage'] = 'Просматривать страницу с анализом ответов';
$string['feedback:viewreports'] = 'Просматривать отчеты';
$string['file'] = 'Файл';
$string['filter_by_course'] = 'Фильтр по курсам';
$string['hide_no_select_option'] = 'Скрыть опцию "Не выбран"';
$string['horizontal'] = 'горизонтально';
$string['importfromthisfile'] = 'импорт из файла';
$string['import_questions'] = 'импорт вопросов';
$string['import_successfully'] = 'импорт прошел успешно';
$string['info'] = 'информация';
$string['infotype'] = 'тип информации';
$string['insufficient_responses'] = 'недостаточные ответы';
$string['insufficient_responses_for_this_group'] = 'Недостаточно ответов для этой группы.';
$string['insufficient_responses_help'] = 'Недостаточно ответов для этой группы.

Для поддержания ответов анонимными  должно быть представлено не менее 2 ответов.';
$string['item_label'] = 'Пояснение';
$string['item_name'] = 'Вопрос';
$string['label'] = 'Пояснение';
$string['mapcourse_help'] = 'По умолчанию, формы обратной связи, созданные на главной странице Вашего сайта, появятся во всех курсах, использующих блок "Обратная связь". Вы можете принудительно отображать форму обратной связи, делая блок закреплённым или ограничить отображения формы обратной связи только для определённых курсов.';
$string['mapcourses_help'] = 'После поиска и выбора соответствующего курса(ов) Вы можете связать их с этой Обратной связью, используя карту курсов. Несколько курсов можно выбрать, щёлкая на названиях курсов при нажатой клавише Ctrl или Apple. Курс может быть отделён от Обратной связи в любое время.';
$string['maximal'] = 'максимально';
$string['messageprovider:message'] = 'Напоминание об "обратной связи"';
$string['messageprovider:submission'] = 'Уведомления о получении ответов в элементах типа "Обратная связь"';
$string['mode'] = 'Режим';
$string['modulename'] = 'Обратная связь';
$string['modulename_help'] = 'Модуль "Обратная связь"  позволяет создать собственные анкеты для сбора обратной связи от участников, используя различные типы вопросов, включая множественный выбор, да/нет или ввод текста.
Обратная связь, при желании, может быть анонимной, а результаты могут быть показаны  всем участникам или только преподавателям. Любая учебная деятельность "Обратная связь" может быть добавлена  на главной странице сайта. В этом случае незарегистрированные пользователи могут заполнить анкету.
"Обратная связь" может быть использована:
* Для оценки курсов, помогая улучшить содержание для последующих участников
* Чтобы дать участникам возможность записаться на учебные модули, мероприятия и т.д.
* Для ответа гостей о выборе курса, политики образовательного учреждения  и т.д.
* Для анонимных сообщений о случаях хулиганства';
$string['modulenameplural'] = 'Обратная связь';
$string['movedown_item'] = 'Переместить этот вопрос вниз';
$string['move_here'] = 'Переместить сюда';
$string['move_item'] = 'Переместить этот вопрос';
$string['moveup_item'] = 'Переместить этот вопрос вверх';
$string['multichoice'] = 'Множественный выбор';
$string['multichoicerated'] = 'Множественный выбор (с показателями)';
$string['multichoicetype'] = 'Тип множественного выбора';
$string['multichoice_values'] = 'Значения множественного выбора';
$string['multiplesubmit'] = 'Многократный ответ';
$string['multiple_submit'] = 'Многократный ответ';
$string['multiplesubmit_help'] = 'Если включено для анонимных анкет, пользователи могут отправлять сообщения неограниченное число раз.';
$string['name'] = 'Название';
$string['name_required'] = 'Необходимо заполнить';
$string['next_page'] = 'Следующая страница';
$string['no_itemlabel'] = 'Нет пояснения';
$string['no_itemname'] = 'Не задано название элемента';
$string['no_items_available_yet'] = 'Никакие вопросы еще не были созданы';
$string['non_anonymous'] = 'Имя пользователя будет сохранено и показано с его ответами';
$string['non_anonymous_entries'] = 'без записей анонимных пользователей';
$string['non_respondents_students'] = 'без записей студентов-респондентов';
$string['notavailable'] = 'Эта обратная связь не доступна';
$string['not_completed_yet'] = 'Еще не завершено';
$string['no_templates_available_yet'] = 'Нет доступных шаблонов';
$string['not_selected'] = 'Не выбрано';
$string['not_started'] = 'не началось';
$string['numeric'] = 'Числовой ответ';
$string['numeric_range_from'] = 'Диапазон от';
$string['numeric_range_to'] = 'Диапазон до';
$string['of'] = 'от';
$string['oldvaluespreserved'] = 'Все старые вопросы и присвоенные им значения будут сохранены';
$string['oldvalueswillbedeleted'] = 'Текущие вопросы и все ответы пользователей будут удалены';
$string['only_one_captcha_allowed'] = 'Только одна капча допускается в анкете обратной связи';
$string['overview'] = 'Просмотр';
$string['page'] = 'Страница';
$string['page_after_submit'] = 'Страница после завершения';
$string['pagebreak'] = 'Разделитель';
$string['page-mod-feedback-x'] = 'Любая страница модуля обратной связи';
$string['parameters_missing'] = 'Параметры отсутствуют';
$string['picture'] = 'Изображение';
$string['picture_file_list'] = 'Список изображений';
$string['pluginadministration'] = 'Управление обратной связью';
$string['pluginname'] = 'Обратная связь';
$string['position'] = 'Положение';
$string['preview'] = 'Предварительный просмотр';
$string['preview_help'] = 'В режиме предварительного просмотра Вы можете изменять порядок вопросов.';
$string['previous_page'] = 'Предыдущая страница';
$string['public'] = 'Опубликовать';
$string['question'] = 'Вопрос';
$string['questions'] = 'Вопросы';
$string['radio'] = 'Множественный выбор с одним ответом';
$string['radiobutton'] = 'Множественный выбор с одним ответом (переключатель)';
$string['radiorated'] = 'Переключатель (с показателями)';
$string['radio_values'] = 'Ответы';
$string['ready_feedbacks'] = 'Готовые отзывы';
$string['relateditemsdeleted'] = 'Ответы всех пользователей на этот вопрос тоже будут удалены';
$string['required'] = 'Обязательное';
$string['resetting_data'] = 'Очистить ответы';
$string['resetting_feedbacks'] = 'Очистить обратную связь';
$string['response_nr'] = 'Номер ответа';
$string['responses'] = 'Ответы';
$string['save_as_new_item'] = 'Сохранить как новый вопрос';
$string['save_as_new_template'] = 'Сохранить как новый шаблон';
$string['save_entries'] = 'Отправить свои ответы';
$string['save_item'] = 'Сохранить вопрос';
$string['saving_failed'] = 'Ошибка сохранения';
$string['saving_failed_because_missing_or_false_values'] = 'Ошибка сохранения:  значение отсутствует или неправильное';
$string['search_course'] = 'Поиск курса';
$string['searchcourses'] = 'Поиск курсов';
$string['searchcourses_help'] = 'Поиск курса(ов) (по коду или названию), которые Вы хотите соединить с этой Обратной связью.';
$string['send'] = 'отправить';
$string['send_message'] = 'отправить сообщение';
$string['separator_decimal'] = '.';
$string['separator_thousand'] = ',';
$string['show_all'] = 'Показать все';
$string['show_analysepage_after_submit'] = 'После завершения показать страницу с анализом';
$string['show_entries'] = 'Показать ответы';
$string['show_entry'] = 'Показать ответ';
$string['show_nonrespondents'] = 'Показать нереспондентов';
$string['sort_by_course'] = 'Сортировать по курсу';
$string['start'] = 'Начало';
$string['started'] = 'начало';
$string['stop'] = 'Конец';
$string['subject'] = 'Тема';
$string['switch_group'] = 'Переключить группу';
$string['template'] = 'Шаблон';
$string['templates'] = 'Шаблоны';
$string['template_saved'] = 'Шаблон сохранен';
$string['textarea'] = 'Эссе';
$string['textarea_height'] = 'Число строк';
$string['textarea_width'] = 'Ширина';
$string['textfield'] = 'Короткий ответ';
$string['textfield_maxlength'] = 'Максимальное количество символов';
$string['textfield_size'] = 'Ширина текстового поля';
$string['there_are_no_settings_for_recaptcha'] = 'Не задано никаких настроек для капчи';
$string['this_feedback_is_already_submitted'] = 'Вы уже завершили этот учебный элемент';
$string['timeclose'] = 'Время закрытия';
$string['timeclose_help'] = 'Вы можете указать время, когда Обратная связь доступна для ответа на вопросы. Если флажок не установлен - ограничения нет.';
$string['timeopen'] = 'Время начала';
$string['timeopen_help'] = 'Вы можете указать время, когда Обратная связь доступна для ответа на вопросы. Если флажок не установлен - ограничения нет.';
$string['typemissing'] = 'пропущено значение "тип"';
$string['update_item'] = 'Сохранить изменения для вопроса';
$string['url_for_continue'] = 'Гиперссылка для перехода';
$string['url_for_continue_button'] = 'Гиперссылка для кнопки-перехода';
$string['url_for_continue_help'] = 'По умолчанию, после ответа на Обратную связь кнопка "Продолжить" переводит на страницу курса. Вы можете задать здесь другой адрес для перехода при нажатии кнопки "Продолжить".';
$string['use_one_line_for_each_value'] = '<br />Каждый вариант ответа с новой строки!';
$string['use_this_template'] = 'Использовать этот шаблон';
$string['using_templates'] = 'Использовать шаблон';
$string['vertical'] = 'вертикально';
$string['viewcompleted_help'] = 'Вы можете просмотреть заполненные формы Обратной связи, доступен поиск по курсу и/или вопросу. Ответы могут быть экспортированы в Excel.';
