<?php
/*
 * Template Name: Trang giới thiệu
 *
 * @package ls_theme
 */
get_header();
global $ls_options;
?>
    <div class="main mg4">
        <div class="main-logo">
            <img src="<?php echo $ls_options['banner-main-main']['url']; ?>" alt="">
        </div>
        <div class="main-info">
            <div class="main-info-image">
                <img src="<?php bloginfo('template_directory'); ?>/images/about/Bgcolor.png" alt="">
                <div class="main-content">
                    <div class="container container-width">
                        <div class="main-content--logo text-center">
                            <img src="<?php bloginfo('template_directory'); ?>/images/about/logoWhite.png" alt="">
                        </div>
                        <h1 class="main-content-heading text-center"><?php echo $ls_options['title-intro']; ?></h1>
                        <div class="container container-width pd-0">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                                    <div class="main-content-left">
                                        <ul class="main-content-left__list">
                                            <li class="main-content-left__list--item">
                                                <?php echo $ls_options['content-intro']; ?>
                                            </li>
                                        </ul>
                                        <button id="modal-con" class="btn service--detail__btn dp-none">tư vấn ngay</button>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 main-content-right">
                                    <div class="mobie-image">
                                        <img class="main-content-right__one" src="<?php echo $ls_options['img-intro']['url']; ?>" alt="">
                                        <img class="main-content-right__two" src="<?php echo $ls_options['img-intro-1']['url']; ?>" alt="">
                                        <img class="main-content-right__three" src="<?php echo $ls_options['img-intro-2']['url']; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-inftras">
                    <div class="main-inftras-image">
                        <div class="main-inftras-image__above">
                            <img src="<?php bloginfo('template_directory'); ?>/images/about/imgSpa2.png" alt="" class="wh-100">
                            <div class="main-inftras-image__below">
                                <img src="<?php bloginfo('template_directory'); ?>/images/about/Bgcolor-1.png" alt="" class="wh-100">
                            </div>
                        </div>
                        <div class="main-inftras-content">
                            <div class="main-inftras-content__logo text-center">
                                <img src="<?php bloginfo('template_directory'); ?>/images/about/logoWhite.png" alt="">
                            </div>
                            <h2 class="main-inftras-content__heading text-center"><?php echo $ls_options['title-infra'] ?></h2>

                            <div class="container container-width">
                                <div class="basis--intro row">
                                    <div class="col-lg-6 col-md-6 col-12 main-inftras-content__right">
                                        <img class="main-inftras-content__right--one"
                                                src="<?php echo $ls_options['img-infra']['url']; ?>" alt="">
                                        <img class="main-inftras-content__right--two"
                                                src="<?php echo $ls_options['img-infra-1']['url']; ?>" alt="">
                                        <img class="main-inftras-content__right--three"
                                                src="<?php echo $ls_options['img-infra-2']['url']; ?>" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 main-inftras-content__left">
                                        <ul class="main-inftras-content__left--list">
                                            <li class="main-inftras-content__left--list-item">
                                                <?php echo $ls_options['content-infra'] ?>
                                            </li>
                                            <li class="main-inftras-content__left--list-item">
                                                <?php echo $ls_options['content-infra-1'] ?>
                                            </li>
                                            <li class="main-inftras-content__left--list-item">
                                                <?php echo $ls_options['content-infra-2'] ?>
                                            </li>
                                            <li class="main-inftras-content__left--list-item">
                                                <?php echo $ls_options['content-infra-3'] ?>
                                            </li>
                                            <li class="main-inftras-content__left--list-item">
                                                <?php echo $ls_options['content-infra-4'] ?>
                                            </li>
                                            <li class="main-inftras-content__left--list-item">
                                                <?php echo $ls_options['content-infra-5'] ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-device">
            <div class="container container-width">
                <div class="device-about row wh-100 align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-7 main-device-left">
                        <ul class="main-device-left__list">
                            <li class="main-device-left__list--item">
                                <img src="<?php echo $ls_options['Equipment-intro']['url']; ?>" alt="">
                            </li>
                            <li class="main-device-left__list--item1">
                                <img src="<?php echo $ls_options['Equipment-intro-1']['url']; ?>" alt="">
                            </li>
                            <li class="main-device-left__list--item2">
                                <img src="<?php echo $ls_options['Equipment-intro-2']['url']; ?>" alt="">
                            </li>
                            <li class="main-device-left__list--item3">
                                <img src="<?php echo $ls_options['Equipment-intro-3']['url']; ?>" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-5 main-device-right">
                        <div class="main-device-right__image">
                            <img src="<?php echo $ls_options['Equipment-intro-4']['url']; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-team" >
            <img src="<?php bloginfo('template_directory'); ?>/images/banner3.jpg" alt="">
        </div>
        <div class="main-papers dp-none">
            <img src="<?php bloginfo('template_directory'); ?>/images/about/Bgcolor-2.png" alt="">
            <div class="main-papers-content">
                <div class="main-papers-content__logo text-center">
                    <img src="<?php bloginfo('template_directory'); ?>/images/about/logo.png" alt="">
                </div>
                <h2 class="main-papers-content__heading text-center">Báo chí nói gì về <br>SHYNH BEAUTY SPA</h2>
                <div class="main-papers-content__image">
                    <ul class="main-papers-content__image--list d-flex">
                        <?php $i = 0; ?>
                        <?php foreach($ls_options['feedback-customer'] as $slide) : ?>
                        <li class="main-papers-content__image--list-item ">
                            <a href="<?php echo $slide['url']; ?>"><img src="<?php echo $slide['image']; ?>" alt=""></a>
                        </li>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
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
        <div class="address dp-blockPC">
            <div class="address-info">
                <div class="address-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/butterfly-wings.png" class="w-100" alt="">
                </div>
                <h2 class="address-info-title">Hệ thống hơn 50 chi nhánh</h2>
                <p class="address-info-caption">Nhờ sự tin yêu của khách hàng, SHYNH BEAUTY luôn có lượng khách lớn
                    ghé thăm</p>
            </div>
            <?php echo do_shortcode( '[get_location]' ); ?>
            <div class="address-near dp-none"><button class="btn address-near-btn">Tìm chi nhánh gần bạn</button></div>
        </div>
    </div>
<?php
get_footer();
