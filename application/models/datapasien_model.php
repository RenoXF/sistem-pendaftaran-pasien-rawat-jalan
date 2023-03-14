<?php

class Datapasien_model extends CI_Model{

    public function tampil_data($table)
    {
        return $this->db->get($table);
    }

    public function ambil_norm_pasien($no_rm)
    {
        $hasil = $this->db->where('no_rm',$no_rm)->get('data_pasien');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
    }

    public function input_data($data)
    {
        $this->db->insert('data_pasien', $data);
    }

    public function edit_data($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('data_pasien');
        $this->db->like('no_rm', $keyword);
        $this->db->or_like('no_identitas', $keyword);
        $this->db->or_like('nama_pasien', $keyword);
        $this->db->or_like('jenis_kelamin', $keyword);
        $this->db->or_like('tgl_lahir', $keyword);
        $this->db->or_like('tpt_lahir', $keyword);
        $this->db->or_like('status_pasien', $keyword);
        $this->db->or_like('agama', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('pekerjaan', $keyword);
        $this->db->or_like('keluarga', $keyword);
        $this->db->or_like('no_tlp', $keyword);
        return $this->db->get()->result();
    }
}