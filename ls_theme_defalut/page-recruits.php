<?php
/*
 * Template Name: Trang Tuyển dụng
 *
 * @package ls_theme
 */
get_header();
global $ls_options;
$paged = 1;	//hoặc 0
if(get_query_var('paged')) {
    $paged = get_query_var('paged');
} elseif(get_query_var('page')) {
    $paged = get_query_var('page');
}
?>
    <div class="main-recruit">
        <div class="container container-width container-recruit">
            <div class="main-recruit-content">
                <h2 class="main-recruit-content__heading">
                    CƠ HỘI TRỞ THÀNH NHÂN SỰ CHÍNH THỨC TẠI HỆ THỐNG SHYNH BAEUTY SPA
                </h2>
                <p class="main-recruit-content__text">
                    Do đó, nếu là người yêu thích lĩnh vực làm đẹp, bạn đừng ngần ngại ứng tuyển cùng SeoulSpa.Vn để
                    trở thành một mảnh ghép hoàn hảo của hệ thống làm đẹp hàng đầu Việt Nam.
                </p>
                <div class="main-recruit-content__image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/imgRecruit.png" alt="">
                </div>
                <h2 class="main-recruit-content__heading">
                    vị trí tuyển dụng
                </h2>
                <div class="main-recruit-content__list show">
                <?php
                $args = array(
                    'post_type' => 'recruits_main',
                    'post_status' => 'publish',
                    'posts_per_page' => 2,
                    'paged'=> $paged,
                    'orderby' => 'title',
                    'order' => 'ASC',
                );

                $recruits = new WP_Query( $args );
                while ( $recruits->have_posts() ) : $recruits->the_post();
                    $post_id = $recruits->ID;
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
                ?>
                <div class="main-recruit-content__skin border-1">
                    <h3 class="main-recruit-content__skin--title"><?php the_title(); ?></h3>
                    <span>Đăng 12 giờ trước</span>
                    <?php the_content(); ?>
                    <button class="main-recruit-content__skin--btn btn">
                        <a href="tel:<?php echo $ls_options['hotline-1']; ?>">Liên hệ hotline <?php echo $ls_options['hotline-1']; ?></a>
                    </button>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
                </div>
                <div class="recruit-pagination">
                    <div class="pagination product-pagination">
                        <?php
                        $big = 999999999; // need an unlikely integer
                        $get_blog_info= get_bloginfo('template_directory');
                        echo paginate_links( array(
                            'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format'    => '?paged=%#%',
                            'current'   => max( 1, $paged ),
                            'total'     => $recruits->max_num_pages,
                            'prev_text' => '<img src="'. $get_blog_info . '/images/arrow-left.png">',
                            'next_text' => '<img src="'. $get_blog_info . '/images/arrow.jpg">'
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
