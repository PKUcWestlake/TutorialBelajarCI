<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AuthenticationFromGoogle extends CI_Model
{

    public function getDataJurusan($nm, $jur)
    {
        $dataArr = array(
            "nama" => $nm,
            "jurusan" => $jur
        );
        return $dataArr;
    }
}

/* End of file AuthenticationFromGoogle.php */