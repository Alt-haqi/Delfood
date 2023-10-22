
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profilusaha_model extends CI_Model
{
    public function getProfilUsaha()
    {
        $query = $this->db->query("SELECT * FROM profil_usaha");
        return $query->result_array();
    }

    public function edit_profil_usaha()
    {
        $data = [
            'nama_usaha' => htmlspecialchars($this->input->post('nama_usaha', true)),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'nomor_telepon' => htmlspecialchars($this->input->post('nomor_telepon', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'instagram' => htmlspecialchars($this->input->post('instagram', true)),
            'facebook' => htmlspecialchars($this->input->post('facebook', true)),
            'maps_link' => $this->input->post('maps_link')
        ];

        $this->db->update('profil_usaha', $data);
    }
}
