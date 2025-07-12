<?php
/**
 * Title: Footer3
 * Slug: aamira/footer3
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Site footer with site title and navigation.
 * @package WordPress
 * @subpackage aamira
 * @since aamira 1.0
 */

?>

<!-- wp:group {"metadata":{"categories":["footer"],"patternName":"ct-qllix/footer-qllix","name":"Footer3"},"align":"full","style":{"spacing":{"padding":{"top":"1.5rem"},"margin":{"top":"50px","bottom":"50px"}}},"backgroundColor":"black","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group alignfull has-black-background-color has-background"
    style="margin-top:50px;margin-bottom:50px;padding-top:1.5rem">
    <!-- wp:group {"align":"full","className":"footer-container","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","top":"var:preset|spacing|50"}},"border":{"radius":"0.38rem"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignfull footer-container"
        style="border-radius:0.38rem;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column {"width":"400px","style":{"spacing":{"padding":{"right":"0rem","left":"0"}}}} -->
            <div class="wp-block-column" style="padding-right:0rem;padding-left:0;flex-basis:400px">
                <!-- wp:group {"layout":{"type":"default"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"id":5831,"width":"151px","height":"auto","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"left":"0px"}}}} -->
                    <figure class="wp-block-image size-full is-resized" style="margin-left:0px"><img
                            src="<?php echo  get_stylesheet_directory_uri() . '/images/image2.png'; ?>" alt=""
                            class="wp-image-5831" style="width:151px;height:auto" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"className":"py-10","style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"},"margin":{"left":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                    <p class="py-10 has-white-color has-text-color has-link-color"
                        style="margin-left:0px;padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem">
                        <?php esc_html_e( 'A design agency specializing in crafting functional, intuitive, and human-centered digital experiences for the future.', 'aamira' ); ?>
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"textAlign":"center","className":"text-base mt-5 pl-[1.8rem] hover:scale-105 transition-all duration-300 ease-in-out is-style-fill","style":{"border":{"radius":"8px"},"color":{"background":"#32b745","text":"#071014"},"elements":{"link":{"color":{"text":"#071014"}}}}} -->
                        <div
                            class="wp-block-button text-base mt-5 pl-[1.8rem] hover:scale-105 transition-all duration-300 ease-in-out is-style-fill">
                            <a class="wp-block-button__link has-text-color has-background has-link-color has-text-align-center wp-element-button"
                                style="border-radius:8px;color:#071014;background-color:#32b745"><?php esc_html_e( 'Download Profile', 'aamira' ); ?>
                            </a>
                        </div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"top","width":""} -->
            <div class="wp-block-column is-vertically-aligned-top">
                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"left":"20px"}}},"textColor":"white","fontSize":"medium"} -->
                    <p class="has-white-color has-text-color has-link-color has-medium-font-size"
                        style="padding-left:20px">
                        <strong><?php esc_html_e( 'Our Services', 'aamira' ); ?></strong>
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:list {"className":"py-10 is-style-checkmark-list"} -->
                    <ul class="wp-block-list py-10 is-style-checkmark-list">
                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'Web Design', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'Branding', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'Mobile App', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'Graphic Design', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'UI/UX Design', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'UI/UX Consulting', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'UI/UX Research', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'Product Design', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'Animation', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( ' 3D Modeling', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":""} -->
            <div class="wp-block-column">
                <!-- wp:group {"layout":{"type":"default"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"medium"} -->
                    <p class="has-white-color has-text-color has-link-color has-medium-font-size"></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:list {"className":"py-10 is-style-checkmark-list","style":{"spacing":{"padding":{"right":"0em"},"margin":{"right":"0em"}}}} -->
                    <ul style="margin-right:0em;padding-right:0em" class="wp-block-list py-10 is-style-checkmark-list">
                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'Motion Graphics', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'Video Editing', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'OVC Ads', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'TVC Ads', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'VFX', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'Rotoscoping', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'Green Screen Removing', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'Digital Marketing', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'WordPress Development', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'Print', 'aamira' ); ?>
                            &amp; <?php esc_html_e( 'Packaging', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"","style":{"spacing":{"padding":{"left":"0em"}}}} -->
            <div class="wp-block-column" style="padding-left:0em">
                <!-- wp:group {"layout":{"type":"default"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"left":"20px"}}},"textColor":"white","fontSize":"medium"} -->
                    <p class="has-white-color has-text-color has-link-color has-medium-font-size"
                        style="padding-left:20px">
                        <strong><?php esc_html_e( 'Quick Links', 'aamira' ); ?></strong>
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:list {"className":"py-10 is-style-checkmark-list"} -->
                    <ul class="wp-block-list py-10 is-style-checkmark-list">
                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'Services', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'Portfolio', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'Product', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'Team', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'Career', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <li class="has-white-color has-text-color has-link-color">
                            <?php esc_html_e( 'Blog', 'aamira' ); ?>
                        </li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"","style":{"border":{"radius":"0px"}}} -->
            <div class="wp-block-column" style="border-radius:0px">
                <!-- wp:group {"layout":{"type":"default"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"medium"} -->
                    <p class="has-white-color has-text-color has-link-color has-medium-font-size">
                        <strong><?php esc_html_e( 'Social Media', 'aamira' ); ?></strong>
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:necessary-block/social-shares -->
                    <ul class="wp-block-necessary-block-social-shares">
                        <!-- wp:necessary-block/social-share {"url":"http://localhost/all-patterns/","service":"facebook","showLabels":true} -->
                        <li class="wp-block-necessary-block-social-share wp-social-share wp-block-social-share wp-social-share-facebook has-icon-color-color has-icon-background-color-background-color"
                            data-share="facebook">
                            <div class="wp-block-social-share-anchor"><svg width="24" height="24" viewBox="0 0 24 24"
                                    version="1.1" aria-hidden="true">
                                    <path
                                        d="M12 2C6.5 2 2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7C18.3 21.1 22 17 22 12c0-5.5-4.5-10-10-10z">
                                    </path>
                                </svg><span class="wp-block-social-share-label screen-reader-text">Facebook</span><span
                                    class="screen-reader-text site-description"></span></div>
                        </li>
                        <!-- /wp:necessary-block/social-share -->

                        <!-- wp:necessary-block/social-share {"url":"http://localhost/all-patterns/","service":"instagram","showLabels":true} -->
                        <li class="wp-block-necessary-block-social-share wp-social-share wp-block-social-share wp-social-share-instagram has-icon-color-color has-icon-background-color-background-color"
                            data-share="instagram">
                            <div class="wp-block-social-share-anchor"><svg width="24" height="24" viewBox="0 0 24 24"
                                    version="1.1" aria-hidden="true">
                                    <path
                                        d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z">
                                    </path>
                                </svg><span class="wp-block-social-share-label screen-reader-text">Instagram</span><span
                                    class="screen-reader-text site-description"></span></div>
                        </li>
                        <!-- /wp:necessary-block/social-share -->

                        <!-- wp:necessary-block/social-share {"url":"http://localhost/all-patterns/","service":"x","showLabels":true} -->
                        <li class="wp-block-necessary-block-social-share wp-social-share wp-block-social-share wp-social-share-x has-icon-color-color has-icon-background-color-background-color"
                            data-share="x">
                            <div class="wp-block-social-share-anchor"><svg width="24" height="24" viewBox="0 0 24 24"
                                    version="1.1" aria-hidden="true">
                                    <path
                                        d="M13.982 10.622 20.54 3h-1.554l-5.693 6.618L8.745 3H3.5l6.876 10.007L3.5 21h1.554l6.012-6.989L15.868 21h5.245l-7.131-10.378Zm-2.128 2.474-.697-.997-5.543-7.93H8l4.474 6.4.697.996 5.815 8.318h-2.387l-4.745-6.787Z">
                                    </path>
                                </svg><span class="wp-block-social-share-label screen-reader-text">X</span><span
                                    class="screen-reader-text site-description"></span></div>
                        </li>
                        <!-- /wp:necessary-block/social-share -->

                        <!-- wp:necessary-block/social-share {"url":"http://localhost/all-patterns/","service":"linkedin","showLabels":true} -->
                        <li class="wp-block-necessary-block-social-share wp-social-share wp-block-social-share wp-social-share-linkedin has-icon-color-color has-icon-background-color-background-color"
                            data-share="linkedin">
                            <div class="wp-block-social-share-anchor"><svg width="24" height="24" viewBox="0 0 24 24"
                                    version="1.1" aria-hidden="true">
                                    <path
                                        d="M19.7,3H4.3C3.582,3,3,3.582,3,4.3v15.4C3,20.418,3.582,21,4.3,21h15.4c0.718,0,1.3-0.582,1.3-1.3V4.3 C21,3.582,20.418,3,19.7,3z M8.339,18.338H5.667v-8.59h2.672V18.338z M7.004,8.574c-0.857,0-1.549-0.694-1.549-1.548 c0-0.855,0.691-1.548,1.549-1.548c0.854,0,1.547,0.694,1.547,1.548C8.551,7.881,7.858,8.574,7.004,8.574z M18.339,18.338h-2.669 v-4.177c0-0.996-0.017-2.278-1.387-2.278c-1.389,0-1.601,1.086-1.601,2.206v4.249h-2.667v-8.59h2.559v1.174h0.037 c0.356-0.675,1.227-1.387,2.526-1.387c2.703,0,3.203,1.779,3.203,4.092V18.338z">
                                    </path>
                                </svg><span class="wp-block-social-share-label screen-reader-text">LinkedIn</span><span
                                    class="screen-reader-text site-description"></span></div>
                        </li>
                        <!-- /wp:necessary-block/social-share -->
                    </ul>
                    <!-- /wp:necessary-block/social-shares -->
                </div>
                <!-- /wp:group -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"22px"}},"textColor":"white"} -->
                <p class="has-white-color has-text-color has-link-color" style="font-size:22px">
                    <?php esc_html_e( 'Payment Methods', 'aamira' ); ?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"right":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-right:0px">
                    <!-- wp:image {"id":5865,"width":"72px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img
                            src="http://localhost/wp-content/uploads/2025/07/BKash-Logo.wine_.png" alt=""
                            class="wp-image-5865" style="width:72px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:image {"id":5866,"width":"72px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img
                            src="http://localhost/wp-content/uploads/2025/07/nagad-1.png" alt="" class="wp-image-5866"
                            style="width:72px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:image {"id":5867,"width":"72px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img
                            src="http://localhost/wp-content/uploads/2025/07/Rocket_mobile_banking_logo.webp" alt=""
                            class="wp-image-5867" style="width:72px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"py-5","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group py-5">
                    <!-- wp:image {"id":5868,"width":"72px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img
                            src="http://localhost/wp-content/uploads/2025/07/paypal.png" alt="" class="wp-image-5868"
                            style="width:72px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:image {"id":5870,"width":"72px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img
                            src="http://localhost/wp-content/uploads/2025/07/dbbl.png" alt="" class="wp-image-5870"
                            style="width:72px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:image {"id":5871,"width":"72px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img
                            src="http://localhost/wp-content/uploads/2025/07/ebl.png" alt="" class="wp-image-5871"
                            style="width:72px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"left":"1rem","right":"1rem","top":"1.5rem","bottom":"1.5rem"}},"color":{"background":"#0e2128"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignfull has-background"
        style="background-color:#0e2128;padding-top:1.5rem;padding-right:1rem;padding-bottom:1.5rem;padding-left:1rem">
        <!-- wp:group {"layout":{"type":"constrained","justifyContent":"center","contentSize":"1150px","wideSize":"1380px"}} -->
        <div class="wp-block-group">
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group">
                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"medium"} -->
                <p class="has-text-align-center has-white-color has-text-color has-link-color has-medium-font-size">
                    <?php esc_html_e( 'About', 'aamira' ); ?>
                    &nbsp;<?php esc_html_e( '©', 'aamira' ); ?>&nbsp;<?php esc_html_e( '2025', 'aamira' ); ?><?php esc_html_e( '- All rights reserved by Coders Time', 'aamira' ); ?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"#32b745"}}},"color":{"text":"#32b745"}},"fontSize":"medium"} -->
                <p class="has-text-align-center has-text-color has-link-color has-medium-font-size"
                    style="color:#32b745"><?php esc_html_e( 'Privacy Policy | Terms', 'aamira' ); ?>
                    &amp;<?php esc_html_e( 'Conditions | Cookie Policy', 'aamira' ); ?>
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