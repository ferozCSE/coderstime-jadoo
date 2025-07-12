<?php
/**
 * Title: Features Section2
 * Slug: aamira/features-section2
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 * @package WordPress
 * @subpackage aamira
 * @since aamira 1.0
 */

?>
<!-- wp:group {"metadata":{"categories":["header"],"patternName":"ct-startup/features-startup","name":"Features Startup"},"align":"full","className":"w-full max-w-[1380px] mx-auto bg-[#f9f9f9] flex flex-col md:flex-row items-center py-10 px-4 md:px-64","style":{"spacing":{"padding":{"top":"30px","bottom":"30"}},"color":{"background":"#f9f9f9"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group alignfull w-full max-w-[1380px] mx-auto bg-[#f9f9f9] flex flex-col md:flex-row items-center py-10 px-4 md:px-64 has-background"
    style="background-color:#f9f9f9;padding-top:30px;padding-bottom:30">
    <!-- wp:group {"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
    <div class="wp-block-group">
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column {"width":"","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":""}}} -->
            <div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                <!-- wp:group {"style":{"spacing":{"padding":{"left":"70px"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                <div class="wp-block-group" style="padding-left:70px">
                    <!-- wp:heading -->
                    <h2 class="wp-block-heading">Nomad Support</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left">
                        <?php esc_html_e( 'We offer our services worldwide, 24/7. You can always count on us to deliver the best for your creative projects.', 'aamira' ); ?>
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:list {"className":"wp-block-list text-lg text-gray-500 space-y-2"} -->
                    <ul class="wp-block-list text-lg text-gray-500 space-y-2">
                        <!-- wp:list-item -->
                        <li><span
                                class="text-green-500 mr-2">✓</span><?php esc_html_e( 'Awesome Feature #1', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><span
                                class="text-green-500 mr-2">✓</span><?php esc_html_e( 'Awesome Feature #2', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><span
                                class="text-green-500 mr-2">✓</span><?php esc_html_e( 'Awesome Feature #3', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"","style":{"spacing":{"padding":{"right":"110px"}}}} -->
            <div class="wp-block-column" style="padding-right:110px">
                <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"60px"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                <div class="wp-block-group alignfull" style="padding-right:60px">
                    <!-- wp:image {"id":5763,"width":"294px","height":"auto","sizeSlug":"full","linkDestination":"none","align":"right"} -->
                    <figure class="wp-block-image alignright size-full is-resized"><img
                            src="<?php echo  get_stylesheet_directory_uri() . '/images/undraw_digital_nomad.png'; ?>"
                            alt="" class="wp-image-5775" style="width:294px;height:auto" /></figure>
                    <!-- /wp:image -->
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