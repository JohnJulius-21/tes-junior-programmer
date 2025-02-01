<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model {
    
    public function get_produk_by_status($status) {
        $this->db->select('produk.*, kategori.nama_kategori, status.nama_status');
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.kategori_id = kategori.id_kategori', 'left');
        $this->db->join('status', 'produk.status_id = status.id_status', 'left');
        $this->db->where('status.nama_status', $status);
        return $this->db->get()->result_array();
    }

    public function get_produk_by_id($id)
{
    return $this->db->get_where('produk', ['id_produk' => $id])->row();
}


    public function insert_produk($data) {
        return $this->db->insert('produk', $data);
    }

    public function update_produk($id, $data) {
        $this->db->where('id_produk', $id);
        return $this->db->update('produk', $data);
    }

    public function delete_produk($id) {
        $this->db->where('id_produk', $id);
        return $this->db->delete('produk');
    }
}

