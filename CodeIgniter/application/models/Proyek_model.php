<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek_model extends CI_Model {

    public function insert_proyek($data) {
        return $this->db->insert('proyek', $data);
    }

    public function update_proyek($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('proyek', $data);
    }

    public function delete_proyek($id) {
        $this->db->where('id', $id);
        return $this->db->delete('proyek');
    }

    public function get_all_proyek() {
        $this->db->select('proyek.*, lokasi.nama_lokasi');
        $this->db->from('proyek');
        $this->db->join('lokasi', 'proyek.lokasi_id = lokasi.id', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_proyek_by_id($id) {
        $query = $this->db->get_where('proyek', array('id' => $id));
        return $query->row_array();
    }
}
