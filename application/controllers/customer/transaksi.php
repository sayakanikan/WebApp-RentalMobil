<?php 
class Transaksi extends CI_Controller{
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

    public function index(){
        $customer = $this->session->userdata('username');
        // var_dump($customer);
        // die();
        $data['transaksi'] = $this->db->query("SELECT * FROM tb_transaksi tr, tb_mobil mb, tb_customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.username=cs.username AND cs.username='$customer' ORDER BY id_rental DESC")->result();
        $this->load->view('templates_customer/header2');
        $this->load->view('customer/transaksi', $data);
        $this->load->view('templates_customer/footer2');
    }

    public function pembayaran($id){
        $data['transaksi'] = $this->db->query("SELECT * FROM tb_transaksi tr, tb_mobil mb, tb_customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.username=cs.username AND tr.id_rental='$id' ORDER BY id_rental DESC")->result();
        $data['rekening'] = $this->db->query("SELECT * FROM tb_rekening rek, tb_bank ba WHERE rek.id_bank=ba.id_bank")->result();
        $this->load->view('templates_customer/header2');
        $this->load->view('customer/pembayaran', $data);
        $this->load->view('templates_customer/footer2');
    }

    public function pembayaran_aksi(){
        $id                 = $this->input->post('id_rental');
        $bukti_pembayaran   = $_FILES['bukti_pembayaran']['name'];
        if($bukti_pembayaran=''){}else{
            $config['upload_path']      = './assets/upload/';
            $config['allowed_types']    = 'pdf|jpg|jpeg|png|tiff';

            $this->load->library('upload', $config);

            if($this->upload->do_upload('bukti_pembayaran')){
                $bukti_pembayaran = $this->upload->data('file_name');
                $this->db->set('bukti_pembayaran', $bukti_pembayaran);
            }else{
                echo $this->upload->display_errors();;
            }
        }
        $foto_ktp   = $_FILES['foto_ktp']['name'];
        if($foto_ktp=''){}else{
            $config['upload_path']      = './assets/upload/';
            $config['allowed_types']    = 'pdf|jpg|jpeg|png|tiff';

            $this->load->library('upload', $config);

            if($this->upload->do_upload('foto_ktp')){
                $foto_ktp = $this->upload->data('file_name');
                $this->db->set('foto_ktp', $foto_ktp);
            }else{
                echo $this->upload->display_errors();
            }
        }

        $data = array(
            'bukti_pembayaran'  => $bukti_pembayaran,
            'foto_ktp'          => $foto_ktp
        );

        $where = array(
            'id_rental'         => $id
        );

        $this->model_rental->update_data('tb_transaksi', $data, $where);
        $this->session->set_flashdata('pesan6','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Bukti Pembayaran dan Foto KTP Berhasil di Upload!, Silahkan Print Invoice.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
		redirect('customer/transaksi');
    }

    public function cetak_invoice($id){
        $data['transaksi'] = $this->db->query("SELECT * FROM tb_transaksi tr, tb_mobil mb, tb_customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.username=cs.username AND tr.id_rental='$id'")->result();
        $data['rekening'] = $this->db->query("SELECT * FROM tb_rekening rek, tb_bank ba WHERE rek.id_bank=ba.id_bank")->result();
        $this->load->view('customer/cetak_invoice', $data);
    }

    public function batal_transaksi($id){
        $where = array('id_rental' => $id);
        $data = $this->model_rental->get_where($where, 'tb_transaksi')->row();

        $where2 = array('id_mobil' => $data->id_mobil);

        $data2 = array('status' => '1');

        $this->model_rental->update_data('tb_mobil', $data2, $where2);
        $this->model_rental->delete_data($where, 'tb_transaksi');
        $this->session->set_flashdata('pesan6','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Transaksi Berhasil dibatalkan.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('customer/transaksi');
    }
}
?>