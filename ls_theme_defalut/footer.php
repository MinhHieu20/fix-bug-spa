<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ls_theme_defalut
 */
global $ls_options;
?>
<footer class="footer">
    <div class="footer-top">
        <div class="container footer-width">
            <div class="row footer-after">
                <div class="col-lg-4 col-md-4 col-12 pd-top12">
                    <div class="footer-top-interactive">
                        <div class="interactive-logo d-flex">
                            <a href="<?php echo home_url(); ?>"><img src="<?php echo $ls_options['logo']['url']; ?>" alt=""></a>
                        </div>
                        <p class="interactive-caption"><?php echo $ls_options['slogan-footer']; ?></p>
                        <div class="interactive-image d-flex">
                            <div class="social-link">
                                <iframe src="<?php echo $ls_options['facebooksdk']; ?>"
                                        width="368" height="193" style="border:none;overflow:hidden"
                                        scrolling="no" frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="footer-top-contact">
                        <div class="footer-top-contact__tel">
                            <p class="contact-title"> HOTLINE </p>
                            <a href="tel:<?php echo $ls_options['hotline-1']; ?>"><?php echo $ls_options['hotline-1']; ?> - <?php echo $ls_options['hotline-2']; ?></a>
                        </div>
                        <div class="footer-top-contact__info">
                            <p class="contact-title"> Thông tin liên hệ</p>
                            <ul class="footer-top-contact__info-list">
                                <li class="footer-top-contact__info-list--item">
                                    <a href="mailto:<?php echo $ls_options['emailft-1']; ?>"><?php echo $ls_options['emailft-1']; ?></a>
                                </li>
                                <li class="footer-top-contact__info-list--item">
                                    <a href="mailto:<?php echo $ls_options['emailft-2']; ?>"><?php echo $ls_options['emailft-2']; ?></a>
                                </li>
                                <li class="footer-top-contact__info-list--item">
                                    <a href="#"><?php echo $ls_options['addft']; ?></a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-top-contact__time">
                            <p class="contact-title"> Thời gian làm việc</p>
                            <span class="fz16"><?php echo $ls_options['working-time']; ?></span>
                        </div>
                        <div class="footer-top-contact__app d-flex">
                            <a href="<?php echo $ls_options['googleplay']; ?>" class="footer-top-contact__app--googleplay">
                                <img src="<?php bloginfo('template_directory'); ?>/images/icon/icon-app-02.png" alt="">
                            </a>
                            <a href="<?php echo $ls_options['appstore']; ?>" class="footer-top-contact__app--appstore">
                                <img src="<?php bloginfo('template_directory'); ?>/images/icon/icon-app-03.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="footer-top-menu">
                        <p class="contact-title"> Menu </p>
                        <ul class="footer-top-menu__list">
                            <li class="footer-top-menu__list">
                                <a class="footer-top-menu__list--link" href="<?php echo home_url(); ?>/chinh-sach-bao-mat">Chính sách bảo mật</a>
                            </li>
                            <li class="footer-top-menu__list">
                                <a class="footer-top-menu__list--link" href="<?php echo home_url(); ?>/huong-dan-dat-lich">Hướng dẫn đặt lịch</a>
                            </li>
                            <li class="footer-top-menu__list">
                                <a class="footer-top-menu__list--link" href="<?php echo home_url(); ?>/tuyen-dung">Tuyển dụng Shynh Beauty Spa</a>
                            </li>
                            <li class="footer-top-menu__list">
                                <a class="footer-top-menu__list--link" href="<?php echo home_url(); ?>/dat-lich">Đặt lịch</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container footer-width">
            <div class="row">
            <div class="footer-bottom-left  col-xl-6 col-md-6">
                <p class="footer-title"><?php echo $ls_options['title-footer']; ?></p>
                <div class="footer-contact">
                    <ul class="footer-contact-list">
                        <li class="footer-contact-list__item">
                            <a class="footer-contact-list__item--link fz16" href="tel:<?php echo $ls_options['hotline-1']; ?>">Hotline: <?php echo $ls_options['hotline-1']; ?></a>
                        </li>
                        <li class="footer-contact-list__item">
                            <a class="footer-contact-list__item--link fz16" href="https://shynhbeauty.com.vn" target="_blank">Website: <?php echo $ls_options['web']; ?></a>
                        </li>
                        <li class="footer-contact-list__item">
                            <a class="footer-contact-list__item--link fz16" href="mailto:<?php echo $ls_options['emailft-2']; ?>">Mail: <?php echo $ls_options['emailft-2']; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom-right col-xl-6 col-md-6">
                <?php echo $ls_options['business-paper']; ?>
            </div>
        </div>
    </div>
    </div>
    <div class="footer-bottom-mobile dp-block dp-noneTL">
        <div class="row">
            <div class="footer-bottom-mobile__image">
                <img src="<?php bloginfo('template_directory'); ?>/images/footer/mobile/BgBoxshow.png" alt="">
            </div>
            <div class="col-4 d-flex justify-content-between">
                <div class="footer-bottom-mobile__branch">
                    <div class="footer-bottom-mobile__branch--image extension-active">
                        <img src="<?php bloginfo('template_directory'); ?>/images/footer/mobile/imgHome.png" alt="">
                    </div>
                    <span class="footer-bottom-mobile__text">Chi nhánh</span>
                </div>
                <div class="footer-bottom-mobile__booking">
                    <div class="footer-bottom-mobile__booking--image">
                        <a href="<?php echo home_url(); ?>/dat-lich">
                            <img src="<?php bloginfo('template_directory'); ?>/images/footer/mobile/imgCanlender.png" alt="">
                        </a>
                    </div>
                    <span class="footer-bottom-mobile__text">Đặt lịch</span>
                </div>
            </div>
            <div class="col-4">
                <div class="footer-bottom-mobile__advise text-center">
                    <div class="footer-bottom-mobile__advise--image">
                        <a href="tel:<?php echo $ls_options['hotline-1']; ?>">
                            <img src="<?php bloginfo('template_directory'); ?>/images/footer/mobile/imgUserheadset.png" alt="">
                        </a>
                    </div>
                    <span class="footer-bottom-mobile__text">Tư vấn</span>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-between">
                <div class="footer-bottom-mobile__tel">
                    <div class="footer-bottom-mobile__tel--image">
                        <a href="tel:<?php echo $ls_options['hotline-1']; ?>">
                            <img src="<?php bloginfo('template_directory'); ?>/images/footer/mobile/imgCall.png" alt="">
                        </a>
                    </div>
                    <span class="footer-bottom-mobile__text">Hotline</span>
                </div>
                <div class="footer-bottom-mobile__app">
                    <div class="footer-bottom-mobile__app--image">
                        <img src="<?php bloginfo('template_directory'); ?>/images/footer/mobile/imgApp.png" alt="">
                    </div>
                    <span class="footer-bottom-mobile__text">Tải app</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="form--contact hide">
    <!-- tabs Items -->
    <div class="tabs">
        <div class="tab-item-heading active">
            <i class="tab-icon fa-solid fa-headset"></i>
            <span>Tư vấn</span>
        </div>
        <div class="tab-item-heading ">
            <i class="tab-icon fa-solid fa-location-dot"></i>
            <span>Chi Nhánh</span>
        </div>

        <div class="tab-item-heading">
            <i class="tab-icon fa-solid fa-calendar-days"></i>
            <span>Đặt Lịch</span>
        </div>
    </div>

    <!-- Tabs content -->
    <div class="tab-pane-content active">
        <div class="form--contact__inner">
            <div class="form--contact__inner--logo">
                <img src="<?php echo $ls_options['logo']['url']; ?>" alt="" class="form--contact__inner--logo--image">
            </div>
            <div class="form--contact__inner--contact">
                <?php echo apply_shortcodes( '[contact-form-7 id="406" title="Chưa có tiêu đề"]' ); ?>
                <p class="form--contact__inner--contact--text">Hoặc liên hệ hotline <span class="phone-number"><?php echo $ls_options['hotline-1']; ?></span> để được tư vấn nhanh nhất</p>
            </div>
        </div>
    </div>
    <div class="tab-pane-content">
        <div class="address">
            <div class="address-info">
                <div class="address-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="w-100" alt="">
                </div>
                <p class="address-info-title">Hệ thống hơn 50 chi nhánh</p>
            </div>
            <div class="address-nav">
                <div class="container-width">
                    <ul class="address-nav-location row">
                        <li class="address-nav-location__item active">
                            <a class="address-nav-location__item--link">Tất cả</a>
                        </li>
                        <li class="address-nav-location__item">
                            <a class="address-nav-location__item--link">Hồ Chí Minh</a>
                        </li>
                        <li class="address-nav-location__item">
                            <a class="address-nav-location__item--link">Hà nội</a>
                        </li>
                        <li class="address-nav-location__item">
                            <a class="address-nav-location__item--link">Miền nam</a>
                        </li>
                        <li class="address-nav-location__item">
                            <a class="address-nav-location__item--link">Miền tây</a>
                        </li>
                        <li class="address-nav-location__item">
                            <a class="address-nav-location__item--link">Miền trung</a>
                        </li>
                        <li class="address-nav-location__item">
                            <a class="address-nav-location__item--link">Tây nguyên</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="location-details active">
                <div class="container container-width">
                    <div class="row location-details-border location-details-mobile">
                        <?php
                        $args = array(
                            'post_type' => 'extension',
                            'post_status' => 'publish',
                            'posts_per_page' => 6,
                            'orderby' => 'title',
                            'order' => 'ASC',
                        );
                        $count = 0;
                        $loop = new WP_Query( $args );
                        ?>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $post_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
                                if($count %2 == 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-5 col-6 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-6 location-details-right">
                                            <p class="location-details-right__name"><?php the_title(); ?></p>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>
                                            <button class="btn location-view" id="<?php echo $post_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $post_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                if($count %2 != 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-5 col-6 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-6 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>
                                            <button class="btn location-view" id="<?php echo $post_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details">
                <div class="container container-width">
                    <div class="row location-details-border location-details-mobile">
                        <?php
                        $extension_hcm = get_term('44','extension_cat');
                        $args_hcm = array(
                            'post_type' => 'extension',
                            'post_status' => 'publish',
                            'posts_per_page' => 6,
                            'orderby' => 'title',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'extension_cat', //double check your taxonomy name in you dd
                                    'field'    => 'term_id',
                                    'terms'    => array( $extension_hcm->term_id ),
                                ),
                            ),
                        );
                        $count = 0;
                        $loop_hcm = new WP_Query( $args_hcm );
                        ?>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop_hcm->have_posts() ) : $loop_hcm->the_post();
                                $post_hcm_id = $loop_hcm->ID;
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_hcm_id ), 'single-post-thumbnail' );
                                if($count %2 == 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-5 col-6 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-6 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>
                                            <button class="btn location-view" id="<?php echo $post_hcm_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop_hcm->have_posts() ) : $loop_hcm->the_post();
                                $post_hcm_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_hcm_id ), 'single-post-thumbnail' );
                                if($count %2 != 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-5 col-6 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-6 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>
                                            <button class="btn location-view" id="<?php echo $post_hcm_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details">
                <div class="container container-width">
                    <div class="row location-details-border location-details-mobile">
                        <?php
                        $extension_hn = get_term('45','extension_cat');
                        $args_hn = array(
                            'post_type' => 'extension',
                            'post_status' => 'publish',
                            'posts_per_page' => 6,
                            'orderby' => 'title',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'extension_cat', //double check your taxonomy name in you dd
                                    'field'    => 'term_id',
                                    'terms'    => array( $extension_hn->term_id ),
                                ),
                            ),
                        );
                        $count = 0;
                        $loop_hn = new WP_Query( $args );
                        ?>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop_hn->have_posts() ) : $loop_hn->the_post();
                                $post_hn_id = $loop_hn->ID;
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_hn_id ), 'single-post-thumbnail' );
                                if($count %2 == 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-5 col-6 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-6 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>
                                            <button class="btn location-view" id="<?php echo $post_hn_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop_hn->have_posts() ) : $loop_hn->the_post();
                                $post_hn_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_hn_id ), 'single-post-thumbnail' );
                                if($count %2 != 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-5 col-6 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-6 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>
                                            <button class="btn location-view" id="<?php echo $post_hn_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details">
                <div class="container container-width">
                    <div class="row location-details-border location-details-mobile">
                        <?php
                        $extension_mn = get_term('43','extension_cat');
                        $args_mn = array(
                            'post_type' => 'extension',
                            'post_status' => 'publish',
                            'posts_per_page' => 6,
                            'orderby' => 'title',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'extension_cat', //double check your taxonomy name in you dd
                                    'field'    => 'term_id',
                                    'terms'    => array( $extension_mn->term_id ),
                                ),
                            ),
                        );
                        $count = 0;
                        ?>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            $loop_mn = new WP_Query( $args );
                            while ( $loop_mn->have_posts() ) : $loop_mn->the_post();
                                $post_mn_id = $loop_mn->ID;
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_mn_id ), 'single-post-thumbnail' );
                                if($count %2 == 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-5 col-6 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-6 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>\
                                            <button class="btn location-view" id="<?php echo $post_mn_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop_mn->have_posts() ) : $loop_mn->the_post();
                                $post_mn_id = $loop_mn->ID;
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_mn_id ), 'single-post-thumbnail' );
                                if($count %2 != 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-5 col-6 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-6 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>
                                            <button class="btn location-view" id="<?php echo $post_mn_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details">
                <div class="container container-width">
                    <div class="row location-details-border location-details-mobile">
                        <?php
                        $extension_mt = get_term('47','extension_cat');
                        $args_mt = array(
                            'post_type' => 'extension',
                            'post_status' => 'publish',
                            'posts_per_page' => 6,
                            'orderby' => 'title',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'extension_cat', //double check your taxonomy name in you dd
                                    'field'    => 'term_id',
                                    'terms'    => array( $extension_mt->term_id ),
                                ),
                            ),
                        );
                        $count = 0;
                        ?>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            $loop_mt = new WP_Query( $args );
                            while ( $loop_mt->have_posts() ) : $loop_mt->the_post();
                                $post_mt_id = $loop_mt->ID;
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_mt_id ), 'single-post-thumbnail' );
                                if($count %2 == 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-5 col-6 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-6 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>

                                            <button class="btn location-view" id="<?php echo $post_mt_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop_mt->have_posts() ) : $loop_mt->the_post();
                                $post_mt_id = $loop_mt->ID;
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_mt_id ), 'single-post-thumbnail' );
                                if($count %2 != 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-5 col-6 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-6 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>
                                            <button class="btn location-view" id="<?php echo $post_mt_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details">
                <div class="container container-width">
                    <div class="row location-details-border location-details-mobile">
                        <?php
                        $extension_mtr = get_term('48','extension_cat');
                        $args_mtr = array(
                            'post_type' => 'extension',
                            'post_status' => 'publish',
                            'posts_per_page' => 6,
                            'orderby' => 'title',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'extension_cat', //double check your taxonomy name in you dd
                                    'field'    => 'term_id',
                                    'terms'    => array( $extension_mtr->term_id ),
                                ),
                            ),
                        );
                        $count = 0;
                        $loop_mtr = new WP_Query( $args_mtr );
                        ?>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop_mtr->have_posts() ) : $loop_mtr->the_post();
                                $post_mtr_id = $loop_mtr->ID;
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop_mtr ), 'single-post-thumbnail' );
                                if($count %2 == 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-5 col-6 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-6 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>

                                            <button class="btn location-view" id="<?php echo $post_mtr_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop_mtr->have_posts() ) : $loop_mtr->the_post();
                                $post_mtr_id = $loop_mtr->ID;
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_mtr_id ), 'single-post-thumbnail' );
                                if($count %2 != 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-5 col-6 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-6 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>
                                            <button class="btn location-view" id="<?php echo $post_mtr_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="location-details">
                <div class="container container-width">
                    <div class="row location-details-border location-details-mobile">
                        <?php
                        $extension_tn = get_term('49','extension_cat');
                        $args_tn = array(
                            'post_type' => 'extension',
                            'post_status' => 'publish',
                            'posts_per_page' => 6,
                            'orderby' => 'title',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'extension_cat', //double check your taxonomy name in you dd
                                    'field'    => 'term_id',
                                    'terms'    => array( $extension_tn->term_id ),
                                ),
                            ),
                        );
                        $count = 0;
                        $loop_tn = new WP_Query( $args );
                        ?>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop_tn->have_posts() ) : $loop_tn->the_post();
                                $post_tn_id = $loop_tn->ID;
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_tn_id ), 'single-post-thumbnail' );
                                if($count %2 == 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-5 col-5 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-7 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>

                                            <button class="btn location-view" id="<?php echo $post_tn_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop_tn->have_posts() ) : $loop_tn->the_post();
                                $post_tn_id = $loop_tn->ID;
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_tn_id ), 'single-post-thumbnail' );
                                if($count %2 != 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-5 col-5 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-7 location-details-right">
                                            <h4 class="location-details-right__name"><?php the_title(); ?></h4>
                                            <p class="location-details-right__info"><?php echo get_the_content(); ?></p>
                                            <button class="btn location-view" id="<?php echo $post_tn_id; ?>">Xem địa chỉ</button>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </li>
                                    <?php
                                }
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="address-near dp-none">
                <button class="btn address-near-btn">Tìm chi nhánh gần bạn</button>
            </div>
        </div>
    </div>
    <div class="tab-pane-content">
        <div class="form--appointment__inner">
            <div class="form--appointment__inner--logo">
                <img src="<?php echo $ls_options['logo']['url']; ?>" alt="" class="form--appointment__inner--logo--image">
            </div>
            <div class="form--appointment__inner--title">
                <h3>ĐẶT LỊCH HẸN</h3>
            </div>
            <div class="form--appointment__inner--appointment">
                <?php echo apply_shortcodes( '[contact-form-7 id="407" title="Đăng ký lịch hẹn popup"]' ); ?>
            </div>
        </div>
    </div>
