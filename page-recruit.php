<?php get_header(); ?>
    <main class="l-content">
        <section class="p-fv">
            <div class="p-fv__title">
                <h1 class="p-fv__main-title">recruit</h1>
                <span class="p-fv__sub-title">採用情報</span>
            </div>
        </section>
        <nav class="p-breadcrumbs" aria-label="パンくずリスト">
            <div class="l-inner">
                <div class="p-breadcrumbs__inner">
                    <ul class="p-breadcrumbs__list">
                        <li class="p-breadcrumbs__item"><a href="<?php echo esc_url(home_url('/')); ?>" class="p-breadcrumbs__link">home</a></li>
                        <li class="p-breadcrumbs__item" aria-current="page">recruit</li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="p-recruit-concept">
            <div class="p-recruit-concept__inner l-inner">
                <h2 class="p-recruit-concept__heading">Enjoy <br class="u-sp-only">Creation for <br
                        class="u-sp-only">Client</h2>
                <p class="p-recruit-concept__sub-heading">楽しむ心が良いモノを生む</p>
                <p class="p-recruit-concept__desc">心を弾ましながら<br>夢いっぱいのサイトを作ろう！<br>お客様も自分もみんなが幸せになれるように</p>
            </div>
            <div class="p-recruit-concept__img-wrap">
                <img src="<?php echo esc_url(get_theme_file_uri('/img/photo/recruit-concept.webp')); ?>" alt="笑顔で談笑する3人の社員" class="c-img" width="2880" height="1649"
                    decoding="async">
            </div>
        </section>
        <section class="p-recruit-job l-section">
            <div class="p-recruit-job__inner l-inner">
                <h2 class="p-recruit-job__heading">募集中の職種</h2>
                <div class="p-recruit-job__content">
                    <h3 class="p-recruit-job__job-title">Webデザイナー</h3>
                    <dl class="p-recruit-job__list">
                        <div class="p-recruit-job__row">
                            <dt class="p-recruit-job__term">雇用形態</dt>
                            <dd class="p-recruit-job__desc">正社員</dd>
                        </div>
                        <div class="p-recruit-job__row">
                            <dt class="p-recruit-job__term">給与</dt>
                            <dd class="p-recruit-job__desc">400万円〜600万円（経験・能力を考慮のうえ優遇）</dd>
                        </div>
                        <div class="p-recruit-job__row">
                            <dt class="p-recruit-job__term">仕事内容</dt>
                            <dd class="p-recruit-job__desc">Webサイトの制作。サイトのデザインとコーディングを担当していただきます。</dd>
                        </div>
                        <div class="p-recruit-job__row">
                            <dt class="p-recruit-job__term">勤務時間</dt>
                            <dd class="p-recruit-job__desc">10:00 〜 19:00（実働8時間、休憩1時間）</dd>
                        </div>
                        <div class="p-recruit-job__row">
                            <dt class="p-recruit-job__term">応募資格</dt>
                            <dd class="p-recruit-job__desc">
                                <p class="p-recruit-job__lead">
                                    PhotoshopやXDなどのデザインツールの使い方を理解し、コーディングの基礎スキルがある方。実務未経験でも学校や独学で学習した方を歓迎します。</p>

                                <ul class="p-recruit-job__requirements">
                                    <li class="p-recruit-job__requirement">デザインやコーディングを楽しめる方</li>
                                    <li class="p-recruit-job__requirement">常にアンテナを張って積極的にトレンドや最新の技術を取り入れる方</li>
                                    <li class="p-recruit-job__requirement">お客様と一緒に楽しみながら高い目標を目指せる方</li>
                                </ul>
                            </dd>
                        </div>
                    </dl>
                    <div class="u-mt-40">
                        <a href="#" class="c-btn">応募する</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-company-movie l-section">
            <div class="p-company-movie__inner l-inner">
                <h2 class="p-company-movie__heading">社内ムービー</h2>
                <div class="p-company-movie__video-wrap">
                    <video class="c-video" controls preload="metadata" playsinline
                        poster="<?php echo esc_url(get_theme_file_uri('/img/photo/office-thumb.webp')); ?>" width="1280" height="720">
                        <source src="<?php echo esc_url(get_theme_file_uri('/video/office.mp4')); ?>" type="video/mp4">
                        お使いのブラウザは動画再生に対応しておりません。
                    </video>
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
                <div class=" u-mt-30">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c-btn">more</a>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
