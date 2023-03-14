<?php

class Datapoliklinik extends CI_Controller{

    public function index()
    {
        $data['data_poliklinik'] = $this->datapoliklinik_model->tampil_data()->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/datapoliklinik', $data);
        $this->load->view('templates_administrator/footer'); 
    }

    public function input()
    {
        $data = array(
            'id_poliklinik' =>set_value('id_poliklinik'),
            'nama_poliklinik' =>set_value('nama_poliklinik'),
        );
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/datapoliklinik_form', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function input_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE){
        $this->input();
        }else {
            $data = array(
                'nama_poliklinik' => $this->input->post('nama_poliklinik', TRUE),
            );

            $this->datapoliklinik_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Poliklinik Berhasil Ditambahkan! 
                    </div>');
            redirect('administrator/datapoliklinik');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_poliklinik','nama_poliklinik','required',['required' => 'Nama Poliklinik Wajib Diisi!']);
    }

    public function update($id)
    {
        $where = array('id_poliklinik' => $id);
        $data['data_poliklinik'] = $this->datapoliklinik_model->edit_data($where,'data_poliklinik')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/datapoliklinik_update', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_poliklinik');
        $nama_poliklinik = $this->input->post('nama_poliklinik');

        $data = array(
            'nama_poliklinik' => $nama_poliklinik
        );

        $where = array(
            'id_poliklinik' => $id
        );

        $this->datapoliklinik_model->update_data($where,$data,'data_poliklinik');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Poliklinik Berhasil Diupdate!
        </div>');
        redirect('administrator/datapoliklinik');
    }

    public function delete($id)
    {
        $where = array('id_poliklinik' => $id);
        $this->datapoliklinik_model->hapus_data($where, 'data_poliklinik');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Poliklinik Berhasil Dihapus!
        </div>');
        redirect('administrator/datapoliklinik');
    }
}