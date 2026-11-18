<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
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
			'title' => 'Kategori Jajanan',
			'allCategory' => $this->Admin_model->getAllCategory()
		);

		$this->form_validation->set_rules('type', 'Nama Kategori', 'required');
		$this->form_validation->set_rules('colour_marker', 'Warna Marker', 'required');

		if ($this->form_validation->run() === FALSE) {
			
			$this->load->view('templates/header', $data);
			$this->load->view('admin/kategori', $data);
			$this->load->view('templates/footer', $data);

		} else {

			$category = [
				'type' => $this->input->post('type', TRUE),
				'colour_marker' => $this->input->post('colour_marker', TRUE)
			];

			$this->Admin_model->createCategory($category);
			
			$this->load->view('templates/header', $data);
			$this->load->view('admin/kategori', $data);
			$this->load->view('templates/footer', $data);
		}
	}
}