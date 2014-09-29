<?php
/**
 * Functionality related to Pod called "first", a post_type Pod.
 *
 * @package   @pods_dev
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link
 * @copyright YEAR Your Name
 */

namespace PodsDev\Pods;


final class first extends object implements \Hook_SubscriberInterface {

	/**
	 * Set actions
	 *
	 * @since 0.0.1
	 *
	 * @return array
	 */
	public static function get_actions() {
		$type = self::get_type();

		return array(
			"pods_api_post_save_pod_item_{$type}" => array( 'post_save', 10, 3 ),
		);
	}

	/**
	 * Set filters
	 *
	 * @since 0.0.1
	 *
	 * @return array
	 */
	public static function get_filters() {
		$type = self::get_type();

		return array(
			"pods_api_pre_save_pod_item_{$type}" => array( 'pre_save', 10, 3 ),
		);

	}

	/**
	 * @param $pieces
	 * @param $new
	 * @param $id
	 *
	 * @uses "pods_api_pre_save_pod_item_{$type}" filter
	 *
	 * @return mixed
	 */
	function pre_save( $pieces, $new, $id ) {

		return $pieces;
	}

	/**
	 * @param $pieces
	 * @param $new
	 * @param $id
	 *
	 * @uses "pods_api_post_save_pod_item_{$type}" action
	 *
	 * @return mixed
	 */
	function post_save( $pieces, $new, $id ) {


	}

	/**
	 * Set name of Pod this class is for.
	 *
	 * @var string
	 *
	 * @since 0.0.1
	 */
	public static $type = PODS_DEV_FIRST_POD;

	/**
	 * Set the name of the Pod
	 *
	 * @param 	string 	$type
	 *
	 * @since 0.0.1
	 */
	function set_type() {

		return self::$type;

	}

	/**
	 * Set content type of Pod this class is for.
	 *
	 * @var string
	 *
	 * @since 0.0.1
	 */
	public static $content_type = 'post_type';

	/**
	 * Set the name of the Pod
	 *
	 * @param 	string 	$type
	 *
	 * @since 0.0.1
	 */
	function set_content_type() {

		return self::$content_type;

	}


	/**
	 * Holds the instance of this class.
	 *
	 *
	 * @access private
	 * @var    object
	 */
	private static $instance;


	/**
	 * Returns the instance.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return object
	 */
	public static function init() {

		if ( !self::$instance )
			self::$instance = new self;

		return self::$instance;

	}


} 
