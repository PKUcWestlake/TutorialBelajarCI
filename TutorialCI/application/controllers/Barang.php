<?php

class Barang extends CI_Controller
{
    public function index()
    {
        $this->load->view('hal_view1');
    }

    public function hal_kedua()
    {
        $this->load->view('tampilan/header');
        $this->load->view('tampilan/footer');
    }

    public function hal_ketiga()
    {
        $data['judul'] = "Halaman Ivan Official";
        $data['nama'] = "Blog Belajar Official";

        $this->load->view('hal_view3', $data);
    }

    public function hal_keempat()
    {
        $data['jurusan'] = array(
            "Teknik Informatika",
            "Sistem Informasi",
            "Teknik Komputer dan Jaringan"
        );

        $this->load->view('hal_keempat', $data);
    }
}