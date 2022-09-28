<?php
add_action( 'wp_ajax_maps', 'maps_init' );
add_action( 'wp_ajax_nopriv_maps', 'maps_init' );
function maps_init() {
    //do bên js để dạng json nên giá trị trả về dùng phải encode
    $id = (isset($_POST['id']))?esc_attr($_POST['id']) : '';
    $maps = get_field('maps',$id);
    wp_send_json_success($maps);
    die();//bắt buộc phải có khi kết thúc
}