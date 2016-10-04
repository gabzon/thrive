

<?php
$img = get_post_meta(get_the_ID(),'tool_background_image',true);
if (!empty($img)) {
    $bg_img = wp_get_attachment_url($img);
}else{
    $bg_img = get_stylesheet_directory_uri().'/assets/images/tools-bg.jpg';
}

$brain = get_post_meta(get_the_ID(), 'tool_brain_side',true);
$version = get_post_meta(get_the_ID(), 'tool_version_group',true);
$last_version = end($version['tool_version_file']);
$videos = get_post_meta(get_the_ID(),'tool_video');
$quotes_group = get_post_meta(get_the_ID(),'tool_quote_group');
$quotes = $quotes_group[0];

$sources = get_posts( array(
    'post_type'  => 'source',
    'posts_per_page' => -1,
    'post_belongs' => $post->ID,
    'post_status' => 'publish',
    'suppress_filters' => false
));
?>

<div id="tool-section">
    <?php get_template_part('tool/header'); ?>

    <div id="tool-description">
        <?php get_template_part('tool/video'); ?>

        <?php get_template_part('tool/tips'); ?>

        <?php get_template_part('tool/question'); ?>

        <?php get_template_part('tool/tags'); ?>

        <?php get_template_part('tool/brain.php'); ?>

        <?php get_template_part('tool/sources.php'); ?>
    </div>
</div>
