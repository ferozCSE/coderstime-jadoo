<?php
/**
 * Title: Header Hero Section2
 * Slug: aamira/header-hero-section2
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 * @package WordPress
 * @subpackage aamira
 * @since aamira 1.0
 */

?>

<!-- wp:cover {"overlayColor":"black","isUserOverlayColor":true,"minHeight":34,"minHeightUnit":"rem","metadata":{"categories":["header"],"patternName":"aamira/header-hero-section2","name":"Header Hero Section2"},"align":"full","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-cover alignfull" style="min-height:34rem"><span aria-hidden="true"
        class="wp-block-cover__background has-black-background-color has-background-dim-100 has-background-dim"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
        <div class="wp-block-group alignwide">
            <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"3rem"}}}} -->
            <div class="wp-block-columns alignwide">
                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">
                    <!-- wp:heading {"className":"text-4xl md:text-5xl lg:text-7xl leading-[1.05] tracking-[0.03em] text-white text-center md:text-left font-bold capitalize","textColor":"text-primary"} -->
                    <h2
                        class="wp-block-heading text-4xl md:text-5xl lg:text-7xl leading-[1.05] tracking-[0.03em] text-white text-center md:text-left font-bold capitalize has-text-primary-color has-text-color">
                        <?php esc_html_e( 'Innovative solutions for', 'aamira' ); ?>
                    </h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"text-7xl capitalize ","style":{"elements":{"link":{"color":{"text":"#32b745"}}},"color":{"text":"#32b745"},"typography":{"fontSize":"72px"}}} -->
                    <p class="text-7xl capitalize has-text-color has-link-color" style="color:#32b745;font-size:72px">
                        <?php esc_html_e( 'Digital Product', 'aamira' ); ?>
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:spacer {"height":"8px"} -->
                    <div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:paragraph {"textColor":"text-primary"} -->
                    <p class="has-text-primary-color has-text-color"><?php esc_html_e( 'We’re here to help your business grow with reliable
                        IT and design services. Whether you need tech support or eye-catching graphics, we’ve got your
                        back with creative, high-quality solutions made just for you.', 'aamira' ); ?>
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:spacer {"height":"16px"} -->
                    <div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"textColor":"black","className":"is-style-fill","style":{"color":{"background":"#32b745"},"border":{"radius":"3px"},"typography":{"fontSize":"18px"}}} -->
                        <div class="wp-block-button is-style-fill"><a
                                class="wp-block-button__link has-black-color has-text-color has-background has-custom-font-size wp-element-button"
                                style="border-radius:3px;background-color:#32b745;font-size:18px"><?php esc_html_e( "Let's Get Started Today", 'aamira' ); ?></a>
                        </div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">
                    <!-- wp:image {"id":5840,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
                    <figure class="wp-block-image size-full has-custom-border"><img
                            src="<?php echo  get_stylesheet_directory_uri() . '/images/hero-qllix.jpg'; ?>" alt=""
                            class="wp-image-5840" style="border-radius:10px;object-fit:cover" /></figure>
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