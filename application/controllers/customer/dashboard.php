<?php 
class Dashboard extends CI_Controller {
    public function index() {
        $data['mobil'] = $this->model_rental->get_data('tb_mobil')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/home', $data);
        $this->load->view('templates_customer/footer');
    }

    public function mobil() {
        $data['mobil'] = $this->model_rental->get_data('tb_mobil')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/dashboard', $data);
        $this->load->view('templates_customer/footer');
    }

    public function detail_mobil($id){
        $data['detail'] = $this->model_rental->ambil_id_mobil($id);
        $this->load->view('templates_customer/header2');
        $this->load->view('customer/detail_mobil', $data);
        $this->load->view('templates_customer/footer2');
    }

    public function akun($username){
        $where = array('username' => $username);
        $data['akun'] = $this->db->query("SELECT * FROM tb_customer WHERE username = '$username'")->result();
        $this->load->view('templates_customer/header2');
        $this->load->view('customer/akun', $data);
        $this->load->view('templates_customer/footer2');
    }

    public function about(){
        $this->load->view('templates_customer/header2');
        $this->load->view('customer/about');
        $this->load->view('templates_customer/footer2');
    }
}
?>