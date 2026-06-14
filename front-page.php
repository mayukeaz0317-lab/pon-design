<?php get_header(); ?>
<main class="l-content">
    <section class="p-fv-home">
        <div class="p-fv-home__inner">
            <h2 class="p-fv-home__title">web design specialist</h2>
            <p class="p-fv-home__desc">お客様の夢を叶える<br class="u-sp-only">Webサイトを制作</p>
            <a class="p-fv-home__link c-btn" href="<?php echo esc_url(home_url('/contact/')); ?>">contact</a>
        </div>
        <span class="p-fv-home__scroll">scroll</span>
    </section>
    <section class="p-news l-section">
        <div class="p-news__inner l-inner">
            <div class="p-news__heading">
                <h2 class="c-title-primary">
                    news
                    <span class="c-title-primary__sub">お知らせ</span>
                </h2>
            </div>
            <ul class="p-news__list">
                <li class="p-news__item">
                    <a href="<?php echo esc_url(home_url('/news-detail/')); ?>" class="p-news__link">
                        <div class="p-news__meta">
                            <time datetime="2030-02-01" class="p-news__time">2030.02.01</time>
                            <span class="p-news__category">お知らせ</span>
                        </div>
                        <h3 class="p-news__title">Webデザインニュースサイト「ウェブマガジン」に取材いただきました</h3>
                    </a>
                </li>
                <li class="p-news__item">
                    <a href="<?php echo esc_url(home_url('/news-detail/')); ?>" class="p-news__link">
                        <div class="p-news__meta">
                            <time datetime="2030-02-01" class="p-news__time">2030.01.25</time>
                            <span class="p-news__category">制作実績</span>
                        </div>
                        <h3 class="p-news__title">Smoothiesta様のWebサイトを制作いたしました</h3>
                    </a>
                </li>
                <li class="p-news__item">
                    <a href="<?php echo esc_url(home_url('/news-detail/')); ?>" class="p-news__link">
                        <div class="p-news__meta">
                            <time datetime="2030-02-01" class="p-news__time">2030.01.20</time>
                            <span class="p-news__category">採用</span>
                        </div>
                        <h3 class="p-news__title">Smoothiesta様のWebサイトを制作いたしました</h3>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="p-service l-section">
        <div class="p-service__inner l-inner">
            <div class="p-service__heading">
                <h2 class="c-title-primary">
                    service
                    <span class="c-title-primary__sub">事業内容</span>
                </h2>
            </div>
            <ul class="p-service__list">
                <li class="p-service__item">
                    <div class="p-service__thumb">
                        <img class="c-img p-service__img" src="<?php echo esc_url(get_theme_file_uri('/img/photo/service01.jpg')); ?>"
                            alt="制作したWEBサイトが表示されたデスクトップパソコン" width="350" height="220" loading="lazy"
                            decoding="async">
                    </div>
                    <div class="p-service__body">
                        <h3 class="p-service__title">Webサイト制作</h3>
                        <p class="p-service__desc">新規サイトの制作はもちろんサイトリニューアルやランディングページの制作も可能です。</p>
                    </div>
                </li>
                <li class="p-service__item">
                    <div class="p-service__thumb">
                        <img class="c-img p-service__img" src="<?php echo esc_url(get_theme_file_uri('/img/photo/service02.jpg')); ?>" alt="アクセス解析のグラフやデータが表示された画面"
                            width="350" height="220" loading="lazy" decoding="async">
                    </div>
                    <div class="p-service__body">
                        <h3 class="p-service__title">Webサイト運用</h3>
                        <p class="p-service__desc">サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案をいたします。</p>
                    </div>
                </li>
                <li class="p-service__item">
                    <div class="p-service__thumb">
                        <img class="c-img p-service__img" src="<?php echo esc_url(get_theme_file_uri('/img/photo/service03.jpg')); ?>" alt="スマートフォンでアプリを操作している手元"
                            width="350" height="220" loading="lazy" decoding="async">
                    </div>
                    <div class="p-service__body">
                        <h3 class="p-service__title">アプリ開発</h3>
                        <p class="p-service__desc">スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。</p>
                    </div>
                </li>
            </ul>
            <div class=" u-mt-30">
                <a href="<?php echo esc_url(home_url('/service/')); ?>" class="c-btn">more</a>
            </div>
        </div>
    </section>
    <section class="p-works l-section">
        <div class="p-works__inner l-inner">
            <div class="p-works__slider-container">
                <div class="swiper p-works__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide p-works__slide">
                            <img src="<?php echo esc_url(get_theme_file_uri('/img/photo/works-slide01.jpg')); ?>" alt="スムージストというスムージー専門店のWebサイトのトップページ"
                                class="c-img p-works__img" width="750" height="510" loading="lazy" decoding="async">
                        </div>
                        <div class="swiper-slide p-works__slide">
                            <img src="<?php echo esc_url(get_theme_file_uri('/img/photo/works-slide02.jpg')); ?>"
                                alt="総柄のシャツを着用した女性モデルのビジュアルが大きく写る、ラミナというファッションブランド「LAMINA」のWEBサイトのトップページ画面"
                                class="c-img p-works__img" width="750" height="510" loading="lazy" decoding="async">
                        </div>
                        <div class="swiper-slide p-works__slide">
                            <img src="<?php echo esc_url(get_theme_file_uri('/img/photo/works-slide03.jpg')); ?>" alt="Web Conferenceというイベントの広告サイトの制作実績画面"
                                class="c-img p-works__img" width="750" height="510" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="swiper-button-prev p-works__arrow p-works__arrow--prev"></div>
                    <div class="swiper-button-next p-works__arrow p-works__arrow--next"></div>
                    <div class="swiper-pagination p-works__pagination"></div>
                </div>
            </div>
            <div class="p-works__content">
                <div class="p-works__content-inner">
                    <div class=" p-works__heading">
                        <h2 class="c-title-primary">
                            works
                            <span class="c-title-primary__sub">制作実績</span>
                        </h2>
                    </div>
                    <div class="p-works__body">
                        <p class="p-works__desc">様々なジャンルのWebサイト制作が可能です。ご購入やお申込み数の増加などを実現します！</p>
                        <div class=" u-mt-30">
                            <a href="<?php echo esc_url(home_url('/works/')); ?>" class="c-btn">more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-message l-section--lg">
        <div class="p-message__concept">
            <div class="p-message__inner l-inner--wide u-text-center">
                <div class="p-message__heading">
                    <h2 class="c-title-primary">company
                        <span class="c-title-primary__sub">私たちについて</span>
                    </h2>
                </div>
                <p class="p-message__goal">サイトのゴール =<br class="u-sp-only"> 夢を叶えること</p>
                <p class="p-message__desc">
                    お客様の夢を叶えること。<br>それがWebサイトのゴールであり、<br class="u-sp-only">私たちが目指すことです。<br>だからこそちゃんと成果を出すサイトを<br
                        class="u-sp-only">全力でお作りします。<br>お客様の笑顔を見たい。<br>夢を実現する手助けをさせてください。
                </p>
                <div class=" u-mt-30">
                    <a href="<?php echo esc_url(home_url('/company/')); ?>" class="c-btn">more</a>
                </div>
            </div>
        </div>
    </section>
    <section class="p-recruit l-section">
        <div class="p-recruit__inner l-inner">
            <div class="p-recruit__thumb">
                <img src="<?php echo esc_url(get_theme_file_uri('/img/photo/recruit.jpg')); ?>" alt="二人の女性がホワイトボードに書かれているものを見ながら話し合っている" class="c-img" width="345"
                    height="200" loading="lazy" decoding="async">
            </div>
            <div class="p-recruit__content">
                <div class="p-recruit__heading">
                    <h2 class="c-title-primary">
                        recruit
                        <span class="c-title-primary__sub">採用情報</span>
                    </h2>
                </div>
                <p class="p-recruit__desc">私たちと一緒に働きませんか？</p>
                <div class=" u-mt-30">
                    <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="c-btn">more</a>
                </div>
            </div>
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
            <div class="u-mt-30">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c-btn">more</a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>