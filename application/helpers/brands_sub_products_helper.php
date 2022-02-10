<?php
defined("BASEPATH") or exit("No direct script access allowed");

function is_sub_product_selected($sub_product_id, $brand_id, $product_id)
{
    $CI = &get_instance();
    return count($CI->back_m->get_all_where_multiple('brands__sub_products', ['sub_product_id' => $sub_product_id, 'brand_id' => $brand_id, 'product_id' => $product_id])) > 0;
}

function save_sub_products($brand_id, $product_id)
{
    $CI = &get_instance();

    $post_sub_products = $_POST['sub_products'] ?? [];
    $brands__sub_products = $CI->back_m->get_all_where_multiple('brands__sub_products', ['brand_id' => $brand_id, 'product_id' => $product_id]);

    foreach ($brands__sub_products as $products_brand) {
        if (!in_array($products_brand->sub_product_id, $post_sub_products)) {
            $CI->back_m->delete('brands__sub_products', $products_brand->id);
        }
    }

    foreach ($post_sub_products as $post_sub_product) {
        $where = ['sub_product_id' => $post_sub_product, 'brand_id' => $brand_id, 'product_id' => $product_id];

        if (count($CI->back_m->get_all_where_multiple('brands__sub_products', $where)) == 0) {
            $CI->back_m->insert('brands__sub_products', $where);
        }
    }
}