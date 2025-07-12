<?php

// Registers pattern categories.
if ( ! function_exists( 'coderstime_jadoo_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since Coderstime Jadoo 1.0
	 *
	 * @return void
	 */
	function coderstime_jadoo_pattern_categories() {

		register_block_pattern_category(
			'coderstime-jadoo',
			array(
				'label'       => __( 'Coderstime Jadoo', 'coderstime-jadoo' ),
				'description' => __( 'A collection of full page layouts.', 'coderstime-jadoo' ),
			)
		);
	}
endif;
add_action( 'init', 'coderstime_jadoo_pattern_categories' );

if ( ! function_exists( 'coderstime_jadoo_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since Coderstime Jadoo 1.0
	 *
	 * @return void
	 */
	function coderstime_jadoo_enqueue_styles() {
		wp_enqueue_style(
			'coderstime-jadoo-style',
			get_stylesheet_uri(),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'coderstime_jadoo_enqueue_styles' );



// Registers custom block styles.
if ( ! function_exists( 'coderstime_jadoo_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since Coderstime Jadoo 1.0
	 *
	 * @return void
	 */
	function coderstime_jadoo_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'coderstime-jadoo' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;
add_action( 'init', 'coderstime_jadoo_block_styles' );