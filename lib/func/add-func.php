<?php

// 記事一覧アイキャッチ表示
function customize_manage_posts_columns($columns)
{
    $columns['thumbnail'] = __('Thumbnail');
    return $columns;
}
add_filter('manage_posts_columns', 'customize_manage_posts_columns');
function customize_manage_posts_custom_column($column_name, $post_id)
{
    if ('thumbnail' == $column_name) {
        $thum = get_the_post_thumbnail($post_id, 'thumbnail', [
            'style'=>'width:100px;height:auto'
        ]);
    }
    if (isset($thum) && $thum) {
        echo $thum;
    }
}
add_action('manage_posts_custom_column', 'customize_manage_posts_custom_column', 10, 2);

// Method 1: Filter.
function my_acf_google_map_api($api)
{
    $api['key'] = 'AIzaSyA5_k_xrwR0k-bvx3iUeIawpfzof2Br1Pg';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// Method 2: Setting.
function my_acf_init()
{
    acf_update_setting('google_api_key', 'AIzaSyA5_k_xrwR0k-bvx3iUeIawpfzof2Br1Pg');
}
add_action('acf/init', 'my_acf_init');
