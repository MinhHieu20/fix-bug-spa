<?php
/*
 * Template Name: Cửa hàng
 *
 * @package ls_theme
 */
get_header();
global $ls_options, $post;
?>
    <div class="overlay"></div>
    <div class="main">
        <div class="main-logo-store">
                <div class="main-logo__image">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="main-logo__image--img" alt="">
                    </a>
                </div>
                <a href="<?php echo home_url(); ?>"><h1 class="main-logo__title">Shynh Beauty Store</h1></a>

        </div>
        <div class="product">
            <div class="product-cat">
                <div class="container container-width">
                    <ul class="product-cat__menu d-flex">
                        <li class="product-cat__menu-item">
                            <a>Điều trị thâm mụn</a>
                        </li>
                        <li class="product-cat__menu-item active">
                            <a>Điều trị nám</a>
                        </li>
                        <li class="product-cat__menu-item">
                            <a>Serum</a>
                        </li>
                        <li class="product-cat__menu-item">
                            <a>Sữa rửa mặt</a>
                        </li>
                        <li class="product-cat__menu-item">
                            <a>Kem dưỡng trắng da</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="product-details store">
                <div class="container container-width">
                    <div class="row product-list">
                        <?php
                        $args = array(
                            'post_type' => 'product',
                            'posts_per_page' => '24',
                            'product_cat' => 'dieu-tri-tham-mun',
                            'orderby' =>'date',
                            'order' => 'ASC'
                        );
                        $loop = new WP_query($args);
                        global $wp_query; $wp_query->in_the_loop = true;
                        while ($loop->have_posts()) : $loop->the_post();
                            global $product;
                            $product_id = $loop->id;
                            ?>
                            <div class="product-list-item col-lg-3 col-md-4 col-sm-6 col-6">
                                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );?>
                                <div class="product-list-item__image">
                                    <a href="<?php the_permalink(); ?>"><img src="<?php  echo $image[0]; ?>" class="mr-one" alt=""></a>
                                </div>

                                <h4 class="product-list-item__name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <div class="product-list-item__money mr-top0">
                                    <span class="product-list-item__money--price"><?php echo $product->get_regular_price(); ?>đ</span>
                                    <a href="<?php $add_to_cart = do_shortcode('[add_to_cart_url id="'.$post->ID.'"]'); echo $add_to_cart; ?>" class="btn choose-product add-to-cart">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                    </a>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
            <div class="product-details store show">
                <div class="container container-width">
                    <div class="row product-list">
                        <?php
                        $args = array(
                            'post_type' => 'product',
                            'posts_per_page' => '24',
                            'product_cat' => 'dieu-tri-nam',
                            'orderby' =>'date',
                            'order' => 'ASC'
                        );
                        $loop = new WP_query($args);
                        global $wp_query; $wp_query->in_the_loop = true;
                        while ($loop->have_posts()) : $loop->the_post();
                            global $product;
                            $product_id = $loop->id;
                            ?>
                            <div class="product-list-item col-lg-3 col-md-4 col-sm-6 col-6">
                                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );?>
                                <div class="product-list-item__image">
                                    <a href="<?php the_permalink(); ?>"><img src="<?php  echo $image[0]; ?>" class="mr-one" alt=""></a>
                                </div>

                                <h4 class="product-list-item__name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <div class="product-list-item__money mr-top0">
                                    <span class="product-list-item__money--price"><?php echo $product->get_regular_price(); ?>đ</span>
                                    <a href="<?php $add_to_cart = do_shortcode('[add_to_cart_url id="'.$post->ID.'"]'); echo $add_to_cart; ?>" class="btn choose-product add-to-cart">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                    </a>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
            <div class="product-details store">
                <div class="container container-width">
                    <div class="row product-list">
                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => '24',
                        'product_cat' => 'serum',
                        'orderby' =>'date',
                        'order' => 'ASC'
                    );
                    $loop = new WP_query($args);
                    global $wp_query; $wp_query->in_the_loop = true;
                    while ($loop->have_posts()) : $loop->the_post();
                        global $product;
                        $product_id = $loop->id;
                        ?>
                        <div class="product-list-item col-lg-3 col-md-4 col-sm-6 col-6">
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );?>
                            <div class="product-list-item__image">
                                <a href="<?php the_permalink(); ?>"><img src="<?php  echo $image[0]; ?>" class="mr-one" alt=""></a>
                            </div>

                            <h4 class="product-list-item__name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <div class="product-list-item__money mr-top0">
                                <span class="product-list-item__money--price"><?php echo $product->get_regular_price(); ?>đ</span>
                                <a href="<?php $add_to_cart = do_shortcode('[add_to_cart_url id="'.$post->ID.'"]'); echo $add_to_cart; ?>" class="btn choose-product add-to-cart">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                </a>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
                </div>
            </div>
            <div class="product-details store">
                <div class="container container-width">
                    <div class="row product-list">
                        <?php
                        $args = array(
                            'post_type' => 'product',
                            'posts_per_page' => '24',
                            'product_cat' => 'sua-rua-mat',
                            'orderby' =>'date',
                            'order' => 'ASC'
                        );
                        $loop = new WP_query($args);
                        global $wp_query; $wp_query->in_the_loop = true;
                        while ($loop->have_posts()) : $loop->the_post();
                            global $product;
                            $product_id = $loop->id;
                            ?>
                            <div class="product-list-item col-lg-3 col-md-4 col-sm-6 col-6">
                                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );?>
                                <div class="product-list-item__image">
                                    <a href="<?php the_permalink(); ?>"><img src="<?php  echo $image[0]; ?>" class="mr-one" alt=""></a>
                                </div>

                                <h4 class="product-list-item__name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <div class="product-list-item__money mr-top0">
                                    <span class="product-list-item__money--price"><?php echo $product->get_regular_price(); ?>đ</span>
                                    <a href="<?php $add_to_cart = do_shortcode('[add_to_cart_url id="'.$post->ID.'"]'); echo $add_to_cart; ?>" class="btn choose-product add-to-cart">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                    </a>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
            <div class="product-details store">
                <div class="container container-width">
                    <div class="row product-list">
                        <?php
                        $args = array(
                            'post_type' => 'product',
                            'posts_per_page' => '24',
                            'product_cat' => 'kem-duong-trang-da',
                            'orderby' =>'date',
                            'order' => 'ASC'
                        );
                        $loop = new WP_query($args);
                        global $wp_query; $wp_query->in_the_loop = true;
                        while ($loop->have_posts()) : $loop->the_post();
                            $product_id = $loop->id;
                            ?>
                            <div class="product-list-item col-lg-3 col-md-4 col-sm-6 col-6">
                                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );?>
                                <div class="product-list-item__image">
                                    <a href="<?php the_permalink(); ?>"><img src="<?php  echo $image[0]; ?>" class="mr-one" alt=""></a>
                                </div>

                                <h4 class="product-list-item__name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <div class="product-list-item__money mr-top0">
                                    <span class="product-list-item__money--price"><?php echo $product->get_regular_price(); ?>đ</span>
                                    <a href="<?php $add_to_cart = do_shortcode('[add_to_cart_url id="'.$post->ID.'"]'); echo $add_to_cart; ?>" class="btn choose-product add-to-cart">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/add.png" alt="" class="add-cart" />
                                    </a>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
            <div class="product-details-viewcart">
                <a href="<?php echo home_url() ?>/gio-hang">
                    <button class="btn product-details-btn">
                        Xem giỏ hàng
                    </button>
                </a>
            </div>
        </div>
        <div class="main-image dp-none pdb-15">
            <img src="<?php bloginfo('template_directory'); ?>/images/banner_store.png" alt="">
        </div>
        <div class="advise-contact advise-contactIndex hide-pc hide-table">
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
    </div>
<?php
get_footer();
