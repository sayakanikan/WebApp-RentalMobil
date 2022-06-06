<?php 
class Data_customer extends CI_Controller{
    public function update($username){
        $where = array('username' => $username);
        $data['customer'] = $this->db->query("SELECT * FROM tb_customer WHERE username = '$username'")->result();
        $this->load->view('templates_customer/header2');
        $this->load->view('customer/form_update_customer', $data);
        $this->load->view('templates_customer/footer2');
    }

    public function update_customer_aksi(){
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->update_customer();
        }else{
            $id         = $this->input->post('id_customer');
            $nama       = $this->input->post('nama');
            $username   = $this->input->post('username');
            $alamat     = $this->input->post('alamat');
            $gender     = $this->input->post('gender');
            $no_telepon = $this->input->post('no_telepon');
            $no_ktp     = $this->input->post('no_ktp');
            $password   = md5($this->input->post('password'));
            $gambar     = $_FILES['gambar']['name'];
            if($gambar=''){}else{
                $config['upload_path']      = './assets/upload/';
                $config['allowed_types']    = 'jpg|jpeg|png|tiff';
    
                $this->load->library('upload', $config);
    
                if($this->upload->do_upload('gambar')){
                    $gambar = $this->upload->data('file_name');
                    $this->db->set('gambar', $gambar);
                }else{
                    echo $this->upload->display_errors();;
                }
            }

            $data = array(
                'nama'          =>$nama,
                'username'      =>$username,
                'alamat'        =>$alamat,
                'gender'        =>$gender,
                'no_telepon'    =>$no_telepon,
                'no_ktp'        =>$no_ktp,
                'password'      =>$password
            );

            $where = array(
                'id_customer'       => $id
            );

            $this->model_rental->update_data('tb_customer', $data, $where);
            $this->session->set_flashdata('pesan5','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Anda Berhasil di Update!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('customer/dashboard/akun/'.$this->session->userdata('username'));
        }
    }

    public function _rules(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('no_telepon', 'No. Telepon', 'required');
        $this->form_validation->set_rules('no_ktp', 'No. KTP', 'required');
    }  
}
?>