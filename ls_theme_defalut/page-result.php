<?php
/*
 * Template Name: Trang kết quả điều trị
 *
 * @package ls_theme
 */
get_header();
global $ls_options, $post;
?>
    <div class="content pdb-15">
        <div class="top-banner">
            <div class="top-banner-1">
                <h1><img src="<?php bloginfo('template_directory'); ?>/images/banner1.png" alt=""></h1>
            </div>
        </div>
        <div class="content-container single-treatment-result result content-result">
            <div class="container-item grid wide">
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
                </div>
            </div>
        </div>
        <!-- advise-contact -->
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
                            <?php echo apply_shortcodes( '[contact-form-7 id="122" title="Đăng ký nhận thông tin"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
