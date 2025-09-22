<?php get_header(); ?>

<main id="content" class="max-w-4xl mx-auto px-4 py-8">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article <?php post_class(); ?>>

<header class="mb-6">
<h1 class="text-3xl font-bold mb-2"><?php the_title(); ?></h1>
<div class="text-sm text-gray-500"><?php the_time( get_option( 'date_format' ) ); ?> · <?php the_author_posts_link(); ?></div>
</header>

<div class="entry-content leading-relaxed">
<?php the_content(); ?>
</div>

<?php
the_post_navigation( array(
'prev_text' => '« %title',
'next_text' => '%title »'
) );
?>

<?php
if ( comments_open() || get_comments_number() ) {
comments_template();
}
?>

</article>

<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>