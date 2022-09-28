<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ls_theme_defalut
 */

get_header();
global $post, $ls_option;
?>
    <div class="content content-beautify-detail event-detail-mobile event-detail-tablet">
        <div class="tips-beautify-container grid wide">
            <div class="tips-beautify row">
                <div class="tips-beautify--category col-md-3 col l-3">
                    <div class="detail-news">
                        <h2 class="detail-news--title">Sự kiện mới nhất</h2>
                        <div class="detail-news--menu">
                            <div class="detail-news--menu">
                                <div class="detail-news--menu__list row">
                                    <?php
                                    $args = array(
                                        'post_type' => 'event_spa',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 8,
                                    );
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                    ?>
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
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tips-beautify--detail col-md-9 col l-9 col-11" id="post-<?php the_ID(); ?>">
                    <h1 class="tips-beautify--detail__heading">
                        <?php echo get_the_title(); ?>
                    </h1>
                    <div class="tips-beautify--detailing">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tips-new">
            <div class="tips-new-item grid wide">
                <div class="tips-new-item__heading">
                    <h2 class="tips-new-item__heading--title">Tin tức liên quan</h2>
                </div>

                <div class="tips-new-item__body dp-blockTL dp-none">
                    <div class="tips-new-item__body--list">
                        <?php
                        $args = array(
                            'post_type' => 'event_spa',
                            'post_status' => 'publish',
                            'posts_per_page' => 3,
                        );
                        $loop = new WP_Query( $args );
                        $count = 0;
                        while ( $loop->have_posts() ) : $loop->the_post();
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                        ?>
                            <div class="tips-new-item__body--list--item col-lg-3 col-md-3">
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
                                    <img src="<?php bloginfo('template_directory'); ?>/images/event/event1.png" alt="">
                                </div>
                                <h2 class="tips-new-item__body--list--item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <p class="tips-new-item__body--list--item-desc">
                                    <?php
                                    $the_excerpt_custom = get_field('the_excerpt_custom');
                                    echo $the_excerpt_custom;
                                    ?>
                                </p>
                            </div>
                        <?php
                        $count++;
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>

                <div class="promotion--container dp-nonePC dp-noneTL dp-block">
                    <div class="promotion--container--body grid wide">
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
                            <div class="promotion--container--body__list--item col l-5 col-md-5">
                                <div class="promotion--container--body__list--item--content row">
                                    <div class="promotion--container--body__list--item--content--images col l-5">
                                        <img src="<?php echo $image[0]; ?>" alt="">
                                    </div>
                                    <div class="promotion--container--body__list--item--content--text col l-7">
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
<?php
get_footer();
