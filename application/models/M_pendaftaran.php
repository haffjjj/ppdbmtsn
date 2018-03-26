<?php
Class M_pendaftaran extends CI_Model{
    public function insert($data,$data_kartu){
        $this->db->insert('tb_siswa',$data);
        $this->db->insert('tb_kartu',['tb_siswa_id' => $this->db->insert_id(),'kelamin'=>$data_kartu[0],'dari_sekolah'=>$data_kartu[1],'urutan'=>$data_kartu[2]]);
        // return $this->db->affected_rows();
        return $this->db->insert_id();
    }
    public function get_urutan($kelamin,$dari_sekolah){
        $this->db->select('max(urutan) as urutan');
        $this->db->from('tb_kartu');
        $this->db->where(['kelamin'=>$kelamin,'dari_sekolah'=>$dari_sekolah]);
        return $this->db->get()->result_array();
    }
}