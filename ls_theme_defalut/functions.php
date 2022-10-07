<?php
/**
 * ls_theme_defalut functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ls_theme_defalut
 */
// load themes option
require_once(get_template_directory() . "/core/init.php");

if ( ! defined( 'LS_THEMES_DEFAULT_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'LS_THEMES_DEFAULT_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ls_theme_defalut_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ls_theme_defalut, use a find and replace
		* to change 'ls_theme_defalut' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ls_theme_defalut', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'ls_theme_defalut' ),
            'menu-2' => esc_html__( 'Second', 'ls_theme_defalut' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'ls_theme_defalut_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

    /* Add WooCommerce support */
    add_theme_support( 'woocommerce' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'ls_theme_defalut_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ls_theme_defalut_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ls_theme_defalut_content_width', 640 );
}
add_action( 'after_setup_theme', 'ls_theme_defalut_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ls_theme_defalut_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ls_theme_defalut' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ls_theme_defalut' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ls_theme_defalut_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ls_theme_defalut_scripts() {
	wp_enqueue_style( 'ls_theme_defalut-style', get_stylesheet_uri(), array(), LS_THEMES_DEFAULT_VERSION );
	wp_style_add_data( 'ls_theme_defalut-style', 'rtl', 'replace' );

	wp_enqueue_script( 'ls_theme_defalut-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), LS_THEMES_DEFAULT_VERSION, true );
    wp_localize_script( 'ls_theme_defalut-site', 'ajax', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ls_theme_defalut_scripts' );

function willgroup_init_beauty() {
    register_post_type('beauty',
        array(
            'labels' => array(
                'name'            => __('Kết quả điều trị', 'LeadSoft') ,
                'singular_name'   => __('Kết quả điều trị', 'LeadSoft') ,
                'menu_name'       => __('Kết quả điều trị', 'LeadSoft') ,
                'name_admin_bar'  => __('Kết quả điều trị', 'LeadSoft') ,
                'all_items'       => __('Tất cả kết quả điều trị', 'LeadSoft') ,
                'add_new'         => __('Thêm kết quả điều trị', 'LeadSoft') ,
                'add_new_item'    => __('Thêm kết quả điều trị', 'LeadSoft') ,
                'edit_item'       => __('Sửa kết quả điều trị', 'LeadSoft') ,
            ),
            'description'     => __('Kết quả điều trị', 'LeadSoft') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'danh-muc-ket-qua-dieu-tri',
            'supports' => array(
                'title',
                'thumbnail',
                'editor',
                'excerpt',
                'author',
                'comments',
                'trackbacks',
                'revisions',
                'custom-fields'
            ) ,
            'rewrite'  => array(
                'slug' => 'ket-qua-dieu-tri'
            ) ,
        )
    );
    flush_rewrite_rules();
    register_taxonomy('beauty_cat', array('beauty') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại kết quả điều trị', 'LeadSoft') ,
                'singular_name'     => __('Phân Loại kết quả điều trị', 'LeadSoft') ,
                'search_items'      => __('Tìm kiếm loại kết quả điều trị', 'LeadSoft') ,
                'all_items'         => __('Tất cả loại kết quả điều trị', 'LeadSoft') ,
                'parent_item'       => __('Danh mục kết quả điều trị cha', 'LeadSoft') ,
                'parent_item_colon' => __('Danh mục kết quả điều trị cha:', 'LeadSoft') ,
                'edit_item'         => __('Sửa Danh mục kết quả điều trị', 'LeadSoft') ,
                'update_item'       => __('Cập nhật Danh mục kết quả điều trị', 'LeadSoft') ,
                'add_new_item'      => __('Thêm Danh mục kết quả điều trị', 'LeadSoft') ,
                'new_item_name'     => __('Tên Danh mục kết quả điều trị', 'LeadSoft') ,
                'menu_name'         => __('Danh mục kết quả điều trị', 'LeadSoft') ,
            ),
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'loai-ket-qua-dieu-tri'
            ) ,
        )
    );
}
add_action('init', 'willgroup_init_beauty');

function willgroup_init_event_spa() {
    register_post_type('event_spa',
        array(
            'labels' => array(
                'name'            => __('Sự kiện Spa', 'LeadSoft') ,
                'singular_name'   => __('Sự kiện Spa', 'LeadSoft') ,
                'menu_name'       => __('Sự kiện Spa', 'LeadSoft') ,
                'name_admin_bar'  => __('Sự kiện Spa', 'LeadSoft') ,
                'all_items'       => __('Tất cả Sự kiện Spa', 'LeadSoft') ,
                'add_new'         => __('Thêm Sự kiện Spa', 'LeadSoft') ,
                'add_new_item'    => __('Thêm Sự kiện Spa', 'LeadSoft') ,
                'edit_item'       => __('Sửa Sự kiện Spa', 'LeadSoft') ,
            ),
            'description'     => __('Sự kiện Spa', 'LeadSoft') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'su-kien-spa',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
                'excerpt',
                'author',
                'comments',
                'trackbacks',
                'revisions',
                'custom-fields'
            ),
            'rewrite'  => array(
                'slug' => 'su-kien-spa'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('event_cat_spa', array('event_spa') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại sự kiện Spa', 'LeadSoft') ,
                'singular_name'     => __('Phân Loại sự kiện Spa', 'LeadSoft') ,
                'search_items'      => __('Tìm kiếm loại sự kiện Spa', 'LeadSoft') ,
                'all_items'         => __('Tất cả loại sự kiện Spa', 'LeadSoft') ,
                'parent_item'       => __('Danh mục sự kiện Spa cha', 'LeadSoft') ,
                'parent_item_colon' => __('Danh mục sự kiện Spa cha:', 'LeadSoft') ,
                'edit_item'         => __('Sửa danh mục sự kiện Spa', 'LeadSoft') ,
                'update_item'       => __('Cập nhật danh mục sự kiện Spa', 'LeadSoft') ,
                'add_new_item'      => __('Thêm danh mục sự kiện Spa', 'LeadSoft') ,
                'new_item_name'     => __('Tên danh mục sự kiện Spa', 'LeadSoft') ,
                'menu_name'         => __('Danh mục sự kiện Spa', 'LeadSoft') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'show_ui'      => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite'      => array(
                'slug'     => 'loai-su-kien-spa'
            ),
        )
    );
}
add_action('init', 'willgroup_init_event_spa');

function willgroup_init_tip_beauty() {
    register_post_type('tip_beauty',
        array(
            'labels' => array(
                'name'            => __('Mẹo làm đẹp', 'LeadSoft') ,
                'singular_name'   => __('Mẹo làm đẹp', 'LeadSoft') ,
                'menu_name'       => __('Mẹo làm đẹp', 'LeadSoft') ,
                'name_admin_bar'  => __('Mẹo làm đẹp', 'LeadSoft') ,
                'all_items'       => __('Tất cả Mẹo làm đẹp', 'LeadSoft') ,
                'add_new'         => __('Thêm Mẹo làm đẹp', 'LeadSoft') ,
                'add_new_item'    => __('Thêm Mẹo làm đẹp', 'LeadSoft') ,
                'edit_item'       => __('Sửa Mẹo làm đẹp', 'LeadSoft') ,
            ),
            'description'     => __('Mẹo làm đẹp', 'LeadSoft') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'danh-muc-meo-lam-dep',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
                'excerpt',
                'author',
                'comments',
                'trackbacks',
                'revisions',
                'custom-fields'
            ),
            'rewrite'  => array(
                'slug' => 'meo-lam-dep'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('tip_beauty_cat', array('tip_beauty') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại Mẹo làm đẹp', 'LeadSoft') ,
                'singular_name'     => __('Phân Loại Mẹo làm đẹp', 'LeadSoft') ,
                'search_items'      => __('Tìm kiếm loại Mẹo làm đẹp', 'LeadSoft') ,
                'all_items'         => __('Tất cả loại Mẹo làm đẹp', 'LeadSoft') ,
                'parent_item'       => __('Danh mục Mẹo làm đẹp cha', 'LeadSoft') ,
                'parent_item_colon' => __('Danh mục Mẹo làm đẹp cha:', 'LeadSoft') ,
                'edit_item'         => __('Sửa Danh mục Mẹo làm đẹp', 'LeadSoft') ,
                'update_item'       => __('Cập nhật Danh mục Mẹo làm đẹp', 'LeadSoft') ,
                'add_new_item'      => __('Thêm Danh mục Mẹo làm đẹp', 'LeadSoft') ,
                'new_item_name'     => __('Tên Danh mục Mẹo làm đẹp', 'LeadSoft') ,
                'menu_name'         => __('Danh mục Mẹo làm đẹp', 'LeadSoft') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'show_ui'      => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite'      => array(
                'slug'     => 'loai-meo-lam-dep'
            ),
        )
    );
}
add_action('init', 'willgroup_init_tip_beauty');

function willgroup_init_extension_spa() {
    register_post_type('extension',
        array(
            'labels' => array(
                'name'            => __('Chi nhánh Spa', 'LeadSoft') ,
                'singular_name'   => __('Chi nhánh Spa', 'LeadSoft') ,
                'menu_name'       => __('Chi nhánh Spa', 'LeadSoft') ,
                'name_admin_bar'  => __('Chi nhánh Spa', 'LeadSoft') ,
                'all_items'       => __('Tất cả Chi nhánh Spa', 'LeadSoft') ,
                'add_new'         => __('Thêm Chi nhánh Spa', 'LeadSoft') ,
                'add_new_item'    => __('Thêm Chi nhánh Spa', 'LeadSoft') ,
                'edit_item'       => __('Sửa Chi nhánh Spa', 'LeadSoft') ,
            ),
            'description'     => __('Chi nhánh Spa', 'LeadSoft') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'chi-nhanh-spa',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
                'excerpt',
                'author',
                'comments',
                'trackbacks',
                'revisions',
                'custom-fields'
            ),
            'rewrite'  => array(
                'slug' => 'chi-nhanh-spa'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('extension_cat', array('extension') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại Chi nhánh Spa', 'LeadSoft') ,
                'singular_name'     => __('Phân Loại Chi nhánh Spa', 'LeadSoft') ,
                'search_items'      => __('Tìm kiếm loại Chi nhánh Spa', 'LeadSoft') ,
                'all_items'         => __('Tất cả loại Chi nhánh Spa', 'LeadSoft') ,
                'parent_item'       => __('Danh mục Chi nhánh Spa cha', 'LeadSoft') ,
                'parent_item_colon' => __('Danh mục Chi nhánh Spa cha:', 'LeadSoft') ,
                'edit_item'         => __('Sửa Danh mục Chi nhánh Spa', 'LeadSoft') ,
                'update_item'       => __('Cập nhật Danh mục Chi nhánh Spa', 'LeadSoft') ,
                'add_new_item'      => __('Thêm Danh mục Chi nhánh Spa', 'LeadSoft') ,
                'new_item_name'     => __('Tên Danh mục Chi nhánh Spa', 'LeadSoft') ,
                'menu_name'         => __('Danh mục Chi nhánh Spa', 'LeadSoft') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'show_ui'      => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite'      => array(
                'slug'     => 'loai-chi-nhanh-spa'
            ),
        )
    );
}
add_action('init', 'willgroup_init_extension_spa');

function willgroup_init_promotion() {
    register_post_type('promotion',
        array(
            'labels' => array(
                'name'            => __('Chính sách ưu đãi', 'LeadSoft') ,
                'singular_name'   => __('Chính sách ưu đãi', 'LeadSoft') ,
                'menu_name'       => __('Chính sách ưu đãi', 'LeadSoft') ,
                'name_admin_bar'  => __('Chính sách ưu đãi', 'LeadSoft') ,
                'all_items'       => __('Tất cả Chính sách ưu đãi', 'LeadSoft') ,
                'add_new'         => __('Thêm Chính sách ưu đãi', 'LeadSoft') ,
                'add_new_item'    => __('Thêm Chính sách ưu đãi', 'LeadSoft') ,
                'edit_item'       => __('Sửa Chính sách ưu đãi', 'LeadSoft') ,
            ),
            'description'     => __('Chính sách ưu đãi', 'LeadSoft') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'chinh-sach-uu-dai',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
                'excerpt',
                'author',
                'comments',
                'trackbacks',
                'revisions',
                'custom-fields'
            ),
            'rewrite'  => array(
                'slug' => 'chinh-sach-uu-dai'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('promotion_cat', array('promotion') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại Chính sách ưu đãi', 'LeadSoft') ,
                'singular_name'     => __('Phân Loại Chính sách ưu đãi', 'LeadSoft') ,
                'search_items'      => __('Tìm kiếm loại Chính sách ưu đãi', 'LeadSoft') ,
                'all_items'         => __('Tất cả loại Chính sách ưu đãi', 'LeadSoft') ,
                'parent_item'       => __('Danh mục Chính sách ưu đãi cha', 'LeadSoft') ,
                'parent_item_colon' => __('Danh mục Chính sách ưu đãi cha:', 'LeadSoft') ,
                'edit_item'         => __('Sửa Danh mục Chính sách ưu đãi', 'LeadSoft') ,
                'update_item'       => __('Cập nhật Danh mục Chính sách ưu đãi', 'LeadSoft') ,
                'add_new_item'      => __('Thêm Danh mục Chính sách ưu đãi', 'LeadSoft') ,
                'new_item_name'     => __('Tên Danh mục Chính sách ưu đãi', 'LeadSoft') ,
                'menu_name'         => __('Danh mục Chính sách ưu đãi', 'LeadSoft') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'show_ui'      => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite'      => array(
                'slug'     => 'loai-chinh-sach-uu-dai'
            ),
        )
    );
}
add_action('init', 'willgroup_init_promotion');

function willgroup_init_training() {
    register_post_type('training',
        array(
            'labels' => array(
                'name'            => __('Khoá đào tạo', 'LeadSoft') ,
                'singular_name'   => __('Khoá đào tạo', 'LeadSoft') ,
                'menu_name'       => __('Khoá đào tạo', 'LeadSoft') ,
                'name_admin_bar'  => __('Khoá đào tạo', 'LeadSoft') ,
                'all_items'       => __('Tất cả Khoá đào tạo', 'LeadSoft') ,
                'add_new'         => __('Thêm Khoá đào tạo', 'LeadSoft') ,
                'add_new_item'    => __('Thêm Khoá đào tạo', 'LeadSoft') ,
                'edit_item'       => __('Sửa Khoá đào tạo', 'LeadSoft') ,
            ),
            'description'     => __('Khoá đào tạo', 'LeadSoft') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'khoa-dao-tao',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
                'excerpt',
                'author',
                'comments',
                'trackbacks',
                'revisions',
                'custom-fields'
            ),
            'rewrite'  => array(
                'slug' => 'khoa-dao-tao'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('training_cat', array('training') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại Khoá đào tạo', 'LeadSoft') ,
                'singular_name'     => __('Phân Loại Khoá đào tạo', 'LeadSoft') ,
                'search_items'      => __('Tìm kiếm loại Khoá đào tạo', 'LeadSoft') ,
                'all_items'         => __('Tất cả loại Khoá đào tạo', 'LeadSoft') ,
                'parent_item'       => __('Danh mục Khoá đào tạo cha', 'LeadSoft') ,
                'parent_item_colon' => __('Danh mục Khoá đào tạo cha:', 'LeadSoft') ,
                'edit_item'         => __('Sửa Khoá đào tạo', 'LeadSoft') ,
                'update_item'       => __('Cập nhật Khoá đào tạo', 'LeadSoft') ,
                'add_new_item'      => __('Thêm Danh mục Khoá đào tạo', 'LeadSoft') ,
                'new_item_name'     => __('Tên Danh mục Khoá đào tạo', 'LeadSoft') ,
                'menu_name'         => __('Danh mục Khoá đào tạo', 'LeadSoft') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'show_ui'      => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite'      => array(
                'slug'     => 'loai-khoa-dao-tao'
            ),
        )
    );
}
add_action('init', 'willgroup_init_training');
function willgroup_init_service_main() {
    register_post_type('service_main',
        array(
            'labels' => array(
                'name'            => __('Dịch vụ', 'LeadSoft') ,
                'singular_name'   => __('Dịch vụ', 'LeadSoft') ,
                'menu_name'       => __('Dịch vụ', 'LeadSoft') ,
                'name_admin_bar'  => __('Dịch vụ', 'LeadSoft') ,
                'all_items'       => __('Tất cả Dịch vụ', 'LeadSoft') ,
                'add_new'         => __('Thêm Dịch vụ', 'LeadSoft') ,
                'add_new_item'    => __('Thêm Dịch vụ', 'LeadSoft') ,
                'edit_item'       => __('Sửa Dịch vụ', 'LeadSoft') ,
            ),
            'description'     => __('Dịch vụ', 'LeadSoft') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'service-main',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
                'excerpt',
                'author',
                'comments',
                'trackbacks',
                'revisions',
                'custom-fields'
            ),
            'rewrite'  => array(
                'slug' => 'dich-vu-chinh'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('service_main_cat', array('service_main') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại Dịch vụ', 'LeadSoft') ,
                'singular_name'     => __('Phân Loại Dịch vụ', 'LeadSoft') ,
                'search_items'      => __('Tìm kiếm loại Dịch vụ', 'LeadSoft') ,
                'all_items'         => __('Tất cả loại Dịch vụo', 'LeadSoft') ,
                'parent_item'       => __('Danh mục Dịch vụ cha', 'LeadSoft') ,
                'parent_item_colon' => __('Danh mục Dịch vụ cha:', 'LeadSoft') ,
                'edit_item'         => __('Sửa Dịch vụ', 'LeadSoft') ,
                'update_item'       => __('Cập nhật Dịch vụ', 'LeadSoft') ,
                'add_new_item'      => __('Thêm Danh mục Dịch vụ', 'LeadSoft') ,
                'new_item_name'     => __('Tên Danh mục Dịch vụ', 'LeadSoft') ,
                'menu_name'         => __('Danh mục Dịch vụ', 'LeadSoft') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'show_ui'      => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array(
                'slug'          => 'loai-dich-vu-chinh'
            ),
        )
    );
}
add_action('init', 'willgroup_init_service_main');

function willgroup_init_recruits_main() {
    register_post_type('recruits_main',
        array(
            'labels' => array(
                'name'            => __('Tuyển dụng', 'LeadSoft') ,
                'singular_name'   => __('Tuyển dụng', 'LeadSoft') ,
                'menu_name'       => __('Tuyển dụng', 'LeadSoft') ,
                'name_admin_bar'  => __('Tuyển dụng', 'LeadSoft') ,
                'all_items'       => __('Tất cả Tuyển dụng', 'LeadSoft') ,
                'add_new'         => __('Thêm Tuyển dụng', 'LeadSoft') ,
                'add_new_item'    => __('Thêm Tuyển dụng', 'LeadSoft') ,
                'edit_item'       => __('Sửa Tuyển dụng', 'LeadSoft') ,
            ),
            'description'     => __('Tuyển dụng', 'LeadSoft') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'recruits-main',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
                'excerpt',
                'author',
                'comments',
                'trackbacks',
                'revisions',
                'custom-fields'
            ),
            'rewrite'  => array(
                'slug' => 'tuyen-dung-chinh'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('recruits_main_cat', array('recruits_main') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại Tuyển dụng', 'LeadSoft') ,
                'singular_name'     => __('Phân Loại Tuyển dụng', 'LeadSoft') ,
                'search_items'      => __('Tìm kiếm loại Tuyển dụng', 'LeadSoft') ,
                'all_items'         => __('Tất cả loại Tuyển dụng', 'LeadSoft') ,
                'parent_item'       => __('Danh mục Tuyển dụng cha', 'LeadSoft') ,
                'parent_item_colon' => __('Danh mục Tuyển dụng cha:', 'LeadSoft') ,
                'edit_item'         => __('Sửa Tuyển dụng', 'LeadSoft') ,
                'update_item'       => __('Cập nhật Tuyển dụng', 'LeadSoft') ,
                'add_new_item'      => __('Thêm Danh mục Tuyển dụng', 'LeadSoft') ,
                'new_item_name'     => __('Tên Danh mục Tuyển dụng', 'LeadSoft') ,
                'menu_name'         => __('Danh mục Tuyển dụng', 'LeadSoft') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'show_ui'      => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite'      => array(
                'slug'     => 'loai-tuyen-dung-chinh'
            ),
        )
    );
}
add_action('init', 'willgroup_init_recruits_main');

function willgroup_init_contact_main() {
    register_post_type('contact_main',
        array(
            'labels' => array(
                'name'            => __('Tổng hợp liên hệ', 'LeadSoft') ,
                'singular_name'   => __('Tổng hợp liên hệ', 'LeadSoft') ,
                'menu_name'       => __('Tổng hợp liên hệ', 'LeadSoft') ,
                'name_admin_bar'  => __('Tổng hợp liên hệ', 'LeadSoft') ,
                'all_items'       => __('Tất cả Tổng hợp liên hệ', 'LeadSoft') ,
                'add_new'         => __('Viết bài mới', 'LeadSoft') ,
                'add_new_item'    => __('Viết bài mới', 'LeadSoft') ,
                'edit_item'       => __('Sửa bài viết', 'LeadSoft') ,
            ),
            'description'     => __('Liên hệ', 'LeadSoft') ,
            'menu_position'   => 5,
            'menu_icon'       => 'dashicons-admin-multisite',
            'capability_type' => 'post',
            'public'          => true,
            'has_archive'     => 'contact-main',
            'supports'        => array(
                'title',
                'thumbnail',
                'editor',
            ),
            'rewrite'  => array(
                'slug' => 'lien-he-chinh'
            ),
        )
    );
    flush_rewrite_rules();
    register_taxonomy('contact_main_cat', array('contact_main') ,
        array(
            'labels' => array(
                'name'              => __('Phân Loại Liên hệ', 'LeadSoft') ,
                'singular_name'     => __('Phân Loại Liên hệ', 'LeadSoft') ,
                'search_items'      => __('Tìm kiếm loại Liên hệ', 'LeadSoft') ,
                'all_items'         => __('Tất cả loại Liên hệ', 'LeadSoft') ,
                'parent_item'       => __('Danh mục Liên hệ cha', 'LeadSoft') ,
                'parent_item_colon' => __('Danh mục Liên hệ cha:', 'LeadSoft') ,
                'edit_item'         => __('Sửa Liên hệ', 'LeadSoft') ,
                'update_item'       => __('Cập nhật Liên hệ', 'LeadSoft') ,
                'add_new_item'      => __('Thêm Danh mục Liên hệ', 'LeadSoft') ,
                'new_item_name'     => __('Tên Danh mục Liên hệ', 'LeadSoft') ,
                'menu_name'         => __('Danh mục Liên hệ', 'LeadSoft') ,
            ),
            'hierarchical' => true,
            'public'       => true,
            'rewrite'      => array(
                'slug'     => 'loai-lien-he-chinh'
            ),
        )
    );
}
add_action('init', 'willgroup_init_contact_main');

add_filter( 'big_image_size_threshold', '__return_false' );
/**
 * Truncate text.
 */
// echo truncate( get_the_content(), 200 );
function truncate( $text, $chars = 400 ) {
    $text = strip_tags( $text );
    if ( strlen( $text ) > $chars ) {
        $text = $text." ";
        $text = substr($text,0,$chars);
        $text = substr($text,0,strrpos($text,' '));
        $text = $text."...";
    }
    return $text;
}

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

//add active class
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);


//Change the number of products shown in WooCommerce Page

add_filter( 'loop_shop_per_page', 'shop_product_per_page', 30 );
function shop_product_per_page( $products ) {
    $products = 12;
    return $products;
}

// edit woocommerce
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_filter( 'wc_add_to_cart_message_html', '__return_false' );
remove_action( 'woocommerce_after_single_product_summary','woocommerce_output_product_data_tabs', 10 );
// Replace all add to cart button text
add_filter('woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text',1);
function woo_custom_cart_button_text() {
    return __('Thêm vào giỏ', 'woocommerce');
}
// change text checkout
function woocommerce_button_proceed_to_checkout() { ?>
    <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="checkout-button button alt wc-forward">
        <?php esc_html_e( 'Thanh toán', 'woocommerce' ); ?>
    </a>
    <?php
}

add_action( 'woocommerce_thankyou', 'hwn_javascript_redirect_from_the_thankyou_hook', 10, 1 );

function hwn_javascript_redirect_from_the_thankyou_hook(){
    $home_url = home_url();
    $link_redirect  = $home_url . '/trang-cam-on/';
    ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function(){
                window.location.href = '<?php echo $link_redirect; ?>';
            }, 3000);
        });
    </script>
    <?php
}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'iconic_cart_count_fragments', 10, 1 );

