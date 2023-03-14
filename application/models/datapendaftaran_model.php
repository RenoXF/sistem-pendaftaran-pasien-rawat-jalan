<?php

class Datapendaftaran_model extends CI_Model{

    public function tampil_data($table)
    {
        return $this->db->get($table);
    }

    public function ambil_id_pendaftaran($id)
    {
        $hasil = $this->db->where('id_pendaftaran',$id)->get('data_pendaftaran');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
    }

    public function insert_data($data,$table)
    {
        $this->db->insert($table,$data);
    }

    public function update_aksi($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table)
    {
    $this->db->where($where);
    $this->db->delete($table);
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('data_pendaftaran');
        $this->db->like('id_pendaftaran', $keyword);
        $this->db->or_like('no_rm', $keyword);
        $this->db->or_like('nama_pasien', $keyword);
        $this->db->or_like('tgl_pendaftaran', $keyword);
        $this->db->or_like('id_poliklinik', $keyword);
        $this->db->or_like('id_dokter', $keyword);
        $this->db->or_like('no_antrian', $keyword);
        $this->db->or_like('petugas', $keyword);
        return $this->db->get()->result();
    }
}