<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pendaftaran');
    }
	public function index()
	{
      redirect(base_url());
    }
    public function sd(){
        $this->load->view('u/template/V_header');
		$this->load->view('u/v_pendaftaran_sd');
		$this->load->view('u/template/V_footer');		
    }
    public function mi(){
        $this->load->view('u/template/V_header');
		$this->load->view('u/V_pendaftaran_mi');
		$this->load->view('u/template/V_footer');		
    }

    public function insert(){
        if($this->input->post('submit')){

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 500;

            $this->load->library('upload', $config);

            if ( !$this->upload->do_upload('siswa_foto'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('u/template/V_header');
		            $this->load->view('u/v_gagal',['gagal'=>'Foto tidak sesuai.']);
		            $this->load->view('u/template/V_footer');
                    // echo 'gagal';
                    $this->CI =& get_instance(); 
                    $this->CI->output->_display();
                    die();
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
                    // var_dump($data);
                    // die;
                    // $this->load->view('upload_success', $data);
            }

            $data = [
                'dari_sekolah' => $this->input->post('dari_sekolah'),
                'siswa_namalengkap' => $this->input->post('siswa_namalengkap'),
                'siswa_kelamin' => $this->input->post('siswa_kelamin'),
                'siswa_tempatlahir' => $this->input->post('siswa_tempatlahir'),
                'siswa_tanggallahir' => $this->input->post('siswa_tanggallahir'),
                'siswa_anakke' => $this->input->post('siswa_anakke'),
                'siswa_hobi' => $this->input->post('siswa_hobi'),
                'siswa_jarakrumah' => $this->input->post('siswa_jarakrumah'),
                'siswa_alamat_jalan' => $this->input->post('siswa_alamat_jalan'),
                'siswa_alamat_desa' => $this->input->post('siswa_alamat_desa'),
                'siswa_alamat_kecamatan' => $this->input->post('siswa_alamat_kecamatan'),
                'siswa_alamat_kabupaten' => $this->input->post('siswa_alamat_kabupaten'),
                'siswa_alamat_kodepos' => $this->input->post('siswa_alamat_kodepos'),
                'siswa_email' => $this->input->post('siswa_email'),
                'siswa_nik' => $this->input->post('siswa_nik'),
                'siswa_foto' => $this->upload->data('file_name'),
                'ayah_namalengkap' => $this->input->post('ayah_namalengkap'),
                'ayah_tempatlahir' => $this->input->post('ayah_tempatlahir'),
                'ayah_tanggallahir' => $this->input->post('ayah_tanggallahir'),
                'ayah_pendidikanterakhir' => $this->input->post('ayah_pendidikanterakhir'),
                'ayah_pekerjaan' => $this->input->post('ayah_pekerjaan'),
                'ayah_penghasilan' => $this->input->post('ayah_penghasilan'),
                'ayah_telephone' => $this->input->post('ayah_telephone'),
                'ayah_nik' => $this->input->post('ayah_nik'),
                'ibu_namalengkap' => $this->input->post('ibu_namalengkap'),
                'ibu_tempatlahir' => $this->input->post('ibu_tempatlahir'),
                'ibu_tanggallahir' => $this->input->post('ibu_tanggallahir'),
                'ibu_pendidikanterakhir' => $this->input->post('ibu_pendidikanterakhir'),
                'ibu_pekerjaan' => $this->input->post('ibu_pekerjaan'),
                'ibu_penghasilan' => $this->input->post('ibu_penghasilan'),
                'ibu_telephone' => $this->input->post('ibu_telephone'),
                'ibu_nik' => $this->input->post('ibu_nik'),
                'keluarga_nik' => $this->input->post('keluarga_nik'),
                'keluarga_ksp' => $this->input->post('keluarga_ksp'),
                'keluarga_pkh' => $this->input->post('keluarga_pkh'),
                'lbp_sklh_nama' => $this->input->post('lbp_sklh_nama'),
                'lbp_sklh_desa' => $this->input->post('lbp_sklh_desa'),
                'lbp_sklh_kecamatan' => $this->input->post('lbp_sklh_kecamatan'),
                'lbp_sklh_kabupaten' => $this->input->post('lbp_sklh_kabupaten'),
                'lbp_sklh_tahunlulus' => $this->input->post('lbp_sklh_tahunlulus'),
                'lbp_sklh_nisn' => $this->input->post('lbp_sklh_nisn'),
                'lbp_sklh_npusklh' => $this->input->post('lbp_sklh_npusklh'),
                'raport_bi_1' => $this->input->post('raport_bi_1'),
                'raport_bi_2' => $this->input->post('raport_bi_2'),
                'raport_bi_3' => $this->input->post('raport_bi_3'),
                'raport_ipa_1' => $this->input->post('raport_ipa_1'),
                'raport_ipa_2' => $this->input->post('raport_ipa_2'),
                'raport_ipa_3' => $this->input->post('raport_ipa_3'),
                'raport_mtk_1' => $this->input->post('raport_mtk_1'),
                'raport_mtk_2' => $this->input->post('raport_mtk_2'),
                'raport_mtk_3' => $this->input->post('raport_mtk_3'),
                'raport_pai_1' => $this->input->post('raport_pai_1'),
                'raport_pai_2' => $this->input->post('raport_pai_2'),
                'raport_pai_3' => $this->input->post('raport_pai_3'),
                'prestasi_nonakademik_jenis_1' => $this->input->post('prestasi_nonakademik_jenis_1'),
                'prestasi_nonakademik_jenis_2' => $this->input->post('prestasi_nonakademik_jenis_2'),
                'prestasi_nonakademik_peringkat_kec_1' => $this->input->post('prestasi_nonakademik_peringkat_kec_1'),
                'prestasi_nonakademik_peringkat_kec_2' => $this->input->post('prestasi_nonakademik_peringkat_kec_2'),
                'prestasi_nonakademik_peringkat_kab_1' => $this->input->post('prestasi_nonakademik_peringkat_kab_1'),
                'prestasi_nonakademik_peringkat_kab_2' => $this->input->post('prestasi_nonakademik_peringkat_kab_2'),
                'prestasi_nonakademik_peringkat_prov_1' => $this->input->post('prestasi_nonakademik_peringkat_prov_1'),
                'prestasi_nonakademik_peringkat_prov_2' => $this->input->post('prestasi_nonakademik_peringkat_prov_2'),
                'prestasi_nonakademik_peringkat_nasi_1' => $this->input->post('prestasi_nonakademik_peringkat_nasi_1'),
                'prestasi_nonakademik_peringkat_nasi_2' => $this->input->post('prestasi_nonakademik_peringkat_nasi_2'),
                'prestasi_akademik_jenis_1' => $this->input->post('prestasi_akademik_jenis_1'),
                'prestasi_akademik_jenis_2' => $this->input->post('prestasi_akademik_jenis_2'),
                'prestasi_akademik_peringkat_kec_1' => $this->input->post('prestasi_akademik_peringkat_kec_1'),
                'prestasi_akademik_peringkat_kec_2' => $this->input->post('prestasi_akademik_peringkat_kec_2'),
                'prestasi_akademik_peringkat_kab_1' => $this->input->post('prestasi_akademik_peringkat_kab_1'),
                'prestasi_akademik_peringkat_kab_2' => $this->input->post('prestasi_akademik_peringkat_kab_2'),
                'prestasi_akademik_peringkat_prov_1' => $this->input->post('prestasi_akademik_peringkat_prov_1'),
                'prestasi_akademik_peringkat_prov_2' => $this->input->post('prestasi_akademik_peringkat_prov_2'),
                'prestasi_akademik_peringkat_nasi_1' => $this->input->post('prestasi_akademik_peringkat_nasi_1'),
                'prestasi_akademik_peringkat_nasi_2' => $this->input->post('prestasi_akademik_peringkat_nasi_2'),
                'prestasi_hafaljus' => $this->input->post('prestasi_hafaljus'),
                'status' => 'belumdiperiksa',
            ];

            $urutan = null;
            if($urutan_max = $this->M_pendaftaran->get_urutan($this->input->post('siswa_kelamin'),$this->input->post('dari_sekolah'))){
                if(count($urutan_max) > 0){
                    $urutan = $urutan_max[0]['urutan'] + 1;
                }
                else{
                    $urutan = 1;
                }
            }

            $data_kartu = [
                $this->input->post('siswa_kelamin'),
                $this->input->post('dari_sekolah'),
                $urutan
            ];

            if ($this->input->post('dari_sekolah') == 'sd') {

                if ($last_id = $this->M_pendaftaran->insert($data,$data_kartu)) {
                    $this->load->view('u/template/V_header');
		            $this->load->view('u/v_sukses',['id' => $last_id]);		            
		            $this->load->view('u/template/V_footer');
                }

                else{
                    $this->load->view('u/template/V_header');
		            $this->load->view('u/v_gagal',['gagal'=>'Terjadi kesalahan']);
		            $this->load->view('u/template/V_footer');
                }
            }
            else if($this->input->post('dari_sekolah') == 'mi'){
                $data2 = [
                    'raport_akiakh_1' => $this->input->post('raport_akiakh_1'),
                    'raport_akiakh_2' => $this->input->post('raport_akiakh_2'),
                    'raport_akiakh_3' => $this->input->post('raport_akiakh_3'),
                    'raport_qh_1' => $this->input->post('raport_qh_1'),
                    'raport_qh_2' => $this->input->post('raport_qh_2'),
                    'raport_qh_3' => $this->input->post('raport_qh_3'),
                    'raport_fiqih_1' => $this->input->post('raport_fiqih_1'),
                    'raport_fiqih_2' => $this->input->post('raport_fiqih_2'),
                    'raport_fiqih_3' => $this->input->post('raport_fiqih_3'),
                    'raport_ski_1' => $this->input->post('raport_ski_1'),
                    'raport_ski_2' => $this->input->post('raport_ski_2'),
                    'raport_ski_3' => $this->input->post('raport_ski_3'),
                    'ijazah_tpqsk' => $this->input->post('ijazah_tpqsk'),
                    'ijazah_mdask' => $this->input->post('ijazah_mdask')
                ];
                $data = array_merge($data,$data2);

                if ($last_id = $this->M_pendaftaran->insert($data,$data_kartu)) {
                    $this->load->view('u/template/V_header');
		            $this->load->view('u/v_sukses',['id' => $last_id]);
		            $this->load->view('u/template/V_footer');
                }
                else{
                    $this->load->view('u/template/V_header');
		            $this->load->view('u/v_gagal',['gagal'=>'Terjadi kesalahan']);
		            $this->load->view('u/template/V_footer');
                }
            }
        }
        else{
            redirect(base_url());
        }
    }
}
