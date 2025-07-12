<?php
/**
 * Title: Header3
 * Slug: aamira/header3
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 * @package WordPress
 * @subpackage aamira
 * @since aamira 1.0
 */

?>


<!-- wp:group {"metadata":{"categories":["header"],"patternName":"aamira/header3","name":"Header3"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"color":{"background":"#071014"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group alignfull has-background"
    style="background-color:#071014;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
    <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group">
        <!-- wp:site-logo {"width":100} /-->

        <!-- wp:group {"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
        <div class="wp-block-group">
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:navigation {"ref":4212,"textColor":"white","align":"wide","fontSize":"medium","layout":{"type":"flex","justifyContent":"right"}} /-->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"textAlign":"center","className":"hover:scale-105 transition-all duration-300 ease-in-out pl-10","style":{"border":{"radius":"8px"},"color":{"background":"#32b745","text":"#071014"},"elements":{"link":{"color":{"text":"#071014"}}}},"fontSize":"medium"} -->
                    <div class="wp-block-button hover:scale-105 transition-all duration-300 ease-in-out pl-10"><a
                            class="wp-block-button__link has-text-color has-background has-link-color has-medium-font-size has-text-align-center has-custom-font-size wp-element-button"
                            style="border-radius:8px;color:#071014;background-color:#32b745"><?php esc_html_e( "Let's Talk", 'aamira' ); ?></a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->