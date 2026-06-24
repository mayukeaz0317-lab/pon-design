<?php

function my_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');


function my_enqueue_scripts()
{
    // SwiperのCSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        '11.0.0'
    );

    // style.css
    wp_enqueue_style(
        'my-style',
        get_stylesheet_uri(),
        array('swiper-css'),
        filemtime(get_theme_file_path('/style.css'))
    );

    // jQuery
    wp_enqueue_script('jquery');

    // SwiperのJS
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        '11.0.0',
        true
    );

    // script.js
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

    $content = preg_replace(
        '/<label><input type="radio"([^>]*?)>([^<]*?)<\/label>/i',
        '<label class="p-contact__radio"><input type="radio"$1>$2</label>',
        $content
    );

    return $content;
}
add_filter('wpcf7_form_elements', 'custom_wpcf7_form_elements_cleaner');


/**
 * カスタム投稿タイプ：works
 */
function create_custom_post_type()
{
    $labels = array(
        'name'                  => '実績',
        'singular_name'         => '実績',
        'menu_name'             => '実績',
        'name_admin_bar'        => '実績',
        'add_new'               => '新規追加',
        'add_new_item'          => '実績を追加',
        'edit_item'             => '実績を編集',
        'new_item'              => '新しい実績',
        'view_item'             => '実績を表示',
        'view_items'            => '実績一覧を表示',
        'search_items'          => '実績を検索',
        'not_found'             => '実績が見つかりません',
        'not_found_in_trash'    => 'ゴミ箱に実績はありません',
        'all_items'             => '実績一覧',
        'archives'              => '実績アーカイブ',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'works', 'with_front' => false),
        'capability_type'       => 'post',
        'has_archive'           => 'works',
        'hierarchical'          => false,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-portfolio',
        'supports'              => array('title', 'editor', 'thumbnail'),
        'show_in_rest'          => true,
        'exclude_from_search'   => false,
    );

    register_post_type('works', $args);
}
add_action('init', 'create_custom_post_type', 10);

/**
 * Breadcrumb NavXT のカスタム投稿タイプ works 用オプションを補完
 *
 * 背景:
 * bcn_options には works 用設定が保存されているのに、
 * bcn_breadcrumb_trail 実行時の $breadcrumb_trail->opt に works 系キーが入らないことがある。
 *
 * そのため、パンくず描画前に bcn_options から works 関連キーだけを
 * trail オブジェクトへ注入するための関数。
 */
function pon_prepare_breadcrumb_trail($breadcrumb_trail)
{
    if (
        !is_object($breadcrumb_trail) ||
        !property_exists($breadcrumb_trail, 'opt') ||
        !is_array($breadcrumb_trail->opt)
    ) {
        return $breadcrumb_trail;
    }

    $stored_bcn_options = get_option('bcn_options');

    if (!is_array($stored_bcn_options)) {
        $stored_bcn_options = [];
    }

    /**
     * まず DB に保存されている works 関連キーを opt に注入
     */
    foreach ($stored_bcn_options as $key => $value) {
        if (stripos($key, 'works') !== false) {
            $breadcrumb_trail->opt[$key] = $value;
        }
    }

    /**
     * それでも bcn_options 側に存在しない works キーがあるので、
     * 投稿(post)用の構成に合わせて不足分だけデフォルト補完
     */
    $works_defaults = [
        // 表示関連
        'bpost_works_archive_display'         => true,
        'bpost_works_hierarchy_display'       => true,
        'bpost_works_hierarchy_parent_first'  => false,
        'bpost_works_taxonomy_referer'        => false,

        // 階層タイプ
        'Epost_works_hierarchy_type'          => 'BCN_DATE',

        // ルート
        'apost_works_root'                    => 0,

        // テンプレート
        'Hpost_works_template'                => '%htitle%',
        'Hpost_works_template_no_anchor'      => '%htitle%',
    ];

    foreach ($works_defaults as $key => $value) {
        if (!array_key_exists($key, $breadcrumb_trail->opt)) {
            $breadcrumb_trail->opt[$key] = $value;
        }
    }

    return $breadcrumb_trail;
}
