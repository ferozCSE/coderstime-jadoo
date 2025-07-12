<?php
/**
 * Title: Work Section
 * Slug: aamira/work-section
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 * @package WordPress
 * @subpackage aamira
 * @since aamira 1.0
 */

?>

<!-- wp:group {"metadata":{"categories":["header"],"patternName":"ct-tailwind-theme/work-section","name":"Work Section"},"align":"full","style":{"color":{"background":"#1e3a8a"},"spacing":{"padding":{"top":"3rem","bottom":"3rem"},"blockGap":""},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group alignfull has-background"
    style="background-color:#1e3a8a;padding-top:3rem;padding-bottom:3rem">
    <!-- wp:heading {"textAlign":"center","align":"wide","style":{"typography":{"fontSize":"36px","fontWeight":"700","fontStyle":"normal"},"spacing":{"margin":{"bottom":"40px"}}},"textColor":"white"} -->
    <h2 class="wp-block-heading alignwide has-text-align-center has-white-color has-text-color"
        style="margin-bottom:40px;font-size:36px;font-style:normal;font-weight:700">
        <?php esc_html_e( 'How it works?', 'aamira' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|20"}}}} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
            <!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"color":{"background":"#2b5ea9"},"layout":{"type":"constrained","contentSize":"300px"},"dimensions":{"minHeight":""}}} -->
            <div class="wp-block-group has-background"
                style="border-radius:12px;background-color:#2b5ea9;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">
                <!-- wp:image {"id":5640,"width":"60px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img
                        src="<?php echo  get_stylesheet_directory_uri() . '/images/desktop-icon.png'; ?>" alt=""
                        class="wp-image-5640" style="width:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontWeight":"700","fontStyle":"normal","fontSize":"24px"},"spacing":{"margin":{"top":"16px","bottom":"16px","right":"73"}}},"textColor":"white"} -->
                <h3 class="wp-block-heading has-text-align-left has-white-color has-text-color"
                    style="margin-top:16px;margin-right:73;margin-bottom:16px;font-size:24px;font-style:normal;font-weight:700">
                    <?php esc_html_e( '1. Get your custom dashboard', 'aamira' ); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"bottom":"20px","top":"20px"}}},"textColor":"white"} -->
                <p class="has-text-align-left has-white-color has-text-color"
                    style="margin-top:20px;margin-bottom:20px;font-size:18px">
                    <?php esc_html_e( 'Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo minec lectus. Nam commodo turpis id lectus scelerisque vulputate.', 'aamira' ); ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
            <!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"color":{"background":"#2b5ea9"},"layout":{"type":"constrained","contentSize":"300px"}}} -->
            <div class="wp-block-group has-background"
                style="border-radius:12px;background-color:#2b5ea9;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">
                <!-- wp:image {"id":5639,"width":"60px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img
                        src="<?php echo  get_stylesheet_directory_uri() . '/images/cube-icon.png'; ?>" alt=""
                        class="wp-image-5639" style="width:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"24px","fontWeight":"700","fontStyle":"normal"},"spacing":{"margin":{"top":"16px","bottom":"8px"}}},"textColor":"white"} -->
                <h3 class="wp-block-heading has-text-align-left has-white-color has-text-color"
                    style="margin-top:16px;margin-bottom:8px;font-size:24px;font-style:normal;font-weight:700">2.
                    <?php esc_html_e( '2.Connect to your social networks', 'aamira' ); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"bottom":"20px","top":"20px"}}},"textColor":"white"} -->
                <p class="has-text-align-left has-white-color has-text-color"
                    style="margin-top:20px;margin-bottom:20px;font-size:18px">
                    <?php esc_html_e( 'Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo minec lectus. Nam commodo turpis id lectus scelerisque vulputate.', 'aamira' ); ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
            <!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"color":{"background":"#2b5ea9"},"layout":{"type":"constrained","contentSize":"300px"}}} -->
            <div class="wp-block-group has-background"
                style="border-radius:12px;background-color:#2b5ea9;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">
                <!-- wp:image {"id":5638,"width":"60px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img
                        src="<?php echo  get_stylesheet_directory_uri() . '/images/pencil-icon.png'; ?>" alt=""
                        class="wp-image-5638" style="width:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"24px","fontWeight":"700","fontStyle":"normal"},"spacing":{"margin":{"top":"16px","bottom":"8px"}}},"textColor":"white"} -->
                <h3 class="wp-block-heading has-text-align-left has-white-color has-text-color"
                    style="margin-top:16px;margin-bottom:8px;font-size:24px;font-style:normal;font-weight:700">
                    <?php esc_html_e( '3. Post your content', 'aamira' ); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"bottom":"20px","top":"20px"}}},"textColor":"white"} -->
                <p class="has-text-align-left has-white-color has-text-color"
                    style="margin-top:20px;margin-bottom:20px;font-size:18px">
                    <?php esc_html_e( 'Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo minec lectus. Nam commodo turpis id lectus scelerisque vulputate.', 'aamira' ); ?>
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