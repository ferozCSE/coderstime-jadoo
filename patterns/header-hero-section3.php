<?php
/**
 * Title: Header Hero Section3
 * Slug: aamira/header-hero-section3
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Hero style section for Header area.
 *
 * @package WordPress
 * @subpackage aamira
 * @since aamira 1.0
 */
?>

<!-- wp:cover {"customOverlayColor":"#f5f7fa","isUserOverlayColor":true,"minHeight":34,"minHeightUnit":"rem","contentPosition":"center center","isDark":false,"metadata":{"categories":["header"],"patternName":"coderstime-jadoo/hero-section-jadoo","name":"Header Hero Section3"},"align":"full","className":"hero-pattern","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light hero-pattern" style="min-height:34rem"><span aria-hidden="true"
        class="wp-block-cover__background has-background-dim-100 has-background-dim"
        style="background-color:#f5f7fa"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:cover {"url":"http://localhost/wp-content/uploads/2025/06/hero-bg.png","id":5370,"dimRatio":0,"overlayColor":"base","isUserOverlayColor":true,"focalPoint":{"x":0.25,"y":0.5},"minHeight":804,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"sizeSlug":"full","align":"center","layout":{"type":"default"}} -->
        <div class="wp-block-cover aligncenter is-light" style="min-height:804px"><img
                class="wp-block-cover__image-background wp-image-5370 size-full" alt=""
                src="<?php echo  get_stylesheet_directory_uri() . '/images/hero-bg.png'; ?>"
                style="object-position:25% 50%" data-object-fit="cover" data-object-position="25% 50%" /><span
                aria-hidden="true"
                class="wp-block-cover__background has-base-background-color has-background-dim-0 has-background-dim"></span>
            <div class="wp-block-cover__inner-container">
                <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group alignwide">
                    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"3rem"},"padding":{"bottom":"0"}},"border":{"radius":"0px","width":"0px","style":"none"}}} -->
                    <div class="wp-block-columns alignwide"
                        style="border-style:none;border-width:0px;border-radius:0px;padding-bottom:0">
                        <!-- wp:column {"verticalAlignment":"center"} -->
                        <div class="wp-block-column is-vertically-aligned-center">
                            <!-- wp:paragraph {"style":{"color":{"text":"#df6951"},"elements":{"link":{"color":{"text":"#df6951"}}},"spacing":{"padding":{"top":"2rem"}}},"fontSize":"medium"} -->
                            <p class="has-text-color has-link-color has-medium-font-size"
                                style="color:#df6951;padding-top:2rem">
                                <?php esc_html_e( 'Best Destinations around the world', 'aamira' ); ?>
                            </p>
                            <!-- /wp:paragraph -->

                            <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"5.2rem","lineHeight":"1.1"}},"textColor":"text-primary"} -->
                            <h1 class="wp-block-heading has-text-primary-color has-text-color"
                                style="font-size:5.2rem;line-height:1.1">
                                <?php esc_html_e( 'Travel, enjoy and live a new and full life', 'aamira' ); ?>
                            </h1>
                            <!-- /wp:heading -->

                            <!-- wp:spacer {"height":"8px"} -->
                            <div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
                            <!-- /wp:spacer -->

                            <!-- wp:paragraph {"style":{"color":{"text":"#5e6282"}},"fontSize":"medium"} -->
                            <p class="has-text-color has-medium-font-size" style="color:#5e6282"><?php esc_html_e( 'Built Wicket longer
                                admire do Barton vanity itself do in it. Preferred to sportsmen it engrossed listening.
                                Park gate sell they west hard for the.', 'aamira' ); ?>
                            </p>
                            <!-- /wp:paragraph -->

                            <!-- wp:spacer {"height":"16px"} -->
                            <div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
                            <!-- /wp:spacer -->

                            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group">
                                <!-- wp:buttons -->
                                <div class="wp-block-buttons">
                                    <!-- wp:button {"className":"hero-section-btn","style":{"color":{"background":"#cd8c01"}}} -->
                                    <div class="wp-block-button hero-section-btn"><a
                                            class="wp-block-button__link has-background wp-element-button"
                                            style="background-color:#cd8c01"><?php esc_html_e( 'Find Out More', 'aamira' ); ?></a>
                                    </div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->

                                <!-- wp:image {"id":5253,"width":"49px","height":"auto","sizeSlug":"full","linkDestination":"none","className":"play-btn"} -->
                                <figure class="wp-block-image size-full is-resized play-btn"><img
                                        src="<?php echo  get_stylesheet_directory_uri() . '/images/play.png'; ?>" alt=""
                                        class="wp-image-5253" style="width:49px;height:auto" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:paragraph {"fontSize":"medium"} -->
                                <p class="has-medium-font-size"><?php esc_html_e( 'Play Demo', 'aamira' ); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center"} -->
                        <div class="wp-block-column is-vertically-aligned-center">
                            <!-- wp:image {"id":5258,"width":"748px","sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img
                                    src="<?php echo  get_stylesheet_directory_uri() . '/images/hero-img.png'; ?>" alt=""
                                    class="wp-image-5258" style="width:748px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
</div>
<!-- /wp:cover -->