<?php
/**
 * Title: Destination Section
 * Slug: coderstime-jadoo/destination-section
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Hero style section for Header area.
 *
 * @package WordPress
 * @subpackage Coders Time Jadoo
 * @since 1.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","right":"1.25rem","left":"1.25rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"
    style="padding-top:5rem;padding-right:1.25rem;padding-bottom:5rem;padding-left:1.25rem">
    <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em"}},"fontSize":"medium"} -->
    <p class="has-text-align-center has-medium-font-size" style="letter-spacing:0.1em;text-transform:uppercase">
        <strong><?php esc_html_e( 'Top Selling', 'coderstime-jadoo' ); ?></strong>
    </p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","level":1,"style":{"color":{"text":"#1f2937"},"elements":{"link":{"color":{"text":"#1f2937"}}},"spacing":{"margin":{"top":"1rem"}}}} -->
    <h1 class="wp-block-heading has-text-align-center has-text-color has-link-color"
        style="color:#1f2937;margin-top:1rem"><strong><?php esc_html_e( 'Top
            Destinations', 'coderstime-jadoo' ); ?></strong></h1>
    <!-- /wp:heading -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"4rem"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide" style="margin-bottom:4rem">
        <!-- wp:columns {"align":"full","style":{"spacing":{"margin":{"bottom":"0rem"},"blockGap":{"top":"0","left":"var:preset|spacing|40"}}}} -->
        <div class="wp-block-columns alignfull" style="margin-bottom:0rem">
            <!-- wp:column {"style":{"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-column" style="border-radius:0px">
                <!-- wp:group {"style":{"border":{"radius":"1rem"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-base-background-color has-background" style="border-radius:1rem">
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"
                        style="border-radius:0px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
                        <!-- wp:group {"className":"destination-card","style":{"border":{"radius":"10px","width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
                        <div class="wp-block-group destination-card"
                            style="border-style:none;border-width:0px;border-radius:10px">
                            <!-- wp:image {"id":5306,"width":"334px","height":"auto","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":{"topLeft":"14px","topRight":"14px"},"width":"0px","style":"none"}}} -->
                            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"
                                style="margin-right:0px;margin-left:0px"><img
                                    src="http://localhost/wp-content/uploads/2025/06/dest1.jpg" alt=""
                                    class="wp-image-5306"
                                    style="border-style:none;border-width:0px;border-top-left-radius:14px;border-top-right-radius:14px;width:334px;height:auto" />
                            </figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group">
                                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group">
                                    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"24px"},"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}},"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"right":"12","left":"12px"}}}} -->
                                    <p class="has-text-align-center has-text-color has-link-color"
                                        style="color:#5e6282;padding-right:12;padding-left:12px;font-size:24px">
                                        <?php esc_html_e( 'Rome,
                                        Italy', 'coderstime-jadoo' ); ?> </p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fill","flexSize":null},"typography":{"fontSize":"24px"},"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}}}} -->
                                    <p class="has-text-align-center has-text-color has-link-color"
                                        style="color:#5e6282;font-size:24px">
                                        <?php esc_html_e( '$5.42k', 'coderstime-jadoo' ); ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group">
                                <!-- wp:group {"style":{"spacing":{"padding":{"left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                                <div class="wp-block-group" style="padding-left:0">
                                    <!-- wp:image {"id":5317,"width":"25px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"left":"0"}}}} -->
                                    <figure class="wp-block-image size-full is-resized" style="margin-left:0"><img
                                            src="http://localhost/wp-content/uploads/2025/06/navigation-1.png" alt=""
                                            class="wp-image-5317" style="width:25px" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:paragraph {"style":{"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"medium"} -->
                                    <p class="has-text-color has-link-color has-medium-font-size" style="color:#5e6282">
                                        <?php esc_html_e( '10 Days Trip', 'coderstime-jadoo' ); ?>
                                    </p>
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

            <!-- wp:column {"style":{"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-column" style="border-radius:0px">
                <!-- wp:group {"style":{"border":{"radius":"1rem"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-base-background-color has-background" style="border-radius:1rem">
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"
                        style="border-radius:0px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
                        <!-- wp:group {"className":"destination-card","style":{"border":{"radius":"10px","width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":""}} -->
                        <div class="wp-block-group destination-card"
                            style="border-style:none;border-width:0px;border-radius:10px">
                            <!-- wp:image {"id":5335,"width":"334px","height":"auto","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":{"topLeft":"14px","topRight":"14px"},"width":"0px","style":"none"}}} -->
                            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"
                                style="margin-right:0px;margin-left:0px"><img
                                    src="http://localhost/wp-content/uploads/2025/06/dest2-1.jpg" alt=""
                                    class="wp-image-5335"
                                    style="border-style:none;border-width:0px;border-top-left-radius:14px;border-top-right-radius:14px;width:334px;height:auto" />
                            </figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group">
                                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group">
                                    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"24px"},"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}},"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"right":"12","left":"12px"}}}} -->
                                    <p class="has-text-align-center has-text-color has-link-color"
                                        style="color:#5e6282;padding-right:12;padding-left:12px;font-size:24px">
                                        <?php esc_html_e( 'London,
                                        UK', 'coderstime-jadoo' ); ?></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fill","flexSize":null},"typography":{"fontSize":"24px"},"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}}}} -->
                                    <p class="has-text-align-center has-text-color has-link-color"
                                        style="color:#5e6282;font-size:24px">
                                        <?php esc_html_e( '$4.2k', 'coderstime-jadoo' ); ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group">
                                <!-- wp:group {"style":{"spacing":{"padding":{"left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                                <div class="wp-block-group" style="padding-left:0">
                                    <!-- wp:image {"id":5317,"width":"25px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"left":"0"}}}} -->
                                    <figure class="wp-block-image size-full is-resized" style="margin-left:0"><img
                                            src="http://localhost/wp-content/uploads/2025/06/navigation-1.png" alt=""
                                            class="wp-image-5317" style="width:25px" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:paragraph {"style":{"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"medium"} -->
                                    <p class="has-text-color has-link-color has-medium-font-size" style="color:#5e6282">
                                        <?php esc_html_e( '12 Days Trip', 'coderstime-jadoo' ); ?>
                                    </p>
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

            <!-- wp:column {"style":{"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-column" style="border-radius:0px">
                <!-- wp:group {"style":{"border":{"radius":"1rem"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-base-background-color has-background" style="border-radius:1rem">
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"
                        style="border-radius:0px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
                        <!-- wp:group {"className":"destination-card","style":{"border":{"radius":"10px","width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":""}} -->
                        <div class="wp-block-group destination-card"
                            style="border-style:none;border-width:0px;border-radius:10px">
                            <!-- wp:image {"id":5337,"width":"334px","height":"auto","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":{"topLeft":"14px","topRight":"14px"},"width":"0px","style":"none"}}} -->
                            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"
                                style="margin-right:0px;margin-left:0px"><img
                                    src="http://localhost/wp-content/uploads/2025/06/dest3-1.jpg" alt=""
                                    class="wp-image-5337"
                                    style="border-style:none;border-width:0px;border-top-left-radius:14px;border-top-right-radius:14px;width:334px;height:auto" />
                            </figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group">
                                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group">
                                    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"24px"},"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}},"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"right":"12","left":"12px"}}}} -->
                                    <p class="has-text-align-center has-text-color has-link-color"
                                        style="color:#5e6282;padding-right:12;padding-left:12px;font-size:24px"><?php esc_html_e( 'Full
                                        Europe', 'coderstime-jadoo' ); ?></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fill","flexSize":null},"typography":{"fontSize":"24px"},"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}}}} -->
                                    <p class="has-text-align-center has-text-color has-link-color"
                                        style="color:#5e6282;font-size:24px">
                                        <?php esc_html_e( '$15k', 'coderstime-jadoo' ); ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group">
                                <!-- wp:group {"style":{"spacing":{"padding":{"left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                                <div class="wp-block-group" style="padding-left:0">
                                    <!-- wp:image {"id":5317,"width":"25px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"left":"0"}}}} -->
                                    <figure class="wp-block-image size-full is-resized" style="margin-left:0"><img
                                            src="http://localhost/wp-content/uploads/2025/06/navigation-1.png" alt=""
                                            class="wp-image-5317" style="width:25px" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:paragraph {"style":{"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"medium"} -->
                                    <p class="has-text-color has-link-color has-medium-font-size" style="color:#5e6282">
                                        <?php esc_html_e( '28 Days Trip', 'coderstime-jadoo' ); ?>
                                    </p>
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