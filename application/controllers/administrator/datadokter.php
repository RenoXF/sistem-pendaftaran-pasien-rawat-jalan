<?php

class Datadokter extends CI_Controller{

    public function index()
    {
        $data['datadokter'] = $this->datadokter_model->tampil_data('data_dokter')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/datadokter', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function detail($id)
    {
        $data['detail'] = $this->datadokter_model->ambil_id_dokter($id);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/datadokter_detail', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function input()
    {
        $data = array(
            'id_dokter' =>set_value('id_dokter'),
            'nip_dokter' =>set_value('nip_dokter'),
            'nama_dokter' =>set_value('nama_dokter'),
            'jenis_kelamin' =>set_value('jenis_kelamin'),
            'alamat' =>set_value('alamat'),
            'no_telepon' =>set_value('no_telepon'),
            'spesialis' =>set_value('spesialis'),
        );
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/datadokter_form', $data);
        $this->load->view('templates_administrator/footer');
    }
    public function input_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->input();
        }else{
            $data = array(
            'nip_dokter' => $this->input->post('nip_dokter', TRUE),
            'nama_dokter' => $this->input->post('nama_dokter', TRUE),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
            'alamat' => $this->input->post('alamat', TRUE),
            'no_telepon' => $this->input->post('no_telepon', TRUE),
            'spesialis' => $this->input->post('spesialis', TRUE),
            );

            $this->datadokter_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Dokter Berhasil Ditambahkan! 
            </div>');
            redirect('administrator/datadokter');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nip_dokter','nip_dokter','required',['required' => 'NIP Wajib Diisi!']);
        $this->form_validation->set_rules('nama_dokter','nama_dokter','required',['required' => 'Nama Dokter Wajib Diisi!']);
        $this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required',['required' => 'Jenis Kelamin Wajib Diisi!']);
        $this->form_validation->set_rules('alamat','alamat','required',['required' => 'Alamat Wajib Diisi!']);
        $this->form_validation->set_rules('no_telepon','no_telepon','required',['required' => 'Nomor Telepon Wajib Diisi!']);
        $this->form_validation->set_rules('spesialis','spesialis','required',['required' => 'Spesialis Dokter Wajib Diisi!']);
    }

    public function update($id)
    {
        $where = array('id_dokter' => $id);
        $data['datadokter'] = $this->datadokter_model->edit_data($where,'data_dokter')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/datadokter_update', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_dokter');
        $nip_dokter = $this->input->post('nip_dokter');
        $nama_dokter = $this->input->post('nama_dokter');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $alamat = $this->input->post('alamat');
        $no_telepon = $this->input->post('no_telepon');
        $spesialis = $this->input->post('spesialis');

        $data = array(
            'nip_dokter' => $nip_dokter,
            'nama_dokter' => $nama_dokter,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => $alamat,
            'no_telepon' => $no_telepon,
            'spesialis' => $spesialis
        );

        $where = array(
            'id_dokter' => $id
        );

        $this->datadokter_model->update_data($where,$data,'data_dokter');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Dokter Berhasil Diupdate!
        </div>');
        redirect('administrator/datadokter');
    }

    public function delete($id)
    {
        $where = array('id_dokter' => $id);
        $this->datadokter_model->hapus_data($where, 'data_dokter');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Dokter Berhasil Dihapus!
        </div>');
        redirect('administrator/datadokter');
    }
}