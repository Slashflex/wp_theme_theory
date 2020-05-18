<?php
function customScript()
{
    $customCss_url = get_theme_file_uri('style.css');
    $main_url = get_theme_file_uri('assets/css/main.css');
    $fontAwesome_url = get_theme_file_uri('assets/css/font-awesome.min.css');
    // Styles
    wp_enqueue_style('custom', esc_url($customCss_url));
    wp_enqueue_style('main', esc_url($main_url));
    wp_enqueue_style('font-awesome', esc_url($fontAwesome_url));

    $jquery_url = get_theme_file_uri('assets/js/jquery.min.js');
    $skel_url = get_theme_file_uri('assets/js/skel.min.js');
    $util_url = get_theme_file_uri('assets/js/util.js');
    // Scripts
    wp_enqueue_script('jquery-js', esc_url($jquery_url));
    wp_enqueue_script('skel', esc_url($skel_url));
    wp_enqueue_script('util', esc_url($util_url));
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js');
    wp_enqueue_script('popper-js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), null, true);
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'customScript');

function customSetup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menus([
        'main' => 'main menu'
    ]);
}
add_action('after_setup_theme', 'customSetup');
