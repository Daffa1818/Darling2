<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembeli extends Admin_Controller
{
	#[Override]
	public function __construct()
	{
		parent::__construct();

		if (!$this->ion_auth->is_admin()) {
			redirect('pembeli/index', 'refresh');
		}

		$this->load->model('Admin_model');
	}

    public function index()
	{
        $data = array(
			'title' => 'Data Pembeli',
			'allUsers' => $this->Admin_model->getAllUsers()
		);

		$this->load->view('templates/header', $data);
		$this->load->view('admin/pembeli', $data);
		$this->load->view('templates/footer', $data);

	}
}