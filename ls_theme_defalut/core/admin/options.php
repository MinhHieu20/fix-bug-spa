<?php
    if ( ! class_exists( 'LeadSoft_Theme_Options' ) ) {
        class LeadSoft_Theme_Options {
            public $args = array();
            public $sections = array();
            public $theme;
            public $ReduxFramework;
            public function __construct() {
                if ( ! class_exists( 'ReduxFramework' ) ) {
                    return;
                }
                // This is needed. Bah WordPress bugs.  ;)
                if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
                    $this->initSettings();
                } else {
                    add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
                }
            }
            public function initSettings() {
                $this->setArguments();
                $this->setHelpTabs();
                $this->setSections();
                if ( ! isset( $this->args['opt_name'] ) ) { // No errors please
                    return;
                }
                $this->ReduxFramework = new ReduxFramework( $this->sections, $this->args );
            }
            public function setSections() {
                $this->sections[] = array(
                    'title'  => __( 'Tùy chỉnh chung', 'LeadSoft' ),
                    'desc'   => __( 'Tùy chỉnh chung của website', 'LeadSoft' ),
                    'icon' => 'el-icon-font',
                    'fields' => array(
						array(
                            'id'       => 'logo',
                            'type'     => 'media',
                            'title'    => __( 'Tùy chọn logo', 'LeadSoft' ),
                            'compiler' => 'true',
                            'desc'     => __( 'Cho phép dùng đuôi: jpg, png, gif', 'LeadSoft' ),
                        ),
                        array(
                               'id' => 'section2-start',
                               'type' => 'section',
                               'title' => __('Thông tin liên hệ', 'LeadSoft'),
                               'indent' => true
                           ),
                                array(
                                    'id'       => 'addft',
                                    'type'     => 'text',
                                    'title'    => __( 'Nhập Địa chỉ', 'LeadSoft' ),
                                    'compiler' => 'true',
                                ),
                                array(
                                    'id'       => 'emailft-1',
                                    'type'     => 'text',
                                    'title'    => __( 'Nhập địa chỉ email thứ nhất', 'LeadSoft' ),
                                    'compiler' => 'true',
                                ),
                                array(
                                    'id'       => 'emailft-2',
                                    'type'     => 'text',
                                    'title'    => __( 'Nhập địa chỉ email thứ hai', 'LeadSoft' ),
                                    'compiler' => 'true',
                                ),
                                array(
                                    'id'       => 'hotline-1',
                                    'type'     => 'text',
                                    'title'    => __( 'Nhập số điện thoại thứ nhất', 'LeadSoft' ),
                                    'compiler' => 'true',
                                ),
                                array(
                                    'id'       => 'hotline-2',
                                    'type'     => 'text',
                                    'title'    => __( 'Nhập số điện thoại thứ hai', 'LeadSoft' ),
                                    'compiler' => 'true',
                                ),
                                array(
                                    'id'       => 'web',
                                    'type'     => 'text',
                                    'title'    => __( 'Nhập địa chỉ web', 'LeadSoft' ),
                                    'compiler' => 'true',
                                ),
                        array(
                            'id'     => 'section2-end',
                            'type'   => 'section',
                            'indent' => false,
                        ),
                         array(
                               'id' => 'section3-start',
                               'type' => 'section',
                               'title' => __('Liên kết với mạng xã hội', 'LeadSoft'),
                               'subtitle'     => __( 'Nhập full link mạng xã hội vào từng khu vực!', 'LeadSoft' ),
                               'indent' => true
                           ),
                                array(
                                    'id'       => 'fb',
                                    'type'     => 'text',
                                    'title'    => __( 'Facebook', 'LeadSoft' ),
                                    'compiler' => 'true',
                                ),
                                array(
                                    'id'       => 'tw',
                                    'type'     => 'text',
                                    'title'    => __( 'Twitter', 'LeadSoft' ),
                                    'compiler' => 'true',
                                ),
                                array(
                                    'id'       => 'go',
                                    'type'     => 'text',
                                    'title'    => __( 'Youtube', 'LeadSoft' ),
                                    'compiler' => 'true',
                                ),
                                array(
                                    'id'       => 'in',
                                    'type'     => 'text',
                                    'title'    => __( 'Instagram', 'LeadSoft' ),
                                    'compiler' => 'true',
                                ),
                                array(
                                    'id'       => 'ti',
                                    'type'     => 'text',
                                    'title'    => __( 'Tiktok', 'LeadSoft' ),
                                    'compiler' => 'true',
                                ),
                                array(
                                    'id'       => 'copyr',
                                    'type'     => 'text',
                                    'title'    => __( 'Text bản quyền', 'LeadSoft' ),
                                    'compiler' => 'true',
                                ),
                        array(
                            'id'     => 'section3-end',
                            'type'   => 'section',
                            'indent' => false,
                        ),
                        array(
                            'id' => 'section5-start',
                            'type' => 'section',
                            'title' => __('Topbar Header', 'LeadSoft'),
                            'subtitle'     => __( 'Chỉnh sửa topbar header', 'LeadSoft' ),
                            'indent' => true
                        ),
                        array(
                            'id'       => 'top-bar',
                            'type'     => 'text',
                            'title'    => __( 'Top bar header', 'LeadSoft' ),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'     => 'section5-end',
                            'type'   => 'section',
                            'indent' => false,
                        ),
                        array(
                            'id' => 'section6-start',
                            'type' => 'section',
                            'title' => __('Footer', 'LeadSoft'),
                            'subtitle'     => __( 'Chỉnh sửa topbar header', 'LeadSoft' ),
                            'indent' => true
                        ),
                        array(
                            'id'       => 'title-footer',
                            'type'     => 'text',
                            'title'    => __( 'Tiêu đề footer', 'LeadSoft' ),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'slogan-footer',
                            'type'     => 'text',
                            'title'    => __( 'Slogan website footer', 'LeadSoft' ),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'business-paper',
                            'type'     => 'text',
                            'title'    => __( 'Thông tin giấy phép kinh doanh', 'LeadSoft' ),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'working-time',
                            'type'     => 'text',
                            'title'    => __( 'Thời gian làm việc', 'LeadSoft' ),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'facebooksdk',
                            'type'     => 'text',
                            'title'    => __( 'Link fanpage facebook', 'LeadSoft' ),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'googleplay',
                            'type'     => 'text',
                            'title'    => __( 'Link app Google play', 'LeadSoft' ),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'appstore',
                            'type'     => 'text',
                            'title'    => __( 'Link app Apple Store', 'LeadSoft' ),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'     => 'section6-end',
                            'type'   => 'section',
                            'indent' => false,
                        ),
                    )
                );
                $this->sections[] = array(
                    'title'  => __( 'Tùy chỉnh trang chủ', 'LeadSoft' ),
                    'desc'   => __( 'Tùy chỉnh trang chủ', 'LeadSoft' ),
                    'icon' => 'el el-home',
                );
                $this->sections[] = array(
                    'title'      => __( 'Banner trang chủ', 'LeadSoft' ),
                    'id'         => 'banner-main',
                    'subsection' => true,
                    'fields'     => array(
                        array(
                            'id'         => 'banner-main-main',
                            'type'       => 'media',
                            'title'      => __('Ảnh banner trang chủ', 'LeadSoft'),
                        ),)
                );
                $this->sections[] = array(
                    'title'      => __( 'Giới thiệu cơ sở vật chất', 'LeadSoft' ),
                    'id'         => 'intro-main-vc',
                    'subsection' => true,
                    'fields'     => array(
                        array(
                            'id'         => 'intro-main-vc-title',
                            'type'       => 'text',
                            'title'      => __('Tiêu đề giới thiệu cơ sở vật chất', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'intro-main-vc-content',
                            'type'       => 'textarea',
                            'title'      => __('Nội dung giới thiệu cơ sở vật chất', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'intro-main-vc-img-1',
                            'type'       => 'media',
                            'title'      => __('Ảnh banner giới thiệu cơ sở vật chất', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'intro-main-vc-img-2',
                            'type'       => 'media',
                            'title'      => __('Ảnh banner giới thiệu cơ sở vật chất', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'intro-main-vc-img-3',
                            'type'       => 'media',
                            'title'      => __('Ảnh banner giới thiệu cơ sở vật chất', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'intro-main-vc-detail-title',
                            'type'       => 'text',
                            'title'      => __('Tiêu đề giới thiệu chi tiết', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'intro-main-vc-detail-content',
                            'type'       => 'textarea',
                            'title'      => __('Nội dung giới thiệu chi tiết', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'intro-main-vc-detail-title-1',
                            'type'       => 'text',
                            'title'      => __('Tiêu đề giới thiệu chi tiết', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'intro-main-vc-detail-content-1',
                            'type'       => 'textarea',
                            'title'      => __('Nội dung giới thiệu chi tiết', 'LeadSoft'),
                        ),
                    )
                );
                $this->sections[] = array(
                    'title'      => __( 'Banner giới thiệu đội ngũ', 'LeadSoft' ),
                    'id'         => 'banner-team',
                    'subsection' => true,
                    'fields'     => array(
                        array(
                            'id'         => 'banner-team',
                            'type'       => 'media',
                            'title'      => __('Ảnh banner giới thiệu đội ngũ', 'LeadSoft'),
                        ),)
                );
                $this->sections[] = array(
                    'title'  => __( 'Tuỳ chỉnh trang giới thiệu', 'LeadSoft' ),
                    'desc'   => __( 'Tuỳ chỉnh trang giới thiệu', 'LeadSoft' ),
                    'icon' => 'el el-home',
                );
                $this->sections[] = array(
                    'title'      => __( 'Giới thiệu về hệ thống spa', 'LeadSoft' ),
                    'id'         => 'intro-center',
                    'subsection' => true,
                    'fields'     => array(
                        array(
                            'id'         => 'title-intro',
                            'type'       => 'text',
                            'title'      => __('Nhập tiêu đề giới thiệu', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'content-intro',
                            'type'       => 'textarea',
                            'title'      => __('Nhập nội dung giới thiệu', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'img-intro',
                            'type'       => 'media',
                            'title'      => __('Hình ảnh giới thiệu', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'img-intro-1',
                            'type'       => 'media',
                            'title'      => __('Hình ảnh giới thiệu', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'img-intro-2',
                            'type'       => 'media',
                            'title'      => __('Hình ảnh giới thiệu', 'LeadSoft'),
                        ),
                    )
                );
                $this->sections[] = array(
                    'title'      => __( 'Giới thiệu về cơ sở vật chất', 'LeadSoft' ),
                    'id'         => 'intro-infra',
                    'subsection' => true,
                    'fields'     => array(
                        array(
                            'id'         => 'title-infra',
                            'type'       => 'text',
                            'title'      => __('Nhập tiêu đề giới thiệu', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'content-infra',
                            'type'       => 'textarea',
                            'title'      => __('Nhập nội dung giới thiệu', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'content-infra-1',
                            'type'       => 'textarea',
                            'title'      => __('Nhập nội dung giới thiệu', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'content-infra-2',
                            'type'       => 'textarea',
                            'title'      => __('Nhập nội dung giới thiệu', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'content-infra-3',
                            'type'       => 'textarea',
                            'title'      => __('Nhập nội dung giới thiệu', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'content-infra-4',
                            'type'       => 'textarea',
                            'title'      => __('Nhập nội dung giới thiệu', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'content-infra-5',
                            'type'       => 'textarea',
                            'title'      => __('Nhập nội dung giới thiệu', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'img-infra',
                            'type'       => 'media',
                            'title'      => __('Hình ảnh cơ sở vật chất', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'img-infra-1',
                            'type'       => 'media',
                            'title'      => __('Hình ảnh cơ sở vật chất', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'img-infra-2',
                            'type'       => 'media',
                            'title'      => __('Hình ảnh cơ sở vật chất', 'LeadSoft'),
                        ),
                        )
                );
                $this->sections[] = array(
                    'title'      => __( 'Trang thiết bị kỹ thuật', 'LeadSoft' ),
                    'id'         => 'Equipment-intro',
                    'subsection' => true,
                    'fields'     => array(
                        array(
                            'id'         => 'Equipment-intro',
                            'type'       => 'media',
                            'title'      => __('Nhập hình ảnh trang thiết bị', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'Equipment-intro-1',
                            'type'       => 'media',
                            'title'      => __('Nhập hình ảnh trang thiết bị', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'Equipment-intro-2',
                            'type'       => 'media',
                            'title'      => __('Nhập hình ảnh trang thiết bị', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'Equipment-intro-3',
                            'type'       => 'media',
                            'title'      => __('Nhập hình ảnh trang thiết bị', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'Equipment-intro-4',
                            'type'       => 'media',
                            'title'      => __('Nhập hình ảnh trang thiết bị', 'LeadSoft'),
                        ),)
                );
                $this->sections[] = array(
                    'title'      => __( 'Banner chuyên gia', 'LeadSoft' ),
                    'id'         => 'banner-expert',
                    'subsection' => true,
                    'fields'     => array(
                        array(
                            'id'         => 'banner-expert',
                            'type'       => 'media',
                            'title'      => __('Hình ảnh chuyên gia', 'LeadSoft'),
                        ),)
                );
                $this->sections[] = array(
                    'title'      => __( 'Hình ảnh đối tác', 'LeadSoft' ),
                    'id'         => 'feedback-customer',
                    'subsection' => true,
                    'fields'     => array(
                        array(
                            'id'         => 'feedback-customer',
                            'type'       => 'slides',
                            'title'      => __('Hình ảnh đối tác', 'LeadSoft'),
                        ),)
                );
                $this->sections[] = array(
                    'title'  => __( 'Tuỳ chỉnh trang Landing', 'LeadSoft' ),
                    'desc'   => __( 'Tuỳ chỉnh trang Landing', 'LeadSoft' ),
                    'icon' => 'el el-home',
                );
                $this->sections[] = array(
                    'title'      => __( 'Hình ảnh tổng quan', 'LeadSoft' ),
                    'id'         => 'overview-ladi',
                    'subsection' => true,
                    'fields'     => array(
                        array(
                            'id'         => 'overview-ladi',
                            'type'       => 'media',
                            'title'      => __('Hình ảnh tổng quan', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'overview-ladi-1',
                            'type'       => 'media',
                            'title'      => __('Hình ảnh tổng quan', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'overview-ladi-2',
                            'type'       => 'media',
                            'title'      => __('Hình ảnh tổng quan', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'overview-ladi-3',
                            'type'       => 'media',
                            'title'      => __('Hình ảnh tổng quan', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'overview-ladi-4',
                            'type'       => 'media',
                            'title'      => __('Hình ảnh tổng quan', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'overview-ladi-5',
                            'type'       => 'media',
                            'title'      => __('Hình ảnh tổng quan', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'overview-ladi-6',
                            'type'       => 'media',
                            'title'      => __('Hình ảnh tổng quan', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'overview-ladi-7',
                            'type'       => 'media',
                            'title'      => __('Hình ảnh tổng quan', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'overview-ladi-8',
                            'type'       => 'media',
                            'title'      => __('Hình ảnh tổng quan', 'LeadSoft'),
                        ),
                    )
                );
                $this->sections[] = array(
                    'title'      => __( 'Đội ngũ chuyên gia', 'LeadSoft' ),
                    'id'         => 'experts-ladi',
                    'subsection' => true,
                    'fields'     => array(
                        array(
                            'id'         => 'experts-ladi',
                            'type'       => 'media',
                            'title'      => __('Đội ngũ chuyên gia', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'experts-ladi-1',
                            'type'       => 'media',
                            'title'      => __('Đội ngũ chuyên gia', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'experts-ladi-2',
                            'type'       => 'media',
                            'title'      => __('Đội ngũ chuyên gia', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'experts-ladi-3',
                            'type'       => 'media',
                            'title'      => __('Đội ngũ chuyên gia', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'experts-ladi-4',
                            'type'       => 'media',
                            'title'      => __('Đội ngũ chuyên gia', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'experts-ladi-5',
                            'type'       => 'media',
                            'title'      => __('Đội ngũ chuyên gia', 'LeadSoft'),
                        ),)
                );
                $this->sections[] = array(
                    'title'      => __( 'Lý do lựa chọn', 'LeadSoft' ),
                    'id'         => 'reason',
                    'subsection' => true,
                    'fields'     => array(
                        array(
                            'id'         => 'reason-1',
                            'type'       => 'media',
                            'title'      => __('Nhập hình lý do lựa chọn', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'reason-2',
                            'type'       => 'media',
                            'title'      => __('Nhập hình lý do lựa chọn', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'reason-title',
                            'type'       => 'text',
                            'title'      => __('Nhập lý do lựa chọn', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'reason-title-1',
                            'type'       => 'text',
                            'title'      => __('Nhập lý do lựa chọn', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'reason-title-2',
                            'type'       => 'text',
                            'title'      => __('Nhập lý do lựa chọn', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'reason-title-3',
                            'type'       => 'text',
                            'title'      => __('Nhập lý do lựa chọn', 'LeadSoft'),
                        ),)
                );
                $this->sections[] = array(
                    'title'      => __( 'Trang thiết bị kỹ thuật', 'LeadSoft' ),
                    'id'         => 'Equipment',
                    'subsection' => true,
                    'fields'     => array(
                        array(
                            'id'         => 'Equipment',
                            'type'       => 'media',
                            'title'      => __('Nhập hình ảnh trang thiết bị', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'Equipment-1',
                            'type'       => 'media',
                            'title'      => __('Nhập hình ảnh trang thiết bị', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'Equipment-2',
                            'type'       => 'media',
                            'title'      => __('Nhập hình ảnh trang thiết bị', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'Equipment-3',
                            'type'       => 'media',
                            'title'      => __('Nhập hình ảnh trang thiết bị', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'Equipment-4',
                            'type'       => 'media',
                            'title'      => __('Nhập hình ảnh trang thiết bị', 'LeadSoft'),
                        ),)
                );
                $this->sections[] = array(
                    'title'      => __( 'Thông tin ưu đãi', 'LeadSoft' ),
                    'id'         => 'banner-promotion',
                    'subsection' => true,
                    'fields'     => array(
                        array(
                            'id'         => 'banner-promotion',
                            'type'       => 'media',
                            'title'      => __('Nhập thông tin ưu đãi', 'LeadSoft'),
                        ),)
                );
                $this->sections[] = array(
                    'title'      => __( 'Quy trình dịch vụ', 'LeadSoft' ),
                    'id'         => 'flow-work',
                    'subsection' => true,
                    'fields'     => array(
                        array(
                            'id'         => 'flow-work',
                            'type'       => 'slides',
                            'title'      => __('Nhập quy trình dịch vụ', 'LeadSoft'),
                        ),)
                );
                $this->sections[] = array(
                    'title'      => __( 'Đội ngũ kỹ thuật', 'LeadSoft' ),
                    'id'         => 'ourteam-ladi',
                    'subsection' => true,
                    'fields'     => array(
                        array(
                            'id'         => 'ourteam-ladi',
                            'type'       => 'media',
                            'title'      => __('Đội ngũ kỹ thuật', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'ourteam-ladi-1',
                            'type'       => 'media',
                            'title'      => __('Đội ngũ kỹ thuật', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'ourteam-ladi-2',
                            'type'       => 'media',
                            'title'      => __('Đội ngũ kỹ thuật', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'ourteam-ladi-3',
                            'type'       => 'media',
                            'title'      => __('Đội ngũ kỹ thuật', 'LeadSoft'),
                        ),)
                );
                $this->sections[] = array(
                    'title'      => __( 'Nhân vật tiêu biểu', 'LeadSoft' ),
                    'id'         => 'person-ladi',
                    'subsection' => true,
                    'fields'     => array(
                        array(
                            'id'         => 'person-name',
                            'type'       => 'text',
                            'title'      => __('Nhập tên nhân vật tiêu biểu', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'person-image-ladi-1',
                            'type'       => 'media',
                            'title'      => __('Nhập hình ảnh nhân vật tiêu biểu', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'person-image-ladi-2',
                            'type'       => 'media',
                            'title'      => __('Nhập hình ảnh nhân vật tiêu biểu', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'person-image-ladi-3',
                            'type'       => 'media',
                            'title'      => __('Nhập hình ảnh nhân vật tiêu biểu', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'person-image-ladi-4',
                            'type'       => 'media',
                            'title'      => __('Nhập hình ảnh nhân vật tiêu biểu', 'LeadSoft'),
                        ),
                        array(
                            'id'         => 'person-image-ladi-5',
                            'type'       => 'media',
                            'title'      => __('Nhập hình ảnh nhân vật tiêu biểu', 'LeadSoft'),
                        ),)
                );
                $this->sections[] = array(
                    'title'      => __( 'Phản hồi từ khách hàng', 'LeadSoft' ),
                    'id'         => 'feedback-customer-ladi',
                    'subsection' => true,
                    'fields'     => array(
                        array(
                            'id'         => 'feedback-image-ladi',
                            'type'       => 'slides',
                            'title'      => __('Nhập hình ảnh phản hồi từ khách hàng', 'LeadSoft'),
                        ),)
                );
            }
            public function setHelpTabs() {
                // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-1',
                    'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );
                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-2',
                    'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );
                // Set the help sidebar
                $this->args['help_sidebar'] = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
            }
            /**

             * All the possible arguments for Redux.

             * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments

             * */
            public function setArguments() {
                $theme = wp_get_theme(); // For use with some settings. Not necessary.
                $this->args = array(
                    // TYPICAL -> Change these values as you need/desire
                    'opt_name'           => 'ls_options',
                    // This is where your data is stored in the database and also becomes your global variable name.
                    'display_name'       => $theme->get( 'Name' ),
                    // Name that appears at the top of your panel
                    'display_version'    => $theme->get( 'Version' ),
                    // Version that appears at the top of your panel
                    'menu_type'          => 'menu',
                    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                    'allow_sub_menu'     => true,
                    // Show the sections below the admin menu item or not
                    'menu_title'         => __( 'Theme Option', 'redux-framework-demo' ),
                    'page_title'         => __( 'Theme Option', 'redux-framework-demo' ),
                    // You will need to generate a Google API key to use this feature.
                    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                    'google_api_key'     => 'AIzaSyAs0iVWrG4E_1bG244-z4HRKJSkg7JVrVQ',
                    // Must be defined to add google fonts to the typography module
                    'async_typography'   => false,
                    // Use a asynchronous font on the front end or font string
                    'admin_bar'          => true,
                    // Show the panel pages on the admin bar
                    'global_variable'    => '',
                    // Set a different name for your global variable other than the opt_name
                    'dev_mode'           => false,
                    // Show the time the page took to load, etc
                    'customizer'         => true,
                    // Enable basic customizer support
                    // OPTIONAL -> Give you extra features
                    'page_priority'      => null,
                    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                    'page_parent'        => 'themes.php',
                    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                    'page_permissions'   => 'manage_options',
                    // Permissions needed to access the options panel.
                    'menu_icon'          => '',
                    // Specify a custom URL to an icon
                    'last_tab'           => '',
                    // Force your panel to always open to a specific tab (by id)
                    'page_icon'          => 'icon-themes',
                    // Icon displayed in the admin panel next to your menu_title
                    'page_slug'          => 'ls_options',
                    // Page slug used to denote the panel
                    'save_defaults'      => true,
                    // On load save the defaults to DB before user clicks save or not
                    'default_show'       => false,
                    // If true, shows the default value next to each field that is not the default value.
                    'default_mark'       => '',
                    // What to print by the field's title if the value shown is default. Suggested: *
                    'show_import_export' => true,
                    // Shows the Import/Export panel when not used as a field.
                    // CAREFUL -> These options are for advanced use only
                    'transient_time'     => 60 * MINUTE_IN_SECONDS,
                    'output'             => true,
                    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                    'output_tag'         => true,
                    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.
                    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                    'database'           => '',
                    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                    'system_info'        => false,
                    // REMOVE
                    // HINTS
                    'hints'              => array(
                        'icon'          => 'icon-question-sign',
                        'icon_position' => 'right',
                        'icon_color'    => 'lightgray',
                        'icon_size'     => 'normal',
                        'tip_style'     => array(
                            'color'   => 'light',
                            'shadow'  => true,
                            'rounded' => false,
                            'style'   => '',
                        ),
                        'tip_position'  => array(
                            'my' => 'top left',
                            'at' => 'bottom right',
                        ),
                        'tip_effect'    => array(
                            'show' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'mouseover',
                            ),

                            'hide' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'click mouseleave',
                            ),
                        ),
                    )
                );
                // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.

                $this->args['share_icons'][] = array(
                    'url'   => '',
                    'title' => 'Like us on Facebook',
                    'icon'  => 'el el-facebook'
                );

                $this->args['share_icons'][] = array(
                    'url'   => '',
                    'title' => 'Follow us on Twitter',
                    'icon'  => 'el el-twitter'
                );
                $this->args['share_icons'][] = array(
                    'url'   => '',
                    'title' => 'Find us on LinkedIn',
                    'icon'  => 'el el-linkedin'
                );
                // Panel Intro text -> before the form
                if ( ! isset( $this->args['global_variable'] ) || $this->args['global_variable'] !== false ) {
                    if ( ! empty( $this->args['global_variable'] ) ) {
                        $v = $this->args['global_variable'];
                    } else {

                        $v = str_replace( '-', '_', $this->args['opt_name'] );

                    }
                    $this->args['intro_text'] = sprintf( __( '<p>Chào mừng bạn đến với khu vực tùy chỉnh website, Hãy cân nhắc kỹ trong quá trình tùy chỉnh! </p>', 'redux-framework-demo' ), $v );
                } else {

                    $this->args['intro_text'] = __( '<p>Chào mừng bạn đến với khu vực tùy chỉnh website, Hãy cân nhắc kỹ trong quá trình tùy chỉnh! </p>', 'redux-framework-demo' );
                }
            }
        }
        global $reduxConfig;
        $reduxConfig = new LeadSoft_Theme_Options();
    }