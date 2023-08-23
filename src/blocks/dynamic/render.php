<?php
/**
 * Dynamic block
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 * @package dynamic
 */

?>

<p <?php echo get_block_wrapper_attributes(); // phpcs:ignore ?>>
	<?php esc_html_e( 'Dynamic – hello from a dynamic block!', 'dynamic' ); ?>
</p>
