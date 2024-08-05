<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function formInput()
	{
		$this->load->view('view_input');
	}

	public function ProsesBarang()
	{
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$stok = $this->input->post('stok');
		$harga = $this->input->post('harga');

		$data = array(
			'kode' => $kode,
			'nama' => $nama,
			'stok' => $stok,
			'harga' => $harga,
		);

		$this->load->view('print_output', $data);
	}
}