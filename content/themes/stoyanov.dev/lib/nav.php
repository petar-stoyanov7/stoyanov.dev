<?php
/**
 * Register Menus
 *
 * @package Pesticide
 * @since 0.0.1
 */

register_nav_menus(
    [
        'desktop-nav'   => esc_html__('Main Desktop Navigation', 'Pesticide'),
        'mobile-nav'    => esc_html__('Mobile Navigation', 'Pesticide'),
        'footer-nav'    => esc_html__('Footer Navigation', 'Pesticide'),
    ]
);

if (!function_exists('pest_desktop_nav')) {
    function pest_desktop_nav()
    {
        wp_nav_menu(
            [
                'container'         => false,
                'menu-class'        => 'pest-desktop-menu',
                'items_wrap'        => '<ul id="%1$s" class="%2$ds">%3$s</ul>',
                'theme_location'    => 'desktop-nav',
                'depth'             => 3
            ]
        );
    }
}

if (!function_exists('pest_mobile_nav')) {
    function pest_mobile_nav()
    {
        wp_nav_menu(
            [
                'container'         => false,
                'menu-class'        => 'pest-mobile-menu',
                'items_wrap'        => '<ul id="%1$s" class="%2$ds">%3$s</ul>',
                'theme_location'    => 'mobile-nav',
                'depth'             => 3
            ]
        );
    }
}

if (!function_exists('pest_footer_nav')) {
    function pest_footer_nav()
    {
        wp_nav_menu(
            [
                'container'         => false,
                'menu-class'        => 'pest-footer-menu',
                'items_wrap'        => '<ul id="%1$s" class="%2$ds">%3$s</ul>',
                'theme_location'    => 'footer-nav',
                'depth'             => 3
            ]
        );
    }
}