</div>
<div class="form--again">
    <div class="form--again__inner">
        <div class="form--again__inner--logo">
            <img src="<?php echo $ls_options['logo']['url']; ?>" alt="" class="form--again__inner--logo--image">
        </div>
        <div class="form--again__inner--title">
            <h3>ĐẶT LỊCH HẸN</h3>
        </div>
        <div class="form--again__inner--info">
            <div class="form--again__inner--info-image">
                <img src="<?php bloginfo('template_directory'); ?>/images/service/check.png" alt="">
            </div>
            <div class="form--again__inner--info-text">
                <p>Lịch hẹn của quý khách đã được đặt thành công</p>
            </div>
            <div class="form--again__inner--info-line">
                <img src="<?php bloginfo('template_directory'); ?>/images/service/_Line_.png" alt="">
            </div>
            <div class="form--again__inner--info-client">
                <p class="form--again__inner--info-client-text">Tên khách hàng: <span
                            class="form--again__inner--info-client-name"> Nguyễn Thị A</span></p>
                <p class="form--again__inner--info-client-text">Số điện thoại:<span
                            class="form--again__inner--info-client-name"> 0888 888 888</span></p>
            </div>
            <div class="form--again__inner--info-time row">
                <div class="form--again__inner--info-time-day col l-6">
                    <input type="date" class="form-controls" placeholder="08/07/2022">
                </div>
                <div class="form--again__inner--info-time-day col l-6">
                    <input type="time" class="form-controls" placeholder="8:00">
                </div>
            </div>
            <div class="form--again__inner--info-thank">
                <p>Cảm ơn quý khách hẹn gặp quý khách tại Shynh Beauty Spa</p>
            </div>
        </div>
        <button class="btn send-contact__btn">SỬA LỊCH HẸN</button>
    </div>
