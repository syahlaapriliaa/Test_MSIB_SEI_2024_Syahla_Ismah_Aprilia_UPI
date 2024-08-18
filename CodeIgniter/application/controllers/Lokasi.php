<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Lokasi_model');
        $this->load->helper('url');
    }

    public function tambah() {
        if ($this->input->post('submit')) {
            $data = array(
                'nama_lokasi' => $this->input->post('nama_lokasi'),
                'negara' => $this->input->post('negara'),
                'provinsi' => $this->input->post('provinsi'),
                'kota' => $this->input->post('kota')
            );
    
            // Debugging: Cek data sebelum menyimpan
            echo '<pre>';
            print_r($data);
            echo '</pre>';
    
            // Simpan data ke database
            $result = $this->Lokasi_model->insert_lokasi($data);
            
            // Debugging: Cek hasil penyimpanan
            if ($result) {
                // Redirect ke halaman daftar lokasi setelah berhasil
                redirect('lokasi/daftar');
            } else {
                echo 'Data gagal disimpan!';
            }
        } else {
            // Tampilkan form tambah lokasi
            $this->load->view('lokasi_tambah');
        }
    }
    

    public function daftar() {
        $data['lokasi'] = $this->Lokasi_model->get_all_lokasi();
        $this->load->view('lokasi_daftar', $data);
    }
}
