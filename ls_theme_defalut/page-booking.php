<?php
/*
 * Template Name: Trang đặt lịch
 *
 * @package ls_theme
 */
get_header();
global $post, $ls_options;
?>
    <div class="main">
        <div class="main-logo">
            <img src="<?php echo $ls_options['banner-main-main']['url']; ?>" alt="">
        </div>
        <div class="booking">
            <div class="booking-after">
            </div>
            <div class="booking-title">
                <h2>ĐẶT LỊCH HẸN</h2>
            </div>
            <div class="form--contact__inner--contact booking-form">
                <?php echo apply_shortcodes( '[contact-form-7 id="405" title="Đặt lịch hẹn"]' ); ?>
            </div>
        </div>
        <div class="address dp-blockPC">
            <div class="address-info">
                <div class="address-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="w-100" alt="">
                </div>
                <h2 class="address-info-title">Hệ thống hơn 50 chi nhánh</h2>
                <p class="address-info-caption pd-6">Nhờ sự tin yêu của khách hàng, SHYNH BEAUTY luôn có lượng khách lớn ghé thăm</p>
            </div>
            <?php echo do_shortcode( '[get_location]' ); ?>
        </div>
    </div>
<?php
get_footer();
