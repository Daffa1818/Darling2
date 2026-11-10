<?php 
class Admin extends CI_Controller{
	#[Override]
	public function __construct()
	{
		return parent::__construct();
	}

	public function index()
	{
		$data = array(
			'title' => 'Dashboard'
		);

		$this->load->view('templates/header', $data);
		$this->load->view('admin/index.php', $data);
		$this->load->view('templates/footer', $data);
	}
}
