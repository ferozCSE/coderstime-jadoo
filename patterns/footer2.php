<?php
/**
 * Title: Footer2
 * Slug: aamira/footer2
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Site footer with site title and navigation.
 * @package WordPress
 * @subpackage aamira
 * @since aamira 1.0
 */

?>

<!-- wp:group {"metadata":{"categories":["footer"],"patternName":"ct-tailwind-theme/footer-ctsm","name":"Footer2"},"align":"full","className":"space-y-1 px-5 py-16 bg-gray-100","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group alignfull space-y-1 px-5 py-16 bg-gray-100">
    <!-- wp:group {"tagName":"footer","align":"full","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"backgroundColor":"neutral-100","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
    <footer class="wp-block-group alignfull has-neutral-100-background-color has-background"
        style="padding-top:40px;padding-bottom:40px">
        <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group">
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group">
                <!-- wp:paragraph -->
                <p><?php esc_html_e( 'About', 'aamira' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e( 'Terms of Service', 'aamira' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e( 'Privacy Policy', 'aamira' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e( 'Company © 2025', 'aamira' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </footer>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->