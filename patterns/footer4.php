<?php
/**
 * Title: Footer4
 * Slug: aamira/footer4
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Site footer with site title and navigation.
 * @package WordPress
 * @subpackage aamira
 * @since aamira 1.0
 */

?>

<!-- wp:group {"metadata":{"categories":["footer"],"patternName":"aamira/footer-startup","name":"Footer4"},"align":"full","className":"w-full max-w-[1380px] mx-auto","style":{"spacing":{"padding":{"top":"1.5rem"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"color":{"background":"#000428"}},"textColor":"white","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group alignfull w-full max-w-[1380px] mx-auto has-white-color has-text-color has-background has-link-color"
    style="background-color:#000428;padding-top:1.5rem">
    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","top":"var:preset|spacing|50"}},"border":{"radius":"0.38rem"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group"
        style="border-radius:0.38rem;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"40px"}}} -->
        <h2 class="wp-block-heading has-text-align-center" style="font-size:40px">
            <?php esc_html_e( 'Start creating now', 'aamira' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"align":"center","className":"pt-5","style":{"typography":{"fontSize":"20px"}}} -->
            <p class="has-text-align-center pt-5" style="font-size:20px">
                <?php esc_html_e( 'We are here to help you build your idea.', 'aamira' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons">
            <!-- wp:button {"textAlign":"center","className":"is-style-outline","style":{"typography":{"textTransform":"uppercase"}}} -->
            <div class="wp-block-button is-style-outline"><a
                    class="wp-block-button__link has-text-align-center wp-element-button"
                    style="text-transform:uppercase"><?php esc_html_e( 'Get started today', 'aamira' ); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

        <!-- wp:group {"fontSize":"small","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
        <div class="wp-block-group has-small-font-size">
            <!-- wp:separator {"style":{"color":{"background":"#9f9393"}}} -->
            <hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background"
                style="background-color:#9f9393;color:#9f9393" />
            <!-- /wp:separator -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
            <p class="has-text-align-center"><?php esc_html_e( 'Crafted with ❤️ by Coderstime', 'aamira' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->