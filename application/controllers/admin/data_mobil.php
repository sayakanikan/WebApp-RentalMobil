<?php 
class Data_mobil extends CI_Controller {
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
        $data['mobil'] = $this->model_rental->get_data('tb_mobil')->result();
        $data['tipe'] = $this->model_rental->get_data('tb_tipe')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_mobil', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_mobil(){
        $data['tipe'] = $this->model_rental->get_data('tb_tipe')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_mobil', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_mobil_aksi(){
        $kode_tipe  = $this->input->post('kode_tipe');
        $merk       = $this->input->post('merk');
        $no_plat    = $this->input->post('no_plat');
        $warna      = $this->input->post('warna');
        $tahun      = $this->input->post('tahun');
        $status     = $this->input->post('status');
        $harga      = $this->input->post('harga');
        $denda      = $this->input->post('denda');
        $auto       = $this->input->post('auto');
        $disel      = $this->input->post('disel');
        $gambar     = $_FILES['gambar']['name'];
        if($gambar=''){}else{
            $config['upload_path']      = 'assets/upload/';
            $config['allowed_types']    = 'jpg|jpeg|png|tiff';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar Gagal Diupload!";
            }else{
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'kode_tipe'  => $kode_tipe,
            'merk'       => $merk,
            'no_plat'    => $no_plat,
            'tahun'      => $tahun,
            'warna'      => $warna,
            'status'     => $status,
            'harga'      => $harga,
            'denda'      => $denda,
            'auto'       => $auto,
            'disel'      => $disel,
            'gambar'     => $gambar
        );

        $this->model_rental->insert_data($data,'tb_mobil');
        $this->session->set_flashdata('pesan2','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Mobil Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('admin/data_mobil');
    }

    public function update_mobil($id){
        $where = array('id_mobil' => $id);
        $data['mobil'] = $this->db->query("SELECT * FROM tb_mobil mb, tb_tipe tp WHERE mb.kode_tipe = tp.kode_tipe AND mb.id_mobil = '$id'")->result();
        $data['tipe'] = $this->model_rental->get_data('tb_tipe')->result();
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_mobil', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_mobil_aksi(){
        $id         = $this->input->post('id_mobil');
        $kode_tipe  = $this->input->post('kode_tipe');
        $merk       = $this->input->post('merk');
        $no_plat    = $this->input->post('no_plat');
        $warna      = $this->input->post('warna');
        $tahun      = $this->input->post('tahun');
        $status     = $this->input->post('status');
        $harga      = $this->input->post('harga');
        $denda      = $this->input->post('denda');
        $auto       = $this->input->post('auto');
        $disel      = $this->input->post('disel');
        $gambar     = $_FILES['gambar']['name'];
        if($gambar){
            $config['upload_path']      = 'assets/upload/';
            $config['allowed_types']    = 'jpg|jpeg|png|tiff';

            $this->load->library('upload', $config);
            if($this->upload->do_upload('gambar')){
                $gambar = $this->upload->data('file_name');
                $this->db->set('gambar', $gambar);
            }else{
                echo $this->upload->display_error();
            }
        }

        $data = array(
            'kode_tipe'  => $kode_tipe,
            'merk'       => $merk,
            'no_plat'    => $no_plat,
            'tahun'      => $tahun,
            'warna'      => $warna,
            'status'     => $status,
            'harga'      => $harga,
            'denda'      => $denda,
            'auto'       => $auto,
            'disel'      => $disel,
            'gambar'     => $gambar
        );

        $where = array(
            'id_mobil'   => $id
        );

        $this->model_rental->update_data('tb_mobil', $data, $where);
        $this->session->set_flashdata('pesan2','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Mobil Berhasil Diupdate!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('admin/data_mobil');
    }

    public function _rules(){
        $this->form_validation->set_rules('kode_tipe','Kode Tipe','required');
        $this->form_validation->set_rules('merk','Merk','required');
        $this->form_validation->set_rules('no_plat','No Plat','required');
        $this->form_validation->set_rules('tahun','Tahun','required');
        $this->form_validation->set_rules('warna','Warna','required');
        $this->form_validation->set_rules('status','Status','required');
        $this->form_validation->set_rules('harga','Harga','required');
        $this->form_validation->set_rules('denda','Denda','required');
        $this->form_validation->set_rules('auto','Auto','required');
        $this->form_validation->set_rules('disel','Disel','required');
    }

    public function detail_mobil($id){
        $data['detail'] = $this->model_rental->ambil_id_mobil($id);
        $data['tipe'] = $this->model_rental->get_data('tb_tipe')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_mobil', $data);
        $this->load->view('templates_admin/footer');
    }

    public function delete_mobil($id){
        $where = array('id_mobil' => $id);
        $this->model_rental->delete_data($where, 'tb_mobil');
        $this->session->set_flashdata('pesan2','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Mobil Berhasil Dihapus.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('admin/data_mobil');
    }
}
?>