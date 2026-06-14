<?php if (function_exists('bcn_display_list')) : ?>
    <nav class="p-breadcrumbs" aria-label="パンくzenリスト">
        <div class="l-inner">
            <div class="p-breadcrumbs__inner">

                <ol class="p-breadcrumbs__list" vocab="https://schema.org/" typeof="BreadcrumbList">

                    <?php bcn_display_list(); ?>

                </ol>
            </div>
        </div>
    </nav>
<?php endif; ?>