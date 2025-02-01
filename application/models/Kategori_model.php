<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model {
    
    public function get_all_kategori() {
        return $this->db->get('kategori')->result();
    }
}

