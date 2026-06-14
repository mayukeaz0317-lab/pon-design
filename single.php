<?php get_header(); ?>
<main class="l-content">
    <section class="p-fv">
        <div class="p-fv__title">
            <div class="p-fv__main-title">news</div>
            <span class="p-fv__sub-title">お知らせ</span>
        </div>
    </section>
    <nav class="p-breadcrumbs" aria-label="パンくずリスト">
        <div class="l-inner">
            <div class="p-breadcrumbs__inner">
                <ul class="p-breadcrumbs__list">
                    <li class="p-breadcrumbs__item"><a href="<?php echo esc_url(home_url('/')); ?>" class="p-breadcrumbs__link">home</a></li>
                    <li class="p-breadcrumbs__item"><a href="<?php echo esc_url(home_url('/news-detail/')); ?>" class="p-breadcrumbs__link">news</a>
                    </li>
                    <li class="p-breadcrumbs__item" aria-current="page">Webデザインニュースサイト「ウェブマガジン」に取材いただきました</li>
                </ul>
            </div>
        </div>
    </nav>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="p-post l-section">
                <div class="l-inner p-post__inner">
                    <header class="p-post__header">
                        <h1 class="p-post__title"><?php the_title(); ?></h1>
                        <div class="p-post__meta">
                            <time datetime="<?php the_time('c'); ?>" class="p-post__time"><?php the_time('Y.m.d'); ?></time>

                            <?php
                            $cat = get_the_category();
                            if (!empty($cat)) : ?>
                                <span class="p-post__category"><?php echo esc_html($cat[0]->name); ?></span>
                            <?php endif; ?>
                        </div>
                        <figure class="p-post__thumb">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>"
                                    class="p-post__img c-img" width="345" height="184" decoding="async" fetchpriority="high">
                            <?php else : ?>
                                <img src="<?php echo esc_url(get_theme_file_uri('/img/photo/news_article.jpg')); ?>" alt=""
                                    class="p-post__img c-img" width="345" height="184" decoding="async" fetchpriority="high">
                            <?php endif; ?>
                        </figure>
                    </header>
                    <div class="p-post__body">
                        <?php the_content(); ?>
                    </div>
                    <nav class="p-share" aria-label="SNSシェア">
                        <ul class="p-share__list">
                            <!-- Facebook -->
                            <li class="p-share__item">
                                <a href="#" class="p-share__link p-share__link--facebook js-share" data-share="facebook"
                                    target="_blank" rel="noopener noreferrer" aria-label="Facebookでシェア">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/img/icon/facebook.svg')); ?>" alt="" class="p-share__icon p-share__icon--facebook"
                                        width="20" height="20">

                                    <span class="p-share__text">
                                        シェアする
                                    </span>
                                </a>
                            </li>

                            <!-- X -->
                            <li class="p-share__item">
                                <a href="#" class="p-share__link p-share__link--x js-share" data-share="x" target="_blank"
                                    rel="noopener noreferrer" aria-label="Xでポスト">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/img/icon/x.svg')); ?>" alt="" class="p-share__icon p-share__icon--x" width="18"
                                        height="18">

                                    <span class="p-share__text">
                                        ポスト
                                    </span>
                                </a>
                            </li>

                            <!-- Hatena -->
                            <li class="p-share__item">
                                <a href="#" class="p-share__link p-share__link--hatena js-share" data-share="hatena"
                                    target="_blank" rel="noopener noreferrer" aria-label="はてなブックマークに追加">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/img/icon/hatenabook.svg')); ?>" alt="" class="p-share__icon p-share__icon--hatena"
                                        width="24" height="24">

                                    <span class="p-share__text">
                                        ブックマーク
                                    </span>
                                </a>
                            </li>

                            <!-- LINE -->
                            <li class="p-share__item">
                                <a href="#" class="p-share__link p-share__link--line js-share" data-share="line"
                                    target="_blank" rel="noopener noreferrer" aria-label="LINEでシェア">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/img/icon/line.svg')); ?>" alt="" class="p-share__icon p-share__icon--line" width="24"
                                        height="23">

                                    <span class="p-share__text p-share__text--line">
                                        LINE
                                    </span>
                                </a>
                            </li>

                        </ul>
                    </nav>
                    <nav class="p-post-nav" aria-label="記事ナビゲーション">
                        <ul class="p-post-nav__list">
                            <?php
                            $prev_post = get_previous_post();
                            if (!empty($prev_post)) : ?>
                                <li class="p-post-nav__item">
                                    <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="p-post-nav__link">
                                        <?php echo esc_html($prev_post->post_title); ?>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php
                            $next_post = get_next_post();
                            if (!empty($next_post)) : ?>
                                <li class="p-post-nav__item">
                                    <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="p-post-nav__link">
                                        <?php echo esc_html($next_post->post_title); ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="p-post__back-link">NEWS一覧</a>
                </div>
            </article>
    <?php endwhile;
    endif; ?>
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