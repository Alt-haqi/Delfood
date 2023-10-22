<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{

    function get_all_kategori()
    {
        $hsl = $this->db->query("SELECT * FROM kategori");
        return $hsl;
    }
    function simpan_kategori($kategori)
    {
        $hsl = $this->db->query("INSERT INTO kategori(kategori_nama) VALUES('$kategori')");
        return $hsl;
    }
    function update_kategori($kode, $kategori)
    {
        $hsl = $this->db->query("UPDATE kategori SET kategori_nama='$kategori' WHERE kategori_id='$kode'");
        return $hsl;
    }
    function hapus_kategori($kode)
    {
        $hsl = $this->db->query("DELETE FROM kategori WHERE kategori_id='$kode'");
        return $hsl;
    }

    function get_kategori_byid($kategori_id)
    {
        $hsl = $this->db->query("SELECT * FROM kategori WHERE kategori_id='$kategori_id'");
        return $hsl;
    }

}