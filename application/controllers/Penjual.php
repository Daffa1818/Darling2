<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjual extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

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
        // if ($this->session->userdata('login')) {
        //     redirect('penjual');
        //     return;
        // }

        // if ($this->input->method() === 'post') {

        //     $email = $this->input->post('email', TRUE);
        //     $password = $this->input->post('password');

        //     $user = $this->db
        //         ->get_where('user', array('email' => $email))
        //         ->row();

        //     if (!$user || !password_verify($password, $user->password)) {
        //         $this->session->set_flashdata(
        //             'error',
        //             'Email atau password salah!'
        //         );
        //         redirect('penjual/login');
        //         return;
        //     }

        //     if ($user->role !== 'penjual') {
        //         $this->session->set_flashdata(
        //             'error',
        //             'Akun ini bukan akun penjual.'
        //         );
        //         redirect('penjual/login');
        //         return;
        //     }

        //     $this->session->sess_regenerate(TRUE);

        //     $this->session->set_userdata(array(
        //         'id_user' => $user->id_user,
        //         'nama' => $user->nama,
        //         'email' => $user->email,
        //         'role' => $user->role,
        //         'login' => TRUE
        //     ));

        //     redirect('penjual');
        //     return;
        // }

        $this->load->view('penjual/login');

        if ($this->input->method() === 'post') {

            $email = $this->input->post('email', TRUE);
            $password = $this->input->post('password');

            redirect('penjual/dashboard');
        }
    }

    // REGISTER
    public function register()
    {
        // if ($this->session->userdata('login')) {
        //     redirect('penjual');
        //     return;
        // }

        // if ($this->input->method() === 'post') {

        //     $nama = $this->input->post('nama', TRUE);
        //     $email = $this->input->post('email', TRUE);
        //     $password = $this->input->post('password');

        //     if (empty($nama) || empty($email) || empty($password)) {
        //         $this->session->set_flashdata('error', 'Semua kolom wajib diisi.');
        //         redirect('penjual/register');
        //         return;
        //     }

        //     $cek = $this->db
        //         ->get_where('user', array('email' => $email))
        //         ->row();

        //     if ($cek) {
        //         $this->session->set_flashdata('error', 'Email sudah terdaftar!');
        //         redirect('penjual/register');
        //         return;
        //     }

        //     $this->db->insert('user', array(
        //         'nama' => $nama,
        //         'email' => $email,
        //         'password' => password_hash($password, PASSWORD_DEFAULT),
        //         'role' => 'penjual'
        //     ));

        //     if ($this->db->affected_rows() > 0) {
        //         $this->session->set_flashdata('success', 'Registrasi berhasil. Silakan login.');
        //         redirect('penjual/login');
        //         return;
        //     }

        //     $this->session->set_flashdata('error', 'Registrasi gagal.');
        //     redirect('penjual/register');
        //     return;
        // }

        $this->load->view('penjual/register');

        if ($this->input->method() === 'post') {

            $email = $this->input->post('email', TRUE);
            $password = $this->input->post('password');

            redirect('penjual/dashboard');
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