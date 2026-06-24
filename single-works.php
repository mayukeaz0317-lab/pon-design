<?php get_header(); ?>
<main class="l-content">
    <section class="p-fv">
        <div class="p-fv__title">
            <h1 class="p-fv__main-title">works</h1>
            <span class="p-fv__sub-title">制作実績</span>
        </div>
    </section>
    <?php get_template_part('breadcrumb'); ?>
    <<main class="l-main">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                $client   = get_field('works_client');
                $services = get_field('works_services');
                $price    = get_field('works_price');
                $period   = get_field('works_period');
                $detail   = get_field('works_detail');
        ?>
                <article class="p-works-detail">
                    <div class="l-inner p-works-detail__inner">
                        <header class="p-works-detail__header">
                            <h1 class="p-works-detail__title"><?php echo esc_html(get_the_title()); ?></h1>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="p-works-detail__thumb">
                                    <?php the_post_thumbnail('large', array('class' => 'c-img', 'decoding' => 'async')); ?>
                                </div>
                            <?php endif; ?>
                        </header>

                        <div class="p-works-detail__body">
                            <table class="p-works-detail__table">
                                <?php if (!empty($client)) : ?>
                                    <tr class="p-works-detail__row">
                                        <th class="p-works-detail__heading">クライアント名</th>
                                        <td class="p-works-detail__data"><?php echo esc_html($client); ?>様</td>
                                    </tr>
                                <?php endif; ?>

                                <?php if (!empty($services)) : ?>
                                    <tr class="p-works-detail__row">
                                        <th class="p-works-detail__heading">提供サービス</th>
                                        <td class="p-works-detail__data">
                                            <?php
                                            $safe_services = array_map('esc_html', $services);
                                            echo implode(' / ', $safe_services);
                                            ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>

                                <?php if (!empty($price)) : ?>
                                    <tr class="p-works-detail__row">
                                        <th class="p-works-detail__heading">制作費</th>
                                        <td class="p-works-detail__data">約<?php echo esc_html(number_format($price)); ?>円</td>
                                    </tr>
                                <?php endif; ?>

                                <?php if (!empty($period)) : ?>
                                    <tr class="p-works-detail__row">
                                        <th class="p-works-detail__heading">制作期間</th>
                                        <td class="p-works-detail__data"><?php echo esc_html($period); ?></td>
                                    </tr>
                                <?php endif; ?>
                            </table>

                            <?php if (!empty($detail)) : ?>
                                <div class="p-works-detail__point">
                                    <h2 class="p-works-detail__point-title">制作のポイント</h2>
                                    <p class="p-works-detail__point-desc"><?php echo nl2br(esc_html($detail)); ?></p>
                                </div>
                            <?php endif; ?>

                            <div class="p-entry-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </article>
        <?php
            endwhile;
        endif;
        ?>
</main>

<?php get_footer(); ?>