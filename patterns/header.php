<?php
/**
 * Title: Header
 * Slug: aamira/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 *
 * @package WordPress
 * @subpackage aamira
 * @since aamira 1.0
 */

?>
<!-- wp:group {"metadata":{"categories":["header"],"patternName":"coderstime-jadoo/header","name":"Header"},"className":"alignfull","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","right":"2rem","left":"2rem"}},"color":{"background":"#000000"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group alignfull has-background"
    style="background-color:#000000;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
    <!-- wp:group {"align":"full","className":"alignwide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignfull alignwide">
        <!-- wp:site-logo {"width":96,"className":"is-style-default","style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"left":"2rem"}}}} /-->

        <!-- wp:group {"layout":{"type":"constrained","justifyContent":"right","contentSize":"1150px","wideSize":"1380px"}} -->
        <div class="wp-block-group">
            <!-- wp:navigation {"ref":4212,"textColor":"base","className":"navber-menu","fontSize":"medium","layout":{"type":"flex","justifyContent":"center"}} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button {"textColor":"base","className":"signup-button is-style-outline","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"radius":"10px"}},"fontSize":"medium"} -->
            <div class="wp-block-button signup-button is-style-outline"><a
                    class="wp-block-button__link has-base-color has-text-color has-link-color has-medium-font-size has-custom-font-size wp-element-button"
                    style="border-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Sign
                    Up', 'aamira' ); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

        <!-- wp:necessary-block/navigation-block {"menuItems":[{"label":"","link":"#"},{"label":"","link":"#"},{"label":"EN","link":"#","submenuItems":[{"label":"EN","link":""},{"label":"BN"}]}],"className":"nav-dropdown","style":{"spacing":{"padding":{"left":"0rem","right":"2rem"}}},"fontSize":"medium"} -->
        <div class="wp-block-necessary-block-navigation-block nav-dropdown has-medium-font-size"
            style="padding-right:2rem;padding-left:0rem">
            <div class="dynamic-menu">
                <div class="menu-item-container"><a href="#" class="menu-item"></a></div>
                <div class="menu-item-container"><a href="#" class="menu-item"></a></div>
                <div class="menu-item-container"><a href="#"
                        class="menu-item"><?php esc_html_e( 'EN', 'aamira' ); ?><span class="dropdown-icon">▼</span></a>
                    <div class="submenu"><a href="" class="submenu-item"><?php esc_html_e( 'EN', 'aamira' ); ?></a><a
                            class="submenu-item"><?php esc_html_e( 'EN', 'aamira' ); ?></a></div>
                </div>
            </div>
        </div>
        <!-- /wp:necessary-block/navigation-block -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->