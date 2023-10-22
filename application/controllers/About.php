<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
	public function getProfilUsaha()
	{
		$getProfil = $this->db->query("SELECT * FROM profil_usaha");
		foreach ($getProfil->result_array() as $profil) {
			$arr['nama_usaha'] = $profil['nama_usaha'];
			$arr['deskripsi'] = $profil['deskripsi'];
		}
		return $arr;
	}
	public function index()
	{
		$profil = $this->getProfilUsaha();
		$data['nama_usaha'] = $profil['nama_usaha'];
		$data['deskripsi'] = $profil['deskripsi'];

		$this->load->view('delfood/templates/header', $data);
		$this->load->view('delfood/about', $data);
		$this->load->view('delfood/templates/footer');
	}
}