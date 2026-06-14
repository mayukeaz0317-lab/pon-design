<?php get_header(); ?>
<main class="l-content">
    <section class="p-fv">
        <div class="p-fv__title">
            <h1 class="p-fv__main-title">contact</h1>
            <span class="p-fv__sub-title">お問い合わせ</span>
        </div>
    </section>
    <?php get_template_part('breadcrumb'); ?>
    <section class="p-contact l-section">
        <div class="p-contact-inner l-inner--narrow">
            <h2 class="u-visually-hidden">お問い合わせフォーム</h2>
            <p class="p-contact__desc">Webサイトの制作のご依頼やお見積りなど、お気軽にご相談ください。</p>
            <?php echo do_shortcode('[contact-form-7 id="ea38861" title="コンタクトフォーム 1" html_class="p-contact__form"]'); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>