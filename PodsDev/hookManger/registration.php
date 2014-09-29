<?php
/**
 * Register classes to use the WP Plugin Hook Interfaces
 *
 * @package   @pods_dev
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link
 * @copyright YEAR Your Name
 */
namespace PodsDev\hookManager;
class Registration {
	private $api_manager;

	private $booted = false;

	public function __construct() {
		$this->api_manager = new HT_DMS_WP_API_Manager();
	}

	public function get_subscribers() {
		return array(
			\PodsDev\Pods\first::init(),
			\PodsDev\Pods\second::init(),
			new \PodsDev\admin(),
			new \PodsDev\frontend(),

		);
	}

	public function boot() {
		if ($this->booted) {
			return;
		}

		foreach ($this->get_subscribers() as $subscriber) {
			$this->api_manager->register($subscriber);
		}

		$this->booted = true;
	}
}

