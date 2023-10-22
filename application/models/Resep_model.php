<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Resep_model extends CI_Model
{

    public function getAllMakanan()
    {
        $query = $this->db->query("SELECT * FROM menu");
        return $query->result_array();
    }

    public function getMakanan($limit = null, $offset = null)
    {
        if (!$limit && $offset) {
            $query = $this->db->get('menu');
        } else {
            $query = $this->db->get('menu', $limit, $offset);
        }
        return $query->result_array();
    }

    public function countAllMakanan()
    {
        $query = $this->db->get('menu');
        return $query->num_rows();
    }

    public function getMakananById($id)
    {
        $query = $this->db->query("SELECT * FROM menu where id_menu = $id");
        return $query->result_array();
    }

    public function getMakananByTipe($kategori)
    {
        $query = $this->db->query("SELECT * FROM menu where kategori = $kategori");
        return $query->result_array();
    }

    public function getGambarById($id_menu)
    {
        $query = $this->db->query("SELECT * FROM gambar_menu gm join menu m on gm.id_menu=m.id_menu WHERE m.id_menu = $id_menu");
        return $query->result_array();
    }
}