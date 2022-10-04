<?php
/*
 * Template Name: Trang liên hệ
 *
 * @package ls_theme
 */
get_header();
global $ls_options, $post;
?>
    <div class="content">
        <div class="contact-address">
            <div class="grid wide">
                <div class="contact-address-item row">
                    <div class="contact-address-item__maps col l-6">
                        <iframe class="contact-address-item__maps--link"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3628481283035!2d106.6810527506547!3d10.783496661973436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f2eb93b03b1%3A0x1c59a46f7764c421!2zMTMsIDkgS-G7syDEkOG7k25nLCBQaMaw4budbmcgOSwgUXXhuq1uIDMsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCA3MDAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1661157115797!5m2!1svi!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="contact-address-item__form-contact col l-6 col-12">
                        <div class="contact-address-item__form-contact--address">
                            <h1 class="contact-address-item__form-contact--address--title">SHYNH BEAUTY SPA - Dẫn đầu trị mụn uy tín số 1 Việt Nam</h1>
                            <p class="contact-address-item__form-contact--address--text">Hotline: <?php echo $ls_options['hotline-1']; ?></p>
                            <p class="contact-address-item__form-contact--address--text">Website: <?php echo $ls_options['web']; ?></p>
                            <p class="contact-address-item__form-contact--address--text">Mail: <a href="mailto:<?php echo $ls_options['emailft-2']; ?>"><?php echo $ls_options['emailft-2']; ?></a></p>
                        </div>
                        <div class="contact-address-item__form-contact--group">
                            <h2 class="contact-address-item__form-contact--group--title">Liên hệ với chúng tôi</h2>
                            <?php echo apply_shortcodes( '[contact-form-7 id="123" title="Liên hệ"]' ); ?>
                        </div>
                    </div>
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
        <div class="address">
            <div class="address-info">
                <div class="address-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="w-100" alt="">
                </div>
                <h2 class="address-info-title">Hệ thống hơn 50 chi nhánh</h2>
                <p class="address-info-caption">Nhờ sự tin yêu của khách hàng, SHYNH BEAUTY luôn có lượng khách lớn ghé thăm</p>
            </div>
            <?php echo do_shortcode( '[get_location]' ); ?>
        </div>

    </div>
<?php
get_footer();
