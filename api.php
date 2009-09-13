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

$_options[] = array(
    'id'          => 'eventlog_max_days',
    'category'    => 'System',
    'label'       => 'Maximum age of Event Log',
    'description' => 'The maximum age in days of event log entries. Older entries will be periodically deleted. Zero means unlimited.',
    'type'        => 'integer',
    'default'     => '30',
    'options'     => '',
    'plugin'      => 'jojo_eventlogcleaner'
);
