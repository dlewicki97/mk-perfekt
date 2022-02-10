<?php
defined('BASEPATH') or exit('No direct script access allowed');

function loadDefaultData()
{
	$CI = &get_instance();
	$data['mails'] = $CI->back_m->get_all('mails');
	$data['user'] = $CI->back_m->get_one('users', $_SESSION['id']);
	$data['media'] = $CI->back_m->get_all('media');
	$data['settings'] = $CI->back_m->get_one('settings', 1);
	$data['contact'] = $CI->back_m->get_one('contact_settings', 1);
	$data['api_gallery'] = apiGalleryRows();

	return $data;
}

function loadDefaultDataFront()
{
	$CI = &get_instance();
	$data['settings'] = $CI->back_m->get_one('settings', 1);
	$data['contact_settings'] = $CI->back_m->get_one('contact_settings', 1);
	$data['subpages'] = $CI->back_m->get_all('subpages');
	$data['current_subpage'] = $CI->back_m->get_subpage(!$CI->uri->segment(1) ? 'home' : $CI->uri->segment(1));
	$data['layout_elements'] = $CI->back_m->get_one('layout_elements', 1);
	$data['footer_desc'] = $CI->back_m->get_one('footer_desc', 1);
	$data['footer_products'] = $CI->back_m->get_all('products');
	$data['header_buttons'] = $CI->back_m->get_all('header_buttons');
	$data['social_buttons'] = $CI->back_m->get_all('social_buttons');
	if ($data['current_subpage']) {
		$data['meta_title'] = $data['current_subpage']->title;
		$data['meta_description'] = $data['current_subpage']->description;
		$data['title'] = $data['current_subpage']->title;
		$data['subtitle'] = $data['current_subpage']->subtitle;
	}

	$data['footer_brands'] = [];
	foreach ($data['footer_products'] as $product) {
		$data['footer_brands'][$product->id] = $CI->back_m->get_brands($product->id);
	}

	return $data;
}
