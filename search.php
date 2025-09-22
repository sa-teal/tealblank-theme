<?php get_header(); ?>

<main id="content" class="max-w-6xl mx-auto px-4 py-8">
<header class="mb-6">
<h1 class="text-2xl font-semibold"><?php printf( esc_html__( 'Resultados de búsqueda: %s', 'tealblank' ), '<span class="font-normal">"' . get_search_query() . '"</span>' ); ?></h1>
</header>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article <?php post_class( 'mb-6' ); ?>>
<h2 class="text-xl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="leading-relaxed"><?php the_excerpt(); ?></div>
</article>
<?php endwhile; the_posts_pagination(); else : ?>
<p><?php esc_html_e( 'No se han encontrado resultados.', 'tealblank' ); ?></p>
<?php endif; ?>

</main>

<?php get_footer(); ?>