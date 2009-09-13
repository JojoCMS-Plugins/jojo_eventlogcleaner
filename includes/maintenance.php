<?php
/**
 * Jojo CMS - Eventlog cleaner
 *
 * Copyright 2009 Jojo CMS
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 * @package empty_plugin
 */

$maxdays = Jojo::getOption('eventlog_max_days', 0);
if (!empty($maxdays)) {
    Jojo::deleteQuery("DELETE FROM {eventlog} WHERE el_datetime < DATE_SUB(CURDATE(),INTERVAL ".Jojo::clean($maxdays)." DAY)");
}