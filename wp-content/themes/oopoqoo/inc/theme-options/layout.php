<?php

WP_Bootstrap_4_Kirki::add_section( 'wp_bp_layout', array(
    'title'          => esc_html__( 'Layout Settings', 'oopoqoo' ),
    'panel'          => 'theme_options',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

WP_Bootstrap_4_Kirki::add_field( 'wp_bootstrap_4_theme', array(
	'settings' => 'container_width',
	'label'    => esc_html__( 'Container Max Width (in px)', 'oopoqoo' ),
	'section'  => 'wp_bp_layout',
	'type'     => 'slider',
    'default'  => 1140,
	'choices'  => array(
		'min'  => '1080',
		'max'  => '1400',
		'step' => '10',
	),
    'output' => array(
		array(
			'element'  => '.container',
			'property' => 'max-width',
			'units'    => 'px',
		),
        array(
			'element'  => '.elementor-section.elementor-section-boxed>.elementor-container',
			'property' => 'max-width',
			'units'    => 'px',
		),
	),
) );

// Header Content Width
WP_Bootstrap_4_Kirki::add_field( 'wp_bootstrap_4_theme', array(
	'settings' => 'header_within_container',
	'label'    => esc_html__( 'Header Content Within Container', 'oopoqoo' ),
	'section'  => 'wp_bp_layout',
	'type'     => 'checkbox',
    'default'  => 0,
) );

// Sticky header
WP_Bootstrap_4_Kirki::add_field( 'wp_bootstrap_4_theme', array(
	'settings' => 'sticky_header',
	'label'    => esc_html__( 'Sticky Header', 'oopoqoo' ),
	'section'  => 'wp_bp_layout',
	'type'     => 'checkbox',
    'default'  => 0,
    'tooltip'  => esc_html__( 'Some browsers may be outdated to support this feature.', 'oopoqoo' ),
) );

// Default Sidebar Position
WP_Bootstrap_4_Kirki::add_field( 'wp_bootstrap_4_theme', array(
	'settings' => 'default_sidebar_position',
	'label'    => esc_html__( 'Default Sidebar Position', 'oopoqoo' ),
    'tooltip'  => esc_html__( 'This can be overwritten on the particular page by using a page template.', 'oopoqoo' ),
	'section'  => 'wp_bp_layout',
	'type'     => 'radio',
    'default'  => 'right',
    'choices'  => array(
        'right' => esc_html__( 'Right', 'oopoqoo' ),
        'left'  => esc_html__( 'Left', 'oopoqoo' ),
        'no'    => esc_html__( 'No Sidebar', 'oopoqoo' ),
    )
) );

WP_Bootstrap_4_Kirki::add_field( 'wp_bootstrap_4_theme', array(
	'settings' => 'hide_sidebar_on_mobile',
	'label'    => esc_html__( 'Hide Sidebar On Mobile', 'oopoqoo' ),
	'section'  => 'wp_bp_layout',
	'type'     => 'radio',
    'default'  => 'no',
    'choices' => array(
        'no'  => esc_html__( 'No.', 'oopoqoo' ),
        'yes'  => esc_html__( 'Yes, hide sidebar on small devices.', 'oopoqoo' ),
    ),
    'active_callback' => array(
        array(
            'setting'  => 'default_sidebar_position',
            'operator' => '!==',
            'value'    => 'no',
        ),
    ),
) );

// Blog Display
WP_Bootstrap_4_Kirki::add_field( 'wp_bootstrap_4_theme', array(
	'settings'    => 'default_blog_display',
	'label'       => esc_html__( 'Blog Display', 'oopoqoo' ),
    'description' => esc_html__( 'Choose between a full post or an excerpt for the blog and archive pages.', 'oopoqoo' ),
	'section'     => 'wp_bp_layout',
	'type'        => 'radio',
    'default'     => 'excerpt',
    'choices'     => array(
        'excerpt' => esc_html__( 'Post excerpt', 'oopoqoo' ),
        'full'    => esc_html__( 'Full Post', 'oopoqoo' ),
    )
) );
