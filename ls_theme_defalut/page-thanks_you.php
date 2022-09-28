<?php
/*
 * Template Name: Trang cảm ơn
 *
 * @package ls_theme
 */
get_header();
?>
    <div class="container-max">
        <div class="container">
            <div class="end-product">
                <div class="end-product-img">
                    <img class="end-product-img__one" src="<?php bloginfo('template_directory'); ?>/images/payment/_Compound Path_.png" alt="">
                    <img class="end-product-img__two" src="<?php bloginfo('template_directory'); ?>/images/payment/_Group_.png" alt="">
                </div>
                <div class="end-product-title">
                    <p class="end-product-title__text">
                        CẢM ƠN QUÝ KHÁCH ĐÃ ĐƯỢC ĐẶT HÀNG THÀNH CÔNG <br>
                        QÚY KHÁCH CÓ THỂ THEO DÕI ĐƠN HÀNG BẰNG EMAIL HOẶC SMS
                    </p>
                </div>
                <div class="end-product-store">
                    <a href="">
                        <div class="end-product-store__comeback">
                            <i class='bx bx-arrow-back'></i>
                            <h3><a href="<?php echo home_url()?>/cua-hang">QUAY LẠI STORE</a></h3>
                        </div>
                    </a>
                    <a href="">
                        <div class="end-product-store__edit">
                            <h3><a href="<?php echo home_url()?>/thanh-toan">CHỈNH SỬA ĐƠN HÀNG</a></h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> 
<?php
get_footer();
