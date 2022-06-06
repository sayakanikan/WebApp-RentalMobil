<?php 
class Rental extends CI_Controller{
    public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '2'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum Login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
				redirect('auth/login');
		}
	}
    
    public function tambah_rental($id){
        $data['detail'] = $this->model_rental->ambil_id_mobil($id);
        $this->load->view('templates_customer/header2');
        $this->load->view('customer/tambah_rental', $data);
        $this->load->view('templates_customer/footer2');
    }

    public function tambah_rental_aksi(){
        $username           = $this->session->userdata('username');
        $id_mobil           = $this->input->post('id_mobil');
        $tanggal_rental     = $this->input->post('tanggal_rental');
        $tanggal_kembali    = $this->input->post('tanggal_kembali');
        $supir              = $this->input->post('supir');
        $denda              = $this->input->post('denda');
        $harga              = $this->input->post('harga');
    
        $data = array(
            'username'              =>$username, 
            'id_mobil'              =>$id_mobil,
            'tanggal_rental'        =>$tanggal_rental,
            'tanggal_kembali'       =>$tanggal_kembali,
            'supir'                 =>$supir,
            'denda'                 =>$denda,
            'harga'                 =>$harga,
            'tanggal_pengembalian'  =>'-',
            'status_rental'         =>'Belum Selesai',
            'status_pengembalian'   =>'Belum Kembali'
        );

        $this->model_rental->insert_data($data, 'tb_transaksi');
        $status = array(
            'status'    => '0'
        );

        $id = array(
            'id_mobil'  => $id_mobil
        );

        $this->model_rental->update_data('tb_mobil', $status, $id);
        $this->session->set_flashdata('pesan6','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Transaksi berhasil, Silahkan Checkout!.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('customer/transaksi');
    }
}
?>