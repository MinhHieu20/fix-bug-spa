<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ls_theme_defalut
 */
global $ls_options, $post, $WP_Query, $product;
get_header();
?>
<div class="content content-main">
    <div class="top-banner">
        <div class="top-banner-1">
            <img src="<?php echo $ls_options['banner-main-main']['url']; ?>" alt="">
        </div>
    </div>
    <div class="content-container grid wide">
        <div class="container-item ">
            <div class="container-heading">
                <div class="container-item-logo">
                    <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="container-item-logo-image" alt="">
                </div>
                <h2 class="container-item-title">Dịch vụ nổi bật</h2>
            </div>
            <div class="container-body">
                <div class="container-service row">
                    <?php
                    $categories = get_categories(array( 'taxonomy'=>'service_main_cat', 'parent' => 70));
                    foreach ($categories as $category) {
                        ?>
                        <div class="container-service-item col-lg-3 col-md-3 col-sm-3 col-6 pd-05">
                            <a href="!#">
                                <?php $icon_image_bg = get_field('background_image', $category); ?>
                                <img class="service-image" src="<?php echo esc_url($icon_image_bg['url']); ?>" alt="">
                                <div class="container-service-item__note">
                                    <div class="container-service-item__note--image">
                                        <?php $icon_image = get_field('image_icon_service', $category); ?>
                                        <img class="wh-100" src="<?php echo esc_url($icon_image['url']); ?>" alt="">
                                    </div>
                                    <p class="container-service-item__note--desc"><?php echo $category->cat_name ?></p>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="system-introduction row">
            <div class="introduction-info col-xl-6 col-lg-6 col-md-5 col-12">
                <div class="introduction-info-logo">
                    <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" alt="" class="info-logo-img">
                </div>
                <div class="introduction-info-title"><?php echo $ls_options['intro-main-vc-title']; ?></div>
                <div class="introduction-info-desc">
                    <?php echo $ls_options['intro-main-vc-content']; ?>
                </div>
            </div>

            <div class="introduction-image col-xl-6 col-lg-6 col-md-7">
                <img src="<?php echo $ls_options['intro-main-vc-img-1']['url']; ?>" alt="" class="introduction-image-1">
                <img src="<?php echo $ls_options['intro-main-vc-img-2']['url']; ?>" alt="" class="introduction-image-2">
                <img src="<?php echo $ls_options['intro-main-vc-img-3']['url']; ?>" alt="" class="introduction-image-3">
            </div>

        </div>
    </div>
    <div class="top-banner-2">
        <div class="top-banner-body">
            <div class="top-banner-body__item">
                <h2 class="top-banner-body__item--heading"><?php echo $ls_options['intro-main-vc-detail-title']; ?></h2>
                <p class="top-banner-body__item--desc">
                    <?php echo $ls_options['intro-main-vc-detail-content']; ?>
                </p>
            </div>
            <div class="top-banner-body__item">
                <h2 class="top-banner-body__item--heading"><?php echo $ls_options['intro-main-vc-detail-title-1']; ?></h2>
                <p class="top-banner-body__item--desc"><?php echo $ls_options['intro-main-vc-detail-content-1']; ?></p>
            </div>
        </div>
    </div>
    <div class="top-banner-3">
        <img src="<?php echo $ls_options['banner-team']['url']; ?>" alt="">
    </div>
    <div class="content-container treatment-result index-result background-mobile">
        <div class="container-item grid wide">
            <div class="container-heading treatment-result-heading">
                <div class="container-item-logo pd-5">
                    <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="container-item-logo-image" alt="">
                </div>
                <h2 class="container-item-title">Kết quả điều trị</h2>
            </div>
            <div class="container-body">
                <div class="treatment-category">
                    <ul id="item_id" class="category-nav row">
                        <?php
                        $terms = get_terms('beauty_cat');
                        foreach ($terms as $index => $term) { ?>
                            <li class="category-item tab-item">
                                <a class="category-item-link"><?php echo $term->name; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div id="container_tab">
                    <?php foreach ($terms as $index => $term) { ?>
                        <div class="tab-pane">
                            <div class="treatment-result-list row pd-6">
                                <?php
                                $extension = get_term($term->term_id,'beauty_cat');
                                $args = array(
                                    'post_type' => 'beauty',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 6,
                                    'orderby' => 'title',
                                    'order' => 'ASC',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'beauty_cat', //double check your taxonomy name in you dd
                                            'field'    => 'term_id',
                                            'terms'    => array( $extension->term_id ),
                                        ),
                                    ),
                                );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post();
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                    ?>
                                    <div class="treatment-result-item col-xl-3 col-sm-3 col-6 pd-05">
                                        <div class="treatment-result-image">
                                            <img src="<?php echo $image[0]; ?>" class="w-100" alt="">
                                        </div>
                                        <div class="treatment-result-desc">
                                            <?php the_title();  ?>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <button class="seemore-mobile btn"><a href="#">Xem thêm</a></button>
            </div>
        </div>
    </div>
    </div>
    <div class="content-container event">
    <div class="container-item grid wide">
        <div class="container-heading event-heading">
            <div class="container-item-logo pd-1 ">
                <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="container-item-logo-image" alt="">
            </div>
            <h2 class="container-item-title">Sự kiện</h2>

        </div>
        <div class="container-body">
            <div class="event-list">
                <?php
                    $args = array(
                        'post_type' => 'event_spa',
                        'post_status' => 'publish',
                        'posts_per_page' => 3,
                    );
                    $count = 0;
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                ?>
                <div class="event-item col-xl-3 col-md-4 col-sm-12">
                    <?php
                        if ($count == 2) {
                    if(wp_is_mobile()) {
                    ?>
                    <div class="event-item-image image-pseudo">
                    <?php
                    } else {
                    ?>
                    <div class="event-item-image">
                    <?php
                    }
                    ?>
                    <?php
                        } else {
                    ?>
                        <div class="event-item-image image-pseudo">
                    <?php
                    }
                    ?>
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>" alt="" class="event-image"></a>
                    </div>
                    <div class="event-item-text ">
                        <h2 class="event-title"><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h2>
                        <p class="event-desc">
                            <?php
                            $the_excerpt_custom = get_field('the_excerpt_custom');
                            echo $the_excerpt_custom;
                            ?>
                        </p>
                    </div>
                </div>
                <?php
                    $count++;
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="container-footer">
            <button class="btn-exception btn-animate"><a href="<?php echo home_url(); ?>/su-kien">Xem thêm</a></button>
        </div>
    </div>
    <div class="sale">
        <div class="sale-heading"></div>
        <div class="sale-heading-nav">
            <div class="container-item-logo">
                <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="container-item-logo-image" alt="">
            </div>
            <h2 class="container-item-title">ưu đãi</h2>
        </div>
    </div>
    <div class="content-container event sale-container">
        <div class="container-item grid wide">

            <div class="container-body ">
                <div class="event-list">
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
                    <div class="event-item col-xl-3 col-md-4 col-sm-12">
                    <?php
                        if ($count == 2) {
                        if(wp_is_mobile()) {
                    ?>
                        <div class="event-item-image image-pseudo">
                    <?php
                    } else {
                    ?>
                        <div class="event-item-image">
                    <?php
                    }
                    ?>
                    <?php
                    } else {
                    ?>
                        <div class="event-item-image image-pseudo">
                    <?php
                    }
                    ?>
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>" alt="" class="event-image"></a>
                        </div>
                        <div class="event-item-text ">
                            <h2 class="event-title"><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h2>
                            <p class="event-desc">
                                <?php
                                $the_excerpt_custom = get_field('the_excerpt_custom');
                                echo $the_excerpt_custom;
                                ?>
                            </p>
                        </div>
                    </div>
                    <?php
                        $count++;
                        endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="container-footer">
                <button class="btn-exception"><a href="<?php echo home_url(); ?>/uu-dai">Xem thêm</a></button>
            </div>
        </div>
    </div>
    <div class="content-container beauty-store">
        <div class="container-item grid wide">
            <div class="container-heading heading-store">
                <div class="container-item-logo">
                    <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="container-item-logo-image" alt="">
                </div>
                <h2 class="container-item-title">shynh beauty store</h2>

            </div>
            <div class="container-body">
                <div class="store-category">
                    <ul id="product_cat_id" class="category-list row">
                        <?php
                        $terms = get_terms('product_cat');
                        foreach ($terms as $index => $term) { ?>
                            <li class="category-item tab-category">
                                <a class="category-item__link pseudo-link"><?php echo $term->name; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div id="product_list_swiper">
                    <?php foreach ($terms as $index => $term) { ?>
                        <div class="slide-container swiper">
                            <div class="slide-content">
                                <div class="card-wrapper swiper-wrapper">
                                    <?php
                                    $args = array(
                                        'post_type' => 'product',
                                        'product_cat' => $term->slug,
                                        'orderby' =>'date',
                                        'order' => 'ASC'
                                    );
                                    $getposts = new WP_Query($args);
                                    while ($getposts->have_posts()) : $getposts->the_post();
                                        ?>
                                        <div class="card swiper-slide">
                                            <div class="image-content">
                                                <span class="overlay"></span>
                                                <div class="card-image">
                                                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail', array( 'class' =>'card-img') ); ?>
                                                </div>
                                            </div>
                                            <div class="card-content">
                                                <p class="description height-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                                <div class="money">
                                                    <h4 class="price"><?php echo $product->get_regular_price(); ?>đ</h4>
                                                    <a href="<?php $add_to_cart = do_shortcode('[add_to_cart_url id="'.$post->ID.'"]'); echo $add_to_cart; ?>" class="button add-to-cart">
                                                        <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </div>

                            <div class="swiper-button-next swiper-navBtn">
                                <img class="swiper-icon" src="<?php bloginfo('template_directory'); ?>/images/service/arrow-right.png" alt="">
                            </div>
                            <div class="swiper-button-prev swiper-navBtn">
                                <img class="swiper-icon" src="<?php bloginfo('template_directory'); ?>/images/service/arrow-left.png" alt="">
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="container-footer">
                <a href="<?php echo home_url() ?>/cua-hang"><button class="btn-exception">Xem cửa hàng</button></a>
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
                        <div class="contact__name"><?php echo $ls_options['hotline-1']; ?> (BẤM PHÍM 2)</div>
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
    <div class="address dp-blockPC extension-focus">
        <div class="address-info">
            <div class="address-image">
                <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="w-100" alt="">
            </div>
            <h2 class="address-info-title">Hệ thống hơn 50 chi nhánh</h2>
            <p class="address-info-caption pd-6">Nhờ sự tin yêu của khách hàng, SHYNH BEAUTY luôn có lượng khách lớn ghé thăm</p>
        </div>
        <?php echo do_shortcode( '[get_location]' ); ?>
    </div>
<?php
get_footer();
