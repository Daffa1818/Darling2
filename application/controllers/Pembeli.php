<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembeli extends CI_Controller
{

    #[Override]
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Pembeli_model');

        if (!$this->ion_auth->logged_in()) {
            if (strtolower((string) $this->router->fetch_method()) === 'synclocation') {
                $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(401)
                    ->set_output(json_encode([
                        'status' => 'error',
                        'message' => 'Silakan login terlebih dahulu'
                    ]));
                exit;
            }

            redirect('auth/login', 'refresh');
        }
    }

        public function index()
        {
            $data['penjual'] = $this->Pembeli_model->getPenjualAktif();
            $this->load->view('pembeli/index', $data);
        }

    // public function login()
    // {
    //     $this->form_validation->set_rules('email', 'email', 'required');
    //     $this->form_validation->set_rules('password', 'password', 'required');

    //     if ($this->form_validation->run() === FALSE)
    //         {
    //             $this->load->view('pembeli/login');
    //         }
    //     else 
    //         {   
    //             $data = [
    //                 'email' => $this->input->post('email', TRUE),
    //                 'password' => $this->input->post('password', TRUE),
    //             ];

    //             $user = $this->Pembeli_model->login($data['email']);

    //             if ($user === null)
    //                 {
    //                     $this->session->set_flashdata('failed', 'data tidak ditemukan');

    //                     redirect('Pembeli/login');
    //                 }

    //             if (password_verify($data['password'], $user->password))
    //                 {
    //                     $data_session = array(
    //                         'id' => $user->id,
    //                         'logged_in' => TRUE
    //                     );

    //                     $this->session->set_userdata($data_session);

    //                     $this->session->set_flashdata('success', 'Berhasil login');

    //                     redirect('Pembeli/index');
    //                 }
    //             else
    //                 {
    //                     $this->session->set_flashdata('failed', 'Password yang anda masukkan salah');

    //                     redirect('Pembeli/login');
    //                 }
    //         }

    // }

    public function register()
    {
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('no_hp', 'nomor hp', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('Pembeli/register');
        } else {
            $hashPassword = password_hash($this->input->post('password', TRUE), PASSWORD_DEFAULT);

            $data = [
                "name" => $this->input->post('name', TRUE),
                "email" => $this->input->post('email', TRUE),
                "no_hp" => $this->input->post('no_hp', TRUE),
                "password" => $hashPassword,
            ];

            $this->Pembeli_model->register($data);

            $user = $this->Pembeli_model->login($data['name']);

            $data_session = array(
                'id' => $user->id,
                'logged_in' => TRUE
            );

            $this->session->set_userdata($data_session);

            $this->session->set_flashdata('success', 'Berhasil membuat akun');

            redirect('Pembeli/index');
        }
    }

    public function syncLocation()
    {
        if ($this->input->method(TRUE) !== 'POST') {
            $this->jsonResponse(405, [
                'status' => 'error',
                'message' => 'Metode request tidak diizinkan'
            ]);
            return;
        }

        $id_user = $this->ion_auth->get_user_id();
        if (!is_numeric($id_user) || (int) $id_user <= 0) {
            $this->jsonResponse(401, [
                'status' => 'error',
                'message' => 'Silakan login terlebih dahulu'
            ]);
            return;
        }

        $latitude = filter_var($this->input->post('latitude'), FILTER_VALIDATE_FLOAT);
        $longitude = filter_var($this->input->post('longitude'), FILTER_VALIDATE_FLOAT);

        if (
            $latitude === FALSE || $longitude === FALSE
            || $latitude < -90 || $latitude > 90
            || $longitude < -180 || $longitude > 180
        ) {
            $this->jsonResponse(400, [
                'status' => 'error',
                'message' => 'Koordinat latitude atau longitude tidak valid'
            ]);
            return;
        }

        if (!$this->Pembeli_model->updateLocation((int) $id_user, $latitude, $longitude)) {
            $this->jsonResponse(500, [
                'status' => 'error',
                'message' => 'Lokasi gagal disimpan'
            ]);
            return;
        }

        $this->jsonResponse(200, [
            'status' => 'success',
            'message' => 'Lokasi berhasil diperbarui'
        ]);
    }

    private function jsonResponse($statusCode, $data)
    {
        $this->output
            ->set_content_type('application/json')
            ->set_status_header($statusCode)
            ->set_output(json_encode($data));
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Pembeli/login');
    }
}
