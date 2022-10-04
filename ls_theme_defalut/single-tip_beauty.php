<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ls_theme_defalut
 */

get_header();
global $post;
$directoryURI = get_page_uri();
?>
    <div class="content">
        <div class="content-beautify-detail tips-beautify-detail__tablet">
            <div class="tips-beautify-container container">
                <div class="tips-beautify row">
                  
                    <div class="tips-beautify--detail col-lg-9 col-12" id="post-<?php the_ID(); ?>">
                        <p class="tips-beautify--detail__heading"><?php echo get_the_title(); ?></p>
                        <div class="tips-beautify--detailing">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="tips-beautify--category col-lg-3 hide-table hide-tablet-small">
                        <ul class="tips-beautify--category__list">
                            <li class="tips-beautify--category__list--item">
                                <a href="#" class="tips-beautify--category__list--item--link active <?php echo ($directoryURI=='') ? 'active' : '' ?>">Tin tức mới nhất</a>
                            </li>
                            <li class=" tips-beautify--category__list--item">
                                <a href="<?php echo home_url(); ?>/meo-lam-dep" class="tips-beautify--category__list--item--link <?php echo ($directoryURI=='meo-lam-dep') ? 'active' : '' ?>">Mẹo làm đẹp</a>
                            </li>
                            <li class="tips-beautify--category__list--item">
                                <a href="<?php echo home_url(); ?>/su-kien" class="tips-beautify--category__list--item--link <?php echo ($directoryURI=='su-kien') ? 'active' : '' ?>">Sự kiện chương trình</a>
                            </li>
                        </ul>
                        <div class="detail-news">
                            <h2 class="detail-news--title">Tin tức mới nhất</h2>
                            <div class="detail-news--menu dp-noneTL">
                                <div class="detail-news--menu">
                                    <div class="detail-news--menu__list row">
                                        <?php
                                            $args = array(
                                                'post_type' => 'tip_beauty',
                                                'post_status' => 'publish',
                                                'posts_per_page' => 6,
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
                                                    <p><?php echo get_the_title(); ?></p>
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

                            <div class="detail-new-tablet dp-blockTL">
                                <div class="detail-news--menu">
                                    <div class="detail-news--menu__list">
                                        <?php
                                        while ( $loop->have_posts() ) : $loop->the_post();
                                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                            ?>
                                            <a href="<?php the_permalink();?>">
                                                <div class="detail-news--menu__list--item ">
                                                    <div class="detail-news-boder">
                                                        <div class="detail-news--menu__list--item--images col-lg-5">
                                                            <img src="<?php echo $image[0]; ?>" alt="">
                                                        </div>
                                                        <div class="detail-news--menu__list--item--desc col-lg-7">
                                                            <p><?php echo get_the_title(); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
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

            <div class="tips-new">
                <div class="tips-new-item hide-table hide-tablet-small">
                    <div class="tips-new-item__heading">
                        <h2 class="tips-new-item__heading--title">Tin tức liên quan</h2>
                    </div>

                    <div class="tips-new-item__body dp-blockTL container">
                        <div class="tips-new-item__body--list row">
                            <?php
                            $args = array(
                                'post_type' => 'tip_beauty',
                                'post_status' => 'publish',
                                'posts_per_page' => 3,
                                'orderby' => 'title',
                                'order' => 'ASC',
                            );
                            $count = 0;
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $post_id = $loop->ID;
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
                            ?>

                                <div class="tips-new-item__body--list--item col-lg-3 col-sm-4 col-md-4">
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
                                        <a href="<?php the_permalink();?>"><img src="<?php echo $image[0]; ?>" alt=""></a>
                                    </div>
                                    <h2 class="tips-new-item__body--list--item-title">
                                        <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
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
                    </div>
                </div>
                <div class="promotion--container tip-detail-mobile hide-pc">
                    <div class="promotion--container--body container">
                        <div class="promotion--container--body__list row">
                            <?php
                            $args = array(
                                'post_type' => 'tip_beauty',
                                'post_status' => 'publish',
                                'posts_per_page' => 2,
                                'orderby' => 'title',
                                'order' => 'ASC',
                            );

                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $post_id = $loop->ID;
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
                                ?>
                                <div class="promotion--container--body__list--item col-md-6 col-sm-6 col-12">
                                    <div class="promotion--container--body__list--item--content row">
                                        <div class="promotion--container--body__list--item--content--images col-md-5 col-sm-12 col-12">
                                            <a href="<?php the_permalink();?>"><img src="<?php echo $image[0]; ?>" alt=""></a>
                                        </div>
                                        <div class="promotion--container--body__list--item--content--text col-md-7 col-sm-12 col-12">
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
