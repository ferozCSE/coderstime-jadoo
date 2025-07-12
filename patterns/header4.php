<?php
/**
 * Title: Header4
 * Slug: aamira/header4
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 * @package WordPress
 * @subpackage aamira
 * @since aamira 1.0
 */

?>

<!-- wp:group {"metadata":{"categories":["header"],"patternName":"ct-startup/header-startup","name":"Header4"},"align":"full","className":"w-full max-w-[1380px] mx-auto bg-[#f9f9f9]","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"margin":{"top":"10em"}},"color":{"background":"#f9f9f9"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group alignfull w-full max-w-[1380px] mx-auto bg-[#f9f9f9] has-background"
    style="background-color:#f9f9f9;margin-top:10em;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
    <!-- wp:group {"align":"full","className":"overflow-hidden relative","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
    <div class="wp-block-group alignfull overflow-hidden relative">
        <!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(119deg,rgb(6,147,227) 0%,rgb(155,81,224) 100%)"},"dimensions":{"minHeight":"450px"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
        <div class="wp-block-group alignfull has-background"
            style="background:linear-gradient(119deg,rgb(6,147,227) 0%,rgb(155,81,224) 100%);min-height:450px">
            <!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
            <div class="wp-block-group alignwide">
                <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"50px","bottom":"50px","right":"20px","left":"20px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","alignItems":"center"}} -->
                <div class="wp-block-group alignfull"
                    style="padding-top:50px;padding-right:20px;padding-bottom:50px;padding-left:20px">
                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","alignItems":"center"}} -->
                    <div class="wp-block-group">
                        <!-- wp:site-logo {"width":40} /-->

                        <!-- wp:paragraph {"fontSize":"medium"} -->
                        <p class="has-medium-font-size">
                            <?php esc_html_e( 'Startup', 'aamira' ); ?>
                        </p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:navigation {"ref":4212,"className":"gap-8","fontSize":"medium","layout":{"type":"flex","justifyContent":"right"}} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"mt-20","layout":{"type":"constrained"}} -->
                <div class="wp-block-group mt-20">
                    <!-- wp:group {"layout":{"type":"constrained","contentSize":"650px","wideSize":"850px"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"textAlign":"center","className":"mt-20 text-6xl font-extrabold text-white","style":{"typography":{"lineHeight":"1.2"},"color":{"text":"#ffffff"},"elements":{"link":{"color":{"text":"#ffffff"}}},"spacing":{"padding":{"top":"0px","bottom":"20px"}}},"fontSize":"x-large"} -->
                        <h2 class="wp-block-heading has-text-align-center mt-20 text-6xl font-extrabold text-white has-text-color has-link-color has-x-large-font-size"
                            style="color:#ffffff;padding-top:0px;padding-bottom:20px;line-height:1.2">
                            <?php esc_html_e( "Let's build the future together.", 'aamira' ); ?>
                        </h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"className":"has-text-align-center mx-auto mt-7 text-2xl font-medium text-gray-300 max-w-[600px]","style":{"color":{"text":"#504a4a"},"elements":{"link":{"color":{"text":"#504a4a"}}},"spacing":{"padding":{"bottom":"23px"}},"typography":{"fontSize":"24px"}}} -->
                        <p class="has-text-align-center mx-auto mt-7 text-2xl font-medium text-gray-300 max-w-[600px] has-text-color has-link-color"
                            style="color:#504a4a;padding-bottom:23px;font-size:24px">
                            <?php esc_html_e( 'Inspiring tools and resources to help you build your next endeavour easily and effortlessly.', 'aamira' ); ?>
                        </p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"mt-10","style":{"spacing":{"padding":{"bottom":"30px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                        <div class="wp-block-buttons mt-10" style="padding-bottom:30px">
                            <!-- wp:button {"backgroundColor":"vivid-green-cyan","className":"is-style-fill shadow-lg px-8 py-4","style":{"border":{"radius":"5px"},"typography":{"fontSize":"18px"}}} -->
                            <div class="wp-block-button is-style-fill shadow-lg px-8 py-4"><a
                                    class="wp-block-button__link has-vivid-green-cyan-background-color has-background has-custom-font-size wp-element-button"
                                    style="border-radius:5px;font-size:18px"><?php esc_html_e( 'GET STARTED TODAY', 'aamira' ); ?></a>
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

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
        <div class="wp-block-group" style="padding-top:50px;padding-bottom:50px">
            <!-- wp:columns -->
            <div class="wp-block-columns">
                <!-- wp:column {"width":"","style":{"spacing":{"padding":{"right":"110px"}}}} -->
                <div class="wp-block-column" style="padding-right:110px">
                    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"60px"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-group alignfull" style="padding-right:60px">
                        <!-- wp:image {"id":6072,"width":"294px","height":"auto","sizeSlug":"full","linkDestination":"none","align":"right"} -->
                        <figure class="wp-block-image alignright size-full is-resized"><img
                                src="<?php echo  get_stylesheet_directory_uri() . '/images/undraw_businessman.png'; ?>"
                                alt="" class="wp-image-6072" style="width:294px;height:auto" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":""}}} -->
                <div class="wp-block-column"
                    style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                    <!-- wp:group {"style":{"spacing":{"padding":{"left":"70px"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-group" style="padding-left:70px">
                        <!-- wp:heading {"fontSize":"x-large"} -->
                        <h2 class="wp-block-heading has-x-large-font-size">
                            <?php esc_html_e( 'Awesome Features', 'aamira' ); ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","fontSize":"medium"} -->
                        <p class="has-text-align-left has-medium-font-size">
                            <?php esc_html_e( 'Get to know all the features our resources have to offer for your business', 'aamira' ); ?>
                        </p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p><span
                                class="text-green-500 mr-2">✓</span><?php esc_html_e( 'Awesome Feature #1', 'aamira' ); ?>
                        </p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p><span
                                class="text-green-500 mr-2">✓</span><?php esc_html_e( 'Awesome Feature #2', 'aamira' ); ?>
                        </p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p><span
                                class="text-green-500 mr-2">✓</span><?php esc_html_e( 'Awesome Feature #3', 'aamira' ); ?>
                        </p>
                        <!-- /wp:paragraph -->
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
</div>
<!-- /wp:group -->