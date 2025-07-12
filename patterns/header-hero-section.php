<?php
/**
 * Title: Header Hero Section
 * Slug: aamira/header-hero-section
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 * @package WordPress
 * @subpackage aamira
 * @since aamira 1.0
 */

?>

<!-- wp:group {"metadata":{"categories":["header"],"patternName":"ct-tailwind-theme/header-hero-section","name":"Header Hero Section"},"align":"wide","className":"bg-gray-900","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"color":{"background":"#000000"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group alignwide bg-gray-900 has-background"
    style="background-color:#000000;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
    <!-- wp:group {"align":"wide","className":"bg-gray-900","style":{"spacing":{"padding":{"top":"30px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide bg-gray-900" style="padding-top:30px">
        <!-- wp:site-logo {"width":50,"className":"text-white"} /-->

        <!-- wp:paragraph {"className":"inline-flex items-center gap-4 text-lg font-bold tracking-wide text-white hover:opacity-75","style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
        <p class="inline-flex items-center gap-4 text-lg font-bold tracking-wide text-white hover:opacity-75">
            <?php esc_html_e( 'SOCIAL MARKETING', 'aamira' ); ?>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"layout":{"type":"constrained","justifyContent":"right"}} -->
        <div class="wp-block-group">
            <!-- wp:navigation {"ref":4212,"customTextColor":"#686c72","align":"wide","layout":{"type":"flex"}} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button {"style":{"color":{"text":"#686c72","background":"#e1d7d7"},"elements":{"link":{"color":{"text":"#686c72"}}}}} -->
            <div class="wp-block-button"><a
                    class="wp-block-button__link has-text-color has-background has-link-color wp-element-button"
                    style="color:#686c72;background-color:#e1d7d7"><?php esc_html_e( 'Sign In', 'aamira' ); ?></a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
    <div class="wp-block-group alignfull">
        <!-- wp:group {"align":"full","className":"container mx-auto ","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
        <div class="wp-block-group alignfull container mx-auto">
            <!-- wp:group {"layout":{"type":"constrained","contentSize":"650px","wideSize":"880px"}} -->
            <div class="wp-block-group">
                <!-- wp:heading {"textAlign":"center","className":"mb-4 text-3xl font-extrabold text-balance text-white","style":{"color":{"text":"#ffffff"},"elements":{"link":{"color":{"text":"#ffffff"}}}},"fontSize":"x-large"} -->
                <h2 class="wp-block-heading has-text-align-center mb-4 text-3xl font-extrabold text-balance text-white has-text-color has-link-color has-x-large-font-size"
                    style="color:#ffffff">
                    <?php esc_html_e( 'Social media marketing for your online business', 'aamira' ); ?>
                </h2>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"center","level":3,"className":"mx-auto text-lg font-medium text-gray-400","style":{"color":{"text":"#686c72"},"elements":{"link":{"color":{"text":"#686c72"}}}},"fontSize":"medium"} -->
                <h3 class="wp-block-heading has-text-align-center mx-auto text-lg font-medium text-gray-400 has-text-color has-link-color has-medium-font-size"
                    style="color:#686c72">
                    <?php esc_html_e( 'Automate your marketing efforts today and get more clients for your business. 7-day trial is now available to check it out.', 'aamira' ); ?>
                </h3>
                <!-- /wp:heading -->

                <!-- wp:group {"className":"flex flex-wrap justify-center gap-4 pt-10 pb-16","layout":{"type":"constrained"}} -->
                <div class="wp-block-group flex flex-wrap justify-center gap-4 pt-10 pb-16">
                    <!-- wp:necessary-block/buttons-block {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-necessary-block-buttons-block">
                        <!-- wp:necessary-block/button-block {"buttonText":"→ Get Started","buttonBackground":"#28a745","buttonWidth":"15vw","hoverbg":"#32b745","buttonType":"success","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","right":"10px","left":"10px"}},"border":{"radius":"5px"},"typography":{"fontSize":"20px"}}} -->
                        <div class="necessary-block-button align-center alignundefined"
                            style="width:calc(15vw - 1.2rem * .5);height:auto"><a target="_self"
                                class="wp-block-necessary-block-button-block button button-success align-center"
                                style="border-radius:5px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;font-size:20px;--button-hover-color:#ffffff;--button-hover-bg:#32b745;text-align:center;background:#28a745;color:#ffffff;text-decoration:none">→
                                <?php esc_html_e( '→ Get Started', 'aamira' ); ?></a></div>
                        <!-- /wp:necessary-block/button-block -->

                        <!-- wp:necessary-block/button-block {"buttonText":"Live Demo","buttonWidth":"15vw","hoverbg":"#334155","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","right":"10px","left":"10px"}},"border":{"radius":"5px"},"typography":{"fontSize":"20px"}}} -->
                        <div class="necessary-block-button align-center alignundefined"
                            style="width:calc(15vw - 1.2rem * .5);height:auto">
                            <a target="_self"
                                class="wp-block-necessary-block-button-block button button-default align-center"
                                style="border-radius:5px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;font-size:20px;--button-hover-color:#ffffff;--button-hover-bg:#334155;text-align:center;background:#475467;color:#ffffff;text-decoration:none"><?php esc_html_e( 'Live Demo', 'aamira' ); ?>
                            </a>
                        </div>
                        <!-- /wp:necessary-block/button-block -->
                    </div>
                    <!-- /wp:necessary-block/buttons-block -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"relative mx-5 -mb-20 rounded-sm bg-white p-2 shadow-lg sm:-mb-40 lg:mx-32","layout":{"type":"constrained"}} -->
                <div class="wp-block-group relative mx-5 -mb-20 rounded-sm bg-white p-2 shadow-lg sm:-mb-40 lg:mx-32">
                    <!-- wp:image {"id":6061,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"spacing":{"margin":{"bottom":"-130px","top":"45px"}},"border":{"radius":"10px"}}} -->
                    <figure class="wp-block-image alignfull size-full has-custom-border"
                        style="margin-top:45px;margin-bottom:-130px"><img
                            src="<?php echo  get_stylesheet_directory_uri() . '/images/ct-sm.jpg'; ?>" alt=""
                            class="wp-image-6061" style="border-radius:10px" /></figure>
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
<!-- /wp:group -->