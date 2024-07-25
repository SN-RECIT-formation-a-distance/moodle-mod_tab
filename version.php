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
$plugin->version = 2024072500;  // The current module version (Date: YYYYMMDDXX)
$plugin->requires = 2024042201.06;; // Moodle 4.4
$plugin->maturity = MATURITY_STABLE;
$plugin->release = 'v1.17.0-stable';
$plugin->component = 'mod_tab';
$plugin->supported = [404, 405];      
$plugin->dependencies = [
    'theme_recit2' => 2023011900
];