</div>
<!-- Phần pop up -->
<div class="form--pop" id="open-pop">
    <div class="form--pop__inner">
        <div class="form--pop__inner--logo">
            <img src="<?php echo $ls_options['logo']['url']; ?>" alt="" class="form--pop__inner--logo--image">
        </div>
        <div class="form--pop__inner--title">
            <h3>ĐẶT LỊCH HẸN</h3>
        </div>
        <div class="form--pop__inner--info">
            <div class="form--pop__inner--info-image">
                <img src="<?php bloginfo('template_directory'); ?>/images/icon/iconCheck.png" alt="">
            </div>
            <div class="form--pop__inner--info-text">
                <p>lịch hẹn của quý khách đã được đặt thành công</p>
            </div>
            <div class="form--pop__inner--info-line">
            </div>
            <div class="form--pop__inner--info-client">
                <p class="form--pop__inner--info-client-text">Tên khách hàng: <span
                            class="form--pop__inner--info-client-name"> Nguyễn Thị A</span></p>
                <p class="form--pop__inner--info-client-text">Số điện thoại:<span
                            class="form--pop__inner--info-client-name"> 0888 888 888</span></p>
            </div>
            <div class="form--pop__inner--info-time row">
                <div class="form--pop__inner--info-time-day col l-6">
                    <input type="date" class="form-controls" placeholder="mm/dd/yyyy">
                </div>
                <div class="form--pop__inner--info-time-day col l-6">
                    <input type="time" class="form-controls" placeholder="8:00">
                </div>
            </div>
            <div class="form--pop__inner--info-thank">
                <p>Cảm ơn quý khách hẹn gặp quý khách tại Shynh Beauty Spa</p>
            </div>
        </div>
        <button class="btn send-contact__btn">SỬA LỊCH HẸN</button>
    </div>
    <div class="list">
        <div class="form--pop__address">
        </div>
        <div class="form--pop__advise">
        </div>
        <div class="form--pop__appointment">
        </div>
    </div>
