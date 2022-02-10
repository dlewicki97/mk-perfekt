<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Brands extends CI_Controller
{

	public function index()
	{
		if (checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			if (!$this->db->table_exists($this->uri->segment(2))) {
				$this->base_m->create_table($this->uri->segment(2));
			}
			// DEFAULT DATA
			$data = loadDefaultData();

			$data['rows'] = $this->back_m->get_all($this->uri->segment(2));
			echo loadSubViewsBack($this->uri->segment(2), 'index', $data);
		} else {
			redirect('panel');
		}
	}
	public function list($product_id)
	{
		if (checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			if (!$this->db->table_exists($this->uri->segment(2))) {
				$this->base_m->create_table($this->uri->segment(2));
			}
			// DEFAULT DATA
			$data = loadDefaultData();

			$data['rows'] = $this->back_m->get_brands($product_id);
			$data['product'] = $this->back_m->get_one('products', $product_id);

			echo loadSubViewsBack($this->uri->segment(2), 'products_brands', $data);
		} else {
			redirect('panel');
		}
	}

	public function form($type, $id = '')
	{
		if (checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			// DEFAULT DATA
			$data = loadDefaultData();

			if ($type == 'update') {
				$data['value'] = $this->back_m->get_one($this->uri->segment(2), $id);
			}
			$this->load->helper('brands_sub_products');
			$data['sub_products'] = $this->back_m->get_all('sub_products');

			echo loadSubViewsBack($this->uri->segment(2), 'form', $data);
		} else {
			redirect('panel');
		}
	}

	public function brands__sub_products($product_id, $brand_id)
	{
		if (checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			// DEFAULT DATA
			$data = loadDefaultData();


			$this->load->helper('brands_sub_products');
			$data['sub_products'] = $this->back_m->get_all('sub_products');
			$data['product'] = $this->back_m->get_one('products', $product_id);
			$data['brand'] = $this->back_m->get_one('brands', $brand_id);


			echo loadSubViewsBack($this->uri->segment(2), 'brands__sub_products', $data);
		} else {
			redirect('panel');
		}
	}

	public function save_sub_products()
	{
		$this->load->helper('brands_sub_products');
		save_sub_products($_POST['brand_id'], $_POST['product_id']);
		// redirect("panel/brands/list/{$_POST['product_id']}");
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function action($type, $table, $id = '')
	{
		if (checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			$now = date('Y-m-d');
			if (!is_dir('uploads/' . $now)) {
				mkdir('./uploads/' . $now, 0777, TRUE);
			}
			$config['upload_path'] = './uploads/' . $now;
			$config['allowed_types'] = '*';
			$config['max_size'] = 0;
			$config['max_width'] = 0;
			$config['max_height'] = 0;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			foreach ($_POST as $key => $value) {

				if (!$this->db->field_exists($key, $table)) {
					$this->base_m->create_column($table, $key);
				}

				if (!$this->db->field_exists('photo2', $table)) {
					$this->base_m->create_column($table, 'photo2');
				}

				if ($key == 'name_photo_1') {
					if ($this->upload->do_upload('photo_1')) {
						$data = $this->upload->data();
						$insert['photo'] = $now . '/' . $data['file_name'];
						if ($data['image_width'] > 1440) {
							resizeImg($data['file_name'], $now, '1440');
						}
						convert__to__webp($insert['photo']);
						addMedia($data);
					} elseif ($value == 'usunięte') {
						$insert['photo'] = '';
					}
				} else if ($key == 'name_photo_2') {
					if ($this->upload->do_upload('photo_2')) {
						$data = $this->upload->data();
						$insert['photo2'] = $now . '/' . $data['file_name'];
						if ($data['image_width'] > 1440) {
							resizeImg($data['file_name'], $now, '1440');
						}
						convert__to__webp($insert['photo2']);
						addMedia($data);
					} elseif ($value == 'usunięte') {
						$insert['photo2'] = '';
					}
				} else if ($key == 'server_photo_1') {
					if ($value != '') {
						$insert['photo'] = $value;
					}
					if ($value == 'usunięte') {
						$insert['photo'] = '';
					}
				} else if ($key == 'server_photo_2') {
					if ($value != '') {
						$insert['photo2'] = $value;
					}
					if ($value == 'usunięte') {
						$insert['photo2'] = '';
					}
				} else if ($key == 'sub_products') {
					continue;
				} else {
					$insert[$key] = $value;
				}
			}
			if ($type == 'insert') {
				$this->back_m->insert($table, $insert);
				$last_id = $this->db->insert_id();
				$this->session->set_flashdata('flashdata', 'Rekord został dodany!');
			} else {
				$this->back_m->update($table, $insert, $id);
				$last_id = $id;
				$this->session->set_flashdata('flashdata', 'Rekord został zaktualizowany!');
			}

			redirect('panel/' . $table);
		} else {
			redirect('panel');
		}
	}
}