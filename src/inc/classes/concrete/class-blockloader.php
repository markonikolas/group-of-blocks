<?php
/**
 * Loads blocks into the editor.
 *
 * @package group-of-blocks
 */

namespace GroupOfBlocks\Classes\Concrete;

/**
 * BlockLoader class
 * 
 * Responsible for loading blocks as they
 * are added in the blocks directory.
 */
class BlockLoader {

	/**
	 * Holds block paths.
	 *
	 * @var array 
	 */
	public array $blocks = [];

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', [ $this, 'find' ] );
		add_action( 'init', [ $this, 'register' ] );
	}

	/**
	 * Find the blocks.
	 *
	 * @return void
	 */
	public function find() {
		$block_dirs = array_diff( scandir( \BLOCK_DIR_PATH ), array( '.', '..' ) );

		if ( empty( $block_dirs ) ) {
			return; 
		}

		foreach ( $block_dirs as $value ) {
			$directory = \BLOCK_DIR_PATH . '/' . $value;

			if ( is_dir( $directory ) ) {
				$this->blocks[] = $directory;
			}       
		}
	}

	/**
	 * Determine if the folder is actually a block
	 * and register it.
	 * 
	 * @return void
	 */
	public function register() {
		foreach ( $this->blocks as $value ) {
			$has_block_meta = array_search( 'block.json', array_diff( scandir( $value ), array( '.', '..' ) ), true ); // make sure that block.json is in fact in the directory.

			if ( $has_block_meta ) {
				register_block_type_from_metadata( $value . '/block.json' );
			}
		}
	}
}
