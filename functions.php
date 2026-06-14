<?php

function my_theme_setup()
{

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'my_theme_setup');

function my_enqueue_scripts()
{

    // SwiperのCSSを読み込む
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        '11.0.0'
    );

    // 自作の style.css
    wp_enqueue_style(
        'my-style',
        get_stylesheet_uri(),
        array('swiper-css'), // swiper-cssの後に読み込む
        filemtime(get_theme_file_path('/style.css'))
    );

    // jQuery
    wp_enqueue_script('jquery');

    // SwiperのJSを読み込む
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        '11.0.0',
        true // フッターで読み込み
    );

    // 4. 自作のscript.js
    wp_enqueue_script(
        'my-script',
        get_theme_file_uri('/js/script.js'),
        array('jquery', 'swiper-js'),
        filemtime(get_theme_file_path('/js/script.js')),
        true
    );
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

function custom_wpcf7_form_elements_cleaner($content)
{
    $content = preg_replace('/<span class="wpcf7-form-control-wrap"([^>]*?)>/i', '', $content);
    $content = preg_replace('/<span class="wpcf7-form-control wpcf7-radio([^>]*?)">/i', '', $content);
    $content = preg_replace('/<span class="wpcf7-list-item([^>]*?)">/i', '', $content);
    $content = preg_replace('/<span class="wpcf7-list-item-label">([^<]*?)<\/span>/i', '$1', $content);
    $content = str_replace('</span>', '', $content);

    $content = preg_replace('/<label><input type="radio"([^>]*?)>([^<]*?)<\/label>/i', '<label class="p-contact__radio"><input type="radio"$1>$2</label>', $content);

    return $content;
}
add_filter('wpcf7_form_elements', 'custom_wpcf7_form_elements_cleaner');
