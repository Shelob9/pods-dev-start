<?php
/**
 * Front-end functionality
 *
 * @package   @pods_dev
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link
 * @copyright YEAR Your Name
 */

namespace PodsDev;


class frontend implements \Hook_SubscriberInterface {

	/**
	 * Set actions
	 *
	 * @since 0.0.3
	 *
	 * @return array
	 */
	public static function get_actions() {
		return array();
	}

	/**
	 * Set filters
	 *
	 * @since 0.0.3
	 *
	 * @return array
	 */
	public static function get_filters() {

		return array(

		);

	}
} 
