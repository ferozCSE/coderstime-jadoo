<?php
/**
 * Title: Pricing Section
 * Slug: aamira/pricing-section
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 * @package WordPress
 * @subpackage aamira
 * @since aamira 1.0
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group"
    style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
    <!-- wp:group {"layout":{"type":"constrained","contentSize":"570px","wideSize":"770px"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"700","fontStyle":"normal"},"spacing":{"margin":{"bottom":"16px"}}},"textColor":"black","fontSize":"x-large"} -->
        <h2 class="wp-block-heading has-text-align-center has-black-color has-text-color has-x-large-font-size"
            style="margin-bottom:16px;font-style:normal;font-weight:700">
            <?php esc_html_e( 'Choose your plan', 'aamira' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"fontSize":"24px"}},"textColor":"gray"} -->
        <p class="has-text-align-center has-gray-color has-text-color" style="margin-bottom:0px;font-size:24px">
            <?php esc_html_e( 'Honest and affordable pricing model to help you get started easily and trouble free.', 'aamira' ); ?>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px","justifyContent":"center"}} -->
    <div class="wp-block-group alignfull">
        <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|20"}}}} -->
        <div class="wp-block-columns alignwide">
            <!-- wp:column {"width":"50%","style":{"border":{"color":"#dedada","width":"3px"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
            <div class="wp-block-column has-border-color" style="border-color:#dedada;border-width:3px;flex-basis:50%">
                <!-- wp:group {"className":"border-2 border-gray-500 p-4 rounded-md","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"color":{"background":"#ffffff"},"layout":{"type":"constrained","contentSize":"300px"}}} -->
                <div class="wp-block-group border-2 border-gray-500 p-4 rounded-md has-background"
                    style="border-radius:8px;background-color:#ffffff;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">
                    <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"18px","fontWeight":"700","fontStyle":"normal"},"spacing":{"margin":{"bottom":"8px"}},"color":{"text":"#3b82f6"}}} -->
                    <h3 class="wp-block-heading has-text-align-left has-text-color"
                        style="color:#3b82f6;margin-bottom:8px;font-size:18px;font-style:normal;font-weight:700">
                        <?php esc_html_e( 'Developer', 'aamira' ); ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"48px","fontWeight":"800","fontStyle":"normal"},"spacing":{"margin":{"bottom":"16px"}}},"textColor":"black"} -->
                    <h3 class="wp-block-heading has-text-align-left has-black-color has-text-color"
                        style="margin-bottom:16px;font-size:48px;font-style:normal;font-weight:800">
                        <?php esc_html_e( '$49', 'aamira' ); ?><span
                            style="font-size:24px"><?php esc_html_e( 'per year', 'aamira' ); ?></span></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"spacing":{"margin":{"bottom":"16px"}}},"textColor":"black"} -->
                    <p class="has-text-align-left has-black-color has-text-color"
                        style="margin-bottom:16px;font-size:16px">
                        <?php esc_html_e( 'Up to 2 social networks and 2 automations', 'aamira' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px"}},"color":{"background":"#f3f4f6"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-background"
                    style="background-color:#f3f4f6;padding-top:20px;padding-bottom:20px;padding-left:20px">
                    <!-- wp:buttons {"className":"rounded-b-lg bg-gray-100 py-5","layout":{"type":"flex","justifyContent":"left"}} -->
                    <div class="wp-block-buttons rounded-b-lg bg-gray-100 py-5">
                        <!-- wp:button {"textAlign":"left","className":"is-style-fill","style":{"color":{"background":"#374151","text":"#ffffff"}}} -->
                        <div class="wp-block-button is-style-fill"><a
                                class="wp-block-button__link has-text-color has-background has-text-align-left wp-element-button"
                                style="color:#ffffff;background-color:#374151"><?php esc_html_e( 'Get Started', 'aamira' ); ?></a>
                        </div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"50%","style":{"border":{"color":"#3b82f6","width":"3px"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
            <div class="wp-block-column has-border-color" style="border-color:#3b82f6;border-width:3px;flex-basis:50%">
                <!-- wp:group {"align":"full","className":"border-2 border-blue-500 p-4 rounded-md","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"color":{"background":"#ffffff"},"layout":{"type":"constrained","contentSize":"300px"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                <div class="wp-block-group alignfull border-2 border-blue-500 p-4 rounded-md has-background"
                    style="border-radius:8px;background-color:#ffffff;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">
                    <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"18px","fontWeight":"700","fontStyle":"normal"},"spacing":{"margin":{"bottom":"8px"}},"color":{"text":"#3b82f6"}}} -->
                    <h3 class="wp-block-heading has-text-align-left has-text-color"
                        style="color:#3b82f6;margin-bottom:8px;font-size:18px;font-style:normal;font-weight:700">
                        <?php esc_html_e( 'Agency', 'aamira' ); ?><span
                            style="margin-left:5px; font-size:12px; color:#1e40af;"><?php esc_html_e( '▼', 'aamira' ); ?></span>
                    </h3>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"48px","fontWeight":"800","fontStyle":"normal"},"spacing":{"margin":{"bottom":"16px"}}},"textColor":"black"} -->
                    <h3 class="wp-block-heading has-text-align-left has-black-color has-text-color"
                        style="margin-bottom:16px;font-size:48px;font-style:normal;font-weight:800">
                        <?php esc_html_e( '$99', 'aamira' ); ?><span
                            style="font-size:24px"><?php esc_html_e( 'per year', 'aamira' ); ?></span>
                    </h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"spacing":{"margin":{"bottom":"16px"}}},"textColor":"black"} -->
                    <p class="has-text-align-left has-black-color has-text-color"
                        style="margin-bottom:16px;font-size:16px">
                        <?php esc_html_e( 'Up to 15 social networks and 50 automations', 'aamira' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"color":{"background":"#eff6ff"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-background" style="background-color:#eff6ff">
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px"}},"color":{"background":"#eff6ff"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-background"
                        style="background-color:#eff6ff;padding-top:20px;padding-bottom:20px;padding-left:20px">
                        <!-- wp:buttons {"className":"rounded-b-lg bg-gray-100 py-5","layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons rounded-b-lg bg-gray-100 py-5">
                            <!-- wp:button {"textAlign":"left","className":"is-style-fill","style":{"color":{"background":"#1d4ed8","text":"#ffffff"}}} -->
                            <div class="wp-block-button is-style-fill"><a
                                    class="wp-block-button__link has-text-color has-background has-text-align-left wp-element-button"
                                    style="color:#ffffff;background-color:#1d4ed8"><?php esc_html_e( 'Get Started', 'aamira' ); ?></a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->