</div>
<div class="form--advise" id="open-advise">
    <div class="form--advise__inner">
        <div class="form--advise__inner--logo">
            <img src="<?php echo $ls_options['logo']['url']; ?>" alt="" class="form--advise__inner--logo--image">
        </div>
        <div class="form--advise__inner--advise">
            <?php echo apply_shortcodes( '[contact-form-7 id="122" title="Đăng ký nhận thông tin"]' ); ?>
            <p class="form--advise__inner--advise--text">Hoặc liên hệ hotline <span class="phone-number">0909 999 999</span> để được tư vấn nhanh nhất</p>
        </div>
    </div>
    <div class="form--pop__address">
    </div>
    <div class="form--pop__advise">
    </div>
    <div class="form--pop__appointment">
    </div>
</div>
<div class="form--register hide" id="open-form">
    <div class="form--contact__inner contact_inner-mobile">
        <div class="form--contact__inner--logo">
            <img src="<?php bloginfo('template_directory'); ?>/images/footerImg.png" alt="" class="form--contact__inner--logo--image">
        </div>
        <div class="form--contact__inner--contact">
            <?php echo apply_shortcodes('[contact-form-7 id="408" title="Đăng ký tư vấn popup mobile"]'); ?>
            <p class="form--contact__inner--contact--text contact_inner-mobile--text">Hoặc liên hệ hotline<span class="phone-number">0909 999 999</span>
                để được tư vấn nhanh nhất
            </p>
        </div>
    </div>
    <div class="form--contact__inner--extend contact_inner-mobile--extend">
        <ul class="form--contact__inner--extend--list">
            <li class="form--contact__inner--extend--list--item"><i class="icon-extend fa-solid fa-location-dot"></i>Chi nhánh</li>
            <li class="form--contact__inner--extend--list--item"><i class="icon-extend fa-solid fa-headset"></i>Tư vấn</li>
            <li class="form--contact__inner--extend--list--item"><i class="icon-extend fa-solid fa-calendar-days"></i>Đặt lịch</li>
        </ul>
    </div>
