<?php
/**
 * Title: Easy and First Section
 * Slug: aamira/easyandfirst-section
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Hero style section for Header area.
 *
 * @package WordPress
 * @subpackage aamira
 * @since aamira 1.0
 */
?>

<!-- wp:cover {"customOverlayColor":"#f5f7fa","isUserOverlayColor":true,"minHeightUnit":"rem","isDark":false,"metadata":{"categories":["header"],"patternName":"aamira/easyandfirst-section","name":"Easy and First Section"},"align":"full","className":"hero-pattern"} -->
<div class="wp-block-cover alignfull is-light hero-pattern"><span aria-hidden="true"
        class="wp-block-cover__background has-background-dim-100 has-background-dim"
        style="background-color:#f5f7fa"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
        <div class="wp-block-group">
            <!-- wp:columns {"align":"wide"} -->
            <div class="wp-block-columns alignwide">
                <!-- wp:column {"width":"66.66%"} -->
                <div class="wp-block-column" style="flex-basis:66.66%">
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
                    <div class="wp-block-group" style="padding-top:0;padding-bottom:0">
                        <!-- wp:paragraph {"align":"left","style":{"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"3rem","right":"0rem","bottom":"0rem","left":"0rem"}}}} -->
                        <p class="has-text-align-left has-text-color has-link-color"
                            style="color:#5e6282;margin-top:3rem;margin-right:0rem;margin-bottom:0rem;margin-left:0rem;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                            <?php esc_html_e( 'Easy and Fast', 'aamira' ); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"48px"}}} -->
                        <h3 class="wp-block-heading has-text-align-left" style="font-size:48px">
                            <?php esc_html_e( 'Book your next trip in 3 easy steps', 'aamira' ); ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"3rem"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                        <div class="wp-block-group" style="margin-bottom:3rem">
                            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                            <div class="wp-block-group">
                                <!-- wp:columns -->
                                <div class="wp-block-columns">
                                    <!-- wp:column {"width":"20%","className":"book-icon-wrapper"} -->
                                    <div class="wp-block-column book-icon-wrapper" style="flex-basis:20%">
                                        <!-- wp:image {"id":5464,"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
                                        <figure class="wp-block-image size-full is-resized"><img
                                                src="<?php echo  get_stylesheet_directory_uri() . '/images/send2.png'; ?>"
                                                alt="" class="wp-image-5464" style="width:50px" /></figure>
                                        <!-- /wp:image -->
                                    </div>
                                    <!-- /wp:column -->

                                    <!-- wp:column {"width":"100%"} -->
                                    <div class="wp-block-column" style="flex-basis:100%">
                                        <!-- wp:heading {"level":6,"style":{"spacing":{"padding":{"bottom":"0rem"}}},"fontSize":"medium"} -->
                                        <h6 class="wp-block-heading has-medium-font-size" style="padding-bottom:0rem">
                                            <?php esc_html_e( 'Choose Destination', 'aamira' ); ?></h6>
                                        <!-- /wp:heading -->

                                        <!-- wp:paragraph {"align":"left"} -->
                                        <p class="has-text-align-left">
                                            <?php esc_html_e( 'Choose your favorite place. No matter where you travel inside the World.', 'aamira' ); ?>
                                        </p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:column -->
                                </div>
                                <!-- /wp:columns -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                            <div class="wp-block-group">
                                <!-- wp:columns -->
                                <div class="wp-block-columns">
                                    <!-- wp:column {"width":"20%","className":"book-icon-wrapper2"} -->
                                    <div class="wp-block-column book-icon-wrapper2" style="flex-basis:20%">
                                        <!-- wp:image {"id":5464,"width":"50px","sizeSlug":"full","linkDestination":"none"} -->
                                        <figure class="wp-block-image size-full is-resized"><img
                                                src="<?php echo  get_stylesheet_directory_uri() . '/images/send2.png'; ?>"
                                                alt="" class="wp-image-5464" style="width:50px" /></figure>
                                        <!-- /wp:image -->
                                    </div>
                                    <!-- /wp:column -->

                                    <!-- wp:column {"width":"100%"} -->
                                    <div class="wp-block-column" style="flex-basis:100%">
                                        <!-- wp:heading {"level":6,"style":{"spacing":{"padding":{"left":"0"}}},"fontSize":"medium"} -->
                                        <h6 class="wp-block-heading has-medium-font-size" style="padding-left:0">
                                            <?php esc_html_e( 'Make Payment', 'aamira' ); ?></h6>
                                        <!-- /wp:heading -->

                                        <!-- wp:paragraph {"align":"left"} -->
                                        <p class="has-text-align-left">
                                            <?php esc_html_e( 'After find your perfect spot, make your', 'aamira' ); ?>
                                            <br><?php esc_html_e( 'payment and get ready to travel.', 'aamira' ); ?>
                                        </p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:column -->
                                </div>
                                <!-- /wp:columns -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group">
                                <!-- wp:columns -->
                                <div class="wp-block-columns">
                                    <!-- wp:column {"width":"20%","className":"book-icon-wrapper3"} -->
                                    <div class="wp-block-column book-icon-wrapper3" style="flex-basis:20%">
                                        <!-- wp:image {"id":5464,"width":"50px","sizeSlug":"full","linkDestination":"none"} -->
                                        <figure class="wp-block-image size-full is-resized"><img
                                                src="<?php echo  get_stylesheet_directory_uri() . '/images/send2.png'; ?>"
                                                alt="" class="wp-image-5464" style="width:50px" /></figure>
                                        <!-- /wp:image -->
                                    </div>
                                    <!-- /wp:column -->

                                    <!-- wp:column {"width":"100%"} -->
                                    <div class="wp-block-column" style="flex-basis:100%">
                                        <!-- wp:heading {"level":6,"style":{"spacing":{"padding":{"left":"0"}}},"fontSize":"medium"} -->
                                        <h6 class="wp-block-heading has-medium-font-size" style="padding-left:0">
                                            <?php esc_html_e( 'Reach Airport on Selected Date', 'aamira' ); ?>
                                        </h6>
                                        <!-- /wp:heading -->

                                        <!-- wp:paragraph {"align":"left"} -->
                                        <p class="has-text-align-left">
                                            <?php esc_html_e( 'Lastly, you have to arrive at the airport', 'aamira' ); ?>
                                            <br><?php esc_html_e( 'on time and enjoy the vacation.', 'aamira' ); ?>
                                        </p>
                                        <!-- /wp:paragraph -->
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
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"33.33%","style":{"spacing":{"padding":{"top":"0","right":"60px","bottom":"0","left":"0"}}}} -->
                <div class="wp-block-column"
                    style="padding-top:0;padding-right:60px;padding-bottom:0;padding-left:0;flex-basis:33.33%">
                    <!-- wp:cover {"url":"<?php echo  get_stylesheet_directory_uri() . '/images/bg.png'; ?>","id":5393,"dimRatio":20,"customOverlayColor":"#54b3e6","isUserOverlayColor":false,"minHeight":306,"minHeightUnit":"px","isDark":false,"sizeSlug":"full","style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"},"margin":{"top":"8.4rem","bottom":"0rem"}},"border":{"radius":"11px"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-cover is-light"
                        style="border-radius:11px;margin-top:8.4rem;margin-bottom:0rem;padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem;min-height:306px">
                        <img class="wp-block-cover__image-background wp-image-5393 size-full" alt=""
                            src="<?php echo  get_stylesheet_directory_uri() . '/images/bg.png'; ?>"
                            data-object-fit="cover" /><span aria-hidden="true"
                            class="wp-block-cover__background has-background-dim-20 has-background-dim"
                            style="background-color:#54b3e6"></span>
                        <div class="wp-block-cover__inner-container">
                            <!-- wp:group {"style":{"border":{"radius":"0px"}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                            <div class="wp-block-group has-base-background-color has-background"
                                style="border-radius:0px">
                                <!-- wp:image {"id":6166,"width":"435px","height":"200px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.9rem"}}} -->
                                <figure class="wp-block-image size-full is-resized has-custom-border"><img
                                        src="<?php echo  get_stylesheet_directory_uri() . '/images/booking-img2'; ?>"
                                        alt="" class="wp-image-6166"
                                        style="border-radius:0.9rem;object-fit:cover;width:435px;height:200px" />
                                </figure>
                                <!-- /wp:image -->

                                <!-- wp:group {"style":{"spacing":{"padding":{"top":"1.4rem","right":"1.4rem","bottom":"1.4rem","left":"1.4rem"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                                <div class="wp-block-group has-base-background-color has-background"
                                    style="margin-top:0;margin-bottom:0;padding-top:1.4rem;padding-right:1.4rem;padding-bottom:1.4rem;padding-left:1.4rem">
                                    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} -->
                                    <p class="has-medium-font-size" style="font-style:normal;font-weight:700">
                                        <?php esc_html_e( 'Trip To Greece', 'aamira' ); ?></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                                    <p style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                                        <?php esc_html_e( '14-29 June | by Robbin joseph', 'aamira' ); ?></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                                    <div class="wp-block-group">
                                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                        <div class="wp-block-group"
                                            style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                                            <!-- wp:group {"className":"easy-icon-wrapper","layout":{"type":"constrained"}} -->
                                            <div class="wp-block-group easy-icon-wrapper">
                                                <!-- wp:image {"id":5395,"width":"20px","height":"auto","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded easy-icon","style":{"border":{"radius":"50px"}}} -->
                                                <figure
                                                    class="wp-block-image size-full is-resized has-custom-border is-style-rounded easy-icon">
                                                    <img src="<?php echo  get_stylesheet_directory_uri() . '/images/leaf.png'; ?>"
                                                        alt="" class="wp-image-5395"
                                                        style="border-radius:50px;width:20px;height:auto" />
                                                </figure>
                                                <!-- /wp:image -->
                                            </div>
                                            <!-- /wp:group -->

                                            <!-- wp:group {"className":"easy-icon-wrapper","layout":{"type":"constrained"}} -->
                                            <div class="wp-block-group easy-icon-wrapper">
                                                <!-- wp:image {"id":5396,"width":"20px","height":"auto","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded easy-icon"} -->
                                                <figure
                                                    class="wp-block-image size-full is-resized is-style-rounded easy-icon">
                                                    <img src="<?php echo  get_stylesheet_directory_uri() . '/images/map.png'; ?>"
                                                        alt="" class="wp-image-5396" style="width:20px;height:auto" />
                                                </figure>
                                                <!-- /wp:image -->
                                            </div>
                                            <!-- /wp:group -->

                                            <!-- wp:group {"className":"easy-icon-wrapper","layout":{"type":"constrained"}} -->
                                            <div class="wp-block-group easy-icon-wrapper">
                                                <!-- wp:image {"id":5397,"width":"20px","height":"auto","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded easy-icon"} -->
                                                <figure
                                                    class="wp-block-image size-full is-resized is-style-rounded easy-icon">
                                                    <img src="<?php echo  get_stylesheet_directory_uri() . '/images/send.png'; ?>"
                                                        alt="" class="wp-image-5397" style="width:20px;height:auto" />
                                                </figure>
                                                <!-- /wp:image -->
                                            </div>
                                            <!-- /wp:group -->
                                        </div>
                                        <!-- /wp:group -->

                                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                                        <div class="wp-block-group">
                                            <!-- wp:image {"id":5409,"sizeSlug":"full","linkDestination":"none"} -->
                                            <figure class="wp-block-image size-full"><img
                                                    src="<?php echo  get_stylesheet_directory_uri() . '/images/building.png'; ?>"
                                                    alt="" class="wp-image-5409" /></figure>
                                            <!-- /wp:image -->

                                            <!-- wp:paragraph -->
                                            <p><?php esc_html_e( '24 people going', 'aamira' ); ?></p>
                                            <!-- /wp:paragraph -->

                                            <!-- wp:image {"id":5410,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"left":"9.5rem"}}}} -->
                                            <figure class="wp-block-image size-full" style="margin-left:9.5rem"><img
                                                    src="<?php echo  get_stylesheet_directory_uri() . '/images/heart.png'; ?>"
                                                    alt="" class="wp-image-5410" /></figure>
                                            <!-- /wp:image -->
                                        </div>
                                        <!-- /wp:group -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->