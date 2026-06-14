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
            <ul class="p-works-list__list">
                <li class="p-works-list__item">
                    <div class="p-works-list__thumb">
                        <img src="<?php echo esc_url(get_theme_file_uri('/img/photo/works-slide01.webp')); ?>" alt="スムージストというスムージー専門店のWebサイトのトップページ" class="c-img" width="1500" height="1020" decoding="async">
                    </div>
                    <h3 class="p-works-list__title">Smoothiesta 様</h3>
                </li>
                <li class="p-works-list__item">
                    <div class="p-works-list__thumb">
                        <img src="<?php echo esc_url(get_theme_file_uri('/img/photo/works-slide02.webp')); ?>" alt="総柄のシャツを着用した女性モデルのビジュアルが大きく写る、ラミナというファッションブランド「LAMINA」のWEBサイトのトップページ画面" class="c-img" width="1500" height="1020" decoding="async">
                    </div>
                    <h3 class="p-works-list__title">Web Conference 様</h3>
                </li>
                <li class="p-works-list__item">
                    <div class="p-works-list__thumb">
                        <img src="<?php echo esc_url(get_theme_file_uri('/img/photo/works-slide03.webp')); ?>" alt="Web Conferenceというイベントの広告サイトの制作実績画面" class="c-img" width="1500" height="1020" decoding="async">
                    </div>
                    <h3 class="p-works-list__title">LAMINA 様</h3>
                </li>
                <li class="p-works-list__item">
                    <div class="p-works-list__thumb">
                        <img src="<?php echo esc_url(get_theme_file_uri('/img/photo/works-slide04.webp')); ?>" alt="Web Conferenceというイベントの広告サイトの制作実績画面" class="c-img" width="700" height="476" decoding="async">
                    </div>
                    <h3 class="p-works-list__title">CITYLab 様</h3>
                </li>
                <li class="p-works-list__item">
                    <div class="p-works-list__thumb">
                        <img src="<?php echo esc_url(get_theme_file_uri('/img/photo/works-slide05.webp')); ?>" alt="Web Conferenceというイベントの広告サイトの制作実績画面" class="c-img" width="700" height="476" decoding="async">
                    </div>
                    <h3 class="p-works-list__title">TABILOG 様</h3>
                </li>
            </ul>
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