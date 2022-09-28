<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product, $post;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" class="product-one" <?php wc_product_class( '', $product ); ?>>
    <div class="container container-width product-one-border">
        <div class="row product-briefing">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="product-briefing-left">
                    <?php
                    /**
                     * Hook: woocommerce_before_single_product_summary.
                     *
                     * @hooked woocommerce_show_product_sale_flash - 10
                     * @hooked woocommerce_show_product_images - 20
                     */
                    do_action( 'woocommerce_before_single_product_summary' );
                    ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="product-briefing-right">
                    <?php
                        /**
                         * Hook: woocommerce_single_product_summary.
                         *
                         * @hooked woocommerce_template_single_title - 5
                         * @hooked woocommerce_template_single_rating - 10
                         * @hooked woocommerce_template_single_price - 10
                         * @hooked woocommerce_template_single_excerpt - 20
                         * @hooked woocommerce_template_single_add_to_cart - 30
                         * @hooked woocommerce_template_single_meta - 40
                         * @hooked woocommerce_template_single_sharing - 50
                         * @hooked WC_Structured_Data::generate_product_data() - 60
                         */
                        do_action( 'woocommerce_single_product_summary' );
                    ?>
                </div>
            </div>
        </div>
        <div class="product-info">
            <?php woocommerce_output_product_data_tabs(); ?>
        </div>
    </div>
</div>
<div class="product-similar">
    <div class="container">
        <h2 class="product-similar-title">Sản phẩm tương tự</h2>
        <div class="product-similar-list">
            <?php
            $related = $product->get_related();
            $args = array(
                'post_type'              => 'product',
                'no_found_rows'          => 1,
                'posts_per_page'         => 10,
                'ignore_sticky_posts'    => 1,
                'orderby'                =>'date',
                'order'                  => 'ASC',
                'post__in'               => $related,
                'post__not_in'           => array($product->id),
                'woocommerce_attributes' => 'attribute_slug',
            );
            $loop = new WP_query($args);
            global $wp_query; $wp_query->in_the_loop = true;
            while ($loop->have_posts()) : $loop->the_post();
                $product_id = $loop->id;
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'single-post-thumbnail');
            ?>
                <div class="product-similar-list__item border-1">
                    <div class="product-similar-list__item--image">
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>" alt="" class=""></a>
                    </div>
                    <h4 class="product-similar-list__item--name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <div class="product-similar-list__item--money mr-top0">
                        <span class="product-similar-list__item--money-price"><?php echo $product->get_regular_price(); ?>đ</span>
                        <a href="<?php $add_to_cart = do_shortcode('[add_to_cart_url id="'.$post->ID.'"]'); echo $add_to_cart; ?>" class="btn choose-product add-to-cart">
                            <img src="<?php bloginfo('template_directory'); ?>/images/add.png" class="add-cart" alt=""/>
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
<?php do_action( 'woocommerce_after_single_product' ); ?>
