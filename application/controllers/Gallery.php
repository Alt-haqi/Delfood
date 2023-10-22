<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('id_pegawai'))) {
            redirect('auth/loginPegawai', 'refresh');
        }
        $this->load->model('Galeri_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard Pegawai';
        $x['data'] = $this->Galeri_model->get_all_galeri();
        $x['alb'] = $this->Galeri_model->get_all_album();

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/side');
        $this->load->view('admin/layout/side-header');
        $this->load->view('admin/galeri', $x);
        $this->load->view('admin/layout/footer');
    }

    function simpan_galeri()
    {
        $config['upload_path'] = './assets/dataresto/images'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/dataresto/images' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '60%';
                $config['width'] = 500;
                $config['height'] = 400;
                $config['new_image'] = './assets/dataresto/images' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar = $gbr['file_name'];
                $judul = strip_tags($this->input->post('xjudul'));
                $album = strip_tags($this->input->post('xalbum'));
                $kode = $this->session->userdata('idadmin');
                $this->Galeri_model->simpan_galeri($judul, $album, $gambar);
                echo $this->session->set_flashdata('msg', 'success');
                redirect('gallery');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('gallery');
            }

        } else {
            redirect('gallery');
        }

    }

    function update_galeri()
    {

        $config['upload_path'] = './assets/dataresto/images'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/dataresto/images' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '60%';
                $config['width'] = 500;
                $config['height'] = 400;
                $config['new_image'] = './assets/dataresto/images' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar = $gbr['file_name'];
                $galeri_id = $this->input->post('kode');
                $judul = strip_tags($this->input->post('xjudul'));
                $album = strip_tags($this->input->post('xalbum'));
                $images = $this->input->post('gambar');
                $path = './assets/dataresto/images' . $images;
                unlink($path);
                $kode = $this->session->userdata('idadmin');
                $this->Galeri_model->update_galeri($galeri_id, $judul, $album, $gambar);
                echo $this->session->set_flashdata('msg', 'info');
                redirect('gallery');

            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('gallery');
            }

        } else {
            $galeri_id = $this->input->post('kode');
            $judul = strip_tags($this->input->post('xjudul'));
            $album = strip_tags($this->input->post('xalbum'));
            $kode = $this->session->userdata('idadmin');
            $this->Galeri_model->update_galeri_tanpa_img($galeri_id, $judul, $album);
            echo $this->session->set_flashdata('msg', 'info');
            redirect('gallery');
        }

    }

    function hapus_galeri()
    {
        $kode = $this->input->post('kode');
        $album = $this->input->post('album');
        $gambar = $this->input->post('gambar');
        $path = './assets/dataresto/images/' . $gambar;
        unlink($path);
        $this->Galeri_model->hapus_galeri($kode, $album);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('gallery');
    }

}