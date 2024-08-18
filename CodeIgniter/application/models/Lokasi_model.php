<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function insert_lokasi($data) {
        // Debugging: Cek data yang diterima
        echo '<pre>';
        print_r($data);
        echo '</pre>';

        // Insert data ke tabel 'lokasi'
        $this->db->insert('lokasi', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            // Tampilkan query terakhir jika insert gagal
            echo $this->db->last_query();
            return false;
        }
    }

    public function get_all_lokasi() {
        $query = $this->db->get('lokasi');
        return $query->result_array();
    }
}
