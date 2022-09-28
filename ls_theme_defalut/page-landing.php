<?php
/*
 * Template Name: Landing page
 *
 * @package ls_theme
 */
get_header();
global $ls_options, $post;
?>
    <div class="content-landing">
        <div class="content-landing-acne">
            <img src="<?php bloginfo('template_directory'); ?>/images/landing/bg-color2.png" alt="">
            <div class="container-width landing-acne">
                <div class="content-landing-acne__left">
                    <img src="<?php bloginfo('template_directory'); ?>/images/landing/bgColor1.png" alt="">
                    <div class="content-landing-acne__left--heading">
                        <div class="content-landing-acne__left--heading-above">
                            <img src="<?php echo $ls_options['overview-ladi']['url']; ?>" alt="">
                        </div>
                        <div class="content-landing-acne__left--heading-below">
                            <img src="<?php echo $ls_options['overview-ladi-1']['url']; ?>" alt="">
                        </div>
                    </div>
                    <div class="content-landing-acne__left--text">
                        <div class="content-landing-acne__left--text-left">
                            <img src="<?php echo $ls_options['overview-ladi-2']['url']; ?>" alt="">
                        </div>
                        <div class="content-landing-acne__left--text-between">
                            <img src="<?php echo $ls_options['overview-ladi-3']['url']; ?>" alt="">
                        </div>
                        <div class="content-landing-acne__left--text-right">
                            <img src="<?php echo $ls_options['overview-ladi-4']['url']; ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="content-landing-acne__right">
                    <div class="content-landing-acne__right--image1">
                        <img src="<?php echo $ls_options['overview-ladi-5']['url']; ?>" alt="">
                    </div>
                    <div class="content-landing-acne__right--image2">
                        <img src="<?php echo $ls_options['overview-ladi-6']['url']; ?>" alt="">
                    </div>
                    <div class="content-landing-acne__right--image3">
                        <img src="<?php echo $ls_options['overview-ladi-7']['url']; ?>" alt="">
                    </div>
                    <div class="content-landing-acne__right--image4">
                        <img src="<?php echo $ls_options['overview-ladi-8']['url']; ?>" alt="">
                    </div>
                </div>
                <button class="content-landing-acne__btn">
                    đặt lịch ngay
                </button>
            </div>
        </div>

        <div class="content-landing-outside">
            <img src="<?php bloginfo('template_directory'); ?>/images/landing/bgColor3.png" alt="">
            <div class="container-width landing-outside">
                <div class="content-landing-outside__human">
                    <div class="content-landing-outside__human--top">
                        <div class="content-landing-outside__human--top-image1">
                            <img src="<?php echo $ls_options['experts-ladi']['url']; ?>" alt="">
                        </div>
                        <div class="content-landing-outside__human--top-image2">
                            <img src="<?php echo $ls_options['experts-ladi-1']['url']; ?>" alt="">
                        </div>
                        <div class="content-landing-outside__human--top-image3">
                            <img src="<?php echo $ls_options['experts-ladi-2']['url']; ?>" alt="">
                        </div>
                        <div class="content-landing-outside__human--top-image4">
                            <img src="<?php echo $ls_options['experts-ladi-3']['url']; ?>" alt="">
                        </div>
                    </div>
                    <div class="content-landing-outside__human--logo">
                        <img src="<?php echo $ls_options['experts-ladi-4']['url']; ?>" alt="">
                    </div>
                    <div class="content-landing-outside__human--text">
                        <div class="content-landing-outside__human--text-image">
                            <img src="<?php echo $ls_options['experts-ladi-5']['url']; ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="content-landing-outside__course">
                    <h1 class="content-landing-outside__course--heading">lý do chọn liệu trình</h1>
                    <div class="row jc-center jc-space-around jc-space-evenly">
                        <div class="content-landing-outside__course--left">
                            <div class="content-landing-outside__course--left-above">
                                <img src="<?php bloginfo('template_directory'); ?>/images/landing/bgColor4.png" alt="">
                                <div class="course-left-above__text">
                                    <img src="<?php echo $ls_options['reason-1']['url']; ?>" alt="">
                                </div>
                            </div>
                            <div class="content-landing-outside__course--left-below">
                                <div class="course-left-below__text">
                                    <img src="<?php echo $ls_options['reason-2']['url']; ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <ul class="content-landing-outside__course--right">
                            <li class="content-landing-outside__course--right-item">
                                <?php echo $ls_options['reason-title']; ?>
                            </li>
                            <li class="content-landing-outside__course--right-item">
                                <?php echo $ls_options['reason-title-1']; ?>
                            </li>
                            <li class="content-landing-outside__course--right-item">
                                <?php echo $ls_options['reason-title-2']; ?>
                            </li>
                            <li class="content-landing-outside__course--right-item">
                                <?php echo $ls_options['reason-title-3']; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-landing-device">
            <div class="container-width wh-100">
                <div class="wh-100">
                    <div class="row wh-100 align-items-center pc-device">
                        <div class="col-xl-6 col-md-6 content-landing-device-left">
                            <ul class="content-landing-device-left__list">
                                <li class="content-landing-device-left__list--item">
                                    <img src="<?php echo $ls_options['Equipment']['url']; ?>" alt="">
                                </li>
                                <li class="content-landing-device-left__list--item1">
                                    <img src="<?php echo $ls_options['Equipment-1']['url']; ?>" alt="">
                                </li>
                                <li class="content-landing-device-left__list--item2">
                                    <img src="<?php echo $ls_options['Equipment-2']['url']; ?>" alt="">
                                </li>
                                <li class="content-landing-device-left__list--item3">
                                    <img src="<?php echo $ls_options['Equipment-3']['url']; ?>" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-6 col-md-6 content-landing-device-right">
                            <img src="<?php echo $ls_options['Equipment-4']['url']; ?>" alt="">
                        </div>
                    </div>
                    <div class="pc-mobile">
                        <div class="content-landing-device-right">
                            <img src="<?php echo $ls_options['Equipment-4']['url']; ?>" alt="">
                        </div>
                        <div class="content-landing-device-left">
                            <ul class="content-landing-device-left__list">
                                <li class="content-landing-device-left__list--item">
                                    <img src="<?php echo $ls_options['Equipment']['url']; ?>" alt="">
                                </li>
                                <li class="content-landing-device-left__list--item1">
                                    <img src="<?php echo $ls_options['Equipment-1']['url']; ?>" alt="">
                                </li>
                                <li class="content-landing-device-left__list--item2">
                                    <img src="<?php echo $ls_options['Equipment-2']['url']; ?>" alt="">
                                </li>
                                <li class="content-landing-device-left__list--item3">
                                    <img src="<?php echo $ls_options['Equipment-3']['url']; ?>" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-landing-endow">
            <img src="<?php echo $ls_options['banner-promotion']['url']; ?>" alt="">
        </div>
        <div class="content-landing-procedure">
            <img src="<?php bloginfo('template_directory'); ?>/images/landing/bgColor5.png" alt="">
            <div class="landing-procedure">
                <div class="container-width">
                    <h3 class="content-landing-procedure__heading">quy trình dịch vụ</h3>
                    <div class="row pd-12 pd-20 pd-60">
                        <?php $i = 0; ?>
                        <?php foreach($ls_options['flow-work'] as $slide) : ?>
                            <div class="col-xl-4 col-md-4 col-6 pd-10 pd-05">
                                <div class="content-landing-procedure__outside">
                                    <a href="!#">
                                        <div class="content-landing-procedure__outside--image">
                                            <img src="<?php echo $slide['image']; ?>" alt="">
                                        </div>
                                        <div class="content-landing-procedure__outside--title">
                                            <div class="content-landing-procedure__outside--title-image">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/landing/bgColor6.png" alt="">
                                            </div>
                                            <span class="content-landing-procedure__outside--title-number left-22">
                                                <?php echo $slide['title']; ?>
                                            </span>
                                            <p class="content-landing-procedure__outside--title-text"><?php echo $slide['description']; ?></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="content-landing-procedure__bottom">
                        <div class="content-landing-procedure__bottom--heading">
                            <div class="content-landing-procedure__bottom--heading-image">
                                <img src="<?php echo $ls_options['ourteam-ladi']['url']; ?>" alt="">
                            </div>
                        </div>
                        <div class="content-landing-procedure__bottom--image">
                            <div class="content-landing-procedure__bottom--image-one">
                                <img src="<?php echo $ls_options['ourteam-ladi-1']['url']; ?>" alt="">
                            </div>
                            <div class="content-landing-procedure__bottom--image-two">
                                <img src="<?php echo $ls_options['ourteam-ladi-2']['url']; ?>" alt="">
                            </div>
                            <div class="content-landing-procedure__bottom--image-three">
                                <img src="<?php echo $ls_options['ourteam-ladi-3']['url']; ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-landing-cover">
            <img src="<?php bloginfo('template_directory'); ?>/images/landing/bgColor7.png" alt="">
            <div class="container-width landing-cover">
                <div class="content-landing-cover__result">
                    <div class="content-landing-cover__result--heading">
                        <img src="<?php bloginfo('template_directory'); ?>/images/landing/letter7.png" alt="">
                    </div>
                    <div class="content-landing-cover__result--body">
                        <div class="content-landing-cover__result--body-list row pd-6">
                            <?php
                            $args = array(
                                'post_type' => 'beauty',
                                'post_status' => 'publish',
                                'posts_per_page' => 4,
                                'orderby' => 'title',
                                'order' => 'ASC',
                            );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                            ?>
                            <div class="content-landing-cover__result--body-list--item col-xl-3 col-sm-3 col-6 pd-05">
                                <a href="">
                                    <div class="result-image">
                                        <img src="<?php echo $image[0]; ?>" alt="">
                                    </div>
                                    <div class="result-desc"><?php the_title();  ?></div>
                                </a>
                            </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>

                <div class="content-landing-cover__advertiver">
                    <div class="content-landing-cover__advertiver--image1">
                        <img src="<?php echo $ls_options['person-image-ladi-1']['url']; ?>" alt="">
                    </div>
                    <div class="content-landing-cover__advertiver--image2">
                        <img src="<?php echo $ls_options['person-image-ladi-2']['url']; ?>" alt="">
                    </div>
                    <div class="content-landing-cover__advertiver--image3">
                        <img src="<?php echo $ls_options['person-image-ladi-3']['url']; ?>" alt="">
                    </div>
                    <div class="content-landing-cover__advertiver--image4">
                        <img src="<?php echo $ls_options['person-image-ladi-4']['url']; ?>" alt="">
                    </div>
                    <div class="content-landing-cover__advertiver--image5">
                        <img src="<?php echo $ls_options['person-image-ladi-5']['url']; ?>" alt="">
                    </div>
                    <div class="content-landing-cover__advertiver--title">
                        <?php echo $ls_options['person-name']; ?>
                    </div>
                </div>

                <div class="content-landing-cover__feedback">
                    <div class="content-landing-cover__feedback--heading">
                        <img src="<?php bloginfo('template_directory'); ?>/images/landing/letter8.png" alt="">
                    </div>
                    <div class="row pd-20">
                        <?php $i = 0; ?>
                        <?php foreach($ls_options['feedback-image-ladi'] as $slide) : ?>
                        <div class="col-xl-4 col-md-4 col-6 pd-10">
                            <div class="content-landing-cover__feedback--image">
                                <img src="<?php echo $slide['image']; ?>" alt="">
                            </div>
                        </div>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="content-landing-cover__form">
                    <img src="<?php bloginfo('template_directory'); ?>/images/landing/bgColor8.png" alt="">
                    <div class="content-landing-cover__form--inner">
                        <h3 class="content-landing-cover__form--inner-title">
                            đăng ký nhận thông tin
                        </h3>
                        <?php echo apply_shortcodes( '[contact-form-7 id="409" title="Đăng ký nhận tin Lading page"]' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
