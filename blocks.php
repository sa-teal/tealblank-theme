<?php
if (!defined('ABSPATH')) exit;

add_action('acf/init', 'tealblank_register_blocks');
function tealblank_register_blocks() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'text_image-block',
            'title'             => __('Bloque: Texto + Imagen'),
            'description'       => __('Bloque de dos columnas con imagen y texto.'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/text-image-block/index.php',
            'category'          => 'layout',
            'icon'              => 'format-image',
            'keywords'          => array('texto', 'imagen', 'columnas'),
            'mode'              => 'edit',
            'supports'          => array(
                'align' => true,
                'mode' => true            ),
        ));
        acf_register_block_type(array(
            'name'              => 'card-block',
            'title'             => __('Bloque: Card'),
            'description'       => __('Un bloque card flexible.'),
            'render_template'   => 'template-parts/blocks/card-block/index.php',
            'category'          => 'layout',
            'icon'              => 'admin-post',
            'keywords'          => array( 'card', 'tealblank' ),
            'mode'              => 'edit',
            'supports'          => array(
                'align' => true, 
                'anchor' => true,
                'customClassName' => true,
            ),
        ));
        acf_register_block_type(array(
            'name'              => 'hero-block',
            'title'             => __('Bloque: Hero'),
            'description'       => __('Un bloque hero para destacar encabezados.'),
            'render_template'   => 'template-parts/blocks/hero-block/index.php',
            'category'          => 'layout',
            'icon'              => 'admin-post',
            'keywords'          => array( 'hero', 'tealblank' ),
            'mode'              => 'edit',
            'supports'          => array(
                'align' => true, 
                'anchor' => true,
                'customClassName' => true,
            ),
        ));
    }
}
