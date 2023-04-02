<?php

/**
 * Register Menus
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 * @package ps
 * @since ps 1.0.0
 */

register_nav_menus(
    array(
        'top-bar-r'  => esc_html__('Right Top Bar', 'ps'),
        'footer-nav'  => esc_html__('Footer', 'ps'),
        'mobile-nav' => esc_html__('Mobile', 'ps'),
    )
);


/**
 * Desktop navigation - right top bar
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
function headerNav()
{
    wp_nav_menu(
        array(
            'container'      => false,
            'menu_class'     => 'dropdown menu ps-header__desktop-menu',
            'items_wrap'     => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
            'theme_location' => 'top-bar-r',
            'depth'          => 3,
            'fallback_cb'    => false,
            'walker'         => new ps_Top_Bar_Walker(),
        )
    );
}

/**
 * Mobile navigation - topbar (default) or offcanvas
 */
function mobileNav()
{
    wp_nav_menu(
        array(
            'container'      => false,                         // Remove nav container
            'menu'           => __('mobile-nav', 'ps'),
            'menu_class'     => 'vertical menu ps-header__mobile-menu',
            'theme_location' => 'mobile-nav',
            'items_wrap'     => '<ul id="%1$s" class="%2$s" data-accordion-menu data-submenu-toggle="true">%3$s</ul>',
            'fallback_cb'    => false,
            'walker'         => new ps_Mobile_Walker(),
        )
    );
}

/**
 * Desktop navigation - right top bar
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
function ps_footer_nav()
{
    wp_nav_menu(
        array(
            'container'      => false,
            'menu_class'     => 'dropdown menu desktop-menu',
            'items_wrap'     => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
            'theme_location' => 'footer-nav',
            'depth'          => 1,
            'fallback_cb'    => false,
            'walker'         => new ps_Top_Bar_Walker(),
        )
    );
}



/**
 * Add support for buttons in the top-bar menu:
 * 1) In WordPress admin, go to Apperance -> Menus.
 * 2) Click 'Screen Options' from the top panel and enable 'CSS CLasses' and 'Link Relationship (XFN)'
 * 3) On your menu item, type 'has-form' in the CSS-classes field. Type 'button' in the XFN field
 * 4) Save Menu. Your menu item will now appear as a button in your top-menu
 */
if (!function_exists('ps_add_menuclass')) {
    function ps_add_menuclass($ulclass)
    {
        $find    = array('/<a rel="button"/', '/<a title=".*?" rel="button"/');
        $replace = array('<a rel="button" class="button"', '<a rel="button" class="button"');

        return preg_replace($find, $replace, $ulclass, 1);
    }
    add_filter('wp_nav_menu', 'ps_add_menuclass');
}
