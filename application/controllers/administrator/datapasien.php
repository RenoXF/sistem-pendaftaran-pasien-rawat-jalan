<?php

class Datapasien extends CI_Controller{

    public function index()
    {
        $data['data_pasien'] = $this->datapasien_model->tampil_data('data_pasien')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/datapasien', $data);
        $this->load->view('templates_administrator/footer');

    }

    public function detail($no_rm)
    {
        $data['detail'] = $this->datapasien_model->ambil_norm_pasien($no_rm);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/datapasien_detail', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function input()
    {
        $data = array(
            'no_rm' =>set_value('no_rm'),
            'no_identitas' =>set_value('no_identitas'),
            'nama_pasien' =>set_value('nama_pasien'),
            'jenis_kelamin' =>set_value('jenis_kelamin'),
            'tgl_lahir' =>set_value('tgl_lahir'),
            'tpt_lahir' =>set_value('tpt_lahir'),
            'status_pasien' =>set_value('status_pasien'),
            'agama' =>set_value('agama'),
            'alamat' =>set_value('alamat'),
            'pekerjaan' =>set_value('pekerjaan'),
            'keluarga' =>set_value('keluarga'),
            'no_tlp' =>set_value('no_tlp'),
        );
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/datapasien_form', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function input_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->input();
        }else{
            $data = array(
            'no_rm' => getAutoNumber('data_pasien','no_rm','RM',8),
            'no_identitas' => $this->input->post('no_identitas', TRUE),
            'nama_pasien' => $this->input->post('nama_pasien', TRUE),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
            'tgl_lahir' => $this->input->post('tgl_lahir', TRUE),
            'tpt_lahir' => $this->input->post('tpt_lahir', TRUE),
            'status_pasien' => $this->input->post('status_pasien', TRUE),
            'agama' => $this->input->post('agama', TRUE),
            'alamat' => $this->input->post('alamat', TRUE),
            'pekerjaan' => $this->input->post('pekerjaan', TRUE),
            'keluarga' => $this->input->post('keluarga', TRUE),
            'no_tlp' => $this->input->post('no_tlp', TRUE),
            );

            $this->datapasien_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pasien Berhasil Ditambahkan! 
            </div>');
            redirect('administrator/datapasien');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('no_identitas','no_identitas','required',['required' => 'Nomor Identitas Wajib Diisi!']);
        $this->form_validation->set_rules('nama_pasien','nama_pasien','required',['required' => 'Nama Wajib Diisi!']);
        $this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required',['required' => 'Jenis Kelamin Wajib Diisi!']);
        $this->form_validation->set_rules('tgl_lahir','tgl_lahir','required',['required' => 'Tanggal Lahir Wajib Diisi!']);
        $this->form_validation->set_rules('tpt_lahir','tpt_lahir','required',['required' => 'Tempat Lahir Wajib Diisi!']);
        $this->form_validation->set_rules('status_pasien','status_pasien','required',['required' => 'Status Pasien Wajib Diisi!']);
        $this->form_validation->set_rules('agama','agama','required',['required' => 'Agama Wajib Diisi!']);
        $this->form_validation->set_rules('alamat','alamat','required',['required' => 'Alamat Wajib Diisi!']);
        $this->form_validation->set_rules('pekerjaan','pekerjaan','required',['required' => 'Pekerjaan Wajib Diisi!']);
        $this->form_validation->set_rules('keluarga','keluarga','required',['required' => 'Nama Keluarga Wajib Diisi!']);
        $this->form_validation->set_rules('no_tlp','no_tlp','required',['required' => 'Nomor Telepon Wajib Diisi!']);
    }

    public function update($no_rm)
    {
        $where = array('no_rm' => $no_rm);
        $data['data_pasien'] = $this->datapasien_model->edit_data($where,'data_pasien')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/datapasien_update', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi()
    {
        $no_rm = $this->input->post('no_rm');
        $no_identitas = $this->input->post('no_identitas');
        $nama_pasien = $this->input->post('nama_pasien');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $tpt_lahir = $this->input->post('tpt_lahir');
        $status_pasien = $this->input->post('status_pasien');
        $agama = $this->input->post('agama');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');
        $keluarga = $this->input->post('keluarga');
        $no_tlp = $this->input->post('no_tlp');

        $data = array(
            'no_identitas' => $no_identitas,
            'nama_pasien' => $nama_pasien,
            'jenis_kelamin' => $jenis_kelamin,
            'tgl_lahir' => $tgl_lahir,
            'tpt_lahir' => $tpt_lahir,
            'status_pasien' => $status_pasien,
            'agama' => $agama,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan,
            'keluarga' => $keluarga,
            'no_tlp' => $no_tlp
        );

        $where = array(
            'no_rm' => $no_rm
        );

        $this->datapasien_model->update_data($where,$data,'data_pasien');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Pasien Berhasil Diupdate!
        </div>');
        redirect('administrator/datapasien');
    }
    
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['data_pasien'] = $this->datapasien_model->get_keyword($keyword);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/datapasien', $data);
        $this->load->view('templates_administrator/footer');
    }
}