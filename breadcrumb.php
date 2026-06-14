<?php
if (class_exists('bcn_breadcrumb_trail')) {
    $breadcrumb_trail = new bcn_breadcrumb_trail();
    $breadcrumb_trail->fill();
    $breadcrumbs = $breadcrumb_trail->breadcrumbs;

    if (! empty($breadcrumbs)) {
        $breadcrumbs = array_reverse($breadcrumbs);

        // --- ① Googleに認識させるためのデータをバックエンドで組み立てる ---
        $json_items = [];
        $position = 1;
        foreach ($breadcrumbs as $index => $breadcrumb) {
            $is_last = ($index === array_key_last($breadcrumbs));
            $url = $is_last ? (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] : $breadcrumb->get_url();

            $json_items[] = [
                "@type" => "ListItem",
                "position" => $position,
                "name" => $breadcrumb->get_title(),
                "item" => esc_url($url)
            ];
            $position++;
        }

        $json_data = [
            "@context" => "https://schema.org",
            "@type" => "BreadcrumbList",
            "itemListElement" => $json_items
        ];

        // --- ② Google専用の構造化データを画面の見えないところに出力 ---
        echo '<script type="application/ld+json">' . json_encode($json_data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
?>

        <nav class="p-breadcrumbs" aria-label="パンくずリスト">
            <div class="l-inner">
                <div class="p-breadcrumbs__inner">
                    <ol class="p-breadcrumbs__list">
                        <?php
                        foreach ($breadcrumbs as $index => $breadcrumb) {
                            $is_last = ($index === array_key_last($breadcrumbs));
                            $url = $is_last ? (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] : $breadcrumb->get_url();
                            $title = esc_html($breadcrumb->get_title());
                        ?>

                            <li class="p-breadcrumbs__item" <?php echo $is_last ? 'aria-current="page"' : ''; ?>>
                                <?php if (! $is_last) : ?>
                                    <a href="<?php echo esc_url($url); ?>" class="p-breadcrumbs__link">
                                        <span><?php echo $title; ?></span>
                                    </a>
                                <?php else : ?>
                                    <span><?php echo $title; ?></span>
                                <?php endif; ?>
                            </li>

                        <?php
                        }
                        ?>
                    </ol>
                </div>
            </div>
        </nav>
<?php
    }
}
