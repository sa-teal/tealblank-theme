<?php get_header(); ?>

<main id="content" class="max-w-7xl mx-auto px-4 py-8">

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<article <?php post_class( 'mb-8' ); ?>>
<header class="mb-3">
<h2 class="text-2xl font-semibold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="text-sm text-gray-500"><?php the_time( get_option( 'date_format' ) ); ?> · <?php the_author_posts_link(); ?></div>
</header>

<div class="max-w-none leading-relaxed">
<?php the_excerpt(); ?>
</div>

<a class="inline-block mt-3 text-blue-600" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Leer más', 'tealblank' ); ?> →</a>

</article>
<?php endwhile; ?>

<?php the_posts_pagination(); ?>

<?php else : ?>
<p><?php esc_html_e( 'No se encontraron entradas.', 'tealblank' ); ?></p>
<?php endif; ?>

</main>

<?php get_footer(); ?>