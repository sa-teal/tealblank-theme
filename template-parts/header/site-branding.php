<div class="site-branding">
<?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
the_custom_logo();
} else { ?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-xl font-semibold"><?php bloginfo( 'name' ); ?></a>
<p class="text-sm text-gray-600"><?php bloginfo( 'description' ); ?></p>
<?php } ?>
</div>