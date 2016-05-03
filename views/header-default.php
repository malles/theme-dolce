<div class="tm-headerbar tm-headerbar-default"<?= $params['header_sticky'] ? ' data-uk-sticky' : '' ?>>

    <div class="uk-container uk-container-center uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-flex-space-between">

            <?php if ($params['logo'] || $params['title']) : ?>
            <div class="uk-flex uk-flex-center">
                <a class="tm-logo uk-height-1-1 uk-navbar-brand" href="<?= $view->url()->get() ?>">
                    <?php if ($params['logo']) : ?>
                        <img class="tm-logo uk-responsive-height" src="<?= $this->escape($params['logo']) ?>" alt="">
                    <?php else : ?>
                        <?= $params['title'] ?>
                    <?php endif ?>
                </a>
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

                <?php if ($view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-visible-small">
                    <a href="#offcanvas" class="uk-navbar-toggle" data-uk-offcanvas></a>
                </div>
                <?php endif ?>

            </div>
            <?php endif ?>

        </div>
    </div>

    <?php if ($view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
    <div class="tm-navbar tm-navbar-default<?php if ($params['dropdown_overlay']) echo ' tm-navbar-overlay-true'; ?> uk-hidden-small">
        <nav class="uk-navbar uk-position-relative" <?php if ($params['dropdown_overlay']) echo ' data-uk-dropdown-overlay="{cls: \'tm-dropdown-overlay\'}"'; ?>>
            <div class="uk-container uk-container-center">
                <?= $view->menu('main', 'menu-navbar.php') ?>
                <?= $view->position('navbar', 'position-blank.php') ?>
            </div>
        </nav>
    </div>
    <?php endif ?>

</div>
