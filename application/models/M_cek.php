<?php
Class M_cek extends CI_Model{
    public function get_kartu($id_kartu){
        $this->db->select('*');
        $this->db->from('tb_kartu');
        $this->db->join('tb_siswa','tb_kartu.tb_siswa_id = tb_siswa.id AND tb_kartu.id ='.$id_kartu);
        return $this->db->get()->result_array();
    }

    public function get_kartu_diperiksa($id_kartu){
        $this->db->select('*');
        $this->db->from('tb_kartu');
        $this->db->join('tb_siswa','tb_kartu.tb_siswa_id = tb_siswa.id AND tb_kartu.id ='.$id_kartu);
        $this->db->where('tb_siswa.status','sudahdiperiksa');
        return $this->db->get()->result_array();
    }
}