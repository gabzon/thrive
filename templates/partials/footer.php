<?php
$theme_options = get_option('sevinci_settings');
$facebook   = $theme_options['facebook'];
$twitter    = $theme_options['twitter'];
$linkedin   = $theme_options['linkedin'];
$gplus      = $theme_options['gplus'];
$instagram  = $theme_options['instagram'];
$pinterest  = $theme_options['pinterest'];
$youtube    = $theme_options['youtube'];
$vimeo      = $theme_options['vimeo'];
$skype      = $theme_options['skype'];

$social_media = array(
    'facebook'      => $facebook,
    'twitter'       => $twitter,
    'linkedin'      => $linkedin,
    'google plus'   => $gplus,
    'instagram'     => $instagram,
    'pinterest'     => $pinterest,
    'youtube'       => $youtube,
    'vimeo'         => $vimeo,
    'skype'         => $skype
);

?>
<footer class="ui basic vertical segment" style="background:#eee">
    <br>
    <div class="ui container">
        <div class="ui grid">
            <div class="four wide column">
                <a href="<?= esc_url(home_url('/')); ?>" rel="home" class="item" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                  <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
                    <img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' class="img-responsive" style="max-width:120px;margin-top:-14px">
                  <?php else : ?>
                    <?php echo bloginfo('name'); ?>
                  <?php endif; ?>
                </a>
                <br>
                <br>
                <?php _e('A business toolbox to help people direct and manage business projects efficiently','sage'); ?>
            </div>
            <div class="two wide column"></div>
            <div class="three wide column footer-menu">
                <h4><?php _e('Menu','sage') ?></h4>
                <?php dynamic_sidebar('sidebar-footer'); ?>
            </div>
            <div class="three wide column footer-menu">
                <h4><?php _e('Contribute','sage') ?></h4>
                <?php dynamic_sidebar( 'sidebar-contribution' ); ?>
            </div>
            <div class="four wide column">
                <h4><?php _e('Contact','sage') ?></h4>
                <a href="mailto:info@sevinci.com">
                    <div class="ui circular youtube icon button">
                        <i class="mail icon"></i>
                    </div>
                </a>
                <?php foreach ($social_media as $social => $social_url): ?>
                    <?php if (!empty($social_url)): ?>
                        <a href="<?php echo $social_url; ?>" target="_blank">
                            <div class="ui circular <?php echo $social; ?> icon button">
                                <i class="<?php echo $social; ?> icon"></i>
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <br>
</footer>
