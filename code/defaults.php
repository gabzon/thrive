<?php

function languages_list_footer(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
        echo '<div class="ui languages floating dropdown labeled icon link button">';
        echo '<i class="translate icon"></i>';
        echo '<span class="text">'. __('Languages','sage') .'</span>';
        echo '<div class="menu">';
        foreach($languages as $l){
            echo '<div class="item">';
            if(!$l['active']) echo '<a href="'.$l['url'].'">';
            echo icl_disp_language($l['native_name'], $l['translated_name']);
            if(!$l['active']) echo '</a>';
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
    }
}
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------



add_filter('piklist_admin_pages', 'piklist_theme_setting_pages');
function piklist_theme_setting_pages($pages)
{
    $pages[] = array(
        'page_title' => __('Custom Settings'),
        'menu_title' => __('Settings', 'piklist'),
        'sub_menu' => 'themes.php',
        'capability' => 'manage_options',
        'menu_slug' => 'custom_settings',
        'setting' => 'sevinci_settings',
        'menu_icon' => plugins_url('piklist/parts/img/piklist-icon.png'),
        'page_icon' => plugins_url('piklist/parts/img/piklist-page-icon-32.png'),
        'single_line' => true,
        'default_tab' => 'Basic',
        'save_text' => 'Save Settings',
    );

    return $pages;
}
