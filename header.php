<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link sr-only focus:not-sr-only" href="#content"><?php esc_html_e( 'Saltar al contenido', 'tealblank' ); ?></a>

<header class="bg-white border-b">
<div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
<div class="site-branding">
<?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
the_custom_logo();
} else { ?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-xl font-semibold"><?php bloginfo( 'name' ); ?></a>
<p class="text-sm text-gray-600"><?php bloginfo( 'description' ); ?></p>
<?php } ?>
</div>

<nav class="site-navigation">
<?php
wp_nav_menu( array(
'theme_location' => 'primary',
'container' => false,
'menu_class' => 'flex gap-4 items-center',
'fallback_cb' => false,
) );
?>
</nav>
</div>
</header>