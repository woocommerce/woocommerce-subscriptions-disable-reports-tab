<?php
/*
 * Plugin Name: Disable Reports Tab
 * Plugin URI: https://github.com/Prospress/disable-reports-tab/
 * Description: Removes the subscriptions tab from WC reports
 * Author: Prospress Inc.
 * Author URI: https://prospress.com/
 * License: GPLv3
 * Version: 1.0.0
 * Version: 1.0.0
 * Requires at least: 4.0
 * Tested up to: 4.8
 *
 * GitHub Plugin URI: Prospress/disable-reports-tab
 * GitHub Branch: master
 *
 * Copyright 2017 Prospress, Inc.  (email : freedoms@prospress.com)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package		Disable Reports Tab
 * @author		Prospress Inc.
 * @since		1.0
 */

 add_filter( 'woocommerce_admin_reports', 'remove_subscriptions_tab', 13, 1 );
 function remove_subscriptions_tab( $reports ) {
   // unset the subscriptions tab
   unset($reports['subscriptions']);
   return $reports;
 }
