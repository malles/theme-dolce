<?= $params['header_sticky'] ? '<div data-uk-sticky>' : '' ?>

<div class="tm-headerbar tm-headerbar-center">

    <?php if ($view->position()->exists('header_info')) : ?>
    <div class="tm-headerbar-left uk-flex uk-flex-middle uk-hidden-small">
        <?= $view->position('header_info', 'position-blank.php') ?>
    </div>
    <?php endif ?>

    <div class="uk-flex uk-flex-center">
        <a class="tm-logo uk-height-1-1 uk-navbar-brand uk-hidden-small" href="<?= $view->url()->get() ?>">
        <?php if ($params['logo']) : ?>
            <img class="tm-logo uk-responsive-height" src="<?= $this->escape($params['logo']) ?>" alt="">
            <img class="tm-logo-contrast uk-responsive-height" src="<?= ($params['logo_contrast']) ? $this->escape($params['logo_contrast']) : $this->escape($params['logo']) ?>" alt="">
        <?php else : ?>
            <?= $params['title'] ?>
        <?php endif ?>
        </a>
    </div>

    <div class="tm-headerbar-right uk-flex uk-flex-middle">

        <?php if ($view->position()->exists('header_social')) : ?>
        <div class="tm-more uk-hidden-small">
           <div data-uk-dropdown="{mode:'click', pos:'left-center'}">
               <button class="tm-headerbar-button tm-more-button"></button>
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

</div>

<?php if ($view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
<div class="tm-navbar tm-navbar-centered<?php if ($params['dropdown_overlay']) echo ' tm-navbar-overlay-true'; ?> uk-hidden-small>">
    <nav class="uk-navbar uk-position-relative" <?php if ($params['dropdown_overlay']) echo ' data-uk-dropdown-overlay="{cls: \'tm-dropdown-overlay\'}"'; ?>>
        <div class="uk-flex uk-flex-center">
            <?= $view->menu('main', 'menu-navbar.php') ?>
            <?= $view->position('navbar', 'position-blank.php') ?>
        </div>
    </nav>
</div>
<?php endif ?>

<?= $params['header_sticky'] ? '</div>' : '' ?>
