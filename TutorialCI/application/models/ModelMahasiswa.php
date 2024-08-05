<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ModelMahasiswa extends CI_Model
{

    public function getDataParm($nm, $jur)
    {
        $dataArr = array(
            "nama" => $nm,
            "jurusan" => $jur
        );
        return $dataArr;
    }

    public function getNamaMahasiswa()
    {
        return "Kecoak Sakti Official";
    }

    public function getJurusanMahasiswa()
    {
        return "Teknik Informatika";
    }

    public function getDataAll()
    {
        $dataArr = array(
            array(
                "nama" => "Blog Belajar",
                "nim" => "1455301036",
                "jurusan" => "Teknik Informatika",
                "kelas" => "2 TI A"
            ),
            array(
                "nama" => "Kecoak Sakti Official",
                "nim" => "1455301037",
                "jurusan" => "Teknik Komputer",
                "kelas" => "2 TI A"
            )
        );



        return $dataArr;
    }
}

/* End of fils ModelMahasiswa.php */