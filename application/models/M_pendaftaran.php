<?php
Class M_pendaftaran extends CI_Model{
    public function insert($data,$data_kartu){
        $this->db->insert('tb_siswa',$data);
        $this->db->insert('tb_kartu',['tb_siswa_id' => $this->db->insert_id(),'kelamin'=>$data_kartu[0],'urutan'=>$data_kartu[1]]);
        // return $this->db->affected_rows();
        return $this->db->insert_id();
    }
    public function get_urutan($kelamin){
        $this->db->select('max(urutan)');
        $this->db->from('tb_kartu');
        $this->db->where('kelamin',$kelamin);
        return $this->db->get()->row();
    }
}