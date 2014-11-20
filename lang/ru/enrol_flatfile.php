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
 * Strings for component 'enrol_flatfile', language 'ru', branch 'MOODLE_24_STABLE'
 *
 * @package   enrol_flatfile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['filelockedmail'] = 'Процесс cron не может удалить текстовый файл ({$a}), используемый вами для записи на курсы. Обычно это означает, что неправильно установлены права доступа к этому файлу. Пожалуйста, исправьте права доступа так, чтобы система Moodle могла удалять этот файл. В противном случае один и тот же файл будет обрабатываться повторно.';
$string['filelockedmailsubject'] = 'Серьезная ошибка: Файл регистрации';
$string['location'] = 'Путь к файлу';
$string['mailadmin'] = 'Сообщить администратору по почте';
$string['mailstudents'] = 'Уведомить студентов по электронной почте';
$string['pluginname'] = 'CSV-файл';
