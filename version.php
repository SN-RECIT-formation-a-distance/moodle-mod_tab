<?php

/**
 * *************************************************************************
 * *                         OOHOO - Tab Display                          **
 * *************************************************************************
 * @package     mod                                                       **
 * @subpackage  tab                                                       **
 * @name        tab                                                       **
 * @copyright   oohoo.biz                                                 **
 * @link        http://oohoo.biz                                          **
 * @author      Patrick Thibaudeau                                        **
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later  **
 * *************************************************************************
 * ************************************************************************ */
$plugin->version = 2025013000;  // The current module version (Date: YYYYMMDDXX)
$plugin->requires = 2024071200.00; // Moodle 4.5.0
$plugin->maturity = MATURITY_STABLE;
$plugin->release = 'v2.0.0-stable';
$plugin->component = 'mod_tab';
$plugin->supported = [405, 405];      
$plugin->dependencies = [
    'theme_recit2' => 2025013000
];
