<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function index()
    {
        $this->load->view('routing/hal_home');
    }

    public function hal_tambah()
    {
        $this->load->view('routing/hal_tambah');
    }

    public function hal_login()
    {
        $this->load->view('routing/hal_login');
    }

    public function getDataParameter($nama)
    {
        echo "Nilai Parameter : " . $nama;
    }

    public function getDoubleParameter($nama, $jurusan)
    {
        echo "Nilai Parameter : " . $nama;
        echo "<br>Nilai Jurusan : " . $jurusan;
    }

    public function detailBerita($slug_url)
    {
        $this->load->view('routing/hal_detail', ["data" => $slug_url]);
    }
}

/* End of file Produk.php */