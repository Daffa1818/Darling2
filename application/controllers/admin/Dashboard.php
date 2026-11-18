<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    #[Override]
    public function __construct()
    {
        parent::__construct();

        if (!$this->ion_auth->is_admin()) 
        {
            redirect('pembeli/index', 'refresh');
        }

        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'countPedagang' => $this->Admin_model->countPedagang(),
            'countActivePedagang' => $this->Admin_model->countActivePedagang(),
            'countAll' => $this->Admin_model->countAll(),
            'locationPedagang' => $this->Admin_model->getLocationActive()
        );

        $this->load->view('templates/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function locationActive()
    {
        if (!$this->input->is_ajax_request()) {
            exit();
        }

        try {
            $penjual_list = $this->Admin_model->getLocationActive();


            $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode([
                    'status' => 'success',
                    'data' => $penjual_list
                ]));
        } catch (Exception $e) {
            $this->output
                ->set_status_header(400)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode([
                    'status' => 'success',
                    'message' => 'terjadi kesalahan' . $e->getMessage()
                ]));
        }
    }
}
