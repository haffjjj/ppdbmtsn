<?php
Class M_pendaftaran extends CI_Model{
    public function insert($data,$urutan){
        $this->db->insert('tb_siswa',$data);
        $this->db->insert('tb_kartu',['tb_siswa_id' => $this->db->insert_id(),'urutan'=>$urutan]);
        // return $this->db->affected_rows();
        return $this->db->insert_id();
    }
    public function get_urutan($kelamin,$dari_sekolah){
        $this->db->select('max(tb_kartu.urutan) as urutan');
        $this->db->from('tb_kartu');
        $this->db->join('tb_siswa','tb_siswa.id = tb_kartu.tb_siswa_id');
        $this->db->where(['tb_siswa.siswa_kelamin' => $kelamin, 'tb_siswa.dari_sekolah' => $dari_sekolah]);
        // $this->db->where(');
        return $this->db->get()->result_array();
    }

    public function get_date(){
        $this->db->where('id',1);
        return $this->db->get('tb_setting')->result_array();
    }
}