<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part('partials/head'); ?>
<body <?php body_class(); ?>>
    <!--[if IE]>
    <div class="alert alert-warning">
    <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
</div>
<![endif]-->

<?php get_template_part('toolbox/filters'); ?>
<div class="pusher">
    <?php
    do_action('get_header');
    get_template_part('partials/header');
    ?>
    <div class="wrapper">
        <main class="main" role="main">
            <?php include App\template()->main(); ?>
        </main><!-- /.main -->
        <?php if (App\display_sidebar()) : ?>
            <aside class="sidebar">
                <?php App\template_part('partials/sidebar'); ?>
            </aside>
        <?php endif; ?>
    </div><!-- /.wrapper -->
</div>

<?php
do_action('get_footer');
get_template_part('partials/footer');
wp_footer();
?>
</body>
</html>
