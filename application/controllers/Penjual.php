<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjual extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper(array('url', 'form'));
        $this->load->database();
        $this->load->model('Penjual_model');
    }

    // HALAMAN AWAL
    public function index()
    {
        // if (!$this->session->userdata('login')) {
        //     redirect('penjual/login');
        //     return;
        // }

        redirect('penjual/dashboard');
    }

    
// LOGIN
public function login()
{
    // Jika sudah login
    if ($this->session->userdata('login')) {
        redirect('penjual/dashboard');
        return;
    }

    // Proses ketika form dikirim
    if ($this->input->method() === 'post') {

        $email = $this->input->post('email', TRUE);
        $password = $this->input->post('password');

        // Cari akun berdasarkan email
        $user = $this->db
            ->get_where('users', array('email' => $email))
            ->row();

        // Periksa email dan password
        if (!$user || !password_verify($password, $user->password)) {

            $this->session->set_flashdata(
                'error',
                'Email atau password salah!'
            );

            redirect('penjual/login');
            return;
        }

        // Buat session baru
        $this->session->sess_regenerate(TRUE);

        // Simpan identitas pengguna
        $this->session->set_userdata(array(
            'id_user'  => (int) $user->id,
            'username' => $user->username,
            'email'    => $user->email,
            'login'    => TRUE
        ));

        // Masuk dashboard
        redirect('penjual/dashboard');
        return;
    }

    // Tampilkan halaman login
    $this->load->view('penjual/login');
}


    // REGISTER
    public function register()
    {
        if ($this->session->userdata('login')) {
            redirect('penjual/dashboard');
            return;
        }

        // Tampilan registrasi
        $this->load->view('penjual/register');
    }

    // DATA DAGANGAN
    public function data_dagangan()
    {
        // if (!$this->session->userdata('login')) {
        //     redirect('penjual/login');
        //     return;
        // }

        $this->load->view('templates/header');
        $this->load->view('penjual/data_dagangan');
        $this->load->view('templates/footer');
    }

    // DASHBOARD
    public function dashboard()
{
    // ID 1 hanya untuk uji coba
    $id_user = 1;

    $penjual = $this->Penjual_model->get_status_jualan($id_user);

    $data['status_jualan'] = $penjual
        ? (int) $penjual->active_selling
        : 0;

    $data['title'] = 'Dashboard Penjual';

    $this->load->view('templates/header', $data);
    $this->load->view('penjual/index', $data);
    $this->load->view('templates/footer');
}
//     $id_user = $this->session->userdata('id_user');

//     $penjual = $this->Penjual_model
//                     ->get_status_jualan($id_user);

//     $data['status_jualan'] = $penjual
//         ? (int) $penjual->active_selling
//         : 0;

//     // Judul halaman
//     $data['title'] = 'Dashboard Penjual';

//     $this->load->view('templates/header', $data);
//     $this->load->view('penjual/index', $data);
//     $this->load->view('templates/footer');
// 
    // TAMBAH MENU
    public function tambah_menu()
    {
        // if (!$this->session->userdata('login')) {
        //     redirect('penjual/login');
        //     return;
        // }

        if ($this->input->method() !== 'post') {
            redirect('penjual/menu_dagangan');
            return;
        }

        // Fitur tambah menu belum dihubungkan ke database.
        redirect('penjual/menu_dagangan');
    }

    // HAPUS MENU
    public function hapus_menu($id = NULL)
    {
        // if (!$this->session->userdata('login')) {
        //     redirect('penjual/login');
        //     return;
        // }

        // Fitur hapus menu belum dihubungkan ke database.
        redirect('penjual/menu_dagangan');
    }

    // UBAH STATUS JUALAN

 public function ubah_status()
{
    // ID 1 untuk uji coba tanpa login
    $id_user = 1;

    // Ambil status dari database
    $penjual = $this->Penjual_model->get_status_jualan($id_user);

    if (!$penjual) {
        redirect('penjual/dashboard');
        return;
    }

    // Tentukan status baru
    $status_baru = ((int) $penjual->active_selling === 1) ? 0 : 1;

    // Update database
    $this->Penjual_model->ubah_status_jualan($id_user, $status_baru);

    redirect('penjual/dashboard');
}
//     public function ubah_status()
// {
//     if ($this->input->method() !== 'post') {
//         redirect('penjual/dashboard  ');
//         return;
//     }

//     $id_user = $this->ion_auth->get_user_id();

//     $penjual = $this->Penjual_model
//                     ->get_status_jualan($id_user);

//     if (!$penjual) {
//         $this->session->set_flashdata(
//             'error',
//             'Data pengguna tidak ditemukan.'
//         );

//         redirect('penjual/dashboard');
//         return;
//     }

//     $status_baru = ((int) $penjual->active_selling === 1) ? 0 : 1;

//     $berhasil = $this->Penjual_model
//                      ->ubah_status_jualan($id_user, $status_baru);

//     $this->session->set_flashdata(
//         $berhasil ? 'success' : 'error',
//         $berhasil
//             ? 'Status jualan berhasil diperbarui.'
//             : 'Gagal memperbarui status jualan.'
//     );

//     redirect('penjual/dashboard');
// }
    // LOGOUT
    public function logout()
    {
        $this->session->sess_destroy();

        // redirect('penjual/login');
    }
}
