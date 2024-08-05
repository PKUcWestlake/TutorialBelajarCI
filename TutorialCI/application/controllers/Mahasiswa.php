<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthenticationFromGoogle', "google");
    }

    public function index()
    {
        $data = $this->google->getDataJurusan("Blog Belajar", "Teknik Komputer");
        echo "<br> Nama : " . $data["nama"];
        echo "<br> Jurusa : " . $data["jurusan"];
    }
}

/* End of file Mahasiswa.php */