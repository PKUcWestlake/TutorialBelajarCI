<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jurusan');
    }

    public function index()
    {
        $result = $this->Jurusan->getDataJurusan();
        $DATA = array(
            'jurusan' => $result,
        );

        $this->load->view('website/hal_home', $DATA);
    }

    public function hal_mahasiswa()
    {
        $result = $this->Jurusan->getDataMahasiswa();
        $DATA = array(
            'mahasiswa' => $result,
        );

        $this->load->view('website/hal_mahasiswa', $DATA);
    }

    public function detail_mahasiswa($nim)
    {
        $result = $this->Jurusan->getDetailMahasiswa($nim);
        $DATA = array(
            'mahasiswa' => $result,
        );

        $this->load->view('website/hal_detail', $DATA);
    }

    public function aksi_website()
    {
        $result = $this->Jurusan->getDataMahasiswa();
        $DATA = array(
            'mahasiswa' => $result,
        );

        $this->load->view('website/hal_aksi', $DATA);
    }

    public function ProsesAksi()
    {
        $nim_mhs = $this->input->post('nim_mhs');
        $aksi = $this->input->post('aksi');

        if ($aksi == 'update') {
            $mhs = $this->Jurusan->getDetailMahasiswa($nim_mhs);
            $jur = $this->Jurusan->getDataJurusan();

            $DATA = array(
                'mhs' => $mhs,
                'jur' => $jur
            );

            $this->load->view('website/hal_update', $DATA);
        } else {
            $this->Jurusan->deleteDataMahasiswa($nim_mhs);
            redirect(base_url('Home/hal_mahasiswa'), 'refresh');
        }
    }

    public function update()
    {
        $nim = $this->input->post('nim');
        $nama_mhs = $this->input->post('nama_mhs');
        $id_jurusan = $this->input->post('id_jurusan');
        $kelas = $this->input->post('kelas');
        $no_telp = $this->input->post('no_telp');
        $alamat = $this->input->post('alamat');

        $dataUpdate = array(
            'nama_mhs' => $nama_mhs,
            'id_jurusan' => $id_jurusan,
            'kelas' => $kelas,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
        );

        $this->Jurusan->updateDataMahasiswa($nim, $dataUpdate);
        redirect(base_url('Home/hal_mahasiswa'), 'refresh');
    }

    public function hal_tambah()
    {
        $jur = $this->Jurusan->getDataJurusan();
        $DATA = array(
            'jur' => $jur,
        );
        $this->load->view('website/hal_tambah', $DATA);
    }

    public function tambah()
    {
        $nim = $this->input->post('nim');
        $nama_mhs = $this->input->post('nama_mhs');
        $id_jurusan = $this->input->post('id_jurusan');
        $kelas = $this->input->post('kelas');
        $no_telp = $this->input->post('no_telp');
        $alamat = $this->input->post('alamat');

        $dataInsert = array(
            'nim' => $nim,
            'nama_mhs' => $nama_mhs,
            'id_jurusan' => $id_jurusan,
            'kelas' => $kelas,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
        );

        $this->Jurusan->addDataMahasiswa($dataInsert);
        redirect(base_url('Home/hal_mahasiswa'), 'refresh');
    }
}

/* End of file Home.php */