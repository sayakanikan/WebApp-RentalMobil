<?php 
class Register extends CI_Controller{
    public function index(){
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates_admin/header');
            $this->load->view('form_register');
            $this->load->view('templates_admin/footer');
        }else{
            $nama       = $this->input->post('nama');
            $username   = $this->input->post('username');
            $alamat     = $this->input->post('alamat');
            $gender     = $this->input->post('gender');
            $no_telepon = $this->input->post('no_telepon');
            $no_ktp     = $this->input->post('no_ktp');
            $password   = md5($this->input->post('password'));
            $role_id    = '2';

            $cekuser    = $this->model_rental->cek_username($username);
            $cekktp     = $this->model_rental->cek_ktp($no_ktp);
            
            if ($cekuser == TRUE){
                $this->session->set_flashdata('pesan8','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Username telah terpakai, Silahkan gunakan username lain.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('register');
            }elseif($cekktp == TRUE){
                $this->session->set_flashdata('pesannn','<div class="alert alert-success alert-dismissible fade show" role="alert">
                No KTP telah terpakai, Silahkan gunakan KTP lain.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('register');
            }else{
                $data = array(
                    'nama'          =>$nama,
                    'username'      =>$username,
                    'alamat'        =>$alamat,
                    'gender'        =>$gender,
                    'no_telepon'    =>$no_telepon,
                    'no_ktp'        =>$no_ktp,
                    'password'      =>$password,
                    'role_id'       =>$role_id
                );

                $this->model_rental->insert_data($data, 'tb_customer');
                $this->session->set_flashdata('pesan7','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Daftar Berhasil! Silahkan Login!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('auth/login');
            }
        }
    }

    public function _rules(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('no_telepon', 'No. Telepon', 'required');
        $this->form_validation->set_rules('no_ktp', 'No. KTP', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }
}
?>