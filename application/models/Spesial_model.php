<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Spesial_model extends CI_Model
{

    public function getAllGambar()
    {
        $query = $this->db->query("SELECT * FROM spesial");
        return $query->result_array();
    }

    public function tambah_gambar()
    {
        $file_name = $_FILES['gambar']['name'];
        $newfile_name = str_replace(' ', '', $file_name);
        $config['upload_path'] = './assets/dataresto/menu/';
        $config['allowed_types'] = 'png';
        $newName = date('dmYHis') . $newfile_name;
        $config['file_name'] = $newName;
        $config['max_size'] = 5100;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('gambar')) {
            $this->upload->data('file_name');
            $data = [
                "id_spesial" => $this->input->post('id_spesial'),
                "gambar" => $newName,
            ];
            $this->db->insert('gambar', $data);
            return "True";
        } else {
            $error = array('error' => $this->upload->display_errors());
            return $this->session->set_flashdata('error', $error['error']);
        }
    }

    public function hapus_gambar($id_spesial)
    {
        $pathGambarMenu = "assets/dataresto/menu/";
        $getDataGambar = $this->db->query("SELECT * FROM spesial WHERE id_spesial = $id_spesial");
        foreach ($getDataGambar->result_array() as $gambar) {
            $spesial = $gambar['gambar'];
        }

        unlink($pathGambarMenu . $spesial);

        $this->db->where('id_spesial', $id_spesial);
        $this->db->delete('gambar');
    }
}