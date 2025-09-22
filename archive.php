<?php get_header(); ?>

<main id="content" class="max-w-6xl mx-auto px-4 py-8">

<header class="mb-6">
<h1 class="text-2xl font-semibold"><?php the_archive_title(); ?></h1>
<div class="text-sm text-gray-600"><?php the_archive_description(); ?></div>
</header>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article <?php post_class( 'mb-8' ); ?>>
<h2 class="text-xl font-medium"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="text-sm text-gray-500"><?php the_time( get_option( 'date_format' ) ); ?></div>
<div class="leading-relaxed"><?php the_excerpt(); ?></div>
</article>
<?php endwhile; the_posts_pagination(); else : ?>
<p><?php esc_html_e( 'No hay resultados para este archivo.', 'tealblank' ); ?></p>
<?php endif; ?>

</main>

<?php get_footer(); ?>