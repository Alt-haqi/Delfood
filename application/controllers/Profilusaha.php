<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profilusaha extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('id_pegawai'))) {
            redirect('auth/loginPegawai', 'refresh');
        }
        if ($this->session->userdata('jabatan') != "admin") {
            redirect('admin');
        }
        $this->load->model('Profilusaha_model');
    }

    public function index()
    {
        $data['title'] = 'Profil Usaha';
        $data['profil_usaha'] = $this->Profilusaha_model->getProfilUsaha();
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/side');
        $this->load->view('admin/layout/side-header');
        $this->load->view('admin/profil_usaha/index');
        $this->load->view('admin/layout/footer');
    }



    public function edit()
    {
        $this->form_validation->set_rules('nama_usaha', 'nama_usaha', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('nomor_telepon', 'nomor_telepon', 'numeric|required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());

            $data['title'] = 'Edit Profil Usaha';
            $data['profil_usaha'] = $this->Profilusaha_model->getProfilUsaha();
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/side');
            $this->load->view('admin/layout/side-header');
            $this->load->view('admin/profil_usaha/edit');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Profilusaha_model->edit_profil_usaha();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Sukses Mengedit Profil Usaha
            </div>');
            redirect('profilusaha/index');
        }
    }
}
