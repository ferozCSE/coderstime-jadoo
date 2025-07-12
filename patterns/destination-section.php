<?php
/**
 * Title: Destination Section
 * Slug: aamira/destination-section
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Hero style section for Header area.
 *
 * @package WordPress
 * @subpackage aamira
 * @since aamira 1.0
 */
?>

<!-- wp:group {"metadata":{"categories":["header"],"patternName":"coderstime-jadoo/destination-section","name":"Destination Section"},"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","right":"1.25rem","left":"1.25rem"}},"color":{"background":"#f9f8f8"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group alignfull has-background"
    style="background-color:#f9f8f8;padding-top:5rem;padding-right:1.25rem;padding-bottom:5rem;padding-left:1.25rem">
    <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
    <p class="has-text-align-center has-medium-font-size" style="text-transform:uppercase">
        <strong><?php esc_html_e( 'Top Selling', 'aamira' ); ?></strong>
    </p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
    <h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Top
            Destinations', 'aamira' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"4rem"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide" style="margin-bottom:4rem">
        <!-- wp:columns {"align":"full","style":{"spacing":{"margin":{"bottom":"0rem"},"blockGap":{"top":"0","left":"var:preset|spacing|40"}}}} -->
        <div class="wp-block-columns alignfull" style="margin-bottom:0rem">
            <!-- wp:column {"style":{"border":{"radius":"0px"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
            <div class="wp-block-column" style="border-radius:0px">
                <!-- wp:group {"style":{"border":{"radius":"1rem"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                <div class="wp-block-group" style="border-radius:1rem">
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"0px"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-group"
                        style="border-radius:0px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
                        <!-- wp:group {"align":"wide","className":"destination-card","style":{"border":{"radius":"10px","width":"0px","style":"none"}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                        <div class="wp-block-group alignwide destination-card has-base-background-color has-background"
                            style="border-style:none;border-width:0px;border-radius:10px">
                            <!-- wp:image {"id":6241,"sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":{"topLeft":"14px","topRight":"14px"},"width":"0px","style":"none"}}} -->
                            <figure class="wp-block-image aligncenter size-full has-custom-border"
                                style="margin-right:0px;margin-left:0px"><img
                                    src="<?php echo  get_stylesheet_directory_uri() . '/images/desti-rome.jpg'; ?>"
                                    alt="" class="wp-image-6241"
                                    style="border-style:none;border-width:0px;border-top-left-radius:14px;border-top-right-radius:14px" />
                            </figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                            <div class="wp-block-group">
                                <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group" style="padding-top:2rem;padding-bottom:2rem">
                                    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"24px"},"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}},"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"right":"12","left":"12px"}}}} -->
                                    <p class="has-text-align-center has-text-color has-link-color"
                                        style="color:#5e6282;padding-right:12;padding-left:12px;font-size:24px"><?php esc_html_e( 'Rome,
                                        Italy', 'aamira' ); ?></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fill","flexSize":null},"typography":{"fontSize":"24px"},"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}}}} -->
                                    <p class="has-text-align-center has-text-color has-link-color"
                                        style="color:#5e6282;font-size:24px">
                                        <?php esc_html_e( '$5.42k', 'aamira' ); ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                            <div class="wp-block-group">
                                <!-- wp:group {"style":{"spacing":{"padding":{"left":"0","bottom":"2rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                                <div class="wp-block-group" style="padding-bottom:2rem;padding-left:0">
                                    <!-- wp:image {"id":5317,"width":"25px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"left":"0"}}}} -->
                                    <figure class="wp-block-image size-full is-resized" style="margin-left:0"><img
                                            src="<?php echo  get_stylesheet_directory_uri() . '/images/navigation-1.png'; ?>"
                                            alt="" class="wp-image-5317" style="width:25px" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:paragraph {"style":{"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"medium"} -->
                                    <p class="has-text-color has-link-color has-medium-font-size" style="color:#5e6282">
                                        <?php esc_html_e( '10 Days Trip', 'aamira' ); ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"border":{"radius":"0px"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
            <div class="wp-block-column" style="border-radius:0px">
                <!-- wp:group {"style":{"border":{"radius":"1rem"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                <div class="wp-block-group" style="border-radius:1rem">
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"0px"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-group"
                        style="border-radius:0px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
                        <!-- wp:group {"className":"destination-card","style":{"border":{"radius":"10px","width":"0px","style":"none"}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                        <div class="wp-block-group destination-card has-base-background-color has-background"
                            style="border-style:none;border-width:0px;border-radius:10px">
                            <!-- wp:image {"id":6235,"sizeSlug":"full","linkDestination":"none","align":"wide","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":{"topLeft":"14px","topRight":"14px"},"width":"0px","style":"none"}}} -->
                            <figure class="wp-block-image alignwide size-full has-custom-border"
                                style="margin-right:0px;margin-left:0px"><img
                                    src="<?php echo  get_stylesheet_directory_uri() . '/images/desti-uk.jpg'; ?>" alt=""
                                    class="wp-image-6235"
                                    style="border-style:none;border-width:0px;border-top-left-radius:14px;border-top-right-radius:14px" />
                            </figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                            <div class="wp-block-group">
                                <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group" style="padding-top:2rem;padding-bottom:2rem">
                                    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"24px"},"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}},"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"right":"12","left":"12px"}}}} -->
                                    <p class="has-text-align-center has-text-color has-link-color"
                                        style="color:#5e6282;padding-right:12;padding-left:12px;font-size:24px"><?php esc_html_e( 'London,
                                        UK', 'aamira' ); ?></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fill","flexSize":null},"typography":{"fontSize":"24px"},"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}}}} -->
                                    <p class="has-text-align-center has-text-color has-link-color"
                                        style="color:#5e6282;font-size:24px">
                                        <?php esc_html_e( '$4.2k', 'aamira' ); ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                            <div class="wp-block-group">
                                <!-- wp:group {"style":{"spacing":{"padding":{"left":"0","bottom":"2rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                                <div class="wp-block-group" style="padding-bottom:2rem;padding-left:0">
                                    <!-- wp:image {"id":5317,"width":"25px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"left":"0"}}}} -->
                                    <figure class="wp-block-image size-full is-resized" style="margin-left:0"><img
                                            src="<?php echo  get_stylesheet_directory_uri() . '/images/navigation-1.png'; ?>"
                                            alt="" class="wp-image-5317" style="width:25px" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:paragraph {"style":{"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"medium"} -->
                                    <p class="has-text-color has-link-color has-medium-font-size" style="color:#5e6282">
                                        <?php esc_html_e( '12 Days Trip', 'aamira' ); ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"border":{"radius":"0px"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
            <div class="wp-block-column" style="border-radius:0px">
                <!-- wp:group {"style":{"border":{"radius":"1rem"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                <div class="wp-block-group" style="border-radius:1rem">
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"0px"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-group"
                        style="border-radius:0px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
                        <!-- wp:group {"className":"destination-card","style":{"border":{"radius":"10px","width":"0px","style":"none"}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                        <div class="wp-block-group destination-card has-base-background-color has-background"
                            style="border-style:none;border-width:0px;border-radius:10px">
                            <!-- wp:image {"id":6238,"sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":{"topLeft":"14px","topRight":"14px"},"width":"0px","style":"none"}}} -->
                            <figure class="wp-block-image aligncenter size-full has-custom-border"
                                style="margin-right:0px;margin-left:0px"><img
                                    src="<?php echo  get_stylesheet_directory_uri() . '/images/desti-eu.jpg'; ?>" alt=""
                                    class="wp-image-6238"
                                    style="border-style:none;border-width:0px;border-top-left-radius:14px;border-top-right-radius:14px" />
                            </figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                            <div class="wp-block-group">
                                <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group" style="padding-top:2rem;padding-bottom:2rem">
                                    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"24px"},"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}},"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"right":"12","left":"12px"}}}} -->
                                    <p class="has-text-align-center has-text-color has-link-color"
                                        style="color:#5e6282;padding-right:12;padding-left:12px;font-size:24px"><?php esc_html_e( 'Full
                                        Europe', 'aamira' ); ?></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fill","flexSize":null},"typography":{"fontSize":"24px"},"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}}}} -->
                                    <p class="has-text-align-center has-text-color has-link-color"
                                        style="color:#5e6282;font-size:24px">
                                        <?php esc_html_e( '$15k', 'aamira' ); ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                            <div class="wp-block-group">
                                <!-- wp:group {"style":{"spacing":{"padding":{"left":"0","bottom":"2rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                                <div class="wp-block-group" style="padding-bottom:2rem;padding-left:0">
                                    <!-- wp:image {"id":5317,"width":"25px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"left":"0"}}}} -->
                                    <figure class="wp-block-image size-full is-resized" style="margin-left:0"><img
                                            src="<?php echo  get_stylesheet_directory_uri() . '/images/navigation-1.png'; ?>"
                                            alt="" class="wp-image-5317" style="width:25px" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:paragraph {"style":{"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"medium"} -->
                                    <p class="has-text-color has-link-color has-medium-font-size" style="color:#5e6282">
                                        <?php esc_html_e( '28 Days Trip', 'aamira' ); ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
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