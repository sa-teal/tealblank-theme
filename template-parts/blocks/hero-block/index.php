<?php
$show_text = get_field('show_text');
$text = get_field('text');
$title = get_field('title');
$show_button = get_field('show_button');
$button = get_field('button');

?>

<div class="hero-block flex flex-col md:flex-row">

    <div class="text w-full md:w-3/4 flex flex-col justify-center py-8 h-screen">
        <?php if ($title): ?>
            <h1 class="font-bold mb-2 text-4xl md:text-7xl"><?php echo esc_html($title); ?> </h1>
        <?php endif; ?>

        <?php if ($show_text && $text): ?>
            <div class="mb-4 <?php echo 'text-' . esc_attr($text_size); ?>"><?php echo wp_kses_post($text); ?></div>
        <?php endif; ?>

        <?php if ($show_button && $button): ?>
            <a href="<?php echo esc_url($link['url']); ?>" class="btn btn-primary"><?php echo esc_html($link['title']); ?></a>
        <?php endif; ?>
    </div>

</div>