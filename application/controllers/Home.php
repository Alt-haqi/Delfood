<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Spesial_model');
	}

	public function getProfilUsaha()
	{
		$getProfil = $this->db->query("SELECT * FROM profil_usaha");
		foreach ($getProfil->result_array() as $profil) {
			$arr['deskripsi'] = $profil['deskripsi'];
			$arr['nama_usaha'] = $profil['nama_usaha'];
		}
		return $arr;
	}

	public function index()
	{
		$profil = $this->getProfilUsaha();
		$data['deskripsi'] = $profil['deskripsi'];
		$data['nama_usaha'] = $profil['nama_usaha'];
		$data['gambar'] = $this->Spesial_model->getAllGambar();

		$this->load->view('delfood/home/header', $data);
		$this->load->view('delfood/home/index', $data);
		$this->load->view('delfood/home/footer');
	}
}
