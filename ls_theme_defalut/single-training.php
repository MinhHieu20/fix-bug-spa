<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ls_theme_defalut
 */

get_header();
global $post, $ls_option;
$directoryURI = get_page_uri();
?>
    <div class="container-max training-detail pdb-6">
        <div class="container grid wide">
            <div class="row details training-detail-container">
                <div class="col-lg-9 home-training" id="post-<?php the_ID(); ?>">

                    <h1 class="single-training-title dp-none dp-blockPC"><?php echo get_the_title(); ?></h1>
                    <h2 class="single-training-title heading-mobile dp-nonePC"><?php echo get_the_title(); ?></h2>

                    <div class="details-header">
                        <p class="details-header__text">
                            <?php
                                $the_excerpt_custom = get_field('the_excerpt_custom');
                                echo $the_excerpt_custom;
                            ?>
                        </p>
                    </div>

                    <div class="details-content">
                        <ul class="details-content-list">
                            <li class="details-content-list__item">
                                <p class="details-content-list__item--text">
                                    <?php
                                    $the_reson_learning = get_field('reson_learning');
                                    echo $the_reson_learning;
                                    ?>
                                </p>
                            </li>
                        </ul>
                    </div>

                    <div class="details-reason">
                       <?php the_content(); ?>
                    </div>

                    <div class="details-graduate">
                        <h2 class="details-graduate-title">CÁC KHÓA HỌC VIÊN TỐT NGHIỆP</h2>
                        <div class="details-graduate-outstanding">
                            <div class="details-graduate-outstanding__list">
                                <?php
                                $training = get_term('65','training_cat');
                                $args = array(
                                    'post_type' => 'training',
                                    'post_status' => 'publish',
                                    'orderby' => 'title',
                                    'order' => 'ASC',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'training_cat', //double check your taxonomy name in you dd
                                            'field'    => 'term_id',
                                            'terms'    => array( $training->term_id ),
                                        ),
                                    ),
                                );
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                ?>
                                <div class="details-graduate-outstanding__list--item">
                                    <div class="card-content">
                                        <div class="details-graduate-outstanding__list--item--images">
                                            <img src="<?php echo $image[0]; ?>" alt="">
                                        </div>
                                        <span class="details-graduate-outstanding__list--item--text"><?php the_title(); ?></span>
                                    </div>
                                </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="details-rated">
                        <h2 class="details-rated-title">ĐÁNH GIÁ TỪ HỌC VIÊN</h2>

                        <div class="details-rated-student">
                            <ul class="details-rated-student__list">
                                <?php
                                $training = get_term('66','training_cat');
                                $args = array(
                                    'post_type' => 'training',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 5,
                                    'orderby' => 'title',
                                    'order' => 'ASC',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'training_cat', //double check your taxonomy name in you dd
                                            'field'    => 'term_id',
                                            'terms'    => array( $training->term_id ),
                                        ),
                                    ),
                                );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post();
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->ID ), 'single-post-thumbnail' );
                                ?>
                                <div class="details-rated-student__list--box">
                                    <img src="<?php echo $image[0]; ?>" alt="">
                                    <li class="details-rated-student__list--box--item">
                                        <h3><?php the_title(); ?></h3>
                                        <p class="details-rated-student__list--box--item-faint">
                                            Học viên khóa đào tạo
                                            <br>
                                            <?php
                                            $class_room = get_field('khoa_dao_tao');
                                            echo $class_room;
                                            ?>
                                        </p>

                                        <p class="details-rated-student__list--box--item-dark"><?php echo get_the_content(); ?></p>
                                    </li>
                                </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div id="sidebar-training" style="padding: 1.5rem;">
                        <div class="details-menu dp-none dp-blockPC">
                            <ul class="details-menu-list">
                                <li class="details-menu-list__item">
                                    <a href="<?php echo home_url(); ?>/khoa-dao-tao-dieu-tri-mun" class="details-menu-list__item--link <?php echo ($directoryURI=='khoa-dao-tao-dieu-tri-mun') ? 'active' : '' ?>">ĐIỀU TRỊ MỤN</a>
                                </li>

                                <li class="details-menu-list__item">
                                    <a href="<?php echo home_url(); ?>/khoa-dao-tao-dieu-tri-tham-mun" class="details-menu-list__item--link <?php echo ($directoryURI=='khoa-dao-tao-dieu-tri-tham-mun') ? 'active' : '' ?>">ĐIỀU TRỊ THÂM MỤN</a>
                                </li>

                                <li class="details-menu-list__item">
                                    <a href="<?php echo home_url(); ?>/khoa-dao-tao-cham-soc-da" class="details-menu-list__item--link <?php echo ($directoryURI=='khoa-dao-tao-cham-soc-da') ? 'active' : '' ?>">CHĂM SÓC DA</a>
                                </li>

                                <li class="details-menu-list__item">
                                    <a href="<?php echo home_url(); ?>/khoa-dao-tao-goi-dau" class="details-menu-list__item--link <?php echo ($directoryURI=='khoa-dao-tao-goi-dau') ? 'active' : '' ?>">GỘI ĐẦU</a>
                                </li>

                                <li class="details-menu-list__item">
                                    <a href="<?php echo home_url(); ?>/khoa-dao-tao-triet-long" class="details-menu-list__item--link <?php echo ($directoryURI=='khoa-dao-tao-triet-long') ? 'active' : '' ?>">TRIỆT LÔNG</a>
                                </li>

                                <li class="details-menu-list__item">
                                    <a href="<?php echo home_url(); ?>/khoa-dao-tao-tam-trang" class="details-menu-list__item--link <?php echo ($directoryURI=='khoa-dao-tao-tam-trang') ? 'active' : '' ?>">TẮM TRẮNG</a>
                                </li>

                                <li class="details-menu-list__item">
                                    <a href="<?php echo home_url(); ?>/khoa-dao-tao-massage" class="details-menu-list__item--link <?php echo ($directoryURI=='khoa-dao-tao-massage') ? 'active' : '' ?>">MASSAGE</a>
                                </li>

                                <li class="details-menu-list__item">
                                    <a href="<?php echo home_url(); ?>/khoa-dao-tao-phun-xam-tham-my" class="details-menu-list__item--link <?php echo ($directoryURI=='khoa-dao-tao-phun-xam-tham-my') ? 'active' : '' ?>">PHUN XĂM THẨM MỸ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="details-menu details-menu-mobile dp-nonePC">
                            <ul class="details-menu-list row">
                                <li class="details-menu-list__item">
                                    <a href="<?php echo home_url(); ?>/khoa-dao-tao-dieu-tri-mun" class="details-menu-list__item--link <?php echo ($directoryURI=='khoa-dao-tao-dieu-tri-mun') ? 'active' : '' ?>">ĐIỀU TRỊ MỤN</a>
                                </li>

                                <li class="details-menu-list__item">
                                    <a href="<?php echo home_url(); ?>/khoa-dao-tao-dieu-tri-tham-mun" class="details-menu-list__item--link <?php echo ($directoryURI=='khoa-dao-tao-dieu-tri-tham-mun') ? 'active' : '' ?>">ĐIỀU TRỊ THÂM MỤN</a>
                                </li>

                                <li class="details-menu-list__item">
                                    <a href="<?php echo home_url(); ?>/khoa-dao-tao-cham-soc-da" class="details-menu-list__item--link hover-gold <?php echo ($directoryURI=='khoa-dao-tao-cham-soc-da') ? 'active' : '' ?>">CHĂM SÓC DA</a>
                                </li>

                                <li class="details-menu-list__item">
                                    <a href="<?php echo home_url(); ?>/khoa-dao-tao-triet-long" class="details-menu-list__item--link <?php echo ($directoryURI=='khoa-dao-tao-triet-long') ? 'active' : '' ?>">TRIỆT LÔNG</a>
                                </li>

                                <li class="details-menu-list__item">
                                    <a href="<?php echo home_url(); ?>/khoa-dao-tao-tam-trang" class="details-menu-list__item--link <?php echo ($directoryURI=='khoa-dao-tao-tam-trang') ? 'active' : '' ?>">TẮM TRẮNG</a>
                                </li>

                                <li class="details-menu-list__item">
                                    <a href="<?php echo home_url(); ?>/khoa-dao-tao-massage" class="details-menu-list__item--link <?php echo ($directoryURI=='khoa-dao-tao-massage') ? 'active' : '' ?>">MASSAGE</a>
                                </li>

                                <li class="details-menu-list__item">
                                </li>

                                <li class="details-menu-list__item">
                                    <a href="<?php echo home_url(); ?>/khoa-dao-tao-goi-dau" class="details-menu-list__item--link <?php echo ($directoryURI=='khoa-dao-tao-goi-dau') ? 'active' : '' ?>">GỘI ĐẦU</a>
                                </li>

                                <li class="details-menu-list__item">
                                    <a href="<?php echo home_url(); ?>/khoa-dao-tao-phun-xam-tham-my" class="details-menu-list__item--link <?php echo ($directoryURI=='khoa-dao-tao-phun-xam-tham-my') ? 'active' : '' ?>t">PHUN XĂM THẨM MỸ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="details-news">
                            <h3 class="details-news-title">TIN TỨC MỚI NHẤT</h3>

                            <div class="detail-news--menu">
                                <div class="detail-news--menu__list row">
                                    <?php
                                    $args = array(
                                        'post_type' => 'event_spa',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 3,
                                    );
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                    ?>
                                    <div class="detail-news--menu__list--item">
                                        <a href="<?php the_permalink();  ?>">
                                            <div class="detail-news-boder">
                                                <div class="detail-news--menu__list--item--images col-lg-5">
                                                    <img src="<?php echo $image[0]; ?>" alt="">
                                                </div>
                                                <div class="detail-news--menu__list--item--desc col-lg-7">
                                                    <p><?php
                                                        $the_excerpt_custom = get_field('the_excerpt_custom');
                                                        echo $the_excerpt_custom;
                                                        ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
