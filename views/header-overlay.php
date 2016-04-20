<div class="tm-headerbar tm-headerbar-overlay">

    <div class="tm-logo-wrapper uk-hidden-small">
        <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1 uk-width-1-1">

            <a class="tm-logo uk-navbar-brand" href="<?= $view->url()->get() ?>">
            <?php if ($params['logo']) : ?>
                <img class="tm-logo uk-responsive-height" src="<?= $this->escape($params['logo']) ?>" alt="">
                <img class="tm-logo-contrast uk-responsive-height" src="<?= ($params['logo_contrast']) ? $this->escape($params['logo_contrast']) : $this->escape($params['logo']) ?>" alt="">
            <?php else : ?>
                <?= $params['title'] ?>
            <?php endif ?>
            </a>

        </div>
    </div>

    <?php if ($view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
    <div class="tm-navbar tm-navbar-centered<?php if ($params['dropdown_overlay']) echo ' tm-navbar-overlay-true'; ?> uk-hidden-small">
        <nav class="uk-navbar uk-position-relative"<?php if ($params['dropdown_overlay']) echo ' data-uk-dropdown-overlay="{cls: \'tm-dropdown-overlay\'}"'; ?>>
            <div class="uk-flex uk-flex-center">
                <?= $view->menu('main', 'menu-navbar.php') ?>
                <?= $view->position('navbar', 'position-blank.php') ?>
            </div>
        </nav>
    </div>
    <?php endif ?>

    <?php if ($view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
    <div class="uk-flex uk-flex-center uk-flex-middle uk-visible-small">
        <a href="#offcanvas" class="uk-navbar-toggle" data-uk-offcanvas></a>
    </div>
    <?php endif ?>

</div>
