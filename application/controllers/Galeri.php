<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Galeri_model');
    }

    public function getProfilUsaha()
    {
        $getProfil = $this->db->query("SELECT * FROM profil_usaha");
        foreach ($getProfil->result_array() as $profil) {
            $arr['nama_usaha'] = $profil['nama_usaha'];
        }
        return $arr;
    }

    public function index()
    {
        $profil = $this->getProfilUsaha();
        $data['nama_usaha'] = $profil['nama_usaha'];
		$x['data']=$this->Galeri_model->get_all_galeri();

        $this->load->view('delfood/templates/header', $data);
        $this->load->view('delfood/galleri', $x);
        $this->load->view('delfood/templates/footer');
    }
}