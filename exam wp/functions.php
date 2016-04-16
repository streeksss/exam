<?php

// Load stylesheets and scripts

function load_styles_scripts(){
    wp_enqueue_style('style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css');
}

add_action ('wp_enqueue_scripts', 'load_styles_scripts');


// Support thumbnails

add_theme_support('post-thumbnails');


// Activated menu

register_nav_menus(array(
    'header' => __('Head Menu'),
    'footer' => __('Foot Menu'),
));


// Customizer

function blogname_customize_register( $wp_customize )
{


    $wp_customize->add_setting('social_links_facebook', [
        'default' => '',
        'transport' => 'refresh',
    ]);


    $wp_customize->add_section('blogname_social', [
        'title' => __('Social links', 'blogname'),
        'priority' => 30,
    ]);


    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'social_links_facebook', [
        'label' => __('Facebook', 'blogname'),
        'section' => 'blogname_social',
        'settings' => 'social_links_facebook',
    ]));

    $wp_customize->add_setting('social_links_twitter', [
        'default' => '',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'social_links_twitter', [
        'label' => __('Twitter', 'blogname'),
        'section' => 'blogname_social',
        'settings' => 'social_links_twitter',
    ]));

}
add_action( 'customize_register', 'blogname_customize_register' );