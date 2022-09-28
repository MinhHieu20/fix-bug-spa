<?php
/*
 * Template Name: Trang đặt lịch
 *
 * @package ls_theme
 */
get_header();
global $post, $ls_options;
?>
    <div class="main">
        <div class="main-logo">
            <img src="<?php echo $ls_options['banner-main-main']['url']; ?>" alt="">
        </div>

        <div class="booking">
            <div class="booking-after">

            </div>
            <div class="booking-title">
                <h2>ĐẶT LỊCH HẸN</h2>
            </div>
            <div class="form--contact__inner--contact booking-form">
                <?php echo apply_shortcodes( '[contact-form-7 id="405" title="Đặt lịch hẹn"]' ); ?>
            </div>
        </div>

        <div class="address dp-blockPC">
            <div class="address-info">
                <div class="address-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="w-100" alt="">
                </div>
                <h2 class="address-info-title">Hệ thống hơn 50 chi nhánh</h2>
                <p class="address-info-caption pd-6">Nhờ sự tin yêu của khách hàng, SHYNH BEAUTY luôn có lượng khách lớn ghé thăm</p>
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
<?php
get_footer();
