<?php get_header(); ?>
    <main class="l-content">
        <section class="p-fv">
            <div class="p-fv__title">
                <h1 class="p-fv__main-title">service</h1>
                <span class="p-fv__sub-title">事業内容</span>
            </div>
        </section>
        <nav class="p-breadcrumbs" aria-label="パンくずリスト">
            <div class="l-inner">
                <div class="p-breadcrumbs__inner">
                    <ul class="p-breadcrumbs__list">
                        <li class="p-breadcrumbs__item"><a href="<?php echo esc_url(home_url('/')); ?>" class="p-breadcrumbs__link">home</a></li>
                        <li class="p-breadcrumbs__item" aria-current="page">service</li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="p-service-list l-section">
            <h2 class="u-visually-hidden">事業内容一覧</h2>
            <div class="l-inner">
                <ul class="p-service-list__list">
                    <li class="p-service-list__item">
                        <div class="p-service-list__thumb">
                            <img src="<?php echo esc_url(get_theme_file_uri('/img/photo/service01.webp')); ?>" alt="制作したWEBサイトが表示されたデスクトップパソコン" class="c-img"
                                width="345" height="217" decoding="async">
                        </div>
                        <div class="p-service-list__content">
                            <h3 class="p-service-list__title">Webサイト制作</h3>
                            <p class="p-service-list__desc">
                                新規サイトはもちろん、サイトリニューアルやランディングページ制作も承っております。<br>
                                サイトのゴールはお客様の夢や目的を実現することです。そのためにまずはしっかりとお話をうかがい、サイトに必要な要素を洗い出します。その後、ワイヤーフレーム（サイトのレイアウト）の作成、デザインの制作、コーディングと進みます。制作の過程でお客様とのお打ち合わせを数回実施させていただき、ご要望とご意見を反映しながらサイトを制作していきます。
                            </p>
                        </div>
                    </li>
                    <li class="p-service-list__item">
                        <div class="p-service-list__thumb">
                            <img src="<?php echo esc_url(get_theme_file_uri('/img/photo/service02.webp')); ?>" alt="アクセス解析のグラフやデータが表示された画面" class="c-img" width="345"
                                height="217" decoding="async">
                        </div>
                        <div class="p-service-list__content">
                            <h3 class="p-service-list__title">Webサイト運用</h3>
                            <p class="p-service-list__desc">サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案が可能です。<br>
                                日々の面倒な更新作業は私たちにおまかせください。テキストの修正やリンクの張り替えなどの簡単な作業から、特集ページやバナーのデザインまで可能です。<br>
                                また、アクセス解析によるサイト改善も承っております。ご購入やお申込数などにお悩みでしたらぜひご相談ください。サイトの課題を発見し、改善案のご提案から実装までワンストップで対応いたします。
                            </p>
                        </div>
                    </li>
                    <li class="p-service-list__item">
                        <div class="p-service-list__thumb">
                            <img src="<?php echo esc_url(get_theme_file_uri('/img/photo/service03.webp')); ?>" alt="スマートフォンでアプリを操作している手元" class="c-img" width="345"
                                height="216" decoding="async">
                        </div>
                        <div class="p-service-list__content">
                            <h3 class="p-service-list__title">アプリ開発</h3>
                            <p class="p-service-list__desc">
                                スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。<br>開発力のみならず、充実したユーザー体験をもたらすためのUXデザインにも自信があります。作って終わり、ではなくユーザーに愛されるUI（ユーザーインターフェース）を実現し、アプリ開発によるお客様の事業の目的を達成する推進力となることを目指します。
                            </p>
                        </div>
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
