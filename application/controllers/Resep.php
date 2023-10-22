<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resep extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Resep_model');
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

        //Pagination
        $this->load->library('pagination');

        $config['base_url'] = site_url('/resep');
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Resep_model->countAllMakanan();
        $config['per_page'] = 8;

        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center"><li class="page-item disabled">';
        $config['full_tag_close'] = '</li></ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = '&#187';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&#171';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize
        $this->pagination->initialize($config);

        $limit = $config['per_page'];
        $offset = html_escape($this->input->get('per_page'));

        $data['menu'] = $this->Resep_model->getMakanan($limit, $offset);

        $this->load->view('delfood/templates/header', $data);
        $this->load->view('delfood/Katalog_resep/resep', $data);
        $this->load->view('delfood/templates/footer');
    }

    public function detail($id)
    {
        $profil = $this->getProfilUsaha();
        $data['nama_usaha'] = $profil['nama_usaha'];
        $data['menu'] = $this->Resep_model->getMakananById($id);
        $data['gambar_menu'] = $this->Resep_model->getGambarById($id);

        $this->load->view('delfood/templates/header', $data);
        $this->load->view('delfood/Katalog_resep/detail', $data);
        $this->load->view('delfood/templates/footer');
    }

}