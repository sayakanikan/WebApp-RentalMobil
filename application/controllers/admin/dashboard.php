<?php 
class Dashboard extends CI_Controller {
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
    
    public function index() {
        $data['admin'] = $this->model_rental->hitung_admin();
        $data['mobil'] = $this->model_rental->hitung_mobil();
        $data['customer'] = $this->model_rental->hitung_customer();
        $data['transaksi'] = $this->model_rental->hitung_rental();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates_admin/footer');
    }
}
?>