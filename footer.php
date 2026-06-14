    <footer class="p-footer l-footer">
        <div class="p-footer__inner l-inner">
            <nav class="p-footer-nav" aria-label="フッターナビゲーション">
                <ul class="p-footer-nav__list">
                    <li class="p-footer-nav__item"><a href="<?php echo esc_url(home_url('/')); ?>" class="p-footer-nav__link">home</a></li>
                    <li class="p-footer-nav__item"><a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="p-footer-nav__link">news</a></li>
                    <li class="p-footer-nav__item"><a href="<?php echo esc_url(home_url('/service/')); ?>" class="p-footer-nav__link">service</a>
                    </li>
                    <li class="p-footer-nav__item"><a href="<?php echo esc_url(home_url('/works/')); ?>" class="p-footer-nav__link">works</a>
                    </li>
                    <li class="p-footer-nav__item"><a href="<?php echo esc_url(home_url('/company/')); ?>" class="p-footer-nav__link">company</a>
                    </li>
                    <li class="p-footer-nav__item"><a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="p-footer-nav__link">recruit</a>
                    </li>
                    <li class="p-footer-nav__item"><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="p-footer-nav__link">contact</a>
                    </li>
                </ul>
            </nav>
            <small class="p-footer__copyright">&copy;pon design</small>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <button type="button" class="c-btn-top js-btn-top" aria-label="ページトップへ戻る">
    </button>
</body>

</html>