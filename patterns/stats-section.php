<?php
/**
 * Title: Stats Section
 * Slug: aamira/stats-section
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 * @package WordPress
 * @subpackage aamira
 * @since aamira 1.0
 */

?>

<!-- wp:group {"metadata":{"categories":["header"],"patternName":"aamira/stats-section","name":"Stats Section"},"align":"full","style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem"}},"color":{"background":"#111827"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group alignfull has-background"
    style="background-color:#111827;padding-top:3rem;padding-bottom:3rem">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
    <div class="wp-block-group"
        style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center">
            <!-- wp:column {"verticalAlignment":"center","className":"border-r border-gray-700 space-y-1 px-5 py-16","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"right":{"color":"#beb9b9","width":"2px"},"top":{},"bottom":{},"left":{}}}} -->
            <div class="wp-block-column is-vertically-aligned-center border-r border-gray-700 space-y-1 px-5 py-16"
                style="border-right-color:#beb9b9;border-right-width:2px;padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"48px","fontWeight":"800","fontStyle":"normal"},"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
                <h3 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color"
                    style="margin-bottom:0;font-size:48px;font-style:normal;font-weight:800">
                    <?php esc_html_e( '998k+', 'aamira' ); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontSize":"14px"},"spacing":{"margin":{"top":"8px"}},"color":{"text":"#60a5fa"}}} -->
                <p class="has-text-align-center has-text-color"
                    style="color:#60a5fa;margin-top:8px;font-size:14px;text-transform:uppercase">
                    <?php esc_html_e( 'Posts', 'aamira' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","className":"border-r border-gray-700 space-y-1 px-5 py-16 ","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"right":{"color":"#beb9b9","width":"2px"},"top":{},"bottom":{},"left":{}}}} -->
            <div class="wp-block-column is-vertically-aligned-center border-r border-gray-700 space-y-1 px-5 py-16"
                style="border-right-color:#beb9b9;border-right-width:2px;padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"48px","fontWeight":"800","fontStyle":"normal"},"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
                <h3 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color"
                    style="margin-bottom:0;font-size:48px;font-style:normal;font-weight:800">
                    <?php esc_html_e( '1.5k+', 'aamira' ); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontSize":"14px"},"spacing":{"margin":{"top":"8px"}},"color":{"text":"#60a5fa"}}} -->
                <p class="has-text-align-center has-text-color"
                    style="color:#60a5fa;margin-top:8px;font-size:14px;text-transform:uppercase">
                    <?php esc_html_e( 'Automations', 'aamira' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <div class="wp-block-column is-vertically-aligned-center"
                style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"48px","fontWeight":"800","fontStyle":"normal"},"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
                <h3 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color"
                    style="margin-bottom:0;font-size:48px;font-style:normal;font-weight:800">
                    <?php esc_html_e( '7.9k', 'aamira' ); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontSize":"14px"},"spacing":{"margin":{"top":"8px"}},"color":{"text":"#60a5fa"}}} -->
                <p class="has-text-align-center has-text-color"
                    style="color:#60a5fa;margin-top:8px;font-size:14px;text-transform:uppercase">
                    <?php esc_html_e( 'Dashboards', 'aamira' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->