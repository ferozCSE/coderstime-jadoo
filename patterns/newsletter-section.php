<?php
/**
 * Title: Newsletter Section
 * Slug: aamira/newsletter-section
 * Categories: header
 * Block Types: core/template-part/header
 * Description: 
 *
 * @package WordPress
 * @subpackage aamira
 * @since aamira 1.0
 */
?>

<!-- wp:group {"metadata":{"categories":["header"],"patternName":"aamira/newsletter-section","name":"News Letter Section"},"align":"full","className":"news-letter-container","style":{"spacing":{"padding":{"top":"40px","bottom":"40px","right":"0px","left":"0px"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group alignfull news-letter-container"
    style="padding-top:40px;padding-right:0px;padding-bottom:40px;padding-left:0px">
    <!-- wp:group {"align":"full","style":{"color":{"background":"#f9f6fd"},"border":{"radius":{"topLeft":"195px"}},"spacing":{"padding":{"top":"40px","bottom":"40px"},"margin":{"bottom":"0rem"}},"background":{"backgroundImage":{"url":"<?php echo  get_stylesheet_directory_uri() . '/images/shape-bg1.png'; ?>","id":5469,"source":"file","title":"shape-bg1"},"backgroundSize":"auto","backgroundAttachment":"fixed","backgroundPosition":"50% 0","backgroundRepeat":"repeat"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
    <div class="wp-block-group alignfull has-background"
        style="border-top-left-radius:195px;background-color:#f9f6fd;margin-bottom:0rem;padding-top:40px;padding-bottom:40px">
        <!-- wp:group {"fontSize":"medium","layout":{"type":"constrained","contentSize":"768px","wideSize":"868px"}} -->
        <div class="wp-block-group has-medium-font-size">
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"30px"},"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}}}} -->
            <p class="has-text-align-center has-text-color has-link-color" style="color:#5e6282;font-size:30px">
                <?php esc_html_e( 'Subscribe to get information, latest news and other interesting offers about Cobham', 'aamira' ); ?>
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"fontSize":"medium","layout":{"type":"constrained","contentSize":"768px","wideSize":"868px"}} -->
        <div class="wp-block-group has-medium-font-size">
            <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"50px","right":"0em"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group alignfull" style="padding-right:0em;padding-bottom:50px">
                <!-- wp:paragraph {"align":"center","className":"input-field","style":{"elements":{"link":{"color":{"text":"#5e6282"}}},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1rem","right":"1rem"}},"border":{"radius":"0.38rem"},"color":{"text":"#5e6282"},"typography":{"fontSize":"18px"}},"backgroundColor":"base"} -->
                <p class="has-text-align-center input-field has-base-background-color has-text-color has-background has-link-color"
                    style="border-radius:0.38rem;color:#5e6282;padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem;font-size:18px">
                    <?php esc_html_e( 'you@example.com', 'aamira' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"textAlign":"left","textColor":"base","className":"footer-btn","style":{"typography":{"writingMode":"horizontal-tb","fontSize":"16px"},"color":{"background":"#ff946d"},"spacing":{"padding":{"left":"1rem","right":"1rem","top":"1rem","bottom":"1rem"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"radius":"0.5rem"}}} -->
                    <div class="wp-block-button footer-btn" style="writing-mode:horizontal-tb"><a
                            class="wp-block-button__link has-base-color has-text-color has-background has-link-color has-text-align-left has-custom-font-size wp-element-button"
                            style="border-radius:0.5rem;background-color:#ff946d;padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem;font-size:16px"><?php esc_html_e( 'Subscribe', 'aamira' ); ?></a>
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