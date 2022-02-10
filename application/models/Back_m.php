<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Back_m extends CI_Model
{
    public function get_all($table)
    {
        $query = $this->db->get($table);
        return $query->result();
    }

    public function get_brands($product_id)
    {
        $this->db->select('*');
        $this->db->where('products_brands.product_id', $product_id);
        $this->db->from('products_brands');
        $this->db->join('brands', 'products_brands.brand_id = brands.id');
        return $this->db->get()->result();
    }

    public function get_downloads_by_download_category_id($download_category_id)
    {
        $this->db->select('*');
        $this->db->where('downloads_downloads_categories.download_category_id', $download_category_id);
        $this->db->from('downloads_downloads_categories');
        $this->db->join('downloads', 'downloads_downloads_categories.download_id = downloads.id');
        return $this->db->get()->result();
    }

    public function get_sub_products($brand_id, $product_id)
    {
        $this->db->select('*');
        $this->db->where(['brands__sub_products.brand_id' => $brand_id, 'brands__sub_products.product_id' => $product_id]);
        $this->db->from('brands__sub_products');
        $this->db->join('sub_products', 'brands__sub_products.sub_product_id = sub_products.id');
        return $this->db->get()->result();
    }

    public function get_all_where($table, $field, $value)
    {
        $this->db->where([$field => $value]);
        $query = $this->db->get($table);
        return $query->result();
    }


    public function get_all_where_multiple($table, $where)
    {
        $this->db->where($where);
        $query = $this->db->get($table);
        return $query->result();
    }

    public function get_where($table, $field, $value)
    {
        $this->db->where([$field => $value]);
        $query = $this->db->get($table);
        return $query->row();
    }

    public function get_with_limit($table, $limit, $sort = null)
    {
        $this->db->limit($limit);
        if ($sort != null) {
            $this->db->order_by('created', $sort);
        }
        $query = $this->db->get($table);
        return $query->result();
    }

    public function color_exist($sub_product_id, $color_id)
    {
        $this->db->where(['sub_product_id' => $sub_product_id, 'color_id' => $color_id]);
        $query = $this->db->get('sub_products_colors')->result();

        return !empty($query);
    }

    public function get_last($table)
    {
        $this->db->order_by('created', 'desc');
        $this->db->limit(1);
        return $this->db->get($table)->row();
    }

    public function get_one($table, $id)
    {
        $this->db->where(['id' => $id]);
        $query = $this->db->get($table);
        return $query->row();
    }

    public function get_prefixes()
    {
        $query = $this->db->get('jezyki');
        $query = $query->result();
        $prefixes = [];
        $i = 0;
        foreach ($query as $q) {
            $prefixes[$i] = $q->prefix;
            $i++;
        }
        return $prefixes;
    }


    public function get_subpage($page)
    {
        $this->db->where(['page' => $page]);
        $query = $this->db->get('subpages');
        return $query->row();
    }

    public function get_subpage_by_table_name($table_name)
    {
        $this->db->where(['table_name' => $table_name]);
        $query = $this->db->get('subpages');
        return $query->row();
    }

    public function get_api_photos()
    {
        $this->db->where(['is_photo' => 1]);
        $query = $this->db->get('media');
        return $query->result();
    }

    public function get_images($table, $table_name, $id, $limit = '')
    {
        if ($limit) $this->db->limit($limit);
        $this->db->where([
            'item_id' => $id,
            'table_name' => $table_name,
        ]);

        $query = $this->db->get($table);
        return $query->result();
    }

    public function insert($table, $data)
    {
        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function get_random($table, $limit, $id = '')
    {
        $this->db->where('id !=', $id);
        $this->db->order_by('rand()');
        $this->db->limit($limit);
        $query = $this->db->get($table);
        return $query->result();
    }

    public function update($table, $data, $id)
    {
        $this->db->where(['id' => $id]);
        $query = $this->db->update($table, $data);
        return $query;
    }

    public function delete($table, $id)
    {
        $this->db->where(['id' => $id]);
        $query = $this->db->delete($table);
        return $query;
    }
    public function get_town_article($id, $town_id)
    {
        $this->db->where([
            'id' => $id,
            'town_id' => $town_id,
        ]);
        $query = $this->db->get('town_articles');
        return $query->row();
    }
}