<?php 
class Data_tipe extends CI_Controller{
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
        $data['tipe'] = $this->model_rental->get_data('tb_tipe')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_tipe', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_tipe(){
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_tipe');
        $this->load->view('templates_admin/footer');
    }

    public function tambah_tipe_aksi(){
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->tambah_tipe();
        }else{
            $kode_tipe      = $this->input->post('kode_tipe');
            $nama_tipe      = $this->input->post('nama_tipe');

            $data = array (
                'kode_tipe'     => $kode_tipe,
                'nama_tipe'     => $nama_tipe
            );

            $this->model_rental->insert_data($data,'tb_tipe');
            $this->session->set_flashdata('pesan4','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Tipe Mobil Berhasil Ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/data_tipe');
        }
    }

    public function update_tipe($id){
        $where = array('id_tipe' => $id);
        $data['tipe'] = $this->db->query("SELECT * FROM tb_tipe WHERE id_tipe = '$id'")->result();
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_tipe', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_tipe_aksi(){
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->update_tipe();
        }else{
            $id            = $this->input->post('id_tipe');
            $kode_tipe     = $this->input->post('kode_tipe');
            $nama_tipe     = $this->input->post('nama_tipe');

            $data = array(
                'kode_tipe'     => $kode_tipe,
                'nama_tipe'     => $nama_tipe
            );

            $where = array(
                'id_tipe'       => $id
            );

            $this->model_rental->update_data('tb_tipe', $data, $where);
            $this->session->set_flashdata('pesan4','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Tipe Mobil Berhasil Diupdate!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/data_tipe');
        }
    }

    public function _rules(){
        $this->form_validation->set_rules('kode_tipe', 'Kode Tipe', 'required');
        $this->form_validation->set_rules('nama_tipe', 'Nama Tipe', 'required');
    }

    public function delete_tipe($id){
        $where = array('id_tipe' => $id);
        $this->model_rental->delete_data($where, 'tb_tipe');
        $this->session->set_flashdata('pesan4','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Tipe Mobil Berhasil Dihapus.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('admin/data_tipe');
    }
}
?>