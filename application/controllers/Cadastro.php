<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends MY_Controller {

	public function index()
	{
		$this->load->view('cadastro');
	}
}
