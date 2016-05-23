<!DOCTYPE html>
<html class="<?= $params['html_class'] ?>" lang="<?= $intl->getLocaleTag() ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
        <?php $view->style('theme', $params['style'] ? 'theme:css/theme.'.$params['style'].'.css' : 'theme:css/theme.css') ?>
        <?php $view->script('theme', 'theme:js/theme.js', ['uikit-sticky',  'uikit-lightbox',  'uikit-parallax', 'uikit-slider', 'uikit-grid']) ?>
    </head>

    <body <?= $params['classes.body'] ?>>

        <?php if ($params['frame']) : ?>
        <div class="tm-frame-top"></div>
        <div class="tm-frame-bottom"></div>
        <div class="tm-frame-right"></div>
        <div class="tm-frame-left"></div>
        <?php endif ?>

        <?= $params['frame'] ? '<div class="tm-page-frame">' : '' ?>

            <?php if ($params['logo'] || $view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
                <?= $view->position('navbar', 'header-'.$params['header_layout'].'.php') ?>
            <?php endif ?>

            <?php if ($view->position()->exists('hero')) : ?>
            <div id="tm-hero" class="tm-hero uk-block uk-block-large uk-cover-background uk-flex uk-flex-middle <?= $params['classes.hero'] ?>" <?= $params['hero_image'] ? "style=\"background-image: url('{$view->url($params['hero_image'])}');\"" : '' ?> <?= $params['classes.parallax'] ?>>
                <div class="uk-container uk-container-center">

                    <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                        <?= $view->position('hero', 'position-grid.php') ?>
                    </section>

                </div>
            </div>
            <?php endif ?>

            <?php if ($view->position()->exists('top')) : ?>
            <div id="tm-top" class="tm-top uk-block <?= $params['top_style'] ?>">
                <div class="uk-container uk-container-center">

                    <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                        <?= $view->position('top', 'position-grid.php') ?>
                    </section>

                </div>
            </div>
            <?php endif ?>

            <?php if ($view->position()->exists('top_b')) : ?>
            <div id="tm-top-b" class="tm-top-b uk-block <?= $params['top_b_style'] ?>">
                <div class="uk-container uk-container-center">

                    <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                        <?= $view->position('top_b', 'position-grid.php') ?>
                    </section>

                </div>
            </div>
            <?php endif ?>

            <?php if ($view->position()->exists('top_c')) : ?>
            <div id="tm-top-c" class="tm-top-c uk-block <?= $params['top_c_style'] ?>">
                <div class="uk-container uk-container-center">

                    <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                        <?= $view->position('top_c', 'position-grid.php') ?>
                    </section>

                </div>
            </div>
            <?php endif ?>

            <?php if ($view->position()->exists('top_d')) : ?>
            <div id="tm-top-d" class="tm-top-d uk-block <?= $params['top_d_style'] ?>">
                <div class="uk-container uk-container-center">

                    <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                        <?= $view->position('top_d', 'position-grid.php') ?>
                    </section>

                </div>
            </div>
            <?php endif ?>

            <div id="tm-main" class="tm-main uk-block <?= $params['main_style'] ?>">
                <div class="uk-container uk-container-center">

                    <div class="uk-grid" data-uk-grid-match data-uk-grid-margin>

                        <main class="<?= $view->position()->exists('sidebar') ? 'uk-width-medium-3-4' : 'uk-width-1-1'; ?>">
                            <?= $view->render('content') ?>
                        </main>

                        <?php if ($view->position()->exists('sidebar')) : ?>
                        <aside class="uk-width-medium-1-4 <?= $params['sidebar_first'] ? 'uk-flex-order-first-medium' : ''; ?>">
                            <?= $view->position('sidebar', 'position-panel.php') ?>
                        </aside>
                        <?php endif ?>

                    </div>

                </div>
            </div>

            <?php if ($view->position()->exists('bottom')) : ?>
            <div id="tm-bottom" class="tm-bottom uk-block <?= $params['bottom_style'] ?>">
                <div class="uk-container uk-container-center">

                    <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                        <?= $view->position('bottom', 'position-grid.php') ?>
                    </section>

                </div>
            </div>
            <?php endif ?>

            <?php if ($view->position()->exists('bottom_b')) : ?>
            <div id="tm-bottom-b" class="tm-bottom-b uk-block <?= $params['bottom_b_style'] ?>">
                <div class="uk-container uk-container-center">

                    <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                        <?= $view->position('bottom_b', 'position-grid.php') ?>
                    </section>

                </div>
            </div>
            <?php endif ?>

            <?php if ($view->position()->exists('bottom_c')) : ?>
            <div id="tm-bottom-c" class="tm-bottom-c uk-block <?= $params['bottom_c_style'] ?>">
                <div class="uk-container uk-container-center">

                    <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                        <?= $view->position('bottom_c', 'position-grid.php') ?>
                    </section>

                </div>
            </div>
            <?php endif ?>

            <?php if ($view->position()->exists('bottom_d')) : ?>
            <div id="tm-bottom-d" class="tm-bottom-d uk-block <?= $params['bottom_d_style'] ?>">
                <div class="uk-container uk-container-center">

                    <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                        <?= $view->position('bottom_d', 'position-grid.php') ?>
                    </section>

                </div>
            </div>
            <?php endif ?>

            <?php if ($view->position()->exists('bottom_offset') || $view->position()->exists('footer') || $view->position()->exists('footer_left')  || $view->position()->exists('footer_right') || $params['totop_scroller']) : ?>
            <div id="tm-footer" class="tm-block-footer uk-block <?= $params['footer_style'] ?>">

                <?php if ($view->position()->exists('bottom_offset')) : ?>
                <section class="tm-bottom-offset">
                    <div class="uk-container uk-container-center tm-container">
                        <?= $view->position('bottom_offset', 'position-panel.php') ?>
                    </div>
                </section>
                <?php endif ?>

                <?php if ($view->position()->exists('footer') || $view->position()->exists('footer_left')  || $view->position()->exists('footer_right') || $params['totop_scroller']) : ?>
                <div class="uk-container uk-container-center">

                    <?php if ($view->position()->exists('footer')) : ?>
                    <section class="tm-footer uk-grid uk-grid-match" data-uk-grid-margin>
                        <?= $view->position('footer', 'position-grid.php') ?>
                    </section>
                    <?php endif ?>

                    <?php if ($view->position()->exists('footer_left')  || $view->position()->exists('footer_right') || $params['totop_scroller']) : ?>
                    <footer id="tm-footer" class="tm-footer-meta uk-flex uk-flex-middle uk-width-1-1">

                        <?php if ($view->position()->exists('footer_left')) : ?>
                        <div class="tm-footer-left uk-flex uk-flex-middle">
                            <?= $view->position('footer_left', 'position-panel.php') ?>
                        </div>
                        <?php endif ?>

                        <?php if ($params['totop_scroller']) : ?>
                        <div class="tm-footer-center uk-flex uk-flex-middle uk-flex-center uk-width-1-1">
                            <a id="tm-anchor-bottom" class="tm-totop-scroller" data-uk-smooth-scroll href="#"></a>
                        </div>
                        <?php endif ?>

                        <?php if ($view->position()->exists('footer_right') || $view->menu()->exists('footer')) : ?>
                        <div class="tm-footer-right uk-flex uk-flex-middle">
                            <?= $view->position('footer_right', 'position-panel.php') ?>
                            <?php if ($view->menu()->exists('footer')) : ?>
                                <?= $view->menu('footer', 'menu-footer.php') ?>
                            <?php endif ?>
                        </div>
                        <?php endif ?>


                    </footer>
                    <?php endif ?>

                </div>
                <?php endif ?>

            </div>
            <?php endif ?>

            <?php if ($view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
            <div id="offcanvas" class="uk-offcanvas">
                <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">

                    <?php if ($params['logo_offcanvas']) : ?>
                    <div class="uk-panel uk-text-center">
                        <a href="<?= $view->url()->get() ?>">
                            <img src="<?= $this->escape($params['logo_offcanvas']) ?>" alt="">
                        </a>
                    </div>
                    <?php endif ?>

                    <?php if ($view->menu()->exists('offcanvas')) : ?>
                        <?= $view->menu('offcanvas', ['class' => 'uk-nav-offcanvas']) ?>
                    <?php endif ?>

                    <?php if ($view->position()->exists('offcanvas')) : ?>
                        <?= $view->position('offcanvas', 'position-panel.php') ?>
                    <?php endif ?>

                </div>
            </div>
            <?php endif ?>

            <?php if ($view->position()->exists('fixed_bar')) : ?>
            <div class="tm-fixed-bar uk-hidden-small">
                <?= $view->position('fixed_bar', 'position-blank.php') ?>
            </div>
            <?php endif ?>

            <?= $view->render('footer') ?>

        <?= $params['frame'] ? '</div>' : '' ?>

    </body>
</html>
