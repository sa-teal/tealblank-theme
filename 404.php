<?php get_header(); ?>

<main id="content" class="max-w-4xl mx-auto px-4 py-16 text-center">
<h1 class="text-4xl font-bold mb-4"><?php esc_html_e( '404 — Página no encontrada', 'tealblank' ); ?></h1>
<p class="mb-6"><?php esc_html_e( 'Lo sentimos, no hemos encontrado lo que buscabas. Prueba con otra búsqueda.', 'tealblank' ); ?></p>
<?php get_search_form(); ?>
</main>

<?php get_footer(); ?>