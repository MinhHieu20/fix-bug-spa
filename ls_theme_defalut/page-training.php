<?php
/*
 * Template Name: Trang đào tạo
 *
 * @package ls_theme
 */
get_header();
global $ls_options, $post;
?>
    <div class="container-max">
        <div class="headers">
            <div class="container headers-image">
                <img class="headers-image__one" src="<?php bloginfo('template_directory'); ?>/images/trainning/1.png" alt="">
                <img class="headers-image__two" src="<?php bloginfo('template_directory'); ?>/images/trainning/2.png" alt="">
                <img class="headers-image__three" src="<?php bloginfo('template_directory'); ?>/images/trainning/3.png" alt="">
                <img class="headers-image__four" src="<?php bloginfo('template_directory'); ?>/images/trainning/4.png" alt="">
                <img class="headers-image__five" src="<?php bloginfo('template_directory'); ?>/images/trainning/5.png" alt="">
            </div>

            <div class="headers-title">
                <h2 class="headers-title-heading">
                    ĐÀO TẠO SPA CHUYÊN NGHIỆP <br> MỞ RA NHIỀU CƠ HỘI THÀNH CÔNG
                </h2>
            </div>
        </div>
        <div class="top-banner banner-training">
            <div class="top-banner-training">
                <img src="<?php bloginfo('template_directory'); ?>/images/banner1.png" alt="">
            </div>
        </div>
        <div class="content-container container">
            <div class="container-item ">
                <div class="container-heading text-center">
                    <div class="container-item-logo">
                        <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="container-item-logo-image" alt="">
                    </div>
                    <h2 class="container-item-title">các khóa đào tạo</h2>

                </div>
                <div class="container-body">
                    <div class="container-service row">
                        <?php
                            $args = array(
                                'post_type' => 'training',
                                'post_status' => 'publish',
                                'posts_per_page' => 8,
                                'orderby' => 'title',
                                'order' => 'ASC',
                            );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->ID ), 'single-post-thumbnail' );
                        ?>
                        <div class="training--item col-xl-3 col-lg-3 col-sm-3 col-md-3 col-6 pd-05">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo $image[0]; ?>" alt="" class="service-image">
                                <div class="container-service-item__note">
                                    <div class="container-service-item__note--image">
                                        <?php $image = get_field('image_icon'); ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" class="wh-100" alt="">
                                    </div>
                                    <p class="container-service-item__note--desc training--desc"><?php the_title();  ?></p>
                                    <p class="container-service-item__note--desc"><?php echo get_field('name');  ?></p>
                                </div>
                            </a>
                        </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- advise-contact -->
    <div class="advise-contact advise-contactIndex none-pc">
        <div class="advise-contact__body">
            <div class="contact-body ">
                <div class="contact-body__left col l-5">
                    <div class="contact-body__column">
                        <div class="contact-logo">
                            <img src="<?php bloginfo('template_directory'); ?>/images/contact/call.png" alt="" class="icon__call">
                        </div>
                        <div class="contact__title">Liên hệ hotline</div>
                        <div class="contact__name"><?php echo $ls_options['hotline-1']; ?></div>
                        <div class="contact__desc">Giải đáp tất cả thắc mắc của quý khách hàng, phục vụ tận tâm 24/7</div>
                    </div>
                    <div class="contact-body__column">
                        <div class="contact-logo">
                            <img src="<?php bloginfo('template_directory'); ?>/images/contact/calendar.png" alt="" class="icon__call">
                        </div>
                        <div class="contact__title">đặt lịch hẹn</div>
                        <div class="contact__name">Nhận ưu đãi</div>
                        <div class="contact__desc">Đặt ngay lịch hẹn hôm nay để nhận hàng ngàn ưu đãi</div>
                    </div>

                </div>
                <div class="contact-body__right col l-7">
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
    <div class="advise-space"></div>
<?php
get_footer();
