<?php
/*
 * Template Name: Trang mẹo làm đẹp
 *
 * @package ls_theme
 */
get_header();
global $ls_options, $post;
$directoryURI = get_page_uri();
$paged = 1;	//hoặc 0
if(get_query_var('paged')) {
    $paged = get_query_var('paged');
} elseif(get_query_var('page')) {
    $paged = get_query_var('page');
}
?>
    <div class="content pdb-15">
        <div class="beautify-container container">
            <div class="beautify row">
                <div class="beautify-program col-lg-9 col-md-9">
                    <div class="beautify-program-list row">
                        <?php
                            $args = array(
                                'post_type' => 'tip_beauty',
                                'post_status' => 'publish',
                                'posts_per_page' => 6,
                                'paged'=>$paged,
                                'orderby' => 'title',
                                'order' => 'ASC',
                            );

                            $tip_beauty = new WP_Query( $args );
                            while ( $tip_beauty->have_posts() ) : $tip_beauty->the_post();
                            $post_id = $tip_beauty->ID;
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
                        ?>
                        <div class="beautify-program-list__item col-lg-4 col-md-4 col-12">
                            <a href="<?php the_permalink(); ?>">
                                <div class="beautify-program-list__item--image">
                                    <img src="<?php echo $image[0]; ?>" alt="" class="beautify-program-list__item--image--product">
                                </div>
                                <div class="beautify-program-list__item--text">
                                    <h1 style="display: none;"><?php the_title(); ?></h1>
                                    <h2 class="beautify-program-list__item--text--title"><?php the_title(); ?></h2>
                                    <p class="beautify-program-list__item--text--desc">
                                    <?php
                                        $the_excerpt_custom = get_field('the_excerpt_custom');
                                        echo $the_excerpt_custom;
                                    ?></p>
                                </div>
                                <div class="beautify-program-list__item--calendar row">
                                    <p class="beautify-program-list__item--calendar--date"><?php echo get_the_date('d     m'); ?></p>
                                </div>
                            </a>
                        </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        ?>
                    </div>
                    <div class="pagination product-pagination">
                        <?php
                        $big = 999999999; // need an unlikely integer
                        $get_blog_info= get_bloginfo('template_directory');
                        echo paginate_links( array(
                            'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format'    => '?paged=%#%',
                            'current'   => max( 1, $paged ),
                            'total'     => $tip_beauty->max_num_pages,
                            'prev_text' => '<img src="'. $get_blog_info . '/images/arrow-left.png">',
                            'next_text' => '<img src="'. $get_blog_info . '/images/arrow.jpg">'
                        ));
                        ?>
                    </div>
                </div>
                <div class="beautify--program col-lg-3 col-md-3">
                    <div class="beautify--program__category" id="sidebar-program" style="background: #fff;padding: 0.5rem;box-shadow: 0 0.25rem 0.5rem rgb(0 0 0 / 6%);">
                        <ul class="beautify--program__category--list">
                            <li class="beautify--program__category--list-item">
                                <a href="<?php echo home_url() ?>/tin-tuc-moi-nhat" class="beautify--program__category--list-item-link <?php echo ($directoryURI=='tin-tuc-moi-nhat') ? 'active' : '' ?>">tin tức mới nhất</a>
                            </li>
                            <li class="beautify--program__category--list-item">
                                <a href="<?php echo home_url() ?>/meo-lam-dep" class="beautify--program__category--list-item-link <?php echo ($directoryURI=='meo-lam-dep') ? 'active' : '' ?>">mẹo làm đẹp</a>
                            </li>
                            <li class="beautify--program__category--list-item">
                                <a href="<?php echo home_url() ?>/su-kien-chuong-trinh" class="beautify--program__category--list-item-link <?php echo ($directoryURI=='su-kien-chuong-trinh') ? 'active' : '' ?>">sự kiện chương trình</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="advise-contact advise-contactIndex hide-mobile">
            <div class="advise-contact__body container">
                <div class="contact-body row">
                    <div class="contact-body__left col-lg-5 col-12">
                        <div class="contact-body__column col-lg-10 col-6 col-sm-6">
                            <div class="contact-logo">
                                <img src="<?php bloginfo('template_directory'); ?>/images/contact/call.png" alt="" class="icon__call">
                            </div>
                            <div class="contact__title">Liên hệ hotline</div>
                            <div class="contact__name"><?php echo $ls_options['hotline-1']; ?>(BẤM PHÍM 2)</div>
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