function iconic_cart_count_fragments( $fragments ) {

    $fragments['div.header-cart-count'] = '<div class="header-cart-count">' . WC()->cart->get_cart_contents_count() . '</div>';
    return $fragments;
}

add_filter( 'redirect_canonical', 'custom_disable_redirect_canonical' );

function custom_disable_redirect_canonical( $redirect_url ) {
    if ( is_paged() && is_singular() ) $redirect_url = false;
    return $redirect_url;
}

function save_posted_data() {
    global $wpdb;
    $submission = WPCF7_Submission::get_instance();
    $fullname       = sanitize_text_field($_POST['ho-ten']);
    $phonenumber    = sanitize_text_field($_POST['phone-number']);
    $emailcontact   = sanitize_text_field($_POST['email-contact']);
    $contentcontact = sanitize_text_field($_POST['content-contact']);
    $selectservice  = sanitize_text_field($_POST['select-service']);
    $selectlocation = sanitize_text_field($_POST['select-location']);
    $datecontact    = sanitize_text_field($_POST['date-contact']);
    $hourcontact    = sanitize_text_field($_POST['hour-contact']);
    $contentsubject = sanitize_text_field($_POST['content-subject']);
    $args = array(
        'post_type' => 'contact_main',
        'post_status' => 'publish',
        'post_title' => 'Form được tạo bởi khách hàng '.$fullname,
        'post_content' => 'Thông tin khách :'.
            '<br>Họ tên: '.$fullname.
            '<br>Số điện thoại: '.$phonenumber.
            '<br>Email: '.$emailcontact.
            '<br>Dịch vụ lựa chọn: '.$selectservice.
            '<br>Vị trí: '.$selectlocation.
            '<br>Đặt ngày hẹn: '.$datecontact.
            '<br>Đặt giờ hẹn: '.$hourcontact.
            '<br>Tiêu đề: '. $contentsubject.
            '<br>Nội dung liên hệ: '.$contentcontact,
    );
    $post_id = wp_insert_post($args);
}
add_filter( 'wpcf7_posted_data', 'save_posted_data' );

