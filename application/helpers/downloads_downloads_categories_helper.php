<?php
defined("BASEPATH") or exit("No direct script access allowed");

function is_download_category_selected($download_category_id, $download_id)
{
    $CI = &get_instance();
    return count($CI->back_m->get_all_where_multiple('downloads_downloads_categories', ['download_id' => $download_id, 'download_category_id' => $download_category_id])) > 0;
}

function save_downloads_categories($download_id)
{
    $CI = &get_instance();

    $post_brands = $_POST['downloads_categories'] ?? [];
    $downloads_downloads_categories = $CI->back_m->get_all_where_multiple('downloads_downloads_categories', ['download_id' => $download_id]);

    foreach ($downloads_downloads_categories as $downloads_downloads_category) {
        if (!in_array($downloads_downloads_category->download_category_id, $post_brands)) {
            $CI->back_m->delete('downloads_downloads_categories', $downloads_downloads_category->id);
        }
    }

    foreach ($post_brands as $post_brand) {
        if (count($CI->back_m->get_all_where_multiple('downloads_downloads_categories', ['download_id' => $download_id, 'download_category_id' => $post_brand])) == 0) {
            $CI->back_m->insert('downloads_downloads_categories', ['download_id' => $download_id, 'download_category_id' => $post_brand]);
        }
    }
}
