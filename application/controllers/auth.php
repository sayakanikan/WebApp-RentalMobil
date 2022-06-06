<?php 
class Auth extends CI_Controller{
    public function login(){
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates_admin/header');
            $this->load->view('form_login');
            $this->load->view('templates_admin/footer');
        }else{
            $username   = $this->input->post('username');
            $password   = md5($this->input->post('password'));

            $cek = $this->model_rental->cek_login($username, $password);
            $cek_admin = $this->model_rental->cek_login_admin($username,$password);

            if($cek == FALSE && $cek_admin == FALSE){
                $this->session->set_flashdata('pesan7','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau password anda salah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('auth/login');
            }elseif($cek == TRUE){
                $this->session->set_userdata('username', $cek->username);
                $this->session->set_userdata('role_id', $cek->role_id);
                $this->session->set_userdata('nama', $cek->nama);

                switch ($cek->role_id){
                    case 1 :    redirect('admin/dashboard');
                                break;
                    case 2 :    redirect('customer/dashboard');
                                break;
                    
                    default:    break;
                }
            }else{
                $this->session->set_userdata('username', $cek_admin->username);
                $this->session->set_userdata('role_id', $cek_admin->role_id);
                $this->session->set_userdata('nama_admin', $cek_admin->nama_admin);

                switch ($cek_admin->role_id){
                    case 1 :    redirect('admin/dashboard');
                                break;
                    case 2 :    redirect('customer/dashboard');
                                break;
                    
                    default:    break;
                }
            }
        }
    }

    public function _rules(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('customer/dashboard');
    }

    public function ganti_password(){
        $this->load->view('templates_admin/header');
        $this->load->view('ganti_password');
        $this->load->view('templates_admin/footer');
    }

    public function ganti_password_aksi(){
        $pass_baru      = $this->input->post('pass_baru');
        $ulang_pass    = $this->input->post('ulang_pass');

        $this->form_validation->set_rules('pass_baru', 'Password Baru', 'required|matches[ulang_pass]');
        $this->form_validation->set_rules('ulang_pass', 'Ulangi Password', 'required');

        if($this->form_validation->run() == FALSE){
            $this->ganti_password();
        }else{
            $data    = array('password' =>md5($pass_baru));
            $where   = array('username' =>$this->session->userdata('username'));

            $this->model_rental->update_password($where, $data, 'tb_customer');
            $this->session->set_flashdata('pesan7','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Password berhasil diganti! Silahkan Login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('auth/login');
        }
    }
}
?>