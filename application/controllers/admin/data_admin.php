<?php 
class Data_admin extends CI_Controller{
    public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum Login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
				redirect('auth/login');
		}
	}

    public function index(){
        $data['admin'] = $this->model_rental->get_data('tb_admin')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_admin', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_admin(){
        $data['admin'] = $this->model_rental->get_data('tb_admin')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_admin', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_admin_aksi(){
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->tambah_admin();
        }else{
            $nama_admin     = $this->input->post('nama_admin');
            $username       = $this->input->post('username');
            $password       = md5($this->input->post('password'));
            $role_id        = '1';

            $data = array(
                'nama_admin'  => $nama_admin,
                'username'    => $username,
                'password'    => $password,
                'role_id'     => $role_id
            );

            $this->model_rental->insert_data($data,'tb_admin');
            $this->session->set_flashdata('pesann','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Admin Berhasil Ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/data_admin');
        }
    }

    public function update_admin($id){
        $where = array('id_admin' => $id);
        $data['admin'] = $this->db->query("SELECT * FROM tb_admin WHERE id_admin = '$id'")->result();
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_admin', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_admin_aksi(){
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->update_admin();
        }else{
            $id         = $this->input->post('id_admin');
            $nama_admin = $this->input->post('nama_admin');
            $username   = $this->input->post('username');
            $role_id    = $this->input->post('role_id');
            $password   = md5($this->input->post('password'));

            $data = array(
                'nama_admin'    =>$nama_admin,
                'username'      =>$username,
                'role_id'       =>$role_id,
                'password'      =>$password
            );

            $where = array(
                'id_admin'       => $id
            );

            $this->model_rental->update_data('tb_admin', $data, $where);
            $this->session->set_flashdata('pesann','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Admin Berhasil Diupdate!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/data_admin');
        }
    }

    public function _rules(){
        $this->form_validation->set_rules('nama_admin','Nama Admin','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
    }

    public function delete_admin($id){
        $where = array('id_admin' => $id);
        $this->model_rental->delete_data($where, 'tb_admin');
        $this->session->set_flashdata('pesann','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Admin Berhasil Dihapus.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('admin/data_admin');
    }
}
?>