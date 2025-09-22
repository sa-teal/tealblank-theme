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



// Encolar CSS para el frontend
function tealblank_enqueue_assets() {
    $style_path = get_template_directory() . '/assets/css/style.css';
    $style_uri  = get_template_directory_uri() . '/assets/css/style.css';
    $ver = file_exists( $style_path ) ? filemtime( $style_path ) : false;

    wp_enqueue_style( 'tealblank-style', $style_uri, array(), $ver );
}
add_action( 'wp_enqueue_scripts', 'tealblank_enqueue_assets' );

// Encolar CSS para el editor de bloques 
function tealblank_enqueue_editor_assets() {
    $editor_path = get_template_directory() . '/assets/css/editor.css';
    $editor_uri  = get_template_directory_uri() . '/assets/css/editor.css';
    $ver = file_exists( $editor_path ) ? filemtime( $editor_path ) : false;
    wp_enqueue_style( 'tealblank-editor-style', $editor_uri, array( 'wp-edit-blocks' ), $ver );
}
add_action( 'enqueue_block_editor_assets', 'tealblank_enqueue_editor_assets' );
