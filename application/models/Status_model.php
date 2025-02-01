<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status_model extends CI_Model {
    
    public function get_all_status() {
        return $this->db->get('status')->result();
    }
}

