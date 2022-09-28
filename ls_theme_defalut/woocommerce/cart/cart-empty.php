<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

/*
 * @hooked wc_empty_cart_message - 10
 */
do_action( 'woocommerce_cart_is_empty' );

if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
    <div class="product-cart-empty text-center">
        <div class="no-item-cart">
            <span class="img-lazy-wrap lazyloaded-wrap" style="padding-bottom: 53.76%">
                <img class="media-lazy lazyloaded" src="<?php bloginfo('template_directory'); ?>/images/payment/empty-cart.svg"
                     data-src="<?php bloginfo('template_directory'); ?>/images/payment/empty-cart.svg" alt="empty cart" style="max-width: 360px;">
            </span>
        </div>
        <h2 style="padding-top: 2rem; padding-bottom: 2rem;">Bạn chưa có sản phẩm nào trong giỏ hàng.</h2>
        <a class="cart-product-continue" href="<?php echo home_url() ?>/cua-hang">
            <h3>TIẾP TỤC MUA HÀNG</h3>
        </a>
    </div>
<?php endif; ?>
