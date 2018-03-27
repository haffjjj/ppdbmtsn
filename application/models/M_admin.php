<?php
Class M_admin extends CI_Model{
    public function get_password($username){
        $this->db->where('username', $username);
        $this->db->limit(1);
        return $this->db->get("tb_admin")->result_array();
    }

    public function get_peserta_belum(){
        $this->db->select('tb_kartu.urutan,tb_siswa.dari_sekolah,tb_siswa.siswa_namalengkap,tb_siswa.siswa_kelamin,tb_siswa.lbp_sklh_nisn,tb_siswa.lbp_sklh_nama');
        $this->db->from('tb_siswa');
        $this->db->join('tb_kartu','tb_kartu.tb_siswa_id = tb_siswa.id');
        $this->db->where('status','belumdiperiksa');
        return $this->db->get()->result_array();
    }
}