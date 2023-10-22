<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('id_pegawai'))) {
            redirect('auth/loginPegawai', 'refresh');
        }
        $this->load->model('Kategori_model');
    }

    public function index()
    {
        $data['title'] = 'Kategori';
        $x['data'] = $this->Kategori_model->get_all_kategori();

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/side');
        $this->load->view('admin/layout/side-header');
        $this->load->view('admin/kategori', $x);
        $this->load->view('admin/layout/footer');
    }

    function simpan_kategori(){
		$kategori=strip_tags($this->input->post('xkategori'));
		$this->Kategori_model->simpan_kategori($kategori);
		echo $this->session->set_flashdata('msg','success');
		redirect('kategori');
	}

	function update_kategori(){
		$kode=strip_tags($this->input->post('kode'));
		$kategori=strip_tags($this->input->post('xkategori'));
		$this->Kategori_model->update_kategori($kode,$kategori);
		echo $this->session->set_flashdata('msg','info');
		redirect('kategori');
	}
	function hapus_kategori(){
		$kode=strip_tags($this->input->post('kode'));
		$this->Kategori_model->hapus_kategori($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('kategori');
	}

}