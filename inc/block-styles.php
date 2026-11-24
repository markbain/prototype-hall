<?php
/**
 * Block style registrations.
 *
 * The two post layouts are block styles of the Post Template block inside the
 * posts pattern, so an editor switches between them in the Styles panel.
 *
 * @package PrototypeHall
 * @since PrototypeHall 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'bd324_prototype_hall_block_styles' ) ) :
	/**
	 * Registers the post layouts and the extra separator and button styles.
	 *
	 * @since PrototypeHall 1.0.0
	 *
	 * @return void
	 */
	function bd324_prototype_hall_block_styles() {
		register_block_style(
			'core/post-template',
			array(
				'name'       => 'grid',
				'label'      => __( 'Grid', 'prototype-hall' ),
				'is_default' => true,
			)
		);
		register_block_style(
			'core/post-template',
			array(
				'name'  => 'list',
				'label' => __( 'List', 'prototype-hall' ),
			)
		);
		register_block_style(
			'core/separator',
			array(
				'name'  => 'bar',
				'label' => __( 'Bar', 'prototype-hall' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'ink',
				'label' => __( 'Ink', 'prototype-hall' ),
			)
		);
	}
endif;
add_action( 'init', 'bd324_prototype_hall_block_styles' );
