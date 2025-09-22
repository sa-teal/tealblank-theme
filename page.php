<?php get_header(); ?>

<main id="content" class="max-w-7xl mx-auto px-4 py-8">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article <?php post_class(); ?>>
<header class="mb-6">
<h1 class="text-3xl font-bold"><?php the_title(); ?></h1>
</header>

<div class="entry-content leading-relaxed">
<?php the_content(); ?>
</div>

</article>

<?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>