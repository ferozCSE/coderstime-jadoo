<?php
/**
 * Title: Testimonial Section
 * Slug: aamira/testimonial-section
 * Categories: header
 * Block Types: core/template-part/header
 * Description: 
 *
 * @package WordPress
 * @subpackage aamira
 * @since aamira 1.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","right":"1.25rem","left":"1.25rem"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group alignfull"
    style="padding-top:2rem;padding-right:1.25rem;padding-bottom:2rem;padding-left:1.25rem">
    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"28px"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
    <div class="wp-block-group" style="margin-bottom:28px">
        <!-- wp:heading {"level":6,"className":"has-text-align-center","style":{"color":{"text":"#5e6282"},"elements":{"link":{"color":{"text":"#5e6282"}}}},"fontSize":"medium"} -->
        <h6 class="wp-block-heading has-text-align-center has-text-color has-link-color has-medium-font-size"
            style="color:#5e6282">
            <?php esc_html_e( 'Testimonials', 'aamira' ); ?> </h6>
        <!-- /wp:heading -->

        <!-- wp:heading {"level":3,"className":"has-text-align-center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
        <h3 class="wp-block-heading has-text-align-center has-large-font-size"
            style="font-style:normal;font-weight:700">
            <?php esc_html_e( 'TestimonialsWhat people say about Us.', 'aamira' ); ?></h3>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"4rem"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide" style="margin-bottom:4rem">
        <!-- wp:columns {"align":"full","style":{"spacing":{"margin":{"bottom":"0rem"},"blockGap":{"top":"0","left":"var:preset|spacing|40"}}}} -->
        <div class="wp-block-columns alignfull" style="margin-bottom:0rem">
            <!-- wp:column {"width":"","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
            <div class="wp-block-column">
                <!-- wp:group {"style":{"border":{"radius":"1rem"}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                <div class="wp-block-group has-base-background-color has-background" style="border-radius:1rem">
                    <!-- wp:group {"align":"full","className":"card-1","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-group alignfull card-1"
                        style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
                        <!-- wp:group {"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                        <div class="wp-block-group">
                            <!-- wp:necessary-block/simple-testimonial {"quote":"On the Windows talking painted pasture express parties use. Sure last upon he same as k next. Of believed or diverted no.","author":"Mike Taylor\u003cbr\u003eLahore, Pakistan","quoteColor":"#5a2a00","authorColor":"#7b3f00","ratingColor":"#ff9900","iconColor":"#ff944d","quoteBackground":"#fff3db","mainBackground":"#984747","borderbox":{"color":"#ff944d","width":"2px"}} -->
                            <div style="background-color:#984747;border-radius:5px 5px 5px 5px;border:2px solid #ff944d"
                                class="wp-block-necessary-block-simple-testimonial">
                                <div class="testimonial-box"
                                    style="background-color:#fff3db;border-radius:5px 5px 5px 5px;border:2px solid #ff944d">
                                    <span class="quote-icon top-quote" style="color:#ff944d">“</span>
                                    <div class="testimonial-content">
                                        <blockquote style="color:#5a2a00">
                                            <?php esc_html_e( 'Testimonials', 'aamira' ); ?><?php esc_html_e( 'On the Windows talking painted pasture express parties use. Sure last upon he same as k next. Of believed or diverted no.', 'aamira' ); ?>
                                        </blockquote>
                                    </div>
                                    <div class="testimonial-author">
                                        <!-- wp:image {"id":6142,"width":"90px","height":"90px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"simpletestimonial"} -->
                                        <figure
                                            class="wp-block-image aligncenter size-full is-resized simpletestimonial">
                                            <img src="<?php echo  get_stylesheet_directory_uri() . '/images/testi-author1.jpg'; ?>"
                                                alt="" class="wp-image-6142"
                                                style="object-fit:cover;width:90px;height:90px" />
                                        </figure>
                                        <!-- /wp:image -->
                                        <div class="author-info"><span class="author-name"><cite
                                                    style="color:#7b3f00"><?php esc_html_e( 'Mike Taylor', 'aamira' ); ?><br><?php esc_html_e( 'Lahore, Pakistan', 'aamira' ); ?></cite></span>
                                            <div class="rating"><span style="color:#ff9900">★★★★★</span></div>
                                        </div>
                                    </div><span class="quote-icon bottom-quote" style="color:#ff944d">”</span>
                                </div>
                            </div>
                            <!-- /wp:necessary-block/simple-testimonial -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"","layout":{"type":"constrained"}} -->
            <div class="wp-block-column">
                <!-- wp:group {"style":{"border":{"radius":"1rem"}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                <div class="wp-block-group has-base-background-color has-background" style="border-radius:1rem">
                    <!-- wp:group {"className":"card-2","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-group card-2"
                        style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
                        <!-- wp:group {"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                        <div class="wp-block-group">
                            <!-- wp:necessary-block/simple-testimonial {"quote":"On the Windows talking painted pasture express parties use. Sure last upon he same as k next. Of believed or diverted no.","author":"Thomas Wagon\u003cbr\u003eCEO of Red Button","quoteColor":"#1b3e1f","authorColor":"#2d6a2d","ratingColor":"#66bb6a","iconColor":"#4caf50","quoteBackground":"#f0ffe0","borderbox":{"color":"#4caf50","width":"2px"}} -->
                            <div style="border-radius:5px 5px 5px 5px;border:2px solid #4caf50"
                                class="wp-block-necessary-block-simple-testimonial">
                                <div class="testimonial-box"
                                    style="background-color:#f0ffe0;border-radius:5px 5px 5px 5px;border:2px solid #4caf50">
                                    <span class="quote-icon top-quote" style="color:#4caf50">“</span>
                                    <div class="testimonial-content">
                                        <blockquote style="color:#1b3e1f">
                                            <?php esc_html_e( 'Testimonials', 'aamira' ); ?><?php esc_html_e( 'On the Windows talking painted pasture express parties use. Sure last upon he same as k next. Of believed or diverted no.', 'aamira' ); ?>
                                        </blockquote>
                                    </div>
                                    <div class="testimonial-author">
                                        <!-- wp:image {"id":6143,"width":"90px","height":"90px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"simpletestimonial"} -->
                                        <figure
                                            class="wp-block-image aligncenter size-full is-resized simpletestimonial">
                                            <img src="<?php echo  get_stylesheet_directory_uri() . '/images/testi-author2.jpg'; ?>"
                                                alt="" class="wp-image-6143"
                                                style="object-fit:cover;width:90px;height:90px" />
                                        </figure>
                                        <!-- /wp:image -->
                                        <div class="author-info"><span class="author-name"><cite
                                                    style="color:#2d6a2d"><?php esc_html_e( 'Thomas Wagon', 'aamira' ); ?><br><?php esc_html_e( 'CEO of Red Wagon Button', 'aamira' ); ?>
                                                </cite></span>
                                            <div class="rating"><span style="color:#66bb6a">★★★★★</span></div>
                                        </div>
                                    </div><span class="quote-icon bottom-quote" style="color:#4caf50">”</span>
                                </div>
                            </div>
                            <!-- /wp:necessary-block/simple-testimonial -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
            <div class="wp-block-column">
                <!-- wp:group {"style":{"border":{"radius":"1rem"}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                <div class="wp-block-group has-base-background-color has-background" style="border-radius:1rem">
                    <!-- wp:group {"className":"card-3","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                    <div class="wp-block-group card-3"
                        style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
                        <!-- wp:group {"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
                        <div class="wp-block-group">
                            <!-- wp:necessary-block/simple-testimonial {"quote":"On the Windows talking painted pasture express parties use. Sure last upon he same as k next. Of believed or diverted no.","author":"Kelly William\u003cbr\u003eWestralia, Sydney","quoteColor":"#003a66","authorColor":"#005fa3","ratingColor":"#2e87df","iconColor":"#2e87df","quoteBackground":"#e6f3ff","borderbox":{"color":"#3399ff","width":"2px"}} -->
                            <div style="border-radius:5px 5px 5px 5px;border:2px solid #3399ff"
                                class="wp-block-necessary-block-simple-testimonial">
                                <div class="testimonial-box"
                                    style="background-color:#e6f3ff;border-radius:5px 5px 5px 5px;border:2px solid #3399ff">
                                    <span class="quote-icon top-quote" style="color:#2e87df">“</span>
                                    <div class="testimonial-content">
                                        <blockquote style="color:#003a66">
                                            <?php esc_html_e( 'Testimonials', 'aamira' ); ?><?php esc_html_e( 'On the Windows talking painted pasture express parties use. Sure last upon he same as k next. Of believed or diverted no.', 'aamira' ); ?>
                                        </blockquote>
                                    </div>
                                    <div class="testimonial-author">
                                        <!-- wp:image {"id":6144,"width":"90px","height":"90px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"simpletestimonial"} -->
                                        <figure
                                            class="wp-block-image aligncenter size-full is-resized simpletestimonial">
                                            <img src="<?php echo  get_stylesheet_directory_uri() . '/images/testi-author3.jpg'; ?>"
                                                alt="" class="wp-image-6144"
                                                style="object-fit:cover;width:90px;height:90px" />
                                        </figure>
                                        <!-- /wp:image -->
                                        <div class="author-info"><span class="author-name"><cite
                                                    style="color:#005fa3"><?php esc_html_e( 'Kelly William', 'aamira' ); ?><br><?php esc_html_e( 'Westralia, Sydney', 'aamira' ); ?></cite></span>
                                            <div class="rating"><span style="color:#2e87df">★★★★★</span></div>
                                        </div>
                                    </div><span class="quote-icon bottom-quote" style="color:#2e87df">”</span>
                                </div>
                            </div>
                            <!-- /wp:necessary-block/simple-testimonial -->
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