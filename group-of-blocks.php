<?php
/**
 * Plugin Name:       Group of Blocks
 * Description:       This plugin is a group of Gutenberg blocks. 
 * Requires at least: 6.1
 * Requires PHP:      7.4
 * Version:           0.0.1
 * Author:            Marko Nikolaš
 * License:           GPL-3.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       group-of-blocks
 * Domain Path:       group-of-blocks
 *
 * @package           group-of-blocks
 */

declare(strict_types=1);

namespace GroupOfBlocks;

require_once __DIR__ . '/vendor/autoload.php';

use GroupOfBlocks\Classes\Concrete\GroupOfBlocks;
use GroupOfBlocks\Classes\Concrete\BlockLoader;

define( 'BLOCK_DIR_PATH', WP_PLUGIN_DIR . '/group-of-blocks/build' );

// Start the plugin.
GroupOfBlocks::init();

// Load blocks into the editor.
new BlockLoader();
