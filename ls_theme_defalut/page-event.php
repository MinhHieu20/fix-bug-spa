<?php
/*
 * Template Name: Trang Sự Kiện
 *
 * @package ls_theme
 */
get_header();
global $post, $ls_options;
$paged = 1;	//hoặc 0
if(get_query_var('paged')) {
    $paged = get_query_var('paged');
} elseif(get_query_var('page')) {
    $paged = get_query_var('page');
}
?>
    <div class="content">
        <div class="promotion">
            <h2 class="promotion__heading">Sự kiện</h2>
            <div class="promotion--container">
                <div class="promotion--container--body container">
                    <div class="promotion--container--body__list row">
                        <?php
                            $args = array(
                                'post_type' => 'event_spa',
                                'post_status' => 'publish',
                                'posts_per_page' => 8,
                            );
                            $count = 0;
                            $event = new WP_Query( $args );
                            while ( $event->have_posts() ) : $event->the_post();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                        ?>
                        <div class="promotion--container--body__list--item col-lg-5 col-sm-6 col-md-5">
                            <div class="promotion--container--body__list--item--content row">
                                <div class="promotion--container--body__list--item--content--images col-lg-5">
                                    <img src="<?php echo $image[0]; ?>" alt="">
                                </div>
                                <div class="promotion--container--body__list--item--content--text col-lg-7">
                                    <h2 class="promotion--container--body__list--item--content--text--title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <p class="promotion--container--body__list--item--content--text--desc">
                                        <?php
                                        $the_excerpt_custom = get_field('the_excerpt_custom');
                                        echo $the_excerpt_custom;
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="paging-promotion">
            <div class="pagination product-pagination paging">
                <?php
                $big = 999999999; // need an unlikely integer
                $get_blog_info= get_bloginfo('template_directory');
                echo paginate_links( array(
                    'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format'    => '?paged=%#%',
                    'current'   => max( 1, $paged ),
                    'total'     => $event->max_num_pages,
                    'prev_text' => '<img src="'. $get_blog_info . '/images/arrow-left.png">',
                    'next_text' => '<img src="'. $get_blog_info . '/images/arrow.jpg">'
                ));
                ?>
            </div>
        </div>
        
        <div class="advise-contact advise-contactIndex mb-20">
        <div class="advise-contact__body container">
            <div class="contact-body row">
                <div class="contact-body__left col-lg-5 col-12">
                    <div class="contact-body__column col-lg-10 col-6 col-sm-6">
                        <div class="contact-logo">
                            <img src="<?php bloginfo('template_directory'); ?>/images/contact/call.png" alt="" class="icon__call">
                        </div>
                        <div class="contact__title">Liên hệ hotline</div>
                        <div class="contact__name"><?php echo $ls_options['hotline-1']; ?> (BẤM PHÍM 2)</div>
                        <div class="contact__desc">Giải đáp tất cả thắc mắc của quý khách hàng, phục vụ tận tâm 24/7</div>
                    </div>
                    <div class="contact-body__column col-lg-10 col-6 col-sm-6">
                        <div class="contact-logo">
                            <img src="<?php bloginfo('template_directory'); ?>/images/contact/calendar.png" alt="" class="icon__call">
                        </div>
                        <div class="contact__title">đặt lịch hẹn</div>
                        <div class="contact__name">Nhận ưu đãi</div>
                        <div class="contact__desc">Đặt ngay lịch hẹn hôm nay để nhận hàng ngàn ưu đãi</div>
                    </div>
                </div>
                <div class="contact-body__right col-lg-7 col-12">
                    <div class="contact-body__right-heading">
                        <img src="<?php bloginfo('template_directory'); ?>/images/contact/register.png" alt="" class="contact__heading">
                    </div>
                    <div class="contact-body__right-info">
                        <?php echo apply_shortcodes( '[contact-form-7 id="122" title="Đăng ký nhận thông tin"]' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php
get_footer();
