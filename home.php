<?php get_header(); ?>
<main class="l-content">
    <section class="p-fv">
        <div class="p-fv__title">
            <h1 class="p-fv__main-title">news</h1>
            <span class="p-fv__sub-title">お知らせ</span>
        </div>
    </section>
    <?php get_template_part('breadcrumb'); ?>
    <section class="p-news-list l-section">
        <h2 class="u-visually-hidden">ニュース一覧</h2>
        <div class="l-inner--narrow">
            <ul class="p-news__list">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <li class="p-news__item">
                            <a href="<?php the_permalink(); ?>" class="p-news__link">
                                <div class="p-news__meta">
                                    <!-- 日付の動的取得 -->
                                    <time datetime="<?php the_time('c'); ?>" class="p-news__time"><?php the_time('Y.m.d'); ?></time>
                                    <!-- カテゴリーを1つ取得して表示 -->
                                    <?php
                                    $cat = get_the_category();
                                    if (!empty($cat)) : ?>
                                        <span class="p-news__category"><?php echo esc_html($cat[0]->name); ?></span>
                                    <?php endif; ?>
                                </div>
                                <h3 class="p-news__title"><?php the_title(); ?></h3>
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>ニュースがありません。</p>
                <?php endif; ?>
            </ul>
            <nav class="p-pager" aria-label="ページナビゲーション">
                <ul class="p-pager__list">
                    <?php
                    // WordPressからページネーションの要素を「配列」として取得する
                    $pages = paginate_links(array(
                        'mid_size'  => 2,
                        'prev_next' => false,
                        'type'      => 'array', // 配列で受け取るのがミソ
                    ));

                    // ページがある場合だけループ処理する
                    if (is_array($pages)) {
                        foreach ($pages as $page) {
                            // 1. WordPress固有の「page-numbers」を「p-pager__number」に置換
                            $page = str_replace('page-numbers', 'p-pager__number', $page);

                            // 2. 現在のページの「current」を「is-current」に置換
                            $page = str_replace('current', 'is-current', $page);

                            // 3. 慶太さんのliタグで囲んで出力
                            echo '<li class="p-pager__item">' . $page . '</li>';
                        }
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </section>
    <section class="p-footer-contact l-section--lg">
        <div class="p-footer-contact__inner l-inner">
            <div class="p-footer-contact__heading">
                <h2 class="c-title-primary">
                    contact
                    <span class="c-title-primary__sub">お問い合わせ</span>
                </h2>
            </div>
            <p class="p-footer-contact__desc">Webサイトの制作のご依頼やお見積りなど、お気軽にご相談ください。</p>
            <div class=" u-mt-30">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c-btn">more</a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>