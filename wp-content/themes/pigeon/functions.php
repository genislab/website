<?php
/**
 * Pigeon functions and definitions
 */

if ( ! function_exists( 'pigeon_support' ) ) {

	// Sets up theme defaults and registers support for various WordPress features.
	function pigeon_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}
}
add_action( 'after_setup_theme', 'pigeon_support' );

if ( ! function_exists( 'pigeon_styles' ) ) {
	// Enqueue styles.
	function pigeon_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'pigeon-style',
			get_template_directory_uri() . '/assets/css/theme.min.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'pigeon-style' );

	}
}
add_action( 'wp_enqueue_scripts', 'pigeon_styles' );

if ( ! function_exists( 'pigeon_editor_styles' ) ) {
	// Enqueue editor styles.
	function pigeon_editor_styles() {
		add_editor_style(
			get_template_directory_uri() . '/assets/css/theme.min.css'
		);
	}
}
add_action( 'admin_init', 'pigeon_editor_styles' );


// Add script to Editor
if ( ! function_exists( 'pigeon_admin_add_scripts' ) ) {
	function pigeon_admin_add_scripts( $hook ){
		if ( 'appearance_page_pigeon' != $hook ) {
			return;
		}
		
		wp_register_style( 'pigeon-settings-css',  get_template_directory_uri() . '/assets/css/admin.min.css' , '1.0.0' );
		wp_enqueue_style( 'pigeon-settings-css');
	
	}
}
add_action( 'admin_enqueue_scripts', 'pigeon_admin_add_scripts');

// Add admin page content
get_template_part( 'inc/theme' );

// Add admin page
if ( ! function_exists( 'pigeon_create_menu' ) ) {
	add_action( 'admin_menu', 'pigeon_create_menu' );
	// Adds our dashboard menu item
	function pigeon_create_menu() {
		add_theme_page( 'Pigeon WordPress Theme', 'Pigeon', 'edit_theme_options', 'pigeon', 'pigeon_admin_theme_page' );
	}
}