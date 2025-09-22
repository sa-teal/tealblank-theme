<?php
// Campos ACF
$show_image = get_field('show_image');
$image = get_field('image');
$show_title = get_field('show_title');
$title = get_field('title');
$show_text = get_field('show_text');
$text = get_field('text');
$show_button = get_field('show_button');
$button = get_field('button');
$reverse_order = get_field('reverse_order');
?>

<div class="text-image-block flex flex-col md:flex-row <?php echo $reverse_order ? 'md:flex-row-reverse' : ''; ?>">
    
    <?php if($show_image && $image): ?>
        <div class="image w-full md:w-1/2">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
    <?php endif; ?>

    <div class="text w-full md:w-1/2 flex flex-col justify-center p-4">
        <?php if($show_title && $title): ?>
            <h2 class="text-2xl font-bold mb-2"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>

        <?php if($show_text && $text): ?>
            <div class="mb-4"><?php echo wp_kses_post($text); ?></div>
        <?php endif; ?>

        <?php if($show_button && $button): ?>
            <a href="<?php echo esc_url($link['url']); ?>" class="btn btn-primary"><?php echo esc_html($link['title']); ?></a>
        <?php endif; ?>
    </div>

</div>
