<main class="l-content">
    <?php get_header(); ?>
    <section class="p-fv">
        <div class="p-fv__title">
            <h1 class="p-fv__main-title">works</h1>
            <span class="p-fv__sub-title">制作実績</span>
        </div>
    </section>
    <?php get_template_part('breadcrumb'); ?>
    <section class="p-works-list l-section">
        <h2 class="u-visually-hidden">制作実績一覧</h2>
        <div class="p-works-list__inner l-inner">
            <?php
            $args = array(
                'post_type'      => 'works',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'DESC'
            );

            $works_query = new WP_Query($args);
            ?>

            <?php if ($works_query->have_posts()) : ?>
                <ul class="p-works-list__list">
                    <?php while ($works_query->have_posts()) : $works_query->the_post(); ?>
                        <li class="p-works-list__item">
                            <a href="<?php the_permalink(); ?>" class="p-works-list__link">
                                <figure class="p-works-list__thumb">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php
                                        the_post_thumbnail('medium_large', [
                                            'class'    => 'c-img',
                                            'decoding' => 'async'
                                        ]);
                                        ?>
                                    <?php else : ?>
                                        <img src="<?php echo esc_url(get_theme_file_uri('/img/photo/works-slide01.webp')); ?>" alt=""
                                            class="c-img" width="1500" height="1020" decoding="async">
                                    <?php endif; ?>
                                </figure>
                                <h3 class="p-works-list__title"><?php echo esc_html(get_the_title()); ?></h3>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>制作実績がありません。</p>
            <?php endif; ?>
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