<?php
/**
 * The template for displaying all single promotion.
 *
 * @package ls_theme_defalut
 */

get_header();
global $post;
?>
    <div class="content service-content">
        <?php
            while ( have_posts() ) : the_post();
        ?>
        <div class="service-container container">
            <div class="service row service-promotion-mobile">
                <div class="service--detail col-lg-9 col-12">
                    <h2 class="service--detail__heading"><?php the_title(); ?></h2>
                    <div class="service--detailing promotion--detail">
                        <div class="promotion--detail__item">
                            <div class="promotion--detail__item--images">
                                <?php
                                    $post_id = $_GET['post_id'];
                                    $image_content = get_field('image_content',$post_id);
                                ?>
                                <img src="<?php echo $image_content['url']; ?>" alt="">
                            </div>
                            <div class="promotion--detail__item--subsection">
                                <p class="promotion--detail__item--subsection--desc"><?php echo get_the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="service--detail--button">
                        <button class="btn promotion--detail__btn" id="promotion--detail__btn">
                            <i class="fa-solid fa-gift icon--gift"></i>Nhận ưu đãi</button>
                    </div>
                </div>
                <div class="service--category col-lg-3 hide-mobile hide-tablet hide-tablet-small">
                    <div class="details-news">
                        <h3 class="details-news-title">ƯU ĐÃI LỚN NHẤT</h3>

                        <div class="detail-news--menu">
                            <div class="detail-news--menu__list row">
                                <?php
                                    $args = array(
                                        'post_type' => 'promotion',
                                        'post_status' => 'publish',
                                        'cat_id' => '41',
                                        'posts_per_page' => 5,
                                    );
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                ?>
                                <div class="detail-news--menu__list--item">
                                    <div class="detail-news-boder">
                                        <div class="detail-news--menu__list--item--images col-lg-5">
                                            <img src="<?php echo $image[0]; ?>" alt="">
                                        </div>
                                        <div class="detail-news--menu__list--item--desc col-lg-7">
                                            <p><a href="<?php the_permalink(); ?>"><?php echo truncate( get_the_title(), 50 ); ?></a></p>
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
                <?php endwhile; // End of the loop. ?>
            </div>
            <div class="promotion-mobile hide-pc">
                <h2 class="promotion-mobile__heading">Ưu đãi liên quan</h2>
                <div class="promotion-mobile--container">
                    <div class="promotion-mobile--container--body container">
                        <div class="promotion-mobile--container--body__list row">
                            <?php
                                $args = array(
                                    'post_type' => 'promotion',
                                    'post_status' => 'publish',
                                    'cat_id' => '42',
                                    'posts_per_page' => 3,
                                );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                            ?>
                            <div class="promotion-mobile--container--body__list--item col-md-12 col-12">
                                <div class="promotion-mobile--container--body__list--item--content row">
                                    <div class="promotion-mobile--container--body__list--item--content--images col-md-5 col-sm-5 col-12">
                                        <img src="<?php echo $image[0]; ?>" alt="">
                                    </div>
                                    <div class="promotion-mobile--container--body__list--item--content--text col-md-7 col-sm-7 col-12">
                                        <h1 class="promotion-mobile--container--body__list--item--content--text--title">
                                            <a href="<?php the_permalink(); ?>"><?php echo truncate( get_the_title(), 50 ); ?></a></h1>
                                        <p class="promotion-mobile--container--body__list--item--content--text--desc"><?php the_excerpt(); ?></p>
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
           
            <div class="tips-new promotion-news promotion--detail-mobile hide-mobile hide-tablet hide-tablet-small">
                <div class="tips-new-item container">
                    <div class="tips-new-item__heading">
                        <h2 class="tips-new-item__heading--title">Tin tức liên quan</h2>
                    </div>
                    <div class="tips-new-item__body dp-blockTL dp-none">
                        <div class="tips-new-item__body--list row">
                            <?php
                                $args = array(
                                    'post_type' => 'promotion',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 3,
                                );
                                $count = 0;
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post();
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                            ?>
                            <div class="tips-new-item__body--list--item col-lg-3 col-md-4">
                                <?php
                                if ($count == 2) {
                                ?>
                                <div class="tips-new-item__body--list--item-images">
                                <?php
                                } else {
                                ?>
                                <div class="tips-new-item__body--list--item-images image-pseudo">
                                <?php
                                }
                                ?>
                                    <img src="<?php echo $image[0]; ?>" alt="">
                                </div>
                                <h2 class="tips-new-item__body--list--item-title"><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h2>
                                <p class="tips-new-item__body--list--item-desc"><?php echo get_the_excerpt(); ?></p>
                            </div>
                            <?php
                                $count++;
                                endwhile;
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="promotion--container dp-nonePC dp-noneTL dp-block">
                        <div class="promotion--container--body container">
                            <div class="promotion--container--body__list row">
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
                                <div class="promotion--container--body__list--item col-lg-5 col-md-5">
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
            </div>
        </div>
    </div>
<?php
get_footer();
