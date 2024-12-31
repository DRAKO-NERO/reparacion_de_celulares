<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage radiant-portfolio
 * @since radiant-portfolio 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function radiant_portfolio_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Radiant_Portfolio_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Radiant Portfolio Pro', 'radiant-portfolio' ),
		'button_text'      => __( 'Upgrade Pro', 'radiant-portfolio' ),
		'url'              => 'https://www.wpradiant.net/products/portfolio-wordpress-theme',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'radiant_portfolio_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function radiant_portfolio_custom_control_scripts() {
	wp_enqueue_script( 'radiant-portfolio-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
	wp_enqueue_style( 'radiant-portfolio-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'radiant_portfolio_custom_control_scripts' );