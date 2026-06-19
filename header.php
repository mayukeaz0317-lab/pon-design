<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Web制作会社「pon design」の公式サイトです。お客様のビジネス課題を解決するホームページ制作、Webサイト設計、UI/UXデザイン、開発、運用まで幅広くサポート。最新の制作実績や採用情報も掲載しています。">
    <meta name="robots" content="noindex,nofollow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="p-header l-header">
        <div class="p-header__inner l-inner">
            <div class="p-header__content">
                <div class="p-header__logo">
                    <?php if (is_front_page()): ?>
                    <h1 class="p-header-logo">
                        <a class="p-header-logo__link" href="<?php echo esc_url(home_url('/')); ?>">
                            <img class="p-header-logo__img c-img" src="<?php echo esc_url(get_theme_file_uri('/img/icon/logo.svg')); ?>" alt="pon design">
                        </a>
                    </h1>
                    <?php else : ?>
                    <div class="p-header-logo">
                        <a class="p-header-logo__link" href="<?php echo esc_url(home_url('/')); ?>">
                            <img class="p-header-logo__img c-img" src="<?php echo esc_url(get_theme_file_uri('/img/icon/logo.svg')); ?>" alt="pon design">
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="p-header__nav-wrap">
                    <nav id="global-nav" class="p-header-nav" aria-label="グローバルナビゲーション">
                        <ul class="p-header-nav__list">
                            <li class="p-header-nav__item"><a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="p-header-nav__link">news</a>
                            </li>
                            <li class="p-header-nav__item"><a href="<?php echo esc_url(home_url('/service/')); ?>"
                                    class="p-header-nav__link">service</a></li>
                            <li class="p-header-nav__item"><a href="<?php echo esc_url(home_url('/works/')); ?>"
                                    class="p-header-nav__link">works</a></li>
                            <li class="p-header-nav__item"><a href="<?php echo esc_url(home_url('/company/')); ?>" class="p-header-nav__link">company</a>
                            </li>
                            <li class="p-header-nav__item"><a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="p-header-nav__link">recruit</a>
                            </li>
                            <li class="p-header-nav__item"><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="p-header-nav__link">contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <button type="button" class="c-btn-menu js-btn-menu" aria-label="メニューを開く" aria-expanded="false"
                    aria-controls="global-nav">
                    <span class="c-btn-menu__line"></span>
                </button>
            </div>
        </div>
    </header>