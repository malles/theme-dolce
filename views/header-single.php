<div<?= $params['header_sticky'] ? ' data-uk-sticky="media: 768"' : '' ?>>
    <div class="g2a-header uk-flex uk-flex-wrap uk-flex-space-around">
        <div class="tm-toolbar uk-width-large-2-4 uk-width-xlarge-3-5 uk-flex uk-flex-middle uk-flex-center">
            <?php if ($view->menu()->exists('toolbar')) : ?>
                <div class="uk-margin-right">
                    <?= $view->menu('toolbar', 'menu-footer.php') ?>
                </div>
            <?php endif ?>

            <?= $view->position('toolbar', 'position-blank.php') ?>
        </div>
        <div class="uk-flex-order-first-large uk-width-1-3 uk-width-medium-1-4 uk-width-large-1-4 uk-width-xlarge-1-5">
            <div class="tm-logo-left">
                <a href="<?= $view->url()->get() ?>">
                    <?php if ($params['logo']) : ?>
                        <img class="uk-responsive-height" src="<?= $this->escape($params['logo']) ?>" alt="">
                    <?php else : ?>
                        <?= $params['title'] ?>
                    <?php endif ?>
                </a>
            </div>
        </div>
        <div class="uk-width-1-3 uk-width-medium-1-4 uk-width-large-1-4 uk-width-xlarge-1-5">
            <div class="tm-logo-right">
            <?php if ($params['logo_right']) : ?>
                <a href="<?= $view->url('@game2art/design/comic') ?>">
                    <img class="uk-responsive-height" src="<?= $this->escape($params['logo_right']) ?>" alt="">
                </a>
            <?php endif ?>
            </div>
        </div>

        <?php if ($view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
            <div class="uk-hidden-large">
                <a href="#offcanvas" class="uk-navbar-toggle" data-uk-offcanvas></a>
            </div>
        <?php endif ?>
        <nav class="uk-width-1-1">
            <?php if ($view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
                <div class="uk-margin-top uk-margin-bottom uk-flex uk-flex-center uk-position-relative<?php if ($params['dropdown_overlay']) echo ' tm-navbar-overlay-true'; ?> uk-visible-large"<?php if ($params['dropdown_overlay']) echo ' data-uk-dropdown-overlay="{cls: \'tm-dropdown-overlay\'}"'; ?>>
                    <?= $view->menu('main', 'menu-navbar.php') ?>
                    <?= $view->position('navbar', 'position-blank.php') ?>
                </div>
            <?php endif ?>

            <?php if ($view->position()->exists('header-social')  || $view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
                <div class="tm-headerbar-right uk-flex uk-flex-middle">

                    <?php if ($view->position()->exists('header_social')) : ?>
                        <div class="tm-header-social uk-hidden-small">
                            <div data-uk-dropdown="{mode:'click', pos:'left-center'}">
                                <button class="tm-headerbar-button tm-header-social-button"></button>
                                <div class="uk-dropdown-blank tm-headerbar-dropdown">
                                    <?= $view->position('header_social', 'position-blank.php') ?>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>

                </div>
            <?php endif ?>

        </nav>

    </div>


</div>
