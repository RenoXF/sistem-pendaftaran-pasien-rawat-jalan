<?php

class Datapendaftaran extends CI_Controller{

    public function index()
    {
        $data['data_pendaftaran'] = $this->datapendaftaran_model->tampil_data('data_pendaftaran')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/datapendaftaran', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function detail($id_pendaftaran)
    {
        $data['detail'] = $this->datapendaftaran_model->ambil_id_pendaftaran($id_pendaftaran);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/datapendaftaran_detail', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_datapendaftaran()
    {
        $data['data_poliklinik'] = $this->datapoliklinik_model->tampil_data('data_poliklinik')->result();
        $data['datadokter'] = $this->datadokter_model->tampil_data('data_dokter')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/datapendaftaran_form', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_datapendaftaran_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->tambah_datapendaftaran();
        }else{
            $no_rm = $this->input->post('no_rm');
            $nama_pasien = $this->input->post('nama_pasien');
            $tgl_pendaftaran = $this->input->post('tgl_pendaftaran');
            $id_poliklinik = $this->input->post('id_poliklinik');
            $id_dokter = $this->input->post('id_dokter');
            $no_antrian = $this->input->post('no_antrian');
            $petugas = $this->input->post('petugas');

            $data = array(
                'no_rm' => $no_rm,
                'nama_pasien' => $nama_pasien,
                'tgl_pendaftaran' => $tgl_pendaftaran,
                'id_poliklinik' => $id_poliklinik,
                'id_dokter' => $id_dokter,
                'no_antrian' => getAutoNumber('data_pendaftaran','no_antrian','A',4),
                'petugas' => $petugas
            );

            $this->datapendaftaran_model->insert_data($data, 'data_pendaftaran');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pendaftaran Berhasil Ditambahkan! 
            </div>');
            redirect('administrator/datapendaftaran');
            
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('no_rm','no_rm','required',['required' => 'No RM Wajib Diisi!']);
        $this->form_validation->set_rules('nama_pasien','nama_pasien','required',['required' => 'Nama Wajib Diisi!']);
        $this->form_validation->set_rules('tgl_pendaftaran','tgl_pendaftaran','required',['required' => 'Tanggal Pendaftaran Wajib Diisi!']);
        $this->form_validation->set_rules('id_poliklinik','id_poliklinik','required',['required' => 'Poli Tujuan Wajib Diisi!']);
        $this->form_validation->set_rules('id_dokter','id_dokter','required',['required' => 'DPJP Wajib Diisi!']);
        $this->form_validation->set_rules('petugas','petugas','required',['required' => 'Petugas Wajib Diisi!']);
    }

    public function update($id)
    {
        $where = array('id_pendaftaran' => $id);
        $data['data_pendaftaran'] = $this->db->query("select * from data_pendaftaran dpn, data_poliklinik dpl where dpn.id_poliklinik=dpl.nama_poliklinik and dpn.id_pendaftaran='$id'")->result();
        $data['data_pendaftaran'] = $this->db->query("select * from data_pendaftaran dpn, data_dokter dd where dpn.id_dokter=dd.nama_dokter and dpn.id_pendaftaran='$id'")->result();
        $data['data_poliklinik'] = $this->datapendaftaran_model->tampil_data('data_poliklinik')->result();
        $data['datadokter'] = $this->datapendaftaran_model->tampil_data('data_dokter')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/datapendaftaran_update', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_pendaftaran');
        $no_rm = $this->input->post('no_rm');
        $nama_pasien = $this->input->post('nama_pasien');
        $tgl_pendaftaran = $this->input->post('tgl_pendaftaran');
        $id_poliklinik = $this->input->post('id_poliklinik');
        $id_dokter = $this->input->post('id_dokter');
        $no_antrian = $this->input->post('no_antrian');
        $petugas = $this->input->post('petugas');
        $status_periksa = $this->input->post('status_periksa');

        $data = array(
            'no_rm' => $no_rm,
            'nama_pasien' => $nama_pasien,
            'tgl_pendaftaran' => $tgl_pendaftaran,
            'id_poliklinik' => $id_poliklinik,
            'id_dokter' => $id_dokter,
            'petugas' => $petugas,
            'status_periksa' => $status_periksa
        );

        $where = array(
            'id_pendaftaran' => $id
        );

        $this->datapendaftaran_model->update_aksi($where,$data,'data_pendaftaran');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Pendaftaran Berhasil Diupdate!
        </div>');
        redirect('administrator/datapendaftaran');
    }

    public function delete($id)
    {
        $where = array('id_pendaftaran' => $id);
        $this->datapendaftaran_model->hapus_data($where, 'data_pendaftaran');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Pendaftaran Berhasil Dihapus!
        </div>');
        redirect('administrator/datapendaftaran');
    }
    
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['data_pendaftaran'] = $this->datapendaftaran_model->get_keyword($keyword);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/datapendaftaran', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function excel()
    {
        $data['data_pendaftaran'] = $this->datapendaftaran_model->tampil_data('data_pendaftaran')->result();

        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();

        $object->getProperties()->setCreator("Klinik Basmalah Pacitan");
        $object->getProperties()->setLastModifiedBy("Klinik Basmalah Pacitan");
        $object->getProperties()->setTitle("Laporan Kunjungan Pasien");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1','NO');
        $object->getActiveSheet()->setCellValue('B1','ID PENDAFTARAN');
        $object->getActiveSheet()->setCellValue('C1','NO RM');
        $object->getActiveSheet()->setCellValue('D1','TANGGAL PENDAFTARAN');
        $object->getActiveSheet()->setCellValue('E1','POLI TUJUAN');
        $object->getActiveSheet()->setCellValue('F1','DPJP');
        $object->getActiveSheet()->setCellValue('G1','NOMOR ANTRIAN');

        $baris = 2;
        $no = 1;

        foreach ($data['data_pendaftaran'] as $dpn){
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $dpn->id_pendaftaran);
            $object->getActiveSheet()->setCellValue('C'.$baris, $dpn->no_rm);
            $object->getActiveSheet()->setCellValue('D'.$baris, $dpn->tgl_pendaftaran);
            $object->getActiveSheet()->setCellValue('E'.$baris, $dpn->id_poliklinik);
            $object->getActiveSheet()->setCellValue('F'.$baris, $dpn->id_dokter);
            $object->getActiveSheet()->setCellValue('G'.$baris, $dpn->no_antrian);

            $baris++;
        }

        $filename="Laporan_Kunjungan_Pasien".'.xlsx';

        $object->getActiveSheet()->setTitle("Klinik Basmalah Pacitan");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: Max-age=0');

        $writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }

    public function export($jenis='pdf')
    {
        if($jenis=='pdf'){
        $data['data_pendaftaran'] = $this->datapendaftaran_model->tampil_data('data_pendaftaran')->result();
        $html=$this->load->view('administrator/laporan_pdf', $data,TRUE);
            generatePdf($html,'Laporan Harian','A4','landscape');
        }
    }

    public function periksa_selesai($id)
    {
        $where = array('id_pendaftaran' => $id);
        $data['data_pendaftaran'] = $this->db->query("SELECT * FROM data_pendaftaran WHERE id_pendaftaran = '$id'")->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/periksa_selesai', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function periksa_selesai_aksi()
    {
        $id = $this->input->post('id_pendaftaran');
        $status_periksa = $this->input->post('status_periksa');

        $data = array(
            'status_periksa' => $status_periksa
        );

        $where = array(
            'id_pendaftaran' => $id
        );

        $this->datapendaftaran_model->update_aksi($where,$data,'data_pendaftaran');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Status Periksa Pasien Berhasil diupdate!
        </div>');
        redirect('administrator/datapendaftaran');
    }
}