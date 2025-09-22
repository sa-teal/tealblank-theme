<footer class="bg-gray-50 border-t mt-12">
<div class="max-w-6xl mx-auto px-4 py-8 flex flex-col md:flex-row items-center justify-between">
<div class="footer-info text-sm text-gray-600">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></div>

<nav class="footer-nav">
<?php
wp_nav_menu( array(
'theme_location' => 'footer',
'container' => false,
'menu_class' => 'flex gap-4 text-sm',
'fallback_cb' => false,
) );
?>
</nav>
</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>