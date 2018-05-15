<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tips extends CI_Controller {

	public function index()
	{
		$this->load->view('Tips_kesehatan/Tips');
	}
}
