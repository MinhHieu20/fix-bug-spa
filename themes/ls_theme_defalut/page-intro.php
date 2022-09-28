<?php
/*
 * Template Name: Trang giới thiệu
 *
 * @package ls_theme
 */
get_header();
global $ls_options;
?>
    <div class="main mg4">
        <div class="main-logo">
            <img src="<?php echo $ls_options['banner-main-main']['url']; ?>" alt="">
        </div>
        <div class="main-info">
            <div class="main-info-image">
                <img src="<?php bloginfo('template_directory'); ?>/images/about/Bgcolor.png" alt="">
                <div class="main-content">
                    <div class="container container-width">
                        <div class="main-content--logo text-center">
                            <img src="<?php bloginfo('template_directory'); ?>/images/about/logoWhite.png" alt="">
                        </div>
                        <h1 class="main-content-heading text-center"><?php echo $ls_options['title-intro']; ?></h1>
                        <div class="container container-width pd-0">
                            <div class="row">
                                <div class="col-lg-6 col-lg-6 col-md-6 col-12 ">
                                    <div class="main-content-left">
                                        <ul class="main-content-left__list">
                                            <li class="main-content-left__list--item">
                                                <?php echo $ls_options['content-intro']; ?>
                                            </li>
                                        </ul>
                                        <button id="modal-con" class="btn service--detail__btn dp-none">tư vấn ngay</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-lg-6 col-md-6 col-12  main-content-right">
                                    <div class="mobie-image">
                                        <img class="main-content-right__one" src="<?php echo $ls_options['img-intro']['url']; ?>" alt="">
                                        <img class="main-content-right__two" src="<?php echo $ls_options['img-intro-1']['url']; ?>" alt="">
                                        <img class="main-content-right__three" src="<?php echo $ls_options['img-intro-2']['url']; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-inftras">
                    <div class="main-inftras-image">
                        <div class="main-inftras-image__above">
                            <img src="<?php bloginfo('template_directory'); ?>/images/about/imgSpa2.png" alt="" class="wh-100">
                            <div class="main-inftras-image__below">
                                <img src="<?php bloginfo('template_directory'); ?>/images/about/Bgcolor-1.png" alt="" class="wh-100">
                            </div>
                        </div>
                        <div class="main-inftras-content">
                            <div class="main-inftras-content__logo text-center">
                                <img src="<?php bloginfo('template_directory'); ?>/images/about/logoWhite.png" alt="">
                            </div>
                            <h2 class="main-inftras-content__heading text-center"><?php echo $ls_options['title-infra'] ?></h2>

                            <div class="container container-width">

                                <div class="main-pc dp-none dp-blockPC">
                                    <div class="row">
                                        <div class="col-lg-6 col-lg-6 col-md-6 main-inftras-content__right">
                                            <img class="main-inftras-content__right--one"
                                                 src="<?php echo $ls_options['img-infra']['url']; ?>" alt="">
                                            <img class="main-inftras-content__right--two"
                                                 src="<?php echo $ls_options['img-infra-1']['url']; ?>" alt="">
                                            <img class="main-inftras-content__right--three"
                                                 src="<?php echo $ls_options['img-infra-2']['url']; ?>" alt="">
                                        </div>
                                        <div class="col-lg-6 col-lg-6 col-md-6 main-inftras-content__left">
                                            <ul class="main-inftras-content__left--list">
                                                <li class="main-inftras-content__left--list-item">
                                                    <?php echo $ls_options['content-infra'] ?>
                                                </li>
                                                <li class="main-inftras-content__left--list-item">
                                                    <?php echo $ls_options['content-infra-1'] ?>
                                                </li>
                                                <li class="main-inftras-content__left--list-item">
                                                    <?php echo $ls_options['content-infra-2'] ?>
                                                </li>
                                                <li class="main-inftras-content__left--list-item">
                                                    <?php echo $ls_options['content-infra-3'] ?>
                                                </li>
                                                <li class="main-inftras-content__left--list-item">
                                                    <?php echo $ls_options['content-infra-4'] ?>
                                                </li>
                                                <li class="main-inftras-content__left--list-item">
                                                    <?php echo $ls_options['content-infra-5'] ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="main-mobile dp-block dp-nonePC">
                                    <div class="row">
                                        <div class="col-lg-6 col-12 main-inftras-content__left">
                                            <ul class="main-inftras-content__left--list">
                                                <li class="main-inftras-content__left--list-item">
                                                    <?php echo $ls_options['content-infra'] ?>
                                                </li>
                                                <li class="main-inftras-content__left--list-item">
                                                    <?php echo $ls_options['content-infra-1'] ?>
                                                </li>
                                                <li class="main-inftras-content__left--list-item">
                                                    <?php echo $ls_options['content-infra-2'] ?>
                                                </li>
                                                <li class="main-inftras-content__left--list-item">
                                                    <?php echo $ls_options['content-infra-3'] ?>
                                                </li>
                                                <li class="main-inftras-content__left--list-item">
                                                    <?php echo $ls_options['content-infra-4'] ?>
                                                </li>
                                                <li class="main-inftras-content__left--list-item">
                                                    <?php echo $ls_options['content-infra-5'] ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-12 main-inftras-content__right">
                                            <img class="main-inftras-content__right--one"
                                                 src="<?php echo $ls_options['img-infra']['url']; ?>" alt="">
                                            <img class="main-inftras-content__right--two"
                                                 src="<?php echo $ls_options['img-infra-1']['url']; ?>" alt="">
                                            <img class="main-inftras-content__right--three"
                                                 src="<?php echo $ls_options['img-infra-2']['url']; ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-device">
            <div class="container container-width wh-100">
                <div class="device-pc dp-none dp-blockPC wh-100">
                    <div class="row wh-100 align-items-center">
                        <div class="col-lg-6 col-md-6 main-device-left wh-100">
                            <ul class="main-device-left__list">
                                <li class="main-device-left__list--item">
                                    <img src="<?php echo $ls_options['Equipment-intro']['url']; ?>" alt="">
                                </li>
                                <li class="main-device-left__list--item1">
                                    <img src="<?php echo $ls_options['Equipment-intro-1']['url']; ?>" alt="">
                                </li>
                                <li class="main-device-left__list--item2">
                                    <img src="<?php echo $ls_options['Equipment-intro-2']['url']; ?>" alt="">
                                </li>
                                <li class="main-device-left__list--item3">
                                    <img src="<?php echo $ls_options['Equipment-intro-3']['url']; ?>" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 main-device-right">
                            <img src="<?php echo $ls_options['Equipment-intro-4']['url']; ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="device-mobile dp-nonePC dp-block wh-100">
                    <div class="row wh-100">
                        <div class="col-lg-6 col-12 main-device-right">
                            <div class="main-device-right__image">
                                <img src="<?php echo $ls_options['Equipment-intro-4']['url']; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 main-device-left wh-100">
                            <ul class="main-device-left__list">
                                <li class="main-device-left__list--item">
                                    <img src="<?php echo $ls_options['Equipment-intro']['url']; ?>" alt="">
                                </li>
                                <li class="main-device-left__list--item1">
                                    <img src="<?php echo $ls_options['Equipment-intro-1']['url']; ?>" alt="">
                                </li>
                                <li class="main-device-left__list--item2">
                                    <img src="<?php echo $ls_options['Equipment-intro-2']['url']; ?>" alt="">
                                </li>
                                <li class="main-device-left__list--item3">
                                    <img src="<?php echo $ls_options['Equipment-intro-3']['url']; ?>" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-team">
            <img src="<?php bloginfo('template_directory'); ?>/images/banner3.jpg" alt="">
        </div>
        <div class="main-papers dp-none">
            <img src="<?php bloginfo('template_directory'); ?>/images/about/Bgcolor-2.png" alt="">
            <div class="main-papers-content">
                <div class="main-papers-content__logo text-center">
                    <img src="<?php bloginfo('template_directory'); ?>/images/about/logo.png" alt="">
                </div>
                <h2 class="main-papers-content__heading text-center">Báo chí nói gì về <br>SHYNH BEAUTY SPA</h2>
                <div class="main-papers-content__image">
                    <ul class="main-papers-content__image--list d-flex">
                        <?php $i = 0; ?>
                        <?php foreach($ls_options['feedback-customer'] as $slide) : ?>
                        <li class="main-papers-content__image--list-item">
                            <a href="<?php echo $slide['url']; ?>"><img src="<?php echo $slide['image']; ?>" alt=""></a>
                        </li>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="advise-contact dp-block">
            <div class="advise-contact__body">
                <div class="contact-body">
                    <div class="contact-body__right">
                        <div class="contact-body__right-heading">

                            <img src="<?php bloginfo('template_directory'); ?>/images/contact/register.png" alt="" class="contact__heading">
                        </div>
                        <div class="contact-body__right-info">
                            <?php echo apply_shortcodes( '[contact-form-7 id="122" title="Đăng ký nhận thông tin"]' ); ?>
                        </div>
                    </div>
                    <div class="contact-body__left">
                        <div class="contact-body__column">
                            <div class="contact-logo">
                                <img src="<?php bloginfo('template_directory'); ?>/images/contact/call.png" alt="" class="icon__call">
                            </div>
                            <div class="contact__title">Liên hệ hotline</div>
                            <div class="contact__name"><?php echo $ls_options['hotline-1']; ?></div>
                            <div class="contact__desc">Giải đáp tất cả thắc mắc của quý khách hàng, phục vụ tận tâm
                                24/7</div>
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
                </div>
            </div>
        </div>
        <div class="address dp-blockPC">
            <div class="address-info">
                <div class="address-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="w-100" alt="">
                </div>
                <h2 class="address-info-title">Hệ thống hơn 50 chi nhánh</h2>
                <p class="address-info-caption">Nhờ sự tin yêu của khách hàng, SHYNH BEAUTY luôn có lượng khách lớn
                    ghé thăm</p>
            </div>
            <div class="address-nav">
                <div class="container container-width">
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
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $post_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id->ID ), 'single-post-thumbnail' );
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
                        $loop_hn = new WP_Query( $args_hn );
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
                        $extension_mn = get_term('46','extension_cat');
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
                        $loop_mn = new WP_Query( $args_mn );
                        ?>
                        <ul class="location-details-list col-lg-6">
                            <?php
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
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop_mn->have_posts() ) : $loop_mn->the_post();
                                $post_mn_id = get_the_ID();
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
                        $loop_mt = new WP_Query( $args_mt );
                        ?>
                        <ul class="location-details-list col-lg-6">
                            <?php
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
                                $post_mt_id = get_the_ID();
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
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_mtr_id ), 'single-post-thumbnail' );
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
                                $post_mtr_id = get_the_ID();
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
                        $loop_tn = new WP_Query( $args_tn );
                        ?>
                        <ul class="location-details-list col-lg-6">
                            <?php
                            while ( $loop_tn->have_posts() ) : $loop_tn->the_post();
                                $post_tn_id = $loop_tn->ID;
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_tn_id ), 'single-post-thumbnail' );
                                if($count %2 == 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-5 col-6 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-6 location-details-right">
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
                                $post_tn_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_tn_id ), 'single-post-thumbnail' );
                                if($count %2 != 0) {
                                    ?>
                                    <li class="location-details-list__item row">
                                        <div class="col-lg-5 col-6 location-details-left">
                                            <img src="<?php echo $image[0]; ?>" alt="" class="">
                                        </div>
                                        <div class="col-lg-6 col-6 location-details-right">
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
<?php
get_footer();
