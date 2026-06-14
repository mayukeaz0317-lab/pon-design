<?php get_header(); ?>
<main class="l-content">

    <section class="p-fv">
        <div class="p-fv__title">
            <h1 class="p-fv__main-title">works</h1>
            <span class="p-fv__sub-title">制作実績</span>
        </div>
    </section>
    <nav class="p-breadcrumbs" aria-label="パンくずリスト">
        <div class="l-inner">
            <div class="p-breadcrumbs__inner">
                <ul class="p-breadcrumbs__list">
                    <li class="p-breadcrumbs__item"><a href="<?php echo esc_url(home_url('/')); ?>" class="p-breadcrumbs__link">home</a></li>
                    <li class="p-breadcrumbs__item" aria-current="page">company</li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="p-message l-section--lg">
        <div class="p-message__inner l-inner">
            <div class="p-message__concept u-mb-30">
                <h2 class="p-message__heading">メッセージ</h2>
                <p class="p-message__goal">サイトのゴール =<br class="u-sp-only"> 夢を叶えること</p>
                <p class="p-message__desc">
                    お客様の夢を叶えること。<br>それがWebサイトのゴールであり、<br class="u-sp-only">私たちが目指すことです。<br>だからこそちゃんと成果を出すサイトを<br
                        class="u-sp-only">全力でお作りします。<br>お客様の笑顔を見たい。<br>夢を実現する手助けをさせてください。
                </p>
            </div>
            <div class="p-message__ceo">
                <div class="p-message__ceo-img">
                    <img src="<?php echo esc_url(get_theme_file_uri('/img/photo/CEO.webp')); ?>" alt="代表取締役社長 猫山ポン太郎の近影" class="c-img" width="890" width="660"
                        decoding="async">
                </div>
                <div class="p-message__ceo-desc">
                    <p class="p-message__p">
                        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                    <p class="p-message__p">
                        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                    </p>
                    <p class="p-message__name">代表取締役社長　猫山ポン太郎</p>
                </div>
            </div>
        </div>
    </section>
    <section class="p-about l-section">
        <div class="p-about__inner l-inner">
            <h2 class="p-about__heading">会社概要</h2>
            <dl class="p-about__list">
                <div class="p-about__row">
                    <dt class="p-about__term">社名</dt>
                    <dd class="p-about__desc">株式会社PON DESIGN</dd>
                </div>

                <div class="p-about__row">
                    <dt class="p-about__term">設立</dt>
                    <dd class="p-about__desc">2025.02.10</dd>
                </div>

                <div class="p-about__row">
                    <dt class="p-about__term">代表取締役</dt>
                    <dd class="p-about__desc">猫山ポン太郎</dd>
                </div>

                <div class="p-about__row">
                    <dt class="p-about__term">資本金</dt>
                    <dd class="p-about__desc">1,000,000円</dd>
                </div>

                <div class="p-about__row">
                    <dt class="p-about__term">所在地</dt>
                    <dd class="p-about__desc">〒555-5555 東京都千代田区 ポンビルディング 606</dd>
                </div>
            </dl>
            <div class="p-about__map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25927.30867259536!2d139.71426475034525!3d35.67912975587722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f2ceaf77e009%3A0x95931fdff1b7bc7e!2z44Od44Oz44OH44K244Kk44Oz44Kq44OV44Kj44K5!5e0!3m2!1sja!2sjp!4v1780110434087!5m2!1sja!2sjp"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="c-img"></iframe>
            </div>
            <a href="https://maps.google.com/?q=〒555-5555 東京都千代田区 ポンビルディング 606" class="p-about__map-link">Google
                mapで見る</a>
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