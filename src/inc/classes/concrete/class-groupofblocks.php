<?php
/**
 * Main plugin class file.
 *
 * @package group-of-blocks
 */

namespace GroupOfBlocks\Classes\Concrete;

use GroupOfBlocks\Classes\Base\Singleton;

/**
 * Plugin class
 */
class GroupOfBlocks extends Singleton {

	/**
	 * Init the plugin hooks.
	 *
	 * @return void
	 */
	public static function init() {
		add_action( 'admin_bar_menu', [ self::class, 'say_hello' ] );
	}

	/**
	 * Say hello.
	 *
	 * @return void
	 */
	public static function say_hello() {
		global $wp_admin_bar;
	
		$wp_admin_bar->add_menu(
			array(
				'id'     => 'wpse-form-in-admin-bar',
				'parent' => 'top-secondary',
				'title'  => 'Hello World!',
			) 
		);
	}
}
