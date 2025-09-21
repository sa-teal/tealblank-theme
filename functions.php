<?php

function tealblank_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
}
add_action( 'after_setup_theme', 'tealblank_setup' );

// Registrar menús
function tealblank_menus() {
    register_nav_menus( array(
        'primary' => __( 'Menú Principal', 'tealblank' ),
        'footer'  => __( 'Menú Footer', 'tealblank' )
    ) );
}
add_action( 'after_setup_theme', 'tealblank_menus' );