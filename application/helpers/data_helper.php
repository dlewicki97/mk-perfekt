<?php
defined('BASEPATH') or exit('No direct script access allowed');

function homeData()
{
  $CI = &get_instance();

  $data = loadDefaultDataFront();

  $data['slider'] = $CI->back_m->get_all('slider');
  $data['products_desc'] = $CI->back_m->get_one('products_desc', 1);
  $data['products'] = $CI->back_m->get_with_limit('products', 4);
  $data['realizations_desc'] = $CI->back_m->get_one('realizations_desc', 1);
  $main_realization = $CI->back_m->get_where('realizations', 'main', 1);
  $realizations = $CI->back_m->get_images('gallery', 'realizations', $main_realization ? $main_realization->id : 1);
  $data['realizations'] = [[]];
  $i = 0;
  $j = 0;
  foreach ($realizations as $k => $realization) {
    array_push($data['realizations'][$j], $realization);
    if ($i < 7) {
      $i++;
    } else {
      $i = 0;
      $j++;
      if (array_key_exists($k + 1, $realizations)) array_push($data['realizations'], []);
    }
  }
  $data['brands_desc'] = $CI->back_m->get_one('brands_desc', 1);
  $data['brands'] = $CI->back_m->get_all('brands');
  $data['news_desc'] = $CI->back_m->get_one('news_desc', 1);
  $data['news'] = $CI->back_m->get_with_limit('news', 3);

  return $data;
}


function aboutData()
{
  $CI = &get_instance();

  $data = loadDefaultDataFront();
  $data['about'] = $CI->back_m->get_all('about');
  $data['attributes'] = $CI->back_m->get_all('attributes');
  $data['attributes_bg'] = $CI->back_m->get_one('attributes_bg', 1);
  $data['interested'] = $CI->back_m->get_one('interested', 1);

  return $data;
}

function productsData()
{
  $CI = &get_instance();

  $data = loadDefaultDataFront();
  $data['products'] = $CI->back_m->get_all('products');

  $data['brands'] = [];
  $data['sub_products'] = [];
  foreach ($data['products'] as $product) {
    $data['brands'][$product->id] = $CI->back_m->get_brands($product->id);
    foreach ($data['brands'][$product->id] as $brand) {
      $data['sub_products'][$product->id][$brand->id] = $CI->back_m->get_sub_products($brand->id, $product->id);
    }
  }

  return $data;
}

function singleProductData($id)
{
  $CI = &get_instance();

  $data = loadDefaultDataFront();
  $data['sub_product'] = $CI->back_m->get_one('sub_products', $id);
  $data['title'] = $data['sub_product']->title;
  $data['subtitle'] = $data['sub_product']->brand;
  $data['products_desc'] = $CI->back_m->get_one('products_desc', 1);
  $data['product_section_below'] = $CI->back_m->get_one('product_section_below', 1);
  $data['technical_data'] = $CI->back_m->get_all_where('technical_data', 'sub_product_id', $id);
  $data['sub_products_colors'] = $CI->back_m->get_all_where('sub_products_colors', 'sub_product_id', $id);
  $data['gallery'] = $CI->back_m->get_images('gallery', 'sub_products', $id);
  $data['meta_title'] = $data['sub_product']->title;
  $data['meta_description'] = $data['sub_product']->meta_description;
  $data['colors'] = [];
  foreach ($data['sub_products_colors'] as $selected_color) {
    array_push($data['colors'], $CI->back_m->get_one('colors', $selected_color->color_id));
  }

  return $data;
}

function singleNewsData($id)
{
  $CI = &get_instance();

  $data = loadDefaultDataFront();
  $data['info'] = $CI->back_m->get_one('news', $id);
  $data['gallery'] = $CI->back_m->get_images('gallery', 'news', $id);
  $data['subtitle'] = $data['info']->title;
  $data['meta_title'] = $data['info']->title;
  $data['meta_description'] = $data['info']->meta_description;

  return $data;
}
function singleBrandData($id)
{
  $CI = &get_instance();

  $data = loadDefaultDataFront();
  $data['brand'] = $CI->back_m->get_one('brands', $id);
  $data['subtitle'] = $data['brand']->title;
  $data['meta_title'] = $data['brand']->title;
  $data['meta_description'] = $data['brand']->meta_description;
  // $data['sub_products'] = $CI->back_m->get_sub_products($data['brand']->id, $id);

  return $data;
}
function singleProductCategoryData($id)
{
  $CI = &get_instance();

  $data = loadDefaultDataFront();
  $data['product'] = $CI->back_m->get_one('products', $id);
  $data['title'] = $data['product']->title;
  $data['subtitle'] = $data['current_subpage']->title;
  $data['meta_title'] = $data['product']->title;
  $data['meta_description'] = $data['product']->meta_description;

  return $data;
}
function galleryData()
{
  $CI = &get_instance();

  $data = loadDefaultDataFront();
  $data['realizations'] = $CI->back_m->get_all('realizations');

  return $data;
}
function singleGalleryData($id)
{
  $CI = &get_instance();

  $data = loadDefaultDataFront();
  $data['realization'] = $CI->back_m->get_one('realizations', $id);
  $data['realizations'] = $CI->back_m->get_images('gallery', 'realizations', $id);
  $data['subtitle'] = $data['realization']->title;
  $data['meta_title'] = $data['realization']->title;

  return $data;
}

function downloadsData()
{
  $CI = &get_instance();

  $data = loadDefaultDataFront();
  $data['downloads_categories'] = $CI->back_m->get_all('downloads_categories');
  $data['downloads_desc'] = $CI->back_m->get_one('downloads_desc', 1);

  return $data;
}

function contactData()
{
  $CI = &get_instance();

  $data = loadDefaultDataFront();
  $data['contact_desc'] = $CI->back_m->get_one('contact_desc', 1);
  $data['employees'] = $CI->back_m->get_all('employees');

  return $data;
}
function townsData()
{
  $CI = &get_instance();

  $data = loadDefaultDataFront();
  $data['towns'] = $CI->back_m->get_all('towns');

  return $data;
}

function singleTownData($id)
{
  $CI = &get_instance();

  $data = loadDefaultDataFront();
  $data['town'] = $CI->back_m->get_one('towns', $id);
  $data['articles'] = $CI->back_m->get_all_where('town_articles', 'town_id', $id);
  $data['subtitle'] = $data['town']->title;
  return $data;
}

function townArticleData($town_id, $id)
{
  $CI = &get_instance();

  $data = loadDefaultDataFront();

  $data['value'] = $CI->back_m->get_town_article($id, $town_id);
  $townName = $CI->back_m->get_one('towns', $town_id)->title;
  // $data['subtitle'] = $data['value']->title;
  $data['title'] = $townName;
  return $data;
}
