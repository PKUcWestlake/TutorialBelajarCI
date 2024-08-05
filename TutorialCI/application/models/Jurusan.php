<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Model
{

    public function getDataJurusan()
    {
        $query = $this->db->get('tb_jurusan');
        return $query->result();
    }

    public function getDataMahasiswa()
    {
        $this->db->select('nim, nama_mhs, kelas, jur.nama_jurusan as id_jurusan');
        $this->db->from('tb_mahasiswa as mhs');
        $this->db->join('tb_jurusan as jur', 'jur.id_jurusan = mhs.id_jurusan', 'INNER');
        $this->db->order_by('nim', 'asc');

        $query = $this->db->get();
        return $query->result();
    }

    public function getDetailMahasiswa($nim)
    {
        $this->db->select('mhs.*, jur.nama_jurusan');
        $this->db->from('tb_mahasiswa as mhs');
        $this->db->join('tb_jurusan as jur', 'jur.id_jurusan = mhs.id_jurusan', 'INNER');
        $this->db->where('nim', $nim);

        $query = $this->db->get();
        return $query->row();
    }

    public function updateDataMahasiswa($nim, $data)
    {
        $this->db->where('nim', $nim);
        $this->db->update('tb_mahasiswa', $data);
    }

    public function deleteDataMahasiswa($nim)
    {
        $this->db->where('nim', $nim);
        $this->db->delete('tb_mahasiswa');
    }

    public function addDataMahasiswa($data)
    {
        $this->db->insert('tb_mahasiswa', $data);
    }
}

/* End of file Jurusan.php */