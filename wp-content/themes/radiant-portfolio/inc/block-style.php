<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage radiant-portfolio
 * @since radiant-portfolio 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since radiant-portfolio 1.0
	 *
	 * @return void
	 */
	function radiant_portfolio_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'radiant-portfolio-border',
				'label' => esc_html__( 'Borders', 'radiant-portfolio' ),
			)
		);

		
	}
	add_action( 'init', 'radiant_portfolio_register_block_styles' );
}