function get_location_data() {
    $html = '<div class="address-nav"><div class="container container-width"><ul id="location_item" class="address-nav-location row">';
    $terms = get_terms('extension_cat');
    foreach ($terms as $index => $term) {
        $html .= '<li class="address-nav-location__item"><a class="address-nav-location__item--link">' . $term->name .'</a></li>';
     }
    $html .= '</ul></div></div>';
    $html .= '<div id="location_list">';
    foreach ($terms as $index => $term) {
        $html .= '<div class="location-details"><div class="container container-width scroll-pd"><div class="row location-details-border location-details-mobile">';
        $extension_child = get_term($term->term_id, 'extension_cat');
        $args_child = array(
            'post_type' => 'extension',
            'post_status' => 'publish',
            'posts_per_page' => 6,
            'orderby' => 'title',
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'extension_cat', //double check your taxonomy name in you dd
                    'field'    => 'term_id',
                    'terms'    => array( $extension_child->term_id ),
                ),
            ),
        );
        $count = 0;
        $loop_child = new WP_Query( $args_child );
        $html .= '<ul class="location-details-list col-lg-6"  id="scrollbar-location">';
        while ( $loop_child->have_posts() ) : $loop_child->the_post();
            $post_child_id = $loop_child->ID;
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_child_id ), 'single-post-thumbnail' );
            if($count %2 == 0) {
                $html .= '<li class="location-details-list__item row"><div class="col-lg-5 col-6 location-details-left">';
                $html .= '<img src="'.$image[0].'" alt="" class="">';
                $html .= '</div><div class="col-lg-6 col-6 location-details-right"><h4 class="location-details-right__name">' . get_the_title() . '</h4>';
                $html .= '<p class="location-details-right__info">'. get_the_content() . '</p>';
                $html .= '<button class="btn location-view" id="' . $post_child_id . '">Xem địa chỉ</button></div><div class="col-lg-1"></div></li>';
            }
        $count++;
        endwhile;
        wp_reset_postdata();
        $html .= '</ul>';
        $html .= '<ul class="location-details-list col-lg-6"  id="scrollbar-location">';
        while ( $loop_child->have_posts() ) : $loop_child->the_post();
            $post_child_id = $loop_child->ID;
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_child_id ), 'single-post-thumbnail' );
            if($count %2 != 0) {
                $html .= '<li class="location-details-list__item row">
                   <div class="col-lg-5 col-6 location-details-left">';
                $html .= '<img src="'.$image[0].'" alt="" class="">';
                $html .= '</div>
                    <div class="col-lg-6 col-6 location-details-right">
                   <h4 class="location-details-right__name">' . get_the_title() . '</h4>';
                $html .= '<p class="location-details-right__info">' . get_the_content() . '</p>';
                $html .= '<button class="btn location-view" id="'.$post_child_id.'">Xem địa chỉ</button></div><div class="col-lg-1"></div></li>';
            }
            $count++;
        endwhile;
        wp_reset_postdata();
        $html .= '</ul>';
        $html .= '</div></div></div>';
    }
    $html .= '</div>';
    return $html;
}
add_shortcode('get_location','get_location_data');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Ajax functions
 */
require get_template_directory() . '/inc/ajax.php';

