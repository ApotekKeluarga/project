<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_obat extends CI_Controller {

	public function index()
	{
		$this->load->view('Dataobat/Kategori');
	}
}
