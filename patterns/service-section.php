<?php
/**
 * Title: Service Section
 * Slug: aamira/service-section
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 * @package WordPress
 * @subpackage aamira
 * @since aamira 1.0
 */

?>


<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","right":"0rem","left":"0rem"},"blockGap":"0"},"color":{"background":"#0e2128"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-background"
    style="background-color:#0e2128;padding-top:5rem;padding-right:0rem;padding-bottom:5rem;padding-left:0rem">
    <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"color":{"text":"#32b745"},"elements":{"link":{"color":{"text":"#32b745"}}},"typography":{"fontSize":"48px"}}} -->
            <p class="has-text-color has-link-color" style="color:#32b745;font-size:48px">
                <?php esc_html_e( 'Service', 'aamira' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"48px"}},"textColor":"white"} -->
            <p class="has-white-color has-text-color has-link-color" style="font-size:48px">
                <?php esc_html_e( 'We Provide', 'aamira' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"1rem"}},"typography":{"fontSize":"20px"}},"textColor":"white"} -->
    <h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color"
        style="margin-top:1rem;font-size:20px">
        <strong><?php esc_html_e( 'Our services include strategy, consultation, web/app maintenance, and e-', 'aamira' ); ?></strong>
    </h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"20px"}},"textColor":"white"} -->
    <p class="has-text-align-center has-white-color has-text-color has-link-color" style="font-size:20px">
        <strong><?php esc_html_e( 'commerce  solutions, all tailored to enhance user experience and drive results.', 'aamira' ); ?></strong>
    </p>
    <!-- /wp:paragraph -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"2rem","bottom":"0rem"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-top:2rem;margin-bottom:0rem">
        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"bottom":"0rem"},"blockGap":{"top":"0","left":"var:preset|spacing|40"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center" style="margin-bottom:0rem">
            <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0"},"color":{"background":"#0a161c"},"border":{"width":"2px","radius":"15px"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
            <div class="wp-block-column is-vertically-aligned-center has-background"
                style="border-width:2px;border-radius:15px;background-color:#0a161c">
                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:group {"layout":{"type":"constrained","justifyContent":"right","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-group">
                        <!-- wp:image {"id":5968,"width":"260px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"right":"0px","left":"0px","top":"50px"}},"border":{"radius":"10px","width":"0px","style":"none"}}} -->
                        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"
                            style="margin-top:50px;margin-right:0px;margin-left:0px"><img
                                src="<?php echo  get_stylesheet_directory_uri() . '/images/Mobile-app-Developments2.jpg'; ?>"
                                alt="" class="wp-image-5968"
                                style="border-style:none;border-width:0px;border-radius:10px;width:260px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-group alignfull">
                        <!-- wp:heading {"textAlign":"center","align":"full","className":"image-section","style":{"elements":{"link":{"color":{"text":"#32b745"}}},"spacing":{"margin":{"top":"1rem","bottom":"0"}},"color":{"text":"#32b745"},"typography":{"fontSize":"18px"}}} -->
                        <h2 class="wp-block-heading alignfull has-text-align-center image-section has-text-color has-link-color"
                            style="color:#32b745;margin-top:1rem;margin-bottom:0;font-size:18px">
                            <?php esc_html_e( 'Mobile App Development', 'aamira' ); ?>
                        </h2>
                        <!-- /wp:heading -->

                        <!-- wp:buttons {"className":"mt-5","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
                        <div class="wp-block-buttons mt-5" style="margin-bottom:var(--wp--preset--spacing--50)">
                            <!-- wp:button {"textColor":"base","className":"bg-[#0f2a2f] text-white mt-5 py-2 px-6 rounded-lg transition-all duration-300 ease-in-out hover:bg-[#32b745] hover:text-[#071014] hover:shadow-md hover:opacity-90 is-style-outline","style":{"spacing":{"padding":{"left":"1rem","right":"1rem","top":"0.7rem","bottom":"0.7rem"}},"border":{"radius":"1rem"},"color":{"background":"#0e2128"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
                            <div
                                class="wp-block-button bg-[#0f2a2f] text-white mt-5 py-2 px-6 rounded-lg transition-all duration-300 ease-in-out hover:bg-[#32b745] hover:text-[#071014] hover:shadow-md hover:opacity-90 is-style-outline">
                                <a class="wp-block-button__link has-base-color has-text-color has-background has-link-color wp-element-button"
                                    style="border-radius:1rem;background-color:#0e2128;padding-top:0.7rem;padding-right:1rem;padding-bottom:0.7rem;padding-left:1rem"><?php esc_html_e( 'View Plans', 'aamira' ); ?></a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0"},"color":{"background":"#0a161c"},"border":{"width":"2px","radius":"15px"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
            <div class="wp-block-column is-vertically-aligned-center has-background"
                style="border-width:2px;border-radius:15px;background-color:#0a161c">
                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:group {"layout":{"type":"constrained","justifyContent":"right","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-group">
                        <!-- wp:image {"id":5967,"width":"260px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"right":"0px","left":"0px","top":"50px"}},"border":{"radius":"10px","width":"0px","style":"none"}}} -->
                        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"
                            style="margin-top:50px;margin-right:0px;margin-left:0px"><img
                                src="<?php echo  get_stylesheet_directory_uri() . '/images/Ui-Design.jpg'; ?>" alt=""
                                class="wp-image-5967"
                                style="border-style:none;border-width:0px;border-radius:10px;width:260px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-group alignfull">
                        <!-- wp:heading {"textAlign":"center","level":3,"className":"image-section","style":{"elements":{"link":{"color":{"text":"#32b745"}}},"spacing":{"margin":{"top":"1rem","bottom":"0"}},"color":{"text":"#32b745"},"typography":{"fontSize":"18px"}}} -->
                        <h3 class="wp-block-heading has-text-align-center image-section has-text-color has-link-color"
                            style="color:#32b745;margin-top:1rem;margin-bottom:0;font-size:18px">
                            <strong><?php esc_html_e( 'UI/UX Design (Web + Mobile)', 'aamira' ); ?></strong>
                        </h3>
                        <!-- /wp:heading -->

                        <!-- wp:buttons {"className":"mt-5","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
                        <div class="wp-block-buttons mt-5" style="margin-bottom:var(--wp--preset--spacing--50)">
                            <!-- wp:button {"textColor":"base","className":"bg-[#0f2a2f] text-white mt-5 py-2 px-6 rounded-lg transition-all duration-300 ease-in-out hover:bg-[#32b745] hover:text-[#071014] hover:shadow-md hover:opacity-90 is-style-outline","style":{"spacing":{"padding":{"left":"1rem","right":"1rem","top":"0.7rem","bottom":"0.7rem"}},"border":{"radius":"1rem"},"color":{"background":"#0e2128"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
                            <div
                                class="wp-block-button bg-[#0f2a2f] text-white mt-5 py-2 px-6 rounded-lg transition-all duration-300 ease-in-out hover:bg-[#32b745] hover:text-[#071014] hover:shadow-md hover:opacity-90 is-style-outline">
                                <a class="wp-block-button__link has-base-color has-text-color has-background has-link-color wp-element-button"
                                    style="border-radius:1rem;background-color:#0e2128;padding-top:0.7rem;padding-right:1rem;padding-bottom:0.7rem;padding-left:1rem"><?php esc_html_e( 'View Plans', 'aamira' ); ?></a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0"},"color":{"background":"#0a161c"},"border":{"width":"2px","radius":"15px"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
            <div class="wp-block-column is-vertically-aligned-center has-background"
                style="border-width:2px;border-radius:15px;background-color:#0a161c">
                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:group {"layout":{"type":"constrained","justifyContent":"right","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-group">
                        <!-- wp:image {"id":5971,"width":"260px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"right":"0px","left":"0px","top":"50px"}},"border":{"radius":"10px","width":"0px","style":"none"}}} -->
                        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"
                            style="margin-top:50px;margin-right:0px;margin-left:0px"><img
                                src="<?php echo  get_stylesheet_directory_uri() . '/images/Product-Design.jpg'; ?>"
                                alt="" class="wp-image-5971"
                                style="border-style:none;border-width:0px;border-radius:10px;width:260px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"textAlign":"center","level":3,"className":"image-section","style":{"elements":{"link":{"color":{"text":"#32b745"}}},"spacing":{"margin":{"top":"1rem","bottom":"0"}},"color":{"text":"#32b745"},"typography":{"fontSize":"18px"}}} -->
                        <h3 class="wp-block-heading has-text-align-center image-section has-text-color has-link-color"
                            style="color:#32b745;margin-top:1rem;margin-bottom:0;font-size:18px">
                            <?php esc_html_e( 'Product Design', 'aamira' ); ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:buttons {"className":"mt-5","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
                        <div class="wp-block-buttons mt-5" style="margin-bottom:var(--wp--preset--spacing--50)">
                            <!-- wp:button {"textColor":"base","className":"bg-[#0f2a2f] text-white mt-5 py-2 px-6 rounded-lg transition-all duration-300 ease-in-out hover:bg-[#32b745] hover:text-[#071014] hover:shadow-md hover:opacity-90 is-style-outline","style":{"spacing":{"padding":{"left":"1rem","right":"1rem","top":"0.7rem","bottom":"0.7rem"}},"border":{"radius":"1rem"},"color":{"background":"#0e2128"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
                            <div
                                class="wp-block-button bg-[#0f2a2f] text-white mt-5 py-2 px-6 rounded-lg transition-all duration-300 ease-in-out hover:bg-[#32b745] hover:text-[#071014] hover:shadow-md hover:opacity-90 is-style-outline">
                                <a class="wp-block-button__link has-base-color has-text-color has-background has-link-color wp-element-button"
                                    style="border-radius:1rem;background-color:#0e2128;padding-top:0.7rem;padding-right:1rem;padding-bottom:0.7rem;padding-left:1rem"><?php esc_html_e( 'View Plans', 'aamira' ); ?></a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"bottom":"0rem"},"blockGap":{"top":"0","left":"var:preset|spacing|40"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center" style="margin-bottom:0rem">
            <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0"},"color":{"background":"#0a161c"},"border":{"width":"2px","radius":"15px"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
            <div class="wp-block-column is-vertically-aligned-center has-background"
                style="border-width:2px;border-radius:15px;background-color:#0a161c">
                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:group {"layout":{"type":"constrained","justifyContent":"right","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-group">
                        <!-- wp:image {"id":5975,"width":"260px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"right":"0px","left":"0px","top":"50px"}},"border":{"radius":"10px","width":"0px","style":"none"}}} -->
                        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"
                            style="margin-top:50px;margin-right:0px;margin-left:0px"><img
                                src="<?php echo  get_stylesheet_directory_uri() . '/images/Graphic-Design.jpg'; ?>"
                                alt="" class="wp-image-5975"
                                style="border-style:none;border-width:0px;border-radius:10px;width:260px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"textAlign":"center","level":3,"align":"full","className":"image-section","style":{"elements":{"link":{"color":{"text":"#32b745"}}},"spacing":{"margin":{"top":"1rem","bottom":"0"}},"color":{"text":"#32b745"},"typography":{"fontSize":"18px"}}} -->
                        <h3 class="wp-block-heading alignfull has-text-align-center image-section has-text-color has-link-color"
                            style="color:#32b745;margin-top:1rem;margin-bottom:0;font-size:18px">
                            <strong><?php esc_html_e( 'Graphic Design', 'aamira' ); ?></strong>
                        </h3>
                        <!-- /wp:heading -->

                        <!-- wp:buttons {"className":"mt-5","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
                        <div class="wp-block-buttons mt-5" style="margin-bottom:var(--wp--preset--spacing--50)">
                            <!-- wp:button {"textColor":"base","className":"bg-[#0f2a2f] text-white mt-5 py-2 px-6 rounded-lg transition-all duration-300 ease-in-out hover:bg-[#32b745] hover:text-[#071014] hover:shadow-md hover:opacity-90 is-style-outline","style":{"spacing":{"padding":{"left":"1rem","right":"1rem","top":"0.7rem","bottom":"0.7rem"}},"border":{"radius":"1rem"},"color":{"background":"#0e2128"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
                            <div
                                class="wp-block-button bg-[#0f2a2f] text-white mt-5 py-2 px-6 rounded-lg transition-all duration-300 ease-in-out hover:bg-[#32b745] hover:text-[#071014] hover:shadow-md hover:opacity-90 is-style-outline">
                                <a class="wp-block-button__link has-base-color has-text-color has-background has-link-color wp-element-button"
                                    style="border-radius:1rem;background-color:#0e2128;padding-top:0.7rem;padding-right:1rem;padding-bottom:0.7rem;padding-left:1rem"><?php esc_html_e( 'View Plans', 'aamira' ); ?></a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0"},"color":{"background":"#0a161c"},"border":{"width":"2px","radius":"15px"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
            <div class="wp-block-column is-vertically-aligned-center has-background"
                style="border-width:2px;border-radius:15px;background-color:#0a161c">
                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:group {"layout":{"type":"constrained","justifyContent":"right","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-group">
                        <!-- wp:image {"id":5976,"width":"260px","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default","style":{"spacing":{"margin":{"right":"0px","left":"0px","top":"50px"}},"border":{"radius":"10px","width":"0px","style":"none"}}} -->
                        <figure
                            class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default"
                            style="margin-top:50px;margin-right:0px;margin-left:0px"><img
                                src="<?php echo  get_stylesheet_directory_uri() . '/images/Web-developments.jpg'; ?>"
                                alt="" class="wp-image-5976"
                                style="border-style:none;border-width:0px;border-radius:10px;width:260px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"#32b745"}}},"spacing":{"margin":{"top":"1rem","bottom":"0"}},"color":{"text":"#32b745"},"typography":{"fontSize":"18px"}}} -->
                        <h3 class="wp-block-heading has-text-align-center has-text-color has-link-color"
                            style="color:#32b745;margin-top:1rem;margin-bottom:0;font-size:18px">
                            <strong><?php esc_html_e( 'Web Design & Development', 'aamira' ); ?></strong>
                        </h3>
                        <!-- /wp:heading -->

                        <!-- wp:buttons {"className":"mt-5","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
                        <div class="wp-block-buttons mt-5" style="margin-bottom:var(--wp--preset--spacing--50)">
                            <!-- wp:button {"textColor":"base","className":"bg-[#0f2a2f] text-white mt-5 py-2 px-6 rounded-lg transition-all duration-300 ease-in-out hover:bg-[#32b745] hover:text-[#071014] hover:shadow-md hover:opacity-90 is-style-outline","style":{"spacing":{"padding":{"left":"1rem","right":"1rem","top":"0.7rem","bottom":"0.7rem"}},"border":{"radius":"1rem"},"color":{"background":"#0e2128"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
                            <div
                                class="wp-block-button bg-[#0f2a2f] text-white mt-5 py-2 px-6 rounded-lg transition-all duration-300 ease-in-out hover:bg-[#32b745] hover:text-[#071014] hover:shadow-md hover:opacity-90 is-style-outline">
                                <a class="wp-block-button__link has-base-color has-text-color has-background has-link-color wp-element-button"
                                    style="border-radius:1rem;background-color:#0e2128;padding-top:0.7rem;padding-right:1rem;padding-bottom:0.7rem;padding-left:1rem"><?php esc_html_e( 'View Plans', 'aamira' ); ?></a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0"},"color":{"background":"#0a161c"},"border":{"width":"2px","radius":"15px"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
            <div class="wp-block-column is-vertically-aligned-center has-background"
                style="border-width:2px;border-radius:15px;background-color:#0a161c">
                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:group {"layout":{"type":"constrained","justifyContent":"right","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-group">
                        <!-- wp:image {"id":5977,"width":"260px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"right":"0px","left":"0px","top":"50px"}},"border":{"radius":"10px","width":"0px","style":"none"}}} -->
                        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"
                            style="margin-top:50px;margin-right:0px;margin-left:0px"><img
                                src="<?php echo  get_stylesheet_directory_uri() . '/images/Digital-marketing.jpg'; ?>"
                                alt="" class="wp-image-5977"
                                style="border-style:none;border-width:0px;border-radius:10px;width:260px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"textAlign":"center","level":3,"className":"image-section","style":{"elements":{"link":{"color":{"text":"#32b745"}}},"spacing":{"margin":{"top":"1rem","bottom":"0"}},"color":{"text":"#32b745"},"typography":{"fontSize":"18px"}}} -->
                        <h3 class="wp-block-heading has-text-align-center image-section has-text-color has-link-color"
                            style="color:#32b745;margin-top:1rem;margin-bottom:0;font-size:18px">
                            <strong><?php esc_html_e( 'Digital Marketing', 'aamira' ); ?></strong>
                        </h3>
                        <!-- /wp:heading -->

                        <!-- wp:buttons {"className":"mt-5","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
                        <div class="wp-block-buttons mt-5" style="margin-bottom:var(--wp--preset--spacing--50)">
                            <!-- wp:button {"textColor":"base","className":"bg-[#0f2a2f] text-white mt-5 py-2 px-6 rounded-lg transition-all duration-300 ease-in-out hover:bg-[#32b745] hover:text-[#071014] hover:shadow-md hover:opacity-90 is-style-outline","style":{"spacing":{"padding":{"left":"1rem","right":"1rem","top":"0.7rem","bottom":"0.7rem"}},"border":{"radius":"1rem"},"color":{"background":"#0e2128"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
                            <div
                                class="wp-block-button bg-[#0f2a2f] text-white mt-5 py-2 px-6 rounded-lg transition-all duration-300 ease-in-out hover:bg-[#32b745] hover:text-[#071014] hover:shadow-md hover:opacity-90 is-style-outline">
                                <a class="wp-block-button__link has-base-color has-text-color has-background has-link-color wp-element-button"
                                    style="border-radius:1rem;background-color:#0e2128;padding-top:0.7rem;padding-right:1rem;padding-bottom:0.7rem;padding-left:1rem"><?php esc_html_e( 'View Plans', 'aamira' ); ?></a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"bottom":"0rem"},"blockGap":{"top":"0","left":"var:preset|spacing|40"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center" style="margin-bottom:0rem">
            <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0"},"color":{"background":"#0a161c"},"border":{"width":"2px","radius":"15px"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
            <div class="wp-block-column is-vertically-aligned-center has-background"
                style="border-width:2px;border-radius:15px;background-color:#0a161c">
                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:group {"layout":{"type":"constrained","justifyContent":"right","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-group">
                        <!-- wp:image {"id":5980,"width":"260px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"right":"0px","left":"0px","top":"50px"}},"border":{"radius":"10px","width":"0px","style":"none"}}} -->
                        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"
                            style="margin-top:50px;margin-right:0px;margin-left:0px"><img
                                src="<?php echo  get_stylesheet_directory_uri() . '/images/Animation.jpg'; ?>" alt=""
                                class="wp-image-5980"
                                style="border-style:none;border-width:0px;border-radius:10px;width:260px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"textAlign":"center","level":3,"className":"image-section","style":{"elements":{"link":{"color":{"text":"#32b745"}}},"spacing":{"margin":{"top":"1rem","bottom":"0"}},"color":{"text":"#32b745"},"typography":{"fontSize":"18px"}}} -->
                        <h3 class="wp-block-heading has-text-align-center image-section has-text-color has-link-color"
                            style="color:#32b745;margin-top:1rem;margin-bottom:0;font-size:18px">
                            <strong><?php esc_html_e( 'Animation', 'aamira' ); ?></strong>
                        </h3>
                        <!-- /wp:heading -->

                        <!-- wp:buttons {"className":"mt-5","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
                        <div class="wp-block-buttons mt-5" style="margin-bottom:var(--wp--preset--spacing--50)">
                            <!-- wp:button {"textColor":"base","className":"bg-[#0f2a2f] text-white mt-5 py-2 px-6 rounded-lg transition-all duration-300 ease-in-out hover:bg-[#32b745] hover:text-[#071014] hover:shadow-md hover:opacity-90 is-style-outline","style":{"spacing":{"padding":{"left":"1rem","right":"1rem","top":"0.7rem","bottom":"0.7rem"}},"border":{"radius":"1rem"},"color":{"background":"#0e2128"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
                            <div
                                class="wp-block-button bg-[#0f2a2f] text-white mt-5 py-2 px-6 rounded-lg transition-all duration-300 ease-in-out hover:bg-[#32b745] hover:text-[#071014] hover:shadow-md hover:opacity-90 is-style-outline">
                                <a class="wp-block-button__link has-base-color has-text-color has-background has-link-color wp-element-button"
                                    style="border-radius:1rem;background-color:#0e2128;padding-top:0.7rem;padding-right:1rem;padding-bottom:0.7rem;padding-left:1rem"><?php esc_html_e( 'View Plans', 'aamira' ); ?></a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0"},"color":{"background":"#0a161c"},"border":{"width":"2px","radius":"15px"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
            <div class="wp-block-column is-vertically-aligned-center has-background"
                style="border-width:2px;border-radius:15px;background-color:#0a161c">
                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:group {"layout":{"type":"constrained","justifyContent":"right","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-group">
                        <!-- wp:image {"id":5981,"width":"260px","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default","style":{"spacing":{"margin":{"right":"0px","left":"0px","top":"50px"}},"border":{"radius":"10px","width":"0px","style":"none"}}} -->
                        <figure
                            class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default"
                            style="margin-top:50px;margin-right:0px;margin-left:0px"><img
                                src="<?php echo  get_stylesheet_directory_uri() . '/images/Montion-Graphic.jpg'; ?>"
                                alt="" class="wp-image-5981"
                                style="border-style:none;border-width:0px;border-radius:10px;width:260px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"textAlign":"center","level":3,"className":"image-section","style":{"elements":{"link":{"color":{"text":"#32b745"}}},"spacing":{"margin":{"top":"1rem","bottom":"0"}},"color":{"text":"#32b745"},"typography":{"fontSize":"18px"}}} -->
                        <h3 class="wp-block-heading has-text-align-center image-section has-text-color has-link-color"
                            style="color:#32b745;margin-top:1rem;margin-bottom:0;font-size:18px">
                            <strong><?php esc_html_e( 'Motion Graphics', 'aamira' ); ?></strong>
                        </h3>
                        <!-- /wp:heading -->

                        <!-- wp:buttons {"className":"mt-5","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
                        <div class="wp-block-buttons mt-5" style="margin-bottom:var(--wp--preset--spacing--50)">
                            <!-- wp:button {"textColor":"base","className":"bg-[#0f2a2f] text-white mt-5 py-2 px-6 rounded-lg transition-all duration-300 ease-in-out hover:bg-[#32b745] hover:text-[#071014] hover:shadow-md hover:opacity-90 is-style-outline","style":{"spacing":{"padding":{"left":"1rem","right":"1rem","top":"0.7rem","bottom":"0.7rem"}},"border":{"radius":"1rem"},"color":{"background":"#0e2128"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
                            <div
                                class="wp-block-button bg-[#0f2a2f] text-white mt-5 py-2 px-6 rounded-lg transition-all duration-300 ease-in-out hover:bg-[#32b745] hover:text-[#071014] hover:shadow-md hover:opacity-90 is-style-outline">
                                <a class="wp-block-button__link has-base-color has-text-color has-background has-link-color wp-element-button"
                                    style="border-radius:1rem;background-color:#0e2128;padding-top:0.7rem;padding-right:1rem;padding-bottom:0.7rem;padding-left:1rem"><?php esc_html_e( 'View Plans', 'aamira' ); ?></a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0"},"color":{"background":"#0a161c"},"border":{"width":"2px","radius":"15px"}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
            <div class="wp-block-column is-vertically-aligned-center has-background"
                style="border-width:2px;border-radius:15px;background-color:#0a161c">
                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:group {"layout":{"type":"constrained","justifyContent":"right","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-group">
                        <!-- wp:image {"id":5982,"width":"260px","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default","style":{"spacing":{"margin":{"right":"0px","left":"0px","top":"50px"}},"border":{"radius":"10px","width":"0px","style":"none"}}} -->
                        <figure
                            class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default"
                            style="margin-top:50px;margin-right:0px;margin-left:0px"><img
                                src="<?php echo  get_stylesheet_directory_uri() . '/images/Video-Editing.jpg'; ?>"
                                alt="" class="wp-image-5982"
                                style="border-style:none;border-width:0px;border-radius:10px;width:260px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"textAlign":"center","level":3,"className":"image-section","style":{"elements":{"link":{"color":{"text":"#32b745"}}},"spacing":{"margin":{"top":"1rem","bottom":"0"}},"color":{"text":"#32b745"},"typography":{"fontSize":"18px"}}} -->
                        <h3 class="wp-block-heading has-text-align-center image-section has-text-color has-link-color"
                            style="color:#32b745;margin-top:1rem;margin-bottom:0;font-size:18px">
                            <strong><?php esc_html_e( 'Video Editing', 'aamira' ); ?></strong>
                        </h3>
                        <!-- /wp:heading -->

                        <!-- wp:buttons {"className":"mt-5","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
                        <div class="wp-block-buttons mt-5" style="margin-bottom:var(--wp--preset--spacing--50)">
                            <!-- wp:button {"textColor":"base","className":"bg-[#0f2a2f] text-white mt-5 py-2 px-6 rounded-lg transition-all duration-300 ease-in-out hover:bg-[#32b745] hover:text-[#071014] hover:shadow-md hover:opacity-90 is-style-outline","style":{"spacing":{"padding":{"left":"1rem","right":"1rem","top":"0.7rem","bottom":"0.7rem"}},"border":{"radius":"1rem"},"color":{"background":"#0e2128"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
                            <div
                                class="wp-block-button bg-[#0f2a2f] text-white mt-5 py-2 px-6 rounded-lg transition-all duration-300 ease-in-out hover:bg-[#32b745] hover:text-[#071014] hover:shadow-md hover:opacity-90 is-style-outline">
                                <a class="wp-block-button__link has-base-color has-text-color has-background has-link-color wp-element-button"
                                    style="border-radius:1rem;background-color:#0e2128;padding-top:0.7rem;padding-right:1rem;padding-bottom:0.7rem;padding-left:1rem"><?php esc_html_e( 'View Plans', 'aamira' ); ?></a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons">
            <!-- wp:button {"textAlign":"center","className":"text-base mt-5 hover:scale-105 transition-all duration-300 ease-in-out is-style-outline","style":{"border":{"radius":"8px"},"color":{"background":"#324347","text":"#32b745"},"elements":{"link":{"color":{"text":"#32b745"}}}}} -->
            <div
                class="wp-block-button text-base mt-5 hover:scale-105 transition-all duration-300 ease-in-out is-style-outline">
                <a class="wp-block-button__link has-text-color has-background has-link-color has-text-align-center wp-element-button"
                    style="border-radius:8px;color:#32b745;background-color:#324347"><?php esc_html_e( 'Load More', 'aamira' ); ?></a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->