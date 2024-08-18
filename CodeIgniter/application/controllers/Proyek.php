<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Proyek_model');
        $this->load->model('Lokasi_model'); // Load model Lokasi
        $this->load->helper('url');
    }

    // Halaman utama: Tampilkan daftar proyek
    public function index() {
        $data['proyek'] = $this->Proyek_model->get_all_proyek();
        $this->load->view('proyek_list', $data);
    }

    // Tambah proyek
    public function tambah() {
        // Ambil semua lokasi
        $data['lokasi'] = $this->Lokasi_model->get_all_lokasi();
        
        if ($this->input->post('submit')) {
            $data_proyek = array(
                'nama_proyek' => $this->input->post('nama_proyek'),
                'customer' => $this->input->post('customer'),
                'tgl_mulai' => $this->input->post('tgl_mulai'),
                'tgl_selesai' => $this->input->post('tgl_selesai'),
                'pimpinan_proyek' => $this->input->post('pimpinan_proyek'),
                'lokasi_id' => $this->input->post('lokasi_id'),
                'created_at' => date('Y-m-d H:i:s')
            );
            $this->Proyek_model->insert_proyek($data_proyek);
            redirect('proyek');
        } else {
            $this->load->view('proyek_tambah', $data);
        }
    }

    // Edit proyek
    public function edit($id) {
        $data['proyek'] = $this->Proyek_model->get_proyek_by_id($id);
        $data['lokasi'] = $this->Lokasi_model->get_all_lokasi(); // Load lokasi untuk dropdown
        
        if ($this->input->post('submit')) {
            $data_proyek = array(
                'nama_proyek' => $this->input->post('nama_proyek'),
                'customer' => $this->input->post('customer'),
                'tgl_mulai' => $this->input->post('tgl_mulai'),
                'tgl_selesai' => $this->input->post('tgl_selesai'),
                'pimpinan_proyek' => $this->input->post('pimpinan_proyek'),
                'lokasi_id' => $this->input->post('lokasi_id')
            );
            $this->Proyek_model->update_proyek($id, $data_proyek);
            redirect('proyek');
        } else {
            $this->load->view('proyek_edit', $data);
        }
    }

    // Hapus proyek
    public function hapus($id) {
        $this->Proyek_model->delete_proyek($id);
        redirect('proyek');
    }
}
