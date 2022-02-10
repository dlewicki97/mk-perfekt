<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->db->table_exists('users')) {
			$this->base_m->create_base();
		}
		$this->load->helper('data');
	}

	public function index()
	{
		echo loadViewsFront('index', homeData());
	}

	public function about()
	{
		echo loadViewsFront('about', aboutData());
	}

	public function products()
	{
		echo loadViewsFront('products', productsData());
	}

	public function single_product($id)
	{
		echo loadViewsFront('single_product', singleProductData($id));
	}

	public function single_news($id)
	{
		echo loadViewsFront('single_news', singleNewsData($id));
	}
	public function single_brand($id)
	{
		echo loadViewsFront('single_brand', singleBrandData($id));
	}
	public function single_product_category($id)
	{
		echo loadViewsFront('single_product_category', singleProductCategoryData($id));
	}

	public function gallery()
	{
		echo loadViewsFront('gallery', galleryData());
	}

	public function single_gallery($id)
	{
		echo loadViewsFront('single_gallery', singleGalleryData($id));
	}


	public function downloads()
	{
		echo loadViewsFront('downloads', downloadsData());
	}

	public function contact()
	{
		echo loadViewsFront('contact', contactData());
	}
	public function towns()
	{
		echo loadViewsFront('towns', townsData());
	}

	public function single_town($id)
	{
		// $data = singleTownData($id);

		$data = loadDefaultDataFront();
		if (!$data['town'] = $this->back_m->get_one('towns', $id)) {
			show_404();
		}
		$data['articles'] = $this->back_m->get_all_where('town_articles', 'town_id', $id);
		$data['subtitle'] = $data['town']->title;

		echo loadViewsFront('single_town', $data);
	}
	public function town_article($town_id, $id)
	{
		$data = loadDefaultDataFront();

		if (!$data['value'] = $this->back_m->get_town_article($id, $town_id)) {
			show_404();
		}

		$townName = $this->back_m->get_one('towns', $town_id)->title;
		// $data['subtitle'] = $data['value']->title;
		$data['title'] = $townName;
		echo loadViewsFront('town_article', $data);
	}

	public function good_to_know()
	{
		$data = loadDefaultDataFront();
		$data['good_to_know'] = $this->back_m->get_all('good_to_know');
		echo loadViewsFront('good_to_know', $data);
	}
	public function single_good_to_know($title, $id)
	{

		$data = loadDefaultDataFront();

		$data['gallery'] = $this->back_m->get_images('gallery', 'good_to_know', $id);
		$data['good_to_know'] =  $this->back_m->get_one('good_to_know',   $id);
		$data['meta_title'] = $data['good_to_know']->title;
		$data['meta_description'] = $data['good_to_know']->meta_description;

		echo loadViewsFront('single_good_to_know', $data);
	}
	public function promotional_actions()
	{
		$data = loadDefaultDataFront();
		$data['promotional_actions'] = $this->back_m->get_all('promotional_actions');
		echo loadViewsFront('promotional_actions', $data);
	}
	public function single_promotional_actions($title, $id)
	{

		$data = loadDefaultDataFront();

		$data['gallery'] = $this->back_m->get_images('gallery', 'promotional_actions', $id);
		$data['promotional_action'] =  $this->back_m->get_one('promotional_actions',   $id);
		$data['meta_title'] = $data['promotional_action']->title;
		$data['meta_description'] = $data['promotional_action']->meta_description;

		echo loadViewsFront('single_promotional_actions', $data);
	}
	public function single_downloads($title, $id)
	{

		$data = loadDefaultDataFront();

		$data['downloads'] =  $this->back_m->get_downloads_by_download_category_id($id);
		$data['downloads_desc'] = $this->back_m->get_one('downloads_desc', 1);
		$data['downloads_category'] = $this->back_m->get_one('downloads_categories', $id);
		$data['title'] = $data['downloads_category']->title;
		$data['meta_title'] = $data['downloads_category']->title;
		$data['subtitle'] = $data['downloads_category']->subtitle;

		echo loadViewsFront('single_downloads', $data);
	}
}