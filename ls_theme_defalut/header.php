<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ls_theme_defalut
 */
global $ls_options;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/slick/slick.css"/>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/slider.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/sass/main.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wapper">
    <header class="header">
        <div class="header-container">
            <div class="header-container-heading">
                <div class="header-container-heading__title">
                    <div class="header-container-heading__title--text">
                        <span class="header-container-heading__title--text-name"><?php echo $ls_options['top-bar']; ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-contact row">
            <div class="header-contact-left col-xl-4 col-md-4 col-4">
                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                    <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
                    <input type="search" class="header-contact-left__search"
                           placeholder="<?php echo esc_attr_x( 'Thông tin tìm kiếm …', 'placeholder' ) ?>"
                           value="<?php echo get_search_query() ?>" name="s"
                           title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                    <button type="submit" class="header-contact-left__button dp-none" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search header-contact-left__button--icon" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5
                                        5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </form>
                <button class="navbar-mobile js-mobile-btn">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="mobile-menu-overlay"></div>
            </div>
            <div class="header-contact-right col-xl-4 col-md-4 col-4">
                <button type="submit" class="search-mobile dp-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#fff" class="bi bi-search header-contact-left__button--icon" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
                <div class="header-contact-right__cart">
                    <div class="header-cart-pc hide-mobile">

                        <button class="header-contact-right__cart--btn">
                            <img src="<?php bloginfo('template_directory'); ?>/images/store.png" alt="">
                            <span class="header-contact-right__cart--number dp-none"><?php echo sprintf (WC()->cart->cart_contents_count ); ?>+</span>
                        </button>
                        <div class="header-cart--notify border-1 dp-none">
                            <div class="header-cart--notify__info">
                                <div class="row header-cart--notify__info--top" id="scrollbar">
                                    <?php
                                        $total = WC()->cart->get_cart_total();
                                        foreach ( WC()->cart->get_cart() as $cart_item ) {
                                            $cart_id  = $cart_item['data']->get_id();
                                            $quantity = $cart_item['quantity'];
                                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $cart_id ), 'single-post-thumbnail' );
                                    ?>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="header-cart--notify__info--top-image">
                                            <img src="<?php echo $image[0]; ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 p-0">
                                        <div class="header-cart--notify__info--top-detail">
                                            <h3><a href="<?php the_permalink(); ?>"><?php echo $cart_item['data']->name; ?></a></h3>
                                            <div class="top-detail-amount">
                                                <span class="top-detail-amount__number"><?php echo $quantity; ?></span>
                                                <span class="top-detail-amount_cal">x</span>
                                                <span class="top-detail-amount__price"><?php echo $cart_item['data']->regular_price ?>đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                    <div class="header-cart--notify__info--top-icon">
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                 fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="header-cart--notify__info--main">
                                    <h3 class="header-cart--notify__info--main-heading">Tổng cộng: <?php echo $total; ?></h3>
                                </div>
                                <div class="header-cart--notify__info--bottom">
                                    <button class="btn header-cart--notify__info--bottom-view"><a href="<?php echo home_url(); ?>/gio-hang">Xem giỏ hàng</a></button>
                                    <button class="btn header-cart--notify__info--bottom-pay"><a href="<?php echo home_url(); ?>/thanh-toan">Thanh toán</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="header-contact-right__tel">
                    <a href="tel:<?php echo $ls_options['hotline-1']; ?>"><span class="header-contact-right__tel--number">hotline <?php echo $ls_options['hotline-1']; ?></span></a>
                </button>
            </div>
        </div>
        <div class="search-mobile-form hide">
            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <div class="form-group">
                    <input type="search" class="form-control form-search-mobile"
                            placeholder="<?php echo esc_attr_x( 'Thông tin tìm kiếm …', 'placeholder' ) ?>"
                            value="<?php echo get_search_query() ?>" name="s"
                            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
                    <button class="search-mobile-btn btn-danger" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>">Tìm kiếm</button>
                </div>
            </form>
        </div>
        <div class="header-logo">
            <div class="header-logo__page">
                <a href="<?php echo home_url(); ?>"><img src="<?php echo $ls_options['logo']['url']; ?>" alt=""></a>
            </div>
        </div>
        <div class="header-main js-mobile-menu">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'   => 'menu-1',
                        'menu_id'          => 'primary-menu',
                        'menu_class'       => 'header-main-nav__list d-flex',
                        'container_class'  => 'header-main-nav',
                    )
                );
                ?>
        </div>
    </header>
