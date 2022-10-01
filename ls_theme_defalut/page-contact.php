<?php
/*
 * Template Name: Trang liên hệ
 *
 * @package ls_theme
 */
get_header();
global $ls_options, $post;
?>
    <div class="content">
        <div class="contact-address">
            <div class="grid wide">
                <div class="contact-address-item row">
                    <div class="contact-address-item__maps col l-6">
                        <iframe class="contact-address-item__maps--link"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3628481283035!2d106.6810527506547!3d10.783496661973436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f2eb93b03b1%3A0x1c59a46f7764c421!2zMTMsIDkgS-G7syDEkOG7k25nLCBQaMaw4budbmcgOSwgUXXhuq1uIDMsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCA3MDAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1661157115797!5m2!1svi!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="contact-address-item__form-contact col l-6 col-12">
                        <div class="contact-address-item__form-contact--address">
                            <h1 class="contact-address-item__form-contact--address--title">SHYNH BEAUTY SPA - Dẫn đầu trị mụn uy tín số 1 Việt Nam</h1>
                            <p class="contact-address-item__form-contact--address--text">Hotline: <?php echo $ls_options['hotline-1']; ?></p>
                            <p class="contact-address-item__form-contact--address--text">Website: <?php echo $ls_options['web']; ?></p>
                            <p class="contact-address-item__form-contact--address--text">Mail: <a href="mailto:<?php echo $ls_options['emailft-2']; ?>"><?php echo $ls_options['emailft-2']; ?></a></p>
                        </div>
                        <div class="contact-address-item__form-contact--group">
                            <h2 class="contact-address-item__form-contact--group--title">Liên hệ với chúng tôi</h2>
                            <?php echo apply_shortcodes( '[contact-form-7 id="123" title="Liên hệ"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="advise-contact advise-contactIndex">
            <div class="advise-contact__body container">
                <div class="contact-body row">
                    <div class="contact-body__left col-lg-5 col-12">
                        <div class="contact-body__column col-lg-10 col-6 col-sm-6">
                            <div class="contact-logo">
                                <img src="<?php bloginfo('template_directory'); ?>/images/contact/call.png" alt="" class="icon__call">
                            </div>
                            <div class="contact__title">Liên hệ hotline</div>
                            <div class="contact__name"><?php echo $ls_options['hotline-1']; ?></div>
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
        <div class="address">
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
