<?php
defined("BASEPATH") or exit("No direct script access allowed");

function is_brand_selected($brand_id, $product_id)
{
    $CI = &get_instance();
    return count($CI->back_m->get_all_where_multiple('products_brands', ['product_id' => $product_id, 'brand_id' => $brand_id])) > 0;
}

function save_brands($product_id)
{
    $CI = &get_instance();

    $post_brands = $_POST['brands'] ?? [];
    $products_brands = $CI->back_m->get_all_where_multiple('products_brands', ['product_id' => $product_id]);

    foreach ($products_brands as $products_brand) {
        if (!in_array($products_brand->brand_id, $post_brands)) {
            $CI->back_m->delete('products_brands', $products_brand->id);
        }
    }

    foreach ($post_brands as $post_brand) {
        if (count($CI->back_m->get_all_where_multiple('products_brands', ['product_id' => $product_id, 'brand_id' => $post_brand])) == 0) {
            $CI->back_m->insert('products_brands', ['product_id' => $product_id, 'brand_id' => $post_brand]);
        }
    }
}