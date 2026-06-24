<?php
if (!class_exists('bcn_breadcrumb_trail')) {
    return;
}

$breadcrumb_trail = new bcn_breadcrumb_trail();

if (function_exists('pon_prepare_breadcrumb_trail')) {
    $breadcrumb_trail = pon_prepare_breadcrumb_trail($breadcrumb_trail);
}

$breadcrumb_trail->fill();
$breadcrumbs = $breadcrumb_trail->trail ?? [];

if (!is_array($breadcrumbs)) {
    $breadcrumbs = [];
}

$breadcrumbs = array_reverse($breadcrumbs);

/**
 * パンくずのURLを安全に取得
 */
function pon_get_breadcrumb_url($breadcrumb, $is_last = false)
{
    if ($is_last) {
        if (is_singular()) {
            $url = get_permalink();
            if ($url) {
                return $url;
            }
        }

        if (is_post_type_archive()) {
            $post_type = get_query_var('post_type');
            if ($post_type) {
                $url = get_post_type_archive_link($post_type);
                if ($url) {
                    return $url;
                }
            }
        }

        if (is_home()) {
            return home_url('/');
        }

        global $wp;
        return home_url(add_query_arg([], $wp->request));
    }

    if (is_object($breadcrumb) && method_exists($breadcrumb, 'get_url')) {
        $url = $breadcrumb->get_url();
        if (!empty($url)) {
            return $url;
        }
    }

    return '';
}

/**
 * パンくずのタイトルを安全に取得
 */
function pon_get_breadcrumb_title($breadcrumb)
{
    if (is_object($breadcrumb) && method_exists($breadcrumb, 'get_title')) {
        return wp_strip_all_tags($breadcrumb->get_title());
    }

    return '';
}

$items = [];

/**
 * 実績詳細ページ:
 * HOME > 制作実績 > タイトル
 */
if (is_singular('works')) {
    $archive_url = get_post_type_archive_link('works');

    $items[] = [
        'title'   => 'HOME',
        'url'     => home_url('/'),
        'is_last' => false,
    ];

    if ($archive_url) {
        $items[] = [
            'title'   => '制作実績',
            'url'     => $archive_url,
            'is_last' => false,
        ];
    }

    $items[] = [
        'title'   => get_the_title(),
        'url'     => get_permalink(),
        'is_last' => true,
    ];

/**
 * ニュース詳細ページ（通常投稿をニュースとして使っている想定）:
 * HOME > ニュース > タイトル
 */
} elseif (is_singular('post')) {
    $news_page_url = get_permalink(get_option('page_for_posts'));

    $items[] = [
        'title'   => 'HOME',
        'url'     => home_url('/'),
        'is_last' => false,
    ];

    if ($news_page_url) {
        $items[] = [
            'title'   => 'ニュース',
            'url'     => $news_page_url,
            'is_last' => false,
        ];
    }

    $items[] = [
        'title'   => get_the_title(),
        'url'     => get_permalink(),
        'is_last' => true,
    ];

/**
 * それ以外は Breadcrumb NavXT の結果を使う
 */
} else {
    foreach ($breadcrumbs as $index => $breadcrumb) {
        $is_last = ($index === array_key_last($breadcrumbs));

        $title = pon_get_breadcrumb_title($breadcrumb);
        if ($title === '') {
            continue;
        }

        $url = pon_get_breadcrumb_url($breadcrumb, $is_last);

        $items[] = [
            'title'   => $title,
            'url'     => $url,
            'is_last' => $is_last,
        ];
    }
}

if (empty($items)) {
    return;
}

/**
 * JSON-LD
 */
$json_items = [];

foreach ($items as $index => $item) {
    $json_row = [
        '@type'    => 'ListItem',
        'position' => $index + 1,
        'name'     => $item['title'],
    ];

    if (!empty($item['url'])) {
        $json_row['item'] = esc_url($item['url']);
    }

    $json_items[] = $json_row;
}

$json_data = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => $json_items,
];

echo '<script type="application/ld+json">' .
    wp_json_encode($json_data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) .
    '</script>';
?>

<nav class="p-breadcrumbs" aria-label="パンくずリスト">
    <div class="l-inner">
        <div class="p-breadcrumbs__inner">
            <ol class="p-breadcrumbs__list">
                <?php foreach ($items as $item) : ?>
                    <li class="p-breadcrumbs__item" <?php echo $item['is_last'] ? 'aria-current="page"' : ''; ?>>
                        <?php if (!$item['is_last'] && !empty($item['url'])) : ?>
                            <a href="<?php echo esc_url($item['url']); ?>" class="p-breadcrumbs__link">
                                <span><?php echo esc_html($item['title']); ?></span>
                            </a>
                        <?php else : ?>
                            <span><?php echo esc_html($item['title']); ?></span>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </div>
</nav>