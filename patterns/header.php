<?php
/**
 * Title: Header
 * Slug: coderstime-jadoo/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 *
 * @package WordPress
 * @subpackage Coderstime Jadoo
 * @since Coderstime Jadoo 1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:2rem;padding-bottom:2rem">
    <!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:site-logo {"width":63} /-->

        <!-- wp:group {"layout":{"type":"constrained","justifyContent":"right"}} -->
        <div class="wp-block-group">
            <!-- wp:navigation {"ref":4212,"full":"wide","className":"navber-menu","layout":{"type":"flex","justifyContent":"center"}} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button {"className":"is-style-outline signup-button","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"color":{"text":"#356dd7"},"elements":{"link":{"color":{"text":"#356dd7"}}},"border":{"radius":"5px"}}} -->
            <div class="wp-block-button is-style-outline signup-button"><a
                    class="wp-block-button__link has-text-color has-link-color wp-element-button"
                    style="border-radius:5px;color:#356dd7;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Sign
                    Up', 'coderstime-jadoo' ); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

        <!-- wp:necessary-block/navigation-block {"menuItems":[{"label":"","link":"#"},{"label":"","link":"#"},{"label":"EN","link":"#","submenuItems":[{"label":"EN","link":""},{"label":"BN"}]}],"className":"nav-droupdown"} -->
        <div class="wp-block-necessary-block-navigation-block nav-dropdown">
            <div class="dynamic-menu">
                <div class="menu-item-container"><a href="#"
                        class="menu-item"><?php esc_html_e( 'EN', 'coderstime-jadoo' ); ?><span
                            class="dropdown-icon">▼</span></a>
                    <div class="submenu"><a href=""
                            class="submenu-item"><?php esc_html_e( 'EN', 'coderstime-jadoo' ); ?></a><a
                            class="submenu-item"><?php esc_html_e( 'BN', 'coderstime-jadoo' ); ?></a></div>
                </div>
            </div>
        </div>
        <!-- /wp:necessary-block/navigation-block -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->