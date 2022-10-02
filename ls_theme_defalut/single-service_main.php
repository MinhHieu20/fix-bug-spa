<?php
/**
 * Template Name Posts: Single Dịch vụ
 *
 */

get_header();
global $post, $ls_options;
?>
    <div class="content service-content">
        <div class="service-container container">
            <div class="service row">
                <div class="service--detail col-lg-9" id="post-<?php the_ID(); ?>">
                    <h2 class="service--detail__heading"><?php echo get_the_title(); ?></h2>
                    <button class="btn service--detail__btn">đăng ký tư vấn</button>
                    <div class="service--detailing">
                        <?php the_content() ?>

                        <div class="service--detailing__item form-contact">
                            <div class="service--detailing__item--logo">
                                <img src="<?php echo $ls_options['logo']['url']; ?>" alt="">
                            </div>
                            <div class="service--detailing__item--heading col-lg-9">
                                Để lại số điện thoại để được các
                                chuyên gia hàng đầu tư vấn cho bạn!
                            </div>
                            <div class="service--detailing__item--contact">
                                <?php echo apply_shortcodes( '[contact-form-7 id="301" title="Đăng ký đặt lịch"]' ); ?>
                            </div>
                        </div>
                        <div class="service--detailing__item">
                            <h2 class="service--detailing__item--header">Hình ảnh điều trị</h2>
                            <div class="service--detailing__item--result">
                                <div class="service--detailing__item--result--list row">
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
                                    <div class="service--detailing__item--result--list__item col-lg-3 col-6">
                                        <div class="service--detailing__item--result--list__item--images">
                                            <img src="<?php echo $image[0]; ?>" alt="">
                                        </div>
                                        <p class="service--detailing__item--result--list__item--desc">
                                            <?php the_title();  ?>
                                        </p>
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
                <div class="service--category col-lg-3">
                    <div class="service--category-one">
                        <div class="detail-news">
                            <h2 class="detail-news--title">Dịch vụ liên quan</h2>
                            <div class="detail-news--menu">
                                <div class="detail-news--menu__list">
                                <?php
                                    $args_sm = array(
                                        'post_type' => 'service_main',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 8,
                                        'orderby' => 'title',
                                        'order' => 'ASC',
                                    );
                                    $loop_sm = new WP_Query( $args_sm );
                                    while ( $loop_sm->have_posts() ) : $loop_sm->the_post();
                                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop_sm->ID ), 'single-post-thumbnail' );
                                ?>
                                    <div class="detail-news--menu__list--item">
                                        <div class="detail-news--menu__list--item--laser">
                                            <img src="<?php echo $image[0]; ?>">
                                        </div>
                                        <div class="detail-news--menu__list--item--desc"><a href="<?php the_permalink() ?>"><?php the_title();  ?></a></div>
                                    </div>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="details-news">
                        <h3 class="details-news-title">TIN TỨC MỚI NHẤT</h3>
                        <?php
                        $args = array(
                            'post_type' => 'event_spa',
                            'post_status' => 'publish',
                            'posts_per_page' => 2,
                        );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                        ?>
                        <div class="detail-news--menu">
                            <div class="detail-news--menu__list row">
                                <div class="detail-news--menu__list--item ">
                                    <div class="detail-news-boder">
                                        <div class="detail-news--menu__list--item--images col-lg-5">
                                            <img src="<?php echo $image[0]; ?>" alt="">
                                        </div>
                                        <div class="detail-news--menu__list--item--desc col-lg-7">
                                            <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>

                    <div class="details-pagination nonepc">
                        <ul class="details-pagination-list d-flex">
                            <div class="details-pagination-prev">
                                <a href="">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/service/arrow-left.png" alt="">
                                </a>
                            </div>
                            <li class="details-pagination-list__item active-white">
                                <a href="" class="details-pagination-list__item--link">1</a>
                            </li>
                            <li class="details-pagination-list__item">
                                <a href="" class="details-pagination-list__item--link">2</a>
                            </li>
                            <li class="details-pagination-list__item">
                                <a href="" class="details-pagination-list__item--link">3</a>
                            </li>
                            <div class="details-pagination-next">
                                <a href="">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/service/arrow-right.png" alt="">
                                </a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="service--category-one__mobile">
                <div class="detail-news">
                    <h1 class="detail-news--title">Dịch vụ liên quan</h1>
                    <?php
                    $args = array(
                        'post_type' => 'service_main',
                        'post_status' => 'publish',
                        'posts_per_page' => 5,
                        'orderby' => 'title',
                        'order' => 'ASC',
                    );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->ID ), 'single-post-thumbnail' );
                    ?>
                    <div class="detail-news--menu">
                        <div class="detail-news--menu__list">
                            <div class="detail-news--menu__list--item">
                                <div class="detail-news--menu__list--item--laser"></div>
                                <div class="detail-news--menu__list--item--desc">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                            </div>
                            <img class="detail-news--menu__list--line" src="<?php echo $image[0]; ?>" alt="">
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
<?php
get_footer();
