<?php
/*
Plugin Name: Pods Development Starter Plugin
Plugin URI: http://example.com/
Description: Description
Version: 0.0.1
Author: Your Name
Author URI: http://example.com/
Text Domain: pods-dev-starter
License: GPL v2 or later
*/

/**
 * Copyright (c) YEAR Your Name (email: email@example.com). All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * **********************************************************************
 */

// don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Define constants
 *
 * @since 0.0.1
 */
define( 'PODS_DEV_SLUG', plugin_basename( __FILE__ ) );
define( 'PODS_DEV_URL', plugin_dir_url( __FILE__ ) );
define( 'PODS_DEV_DIR', plugin_dir_path( __FILE__ ) );
include PODS_DEV_DIR . '/post-type-constants.php';

add_action( 'plugins_loaded', function() {
	if ( defined( 'PODS_VERSION' ) ) {
		include_once PODS_DEV_DIR . 'ClassLoader.php';
		$classLoader = new PodsDev_ClassLoader();
		$classLoader->addDirectory( PODS_DEV_DIR . 'PodsDev' );
		$classLoader->register();

		$api_registration = new \PodsDev\hookManager\Registration();
		$api_registration->boot();

	}

});
