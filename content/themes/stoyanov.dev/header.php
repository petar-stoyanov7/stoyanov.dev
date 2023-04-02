<?php

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package Stoyanov.dev
 * @since Stoyanov.dev 0.0.1
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action('after_body'); ?>

<header class="ps-header">
    <div class="show-for-large ps-header__desktop">
        <?php headerNav(); ?>
        <button class="ps-header__desktop-search-toggle" data-toggle="ps-search">
        </button>
        <div class="ps-header__desktop-search" id="ps-search" data-toggler=".is-visible">
            <form
                    action="/"
                    method="get"
                    role="search"
                    id="mobile-search-form"
                    class="ps-header__desktop-search-form ps-header__search-form"
            >
                <input type="text" name="s" aria-label="Search" placeholder="Search the site...">
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="hide-for-large ps-header__mobile">
        <button class="ps-header__mobile-hamburger" data-toggle="ps-mobile-menu">
        </button>
        <button class="ps-header__mobile-searcher" data-toggle="ps-mobile-search">
        </button>
        <div class="ps-header__mobile-container" id="ps-mobile-menu" data-toggler=".is-visible">
            <?php mobileNav(); ?>
        </div>
        <div id="ps-mobile-search" class="ps-header__mobile-search-container" data-toggler=".is-visible">
            <form
                    action="/"
                    method="get"
                    role="search"
                    id="mobile-search-form"
                    class="ps-header__mobile-search ps-header__search-form"
            >
                <input type="text" name="s" aria-label="Search" placeholder="Search the site...">
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
</header>
