<?php
/**
 * Singleton class.
 * 
 * @package group-of-blocks
 */

namespace GroupOfBlocks\Classes\Base;

/**
 * Singleton implementation.
 */
abstract class Singleton {

	/**
	 * Holds instance.
	 *
	 * @var Singleton;
	 */
	private static $instance;

	/**
	 * Constructor should be empty.
	 */
	protected function __construct() { }

	/**
	 * Singleton should not be cloneable.
	 */
	protected function __clone() { }

	/**
	 * Singleton should not be restorable from strings.
	 * 
	 * @throws \Exception Cannot unserialize a singleton.
	 */
	public function __wakeup() {
		throw new \Exception( 'Cannot unserialize a singleton.' );
	}

	/**
	 * Gets the instance.
	 *
	 * @return Singleton.
	 */
	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new static();
		}

		return self::$instance;
	}
}