</div>
<div class="modal--maps">
    <div class="modal--maps--address">
        <div class="modal--maps--address-close js-modal-close">
            <i class="close-icon fa-solid fa-xmark"></i>
        </div>
        <div class="modal--maps--address__search">
        </div>
    </div>
</div>
</div><!-- #page -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.lockfixed.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/static-load-more/jquery.simpleLoadMore.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
<script>
    (function($){
        $(document).ready(function(){
            $('.location-view').click(function(){
                $id = this.id;
                $.ajax({
                    type : "post", //Phương thức truyền post hoặc get
                    dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
                    url : '<?php echo admin_url('admin-ajax.php');?>', //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                    // url : ajax.ajax_url,
                    data : {
                        action: "maps", //Tên action
                        id : $id,//Biến truyền vào xử lý. $_POST['id']
                    },
                    context: this,
                    beforeSend: function(){
                        //Làm gì đó trước khi gửi dữ liệu vào xử lý
                        $('.modal--maps--address__search').empty();
                    },
                    success: function(response) {
                        //Làm gì đó khi dữ liệu đã được xử lý
                        if(response.success) {
                            $('.modal--maps--address__search').append('<iframe src="' + response.data + '" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade">' + '</iframe>');
                        }
                        else {
                            console.log('errors');
                        }
                    },
                    error: function( jqXHR, textStatus, errorThrown ){
                        //Làm gì đó khi có lỗi xảy ra
                        console.log( 'The following error occured: ' + textStatus, errorThrown );
                    }
                })
                return false;
            })
        })
    })(jQuery)
</script>
<?php wp_footer(); ?>
</body>
</html>
