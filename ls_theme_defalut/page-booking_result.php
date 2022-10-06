<?php
/*
 * Template Name: Trang sửa đặt lịch
 *
 * @package ls_theme
 */
get_header();
?>
    <div class="main">
        <div class="main-logo">
            <img src="<?php bloginfo('template_directory'); ?>/images/about/imgSpa.png" alt="">
        </div>

        <div class="result-booking">
            <div class="booking-after"></div>
            <div class="booking-title">
                <h2>Sửa LỊCH HẸN</h2>
            </div>
            <div class="form--again__inner--info booking-forms">
                <div class="form--again__inner--info-image booking-forms-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/service/check.png" alt="">
                </div>
                <div class="form--again__inner--info-text booking-forms-text">
                    <p>Lịch hẹn của quý khách đã được đặt thành công</p>
                </div>
                <div class="form--again__inner--info-line booking-forms-line">
                    <img src="<?php bloginfo('template_directory'); ?>/images/service/_Line_.png" alt="">
                </div>
                <div class="form--again__inner--info-client booking-forms-client">
                    <p class="form--again__inner--info-client-text booking-forms-client-text">Tên khách hàng:
                        <span class="form--again__inner--info-client-name booking-forms-client-name"> Nguyễn Thị
                                A</span></p>
                    <p class="form--again__inner--info-client-text booking-forms-client-text">Số điện thoại:<span
                                class="form--again__inner--info-client-name booking-forms-client-name"> 0888 888
                                888</span></p>
                </div>
                <div class="form--again__inner--info-time booking-forms-time row">
                    <div class="form--again__inner--info-time-day col l-6">
                        <input type="date" class="form-controls" placeholder="mm/dd/yyyy">
                    </div>
                    <div class="form--again__inner--info-time-day col l-6">
                        <input type="time" class="form-controls" placeholder="8:00">
                    </div>
                </div>
                <div class="form--again__inner--info-thank booking-forms-thank">
                    <p>Cảm ơn quý khách hẹn gặp quý khách tại Shynh Beauty Spa</p>
                </div>
            </div>
            <button class="btn send-contact__btn send-repair-btn">SỬA LỊCH HẸN</button>
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
            <div class="address-near dp-none"><button class="btn address-near-btn">Tìm chi nhánh gần bạn</button></div>
        </div>
    </div>
<?php
get_footer();
