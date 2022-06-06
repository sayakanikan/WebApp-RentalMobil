<?php 
class Data_rekening extends CI_Controller{
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
        $data['rekening'] = $this->db->query("SELECT * FROM tb_rekening rek, tb_bank ba WHERE rek.id_bank=ba.id_bank")->result();
        // $data['rekening'] = $this->model_rental->get_data('tb_rekening')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_rekening', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_rekening(){
        $data['bank'] = $this->model_rental->get_data('tb_bank')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_rekening', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_rekening_aksi(){
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->tambah_rekening();
        }else{
            $nama_rekening      = $this->input->post('nama_rekening');
            $id_bank      = $this->input->post('id_bank');
            $no_rekening        = $this->input->post('no_rekening');

            $data = array (
                'nama_rekening'     => $nama_rekening,
                'id_bank'           => $id_bank,
                'no_rekening'       => $no_rekening
            );

            $this->model_rental->insert_data($data,'tb_rekening');
            $this->session->set_flashdata('pesan3','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Rekening Berhasil Ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/data_rekening');
        }
    }

    public function update_rekening($id){
        $where = array('id_rekening' => $id);
        $data['rekening'] = $this->db->query("SELECT * FROM tb_rekening rek, tb_bank ba WHERE rek.id_bank=ba.id_bank AND id_rekening = '$id'")->result();
        $data['bank'] = $this->model_rental->get_data('tb_bank')->result();
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_rekening', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_rekening_aksi(){
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->update_rekening();
        }else{
            $id             = $this->input->post('id_rekening');
            $nama_rekening  = $this->input->post('nama_rekening');
            $id_bank        = $this->input->post('id_bank');
            $no_rekening    = $this->input->post('no_rekening');


            $data = array(
                'nama_rekening'     =>$nama_rekening,
                'id_bank'           =>$id_bank,
                'no_rekening'       =>$no_rekening,
            );

            $where = array(
                'id_rekening'       => $id
            );

            $this->model_rental->update_data('tb_rekening', $data, $where);
            $this->session->set_flashdata('pesan3','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Rekening Berhasil Diupdate!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/data_rekening');
        }
    }

    public function _rules(){
        $this->form_validation->set_rules('nama_rekening', 'Nama Rekening', 'required');
        $this->form_validation->set_rules('id_bank', 'Bank', 'required');
        $this->form_validation->set_rules('no_rekening', 'No. Rekening', 'required');
    }

    public function delete_rekening($id){
        $where = array('id_rekening' => $id);
        $this->model_rental->delete_data($where, 'tb_rekening');
        $this->session->set_flashdata('pesan3','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Rekening Berhasil Dihapus.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('admin/data_rekening');
    }
}
?>