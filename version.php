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
$plugin->version = 2022020900;  // The current module version (Date: YYYYMMDDXX)
$plugin->requires = 2020061500.00; // Moodle 3.9.0
$plugin->maturity = MATURITY_BETA;
$plugin->release = 'v1.15.0';
$plugin->cron = 0;           // Period for cron to check this module (secs)
$plugin->component = 'mod_tab';
$plugin->supported = [39, 400];      //  Moodle 3.9.x, 3.10.x and 3.11.x are supported.
$plugin->dependencies = [];
