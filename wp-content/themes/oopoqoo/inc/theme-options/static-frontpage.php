<?php

WP_Bootstrap_4_Kirki::add_section( 'wp_bp_frontpage', array(
    'title'          => esc_html__( 'Static Frontpage', 'oopoqoo' ),
    'panel'          => 'theme_options',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

if( class_exists( 'Kirki' ) ) {
    function wp_bootstrap_4_move_header_bg_image( $wp_customize ) {
        $wp_customize->get_control( 'header_image' )->section = 'wp_bp_frontpage';
    }
    add_action( 'customize_register', 'wp_bootstrap_4_move_header_bg_image' );
}


WP_Bootstrap_4_Kirki::add_field( 'wp_bootstrap_4_theme', array(
	'settings' => 'front_cover_title',
	'label'    => esc_html__( 'Cover Title', 'oopoqoo' ),
	'section'  => 'wp_bp_frontpage',
	'type'     => 'text',
    'default'  => get_bloginfo( 'name' ),
) );

WP_Bootstrap_4_Kirki::add_field( 'wp_bootstrap_4_theme', array(
	'settings' => 'front_cover_lead',
	'label'    => esc_html__( 'Cover Lead', 'oopoqoo' ),
	'section'  => 'wp_bp_frontpage',
	'type'     => 'text',
    'default'  => get_bloginfo( 'description' ),
) );

WP_Bootstrap_4_Kirki::add_field( 'wp_bootstrap_4_theme', array(
	'settings' => 'front_cover_btn_text',
	'label'    => esc_html__( 'Cover Button Text', 'oopoqoo' ),
	'section'  => 'wp_bp_frontpage',
	'type'     => 'text',
    'default'  => '',
) );

WP_Bootstrap_4_Kirki::add_field( 'wp_bootstrap_4_theme', array(
	'settings' => 'front_cover_btn_link',
	'label'    => esc_html__( 'Cover Button Link', 'oopoqoo' ),
	'section'  => 'wp_bp_frontpage',
	'type'     => 'text',
    'default'  => '',
) );


WP_Bootstrap_4_Kirki::add_field( 'wp_bootstrap_4_theme', array(
	'settings' => 'featured_page_1',
	'label'    => esc_html__( '1st Featured Page', 'oopoqoo' ),
	'section'  => 'wp_bp_frontpage',
	'type'     => 'dropdown-pages',
) );

WP_Bootstrap_4_Kirki::add_field( 'wp_bootstrap_4_theme', array(
	'settings' => 'featured_page_2',
	'label'    => esc_html__( '2nd Featured Page', 'oopoqoo' ),
	'section'  => 'wp_bp_frontpage',
	'type'     => 'dropdown-pages',
) );

WP_Bootstrap_4_Kirki::add_field( 'wp_bootstrap_4_theme', array(
	'settings' => 'featured_page_3',
	'label'    => esc_html__( '3rd Featured Page', 'oopoqoo' ),
	'section'  => 'wp_bp_frontpage',
	'type'     => 'dropdown-pages',
) );


WP_Bootstrap_4_Kirki::add_field( 'wp_bootstrap_4_theme', array(
	'settings' => 'show_main_content',
	'label'    => esc_html__( 'Show Main Content', 'oopoqoo' ),
	'section'  => 'wp_bp_frontpage',
	'type'     => 'checkbox',
    'default'  => 1
) );
