<?php
Class M_admin extends CI_Model{
    public function get_password($username){
        $this->db->where('username', $username);
        $this->db->limit(1);
        return $this->db->get("tb_admin")->result_array();
    }

    public function get_peserta(){
        $this->db->select('tb_kartu.id as kartu_id,tb_kartu.urutan,tb_siswa.id,tb_siswa.dari_sekolah,tb_siswa.siswa_namalengkap,tb_siswa.siswa_kelamin,tb_siswa.lbp_sklh_nisn,tb_siswa.lbp_sklh_nama,tb_siswa.status');
        $this->db->from('tb_siswa');
        $this->db->join('tb_kartu','tb_kartu.tb_siswa_id = tb_siswa.id');
        return $this->db->get()->result_array();
    }

    public function get_peserta_all(){
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $this->db->join('tb_kartu','tb_kartu.tb_siswa_id = tb_siswa.id');
        return $this->db->get()->result_array();
    }

    public function get_peserta_data($id){
        $this->db->where(['id' => $id]);
        return $this->db->get('tb_siswa')->result_array();
    }

    public function peserta_update($data,$id){
        $this->db->where('id', $id);
        $this->db->update('tb_siswa', $data);
        return $this->db->affected_rows();
    }

    public function peserta_foto_update($id,$foto){
        $this->db->where('id', $id);
        $this->db->update('tb_siswa', ['siswa_foto'=>$foto]);
        return $this->db->affected_rows();
    }

    public function delete_tb_siswa($id){
        $this->db->where('id', $id);
        $this->db->delete('tb_siswa');
        return $this->db->affected_rows();
    }

    public function delete_tb_kartu($id){
        $this->db->where('tb_siswa_id', $id);
        $this->db->delete('tb_kartu');
        return $this->db->affected_rows();
    }

    public function count_belum(){
        $this->db->where('status','belumdiperiksa');
        $this->db->from('tb_siswa');
        return $this->db->count_all_results();   
    }
    public function count_sudah(){
        $this->db->where('status','sudahdiperiksa');
        $this->db->from('tb_siswa');        
        return $this->db->count_all_results();   
    }
    public function get_admin(){
        $this->db->where('id',1);
        return $this->db->get('tb_admin')->result_array();
    }
    public function admin_update($data){
        $this->db->where('id', 1);
        $this->db->update('tb_admin', $data);
        return $this->db->affected_rows();
    }

    public function get_setting(){
        $this->db->where('id',1);
        return $this->db->get('tb_setting')->result_array();
    }
    public function setting_update($data){
        $this->db->where('id', 1);
        $this->db->update('tb_setting', $data);
        return $this->db->affected_rows();
    }
}