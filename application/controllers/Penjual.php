<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjual extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
    }

    // HALAMAN AWAL
    public function index()
    {
        // if (!$this->session->userdata('login')) {
        //     redirect('penjual/login');
        //     return;
        // }

        // if (!$this->session->userdata('data_dagangan')) {
        //     redirect('penjual/data_dagangan');
        //     return;
        // }

        redirect('penjual/dashboard');
    }

    // LOGIN
    public function login()
    {
        if ($this->input->method() === 'post') {
            
            // Nangkep inputan (bisa email atau no wa)
            $identity = $this->input->post('identity', TRUE);
            $password = $this->input->post('password');

            // Cari user dari email kalo g no wa
            $this->db->group_start();
            $this->db->where('email', $identity);
            $this->db->or_where('phone', $identity);
            $this->db->group_end();
            $user = $this->db->get('users')->row();

            // Verifikasi password
            if ($user && password_verify($password, $user->password)) {
                
                $this->session->set_userdata([
                    'id_user'    => $user->id,
                    'first_name' => $user->first_name,
                    'email'      => $user->email,
                    'phone'      => $user->phone,
                    'login'      => TRUE
                ]);
                
                redirect('penjual/dashboard');
                
            } else {
                $data['error'] = 'Email/No WA atau Password Anda salah!';
                $this->load->view('penjual/login', $data);
                return;
            }
        }

        $this->load->view('penjual/login');
    }

    public function register()
    {
        $this->load->view('penjual/register');
    }

    // REGISTER
    public function proses_register()
    {
        if ($this->input->method() === 'post') {
            
            $this->form_validation->set_rules('first_name', 'Nama Penjual', 'required');
            $this->form_validation->set_rules('store_name', 'Nama Toko', 'required');
            $this->form_validation->set_rules('phone', 'Nomor HP', 'required|is_unique[users.phone]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('penjual/register');
            } else {
                
                $data = array(
                    'first_name' => $this->input->post('first_name', TRUE),
                    'store_name' => $this->input->post('store_name', TRUE),
                    'phone'      => $this->input->post('phone', TRUE),
                    'email'      => $this->input->post('email', TRUE),
                    'password'   => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    
                    'ip_address' => $this->input->ip_address(), 
                    'created_on' => time(), 
                    'active'     => 1 
                );

                $this->db->insert('users', $data);

                redirect('penjual/login');
            }
        } else {
            redirect('penjual/register');
        }
    }

    // DATA DAGANGAN
    public function data_dagangan()
    {
        // if (!$this->session->userdata('login')) {
        //     redirect('penjual/login');
        //     return;
        // }

        // if ($this->session->userdata('data_dagangan')) {
        //     redirect('penjual/dashboard');
        //     return;
        // }

        // if ($this->input->method() === 'post') {

        //     $data_dagangan = array(
        //         'nama_usaha' => $this->input->post('nama_usaha', TRUE),
        //         'jenis_dagangan' => $this->input->post('jenis_dagangan', TRUE),
        //         'deskripsi' => $this->input->post('deskripsi', TRUE)
        //     );

        //     if (empty($data_dagangan['nama_usaha']) ||
        //         empty($data_dagangan['jenis_dagangan'])) {

        //         $this->session->set_flashdata('error', 'Nama usaha dan jenis dagangan wajib diisi.');
        //         redirect('penjual/data_dagangan');
        //         return;
        //     }

        //     $this->session->set_userdata('data_dagangan', $data_dagangan);
        //     $this->session->set_userdata('status_jualan', 0);
        //     $this->session->set_userdata('menu_penjual', array());

        //     redirect('penjual/dashboard');
        //     return;
        // }

        // $data['title'] = 'Data Dagangan';

        $this->load->view('templates/header');
        $this->load->view('penjual/data_dagangan');
        $this->load->view('templates/footer');
    }

    // DASHBOARD
    public function dashboard()
    {
        // if (!$this->session->userdata('login')) {
        //     redirect('penjual/login');
        //     return;
        // }

        // if (!$this->session->userdata('data_dagangan')) {
        //     redirect('penjual/data_dagangan');
        //     return;
        // }

        // $data['title'] = 'Dashboard Penjual';
        // $data['dagangan'] = $this->session->userdata('data_dagangan');
        // $data['menu'] = $this->session->userdata('menu_penjual') ?: array();
        // $data['status'] = $this->session->userdata('status_jualan');

        $this->load->view('templates/header');
        $this->load->view('penjual/index');
        $this->load->view('templates/footer');
    }

    // HALAMAN MENU DAGANGAN
    public function menu_dagangan()
    {
        // if (!$this->session->userdata('login')) {
        //     redirect('penjual/login');
        //     return;
        // }

        // if (!$this->session->userdata('data_dagangan')) {
        //     redirect('penjual/data_dagangan');
        //     return;
        // }

        // $data['title'] = 'Menu Dagangan';
        // $data['dagangan'] = $this->session->userdata('data_dagangan');
        // $data['menu'] = $this->session->userdata('menu_penjual') ?: array();

        $this->load->view('templates/header');
        $this->load->view('penjual/menu_dagangan');
        $this->load->view('templates/footer');
    }

    // TAMBAH MENU
    public function tambah_menu()
    {
        // if (!$this->session->userdata('login')) {
        //     redirect('penjual/login');
        //     return;
        // }

        // if ($this->input->method() !== 'post') {
        //     redirect('penjual/menu_dagangan');
        //     return;
        // }

        // $menu = $this->session->userdata('menu_penjual') ?: array();

        // $nama_menu = $this->input->post('nama_menu', TRUE);
        // $kategori = $this->input->post('kategori', TRUE);
        // $deskripsi = $this->input->post('deskripsi', TRUE);

        // if (empty($nama_menu)) {
        //     $this->session->set_flashdata('error', 'Nama menu wajib diisi.');
        //     redirect('penjual/menu_dagangan');
        //     return;
        // }

        // $menu[] = array(
        //     'nama_menu' => $nama_menu,
        //     'kategori' => $kategori,
        //     'deskripsi' => $deskripsi
        // );

        // $this->session->set_userdata('menu_penjual', $menu);

        redirect('penjual/menu_dagangan');
    }

    // HAPUS MENU
    public function hapus_menu($id = NULL)
    {
        // if (!$this->session->userdata('login')) {
        //     redirect('penjual/login');
        //     return;
        // }

        // if ($id === NULL || !ctype_digit((string) $id)) {
        //     redirect('penjual/menu_dagangan');
        //     return;
        // }

        // $menu = $this->session->userdata('menu_penjual') ?: array();

        // if (isset($menu[$id])) {
        //     unset($menu[$id]);
        // }

        // $this->session->set_userdata('menu_penjual', array_values($menu));

        redirect('penjual/menu_dagangan');
    }

    // UBAH STATUS JUALAN
    public function ubah_status()
    {
        // if (!$this->session->userdata('login')) {
        //     redirect('penjual/login');
        //     return;
        // }

        // if ($this->input->method() !== 'post') {
        //     redirect('penjual/dashboard');
        //     return;
        // }

        // $status = $this->session->userdata('status_jualan');

        // $this->session->set_userdata(
        //     'status_jualan',
        //     $status ? 0 : 1
        // );

        redirect('penjual/dashboard');
    }

    // LOGOUT
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('penjual/login');
    }
}