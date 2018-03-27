<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->model('M_pendaftaran');
    }

    public function index(){
        $data = $this->M_admin->get_peserta();
        // var_dump($data);
        $this->load->view('a/template/V_header');
        
        $this->load->view('a/V_peserta',['data'=> $data]);
        
        $script = '<script>
		function viewedit(id,sekolah){
		  $.ajax({url: "'.base_url().'admin/peserta/view/"+id+"/"+sekolah, success: function(result){
					$("#viewedit").html(result);
		  }});
        }
        function tambahsd(){
            $.ajax({url: "'.base_url().'admin/peserta/tambah/sd", success: function(result){
                      $("#tambahsd").html(result);
            }});
          }
          function tambahmi(){
            $.ajax({url: "'.base_url().'admin/peserta/tambah/mi", success: function(result){
                      $("#tambahmi").html(result);
            }});
          }
		</script>';
		$this->load->view('a/template/V_footer',['script'=>$script]);
    }

    public function tambah($sekolah){
        if($sekolah == 'sd'){
            $this->load->view('a/v_tambah_sd');
        }
        elseif($sekolah == 'mi'){
            $this->load->view('a/v_tambah_mi');            
        }
        else{
            echo 'error';
        }
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
                'lbp_sklh_kodepos' => $this->input->post('lbp_sklh_kodepos'),
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
                // var_dump($urutan_max);
                // die;
                if(count($urutan_max) > 0){
                    $urutan = $urutan_max[0]['urutan'] + 1;
                }
                else{
                    $urutan = 1;
                }
            }

            // $data_kartu = [
            //     // $this->input->post('siswa_kelamin'),
            //     // $this->input->post('dari_sekolah'),
            //     $urutan
            // ];

            if ($this->input->post('dari_sekolah') == 'sd') {

                if ($last_id = $this->M_pendaftaran->insert($data,$urutan)) {
                   redirect(base_url().'admin');
                }

                else{
                    echo 'error';
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

                if ($last_id = $this->M_pendaftaran->insert($data,$urutan)) {
                    redirect(base_url().'admin');
                }
                else{
                    echo 'error';
                }
            }
        }
        else{
            redirect(base_url());
        }
    }

    public function view($id,$sekolah){
        $data = $this->M_admin->get_peserta_data($id);

        
        if($sekolah == 'sd'){
            // echo 'SD';
            $this->load->view('a/V_peserta_view_sd',['data'=>$data[0]]);
            // var_dump($data);
        }
        elseif($sekolah == 'mi'){
            // echo 'SD';
            $this->load->view('a/V_peserta_view_mi',['data'=>$data[0]]);
            
        }
        else{
            redirect(base_url().'admin/peserta/');
        }
    }

    public function view_update_foto(){
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 500;

        $this->load->library('upload', $config);

        if ( !$this->upload->do_upload('siswa_foto'))
        {
                $error = array('error' => $this->upload->display_errors());
                echo 'foto gagal diupload, data tidak sesuai';                
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
        }

        $id = $this->input->post('id');
        $foto = $this->upload->data('file_name');

        if($this->M_admin->peserta_foto_update($id,$foto) == 1){
            redirect(base_url().'admin/peserta');
        }
        else{
            echo 'gagal';
            
        }

    }

    public function view_update(){
        $id = $this->input->post('id');
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
            'lbp_sklh_kodepos' => $this->input->post('lbp_sklh_kodepos'),
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
            'status' => $this->input->post('status'),
        ];

        if($this->M_admin->peserta_update($data,$id) == 1){
            redirect(base_url().'admin/peserta');
        }
        else{
            echo 'gagal';
        }
    }

    public function delete($id){
        if($this->M_admin->delete_tb_siswa($id) == 1){
            redirect(base_url().'admin/peserta');
        }
        else{
            echo 'gagal';
        }
    }

    public function to_excel(){
        require(APPPATH.'third_party/PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH.'third_party/PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $data = $this->M_admin->get_peserta_all();

        $objPHPExcel = new PHPExcel();

        $objPHPExcel->getProperties()->setCreator("Ismo Broto")
            ->setLastModifiedBy("Ismo Broto")
            ->setTitle("Export PHPExcel Test Document")
            ->setSubject("Export PHPExcel Test Document")
            ->setDescription("Test doc for Office 2007 XLSX, generated by PHPExcel.")
            ->setKeywords("office 2007 openxml php")
            ->setCategory("PHPExcel");
      
        $objPHPExcel->setActiveSheetIndex(0);

        $objPHPExcel->getActiveSheet()->SetCellValue('A1','Nomor Pendaftaran');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1','Dari Sekolah');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1','Nama Lengkap');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1','Kelamin');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1','Tempat Lahir');
        $objPHPExcel->getActiveSheet()->SetCellValue('F1','Tanggal Lahir');
        $objPHPExcel->getActiveSheet()->SetCellValue('G1','Anak Ke');
        $objPHPExcel->getActiveSheet()->SetCellValue('H1','Hobi');
        $objPHPExcel->getActiveSheet()->SetCellValue('I1','Jarak Rumah');
        $objPHPExcel->getActiveSheet()->SetCellValue('J1','Alamat Jalan');
        $objPHPExcel->getActiveSheet()->SetCellValue('K1','Alamat Desa');
        $objPHPExcel->getActiveSheet()->SetCellValue('L1','Alamat Kecamatan');
        $objPHPExcel->getActiveSheet()->SetCellValue('M1','Alamat Kabupaten');
        $objPHPExcel->getActiveSheet()->SetCellValue('N1','Alamat Kode Pos');
        $objPHPExcel->getActiveSheet()->SetCellValue('O1','Email');
        $objPHPExcel->getActiveSheet()->SetCellValue('P1','Siswa NIK');
        $objPHPExcel->getActiveSheet()->SetCellValue('Q1','Siswa Foto');
        $objPHPExcel->getActiveSheet()->SetCellValue('R1','Ayah Nama Lengkap');
        $objPHPExcel->getActiveSheet()->SetCellValue('S1','Ayah Tempat Lahir');
        $objPHPExcel->getActiveSheet()->SetCellValue('T1','Ayah Tanggal Lahir');
        $objPHPExcel->getActiveSheet()->SetCellValue('U1','Ayah Pendidikan Terahir');
        $objPHPExcel->getActiveSheet()->SetCellValue('V1','Ayah Pekerjaan');
        $objPHPExcel->getActiveSheet()->SetCellValue('W1','Ayah Penghasilan');
        $objPHPExcel->getActiveSheet()->SetCellValue('X1','Ayah Telephone');
        $objPHPExcel->getActiveSheet()->SetCellValue('Y1','Ayah NIK');
        $objPHPExcel->getActiveSheet()->SetCellValue('Z1','Ibu Nama Lengkap');
        $objPHPExcel->getActiveSheet()->SetCellValue('AA1','Ibu Tempat Lahir');
        $objPHPExcel->getActiveSheet()->SetCellValue('AB1','Ibu Tanggal Lahir');
        $objPHPExcel->getActiveSheet()->SetCellValue('AC1','Ibu Pendidikan Terakhir');
        $objPHPExcel->getActiveSheet()->SetCellValue('AD1','Ibu Pekerjaan');
        $objPHPExcel->getActiveSheet()->SetCellValue('AE1','Ibu Penghasilan');
        $objPHPExcel->getActiveSheet()->SetCellValue('AF1','Ibu Telephone');
        $objPHPExcel->getActiveSheet()->SetCellValue('AG1','Ibu NIK');
        $objPHPExcel->getActiveSheet()->SetCellValue('AH1','Nomor Kartu Keluarga');
        $objPHPExcel->getActiveSheet()->SetCellValue('AI1','Nomor Keluarga Pra Sejahtera');
        $objPHPExcel->getActiveSheet()->SetCellValue('AJ1','Nomor Induk Program Keluarga Harapan');
        $objPHPExcel->getActiveSheet()->SetCellValue('AK1','Sekolah Nama');
        $objPHPExcel->getActiveSheet()->SetCellValue('AL1','Sekolah Desa');
        $objPHPExcel->getActiveSheet()->SetCellValue('AM1','Sekolah Kecamatan');
        $objPHPExcel->getActiveSheet()->SetCellValue('AN1','Sekolah Kabupaten');
        $objPHPExcel->getActiveSheet()->SetCellValue('AO1','Sekolah Kode POS');
        $objPHPExcel->getActiveSheet()->SetCellValue('AP1','Sekolah Tahun Lulus');
        $objPHPExcel->getActiveSheet()->SetCellValue('AQ1','NISN');
        $objPHPExcel->getActiveSheet()->SetCellValue('AR1','Nomor Peserta UJIAN');
        $objPHPExcel->getActiveSheet()->SetCellValue('AS1','Raport BI 1');
        $objPHPExcel->getActiveSheet()->SetCellValue('AT1','Raport BI 2');
        $objPHPExcel->getActiveSheet()->SetCellValue('AU1','Raport BI 3');
        $objPHPExcel->getActiveSheet()->SetCellValue('AV1','Raport IPA 1');
        $objPHPExcel->getActiveSheet()->SetCellValue('AW1','Raport IPA 2');
        $objPHPExcel->getActiveSheet()->SetCellValue('AX1','Raport IPA 3');
        $objPHPExcel->getActiveSheet()->SetCellValue('AY1','Raport MTK 1');
        $objPHPExcel->getActiveSheet()->SetCellValue('AZ1','Raport MTK 2');
        $objPHPExcel->getActiveSheet()->SetCellValue('BA1','Raport MTK 3');
        $objPHPExcel->getActiveSheet()->SetCellValue('BB1','Raport PAI 1');
        $objPHPExcel->getActiveSheet()->SetCellValue('BC1','Raport PAI 2');
        $objPHPExcel->getActiveSheet()->SetCellValue('BD1','Raport PAI 3');
        $objPHPExcel->getActiveSheet()->SetCellValue('BE1','Raport Akidah Akhlak 1');
        $objPHPExcel->getActiveSheet()->SetCellValue('BF1','Raport Akidah Akhlak 2');
        $objPHPExcel->getActiveSheet()->SetCellValue('BG1','Raport Akidah Akhlak 3');
        $objPHPExcel->getActiveSheet()->SetCellValue('BH1','Raport Quran Hadist 1');
        $objPHPExcel->getActiveSheet()->SetCellValue('BI1','Raport Quran Hadist 2');
        $objPHPExcel->getActiveSheet()->SetCellValue('BJ1','Raport Quran Hadist 3');
        $objPHPExcel->getActiveSheet()->SetCellValue('BK1','Raport Fiqih 1');
        $objPHPExcel->getActiveSheet()->SetCellValue('BL1','Raport Fiqih 2');
        $objPHPExcel->getActiveSheet()->SetCellValue('BM1','Raport Fiqih 3');
        $objPHPExcel->getActiveSheet()->SetCellValue('BN1','Raport SKI 1');
        $objPHPExcel->getActiveSheet()->SetCellValue('BO1','Raport SKI 2');
        $objPHPExcel->getActiveSheet()->SetCellValue('BP1','Raport SKI 3');
        $objPHPExcel->getActiveSheet()->SetCellValue('BQ1','Ijazah TPQ/Surah Keterangan');
        $objPHPExcel->getActiveSheet()->SetCellValue('BR1','Ijazah MDA/Surah Keterangan');
        $objPHPExcel->getActiveSheet()->SetCellValue('BS1','Prestasi nonAkademik jenis_1');
        $objPHPExcel->getActiveSheet()->SetCellValue('BT1','Prestasi nonAkademik jenis_2');
        $objPHPExcel->getActiveSheet()->SetCellValue('BU1','Prestasi nonAkademik Peringkat Kecamatan 1');
        $objPHPExcel->getActiveSheet()->SetCellValue('BV1','Prestasi nonAkademik Peringkat Kecamatan 2');
        $objPHPExcel->getActiveSheet()->SetCellValue('BW1','Prestasi nonAkademik Peringkat Kabupaten 1');
        $objPHPExcel->getActiveSheet()->SetCellValue('BX1','Prestasi nonAkademik Peringkat Kabupaten 2');
        $objPHPExcel->getActiveSheet()->SetCellValue('BY1','Prestasi nonAkademik Peringkat Provinsi 1');
        $objPHPExcel->getActiveSheet()->SetCellValue('BZ1','Prestasi nonAkademik Peringkat Provinsi 2');
        $objPHPExcel->getActiveSheet()->SetCellValue('CA1','Prestasi nonAkademik Peringkat Nasional 1');
        $objPHPExcel->getActiveSheet()->SetCellValue('CB1','Prestasi nonAkademik Peringkat Nasional 2');
        $objPHPExcel->getActiveSheet()->SetCellValue('CC1','Prestasi Akademik jenis_1');
        $objPHPExcel->getActiveSheet()->SetCellValue('CD1','Prestasi Akademik jenis_2');
        $objPHPExcel->getActiveSheet()->SetCellValue('CE1','Prestasi Akademik Peringkat Kecamatan 1');
        $objPHPExcel->getActiveSheet()->SetCellValue('CF1','Prestasi Akademik Peringkat Kecamatan 2');
        $objPHPExcel->getActiveSheet()->SetCellValue('CG1','Prestasi Akademik Peringkat Kabupaten 1');
        $objPHPExcel->getActiveSheet()->SetCellValue('CH1','Prestasi Akademik Peringkat Kabupaten 2');
        $objPHPExcel->getActiveSheet()->SetCellValue('CI1','Prestasi Akademik Peringkat Provinsi 1');
        $objPHPExcel->getActiveSheet()->SetCellValue('CJ1','Prestasi Akademik Peringkat Provinsi 2');
        $objPHPExcel->getActiveSheet()->SetCellValue('CK1','Prestasi Akademik Peringkat Nasional 1');
        $objPHPExcel->getActiveSheet()->SetCellValue('CL1','Prestasi Akademik Peringkat Nasional 2');
        $objPHPExcel->getActiveSheet()->SetCellValue('CM1','Prestasi Hafal 1 Juz');
        $objPHPExcel->getActiveSheet()->SetCellValue('CN1','Status');

        $row = 2;
        foreach($data as $value){
            $objPHPExcel->getActiveSheet()->SetCellValue('A'.$row,$value['id']);
            $objPHPExcel->getActiveSheet()->SetCellValue('B'.$row,$value['dari_sekolah']);
            $objPHPExcel->getActiveSheet()->SetCellValue('C'.$row,$value['siswa_namalengkap']);
            $objPHPExcel->getActiveSheet()->SetCellValue('D'.$row,$value['siswa_kelamin']);
            $objPHPExcel->getActiveSheet()->SetCellValue('E'.$row,$value['siswa_tempatlahir']);
            $objPHPExcel->getActiveSheet()->SetCellValue('F'.$row,$value['siswa_tanggallahir']);
            $objPHPExcel->getActiveSheet()->SetCellValue('G'.$row,$value['siswa_anakke']);
            $objPHPExcel->getActiveSheet()->SetCellValue('H'.$row,$value['siswa_hobi']);
            $objPHPExcel->getActiveSheet()->SetCellValue('I'.$row,$value['siswa_jarakrumah']);
            $objPHPExcel->getActiveSheet()->SetCellValue('J'.$row,$value['siswa_alamat_jalan']);
            $objPHPExcel->getActiveSheet()->SetCellValue('K'.$row,$value['siswa_alamat_desa']);
            $objPHPExcel->getActiveSheet()->SetCellValue('L'.$row,$value['siswa_alamat_kecamatan']);
            $objPHPExcel->getActiveSheet()->SetCellValue('M'.$row,$value['siswa_alamat_kabupaten']);
            $objPHPExcel->getActiveSheet()->SetCellValue('N'.$row,$value['siswa_alamat_kodepos']);
            $objPHPExcel->getActiveSheet()->SetCellValue('O'.$row,$value['siswa_email']);
            $objPHPExcel->getActiveSheet()->SetCellValue('P'.$row,$value['siswa_nik']);
            $objPHPExcel->getActiveSheet()->SetCellValue('Q'.$row,$value['siswa_foto']);
            $objPHPExcel->getActiveSheet()->SetCellValue('R'.$row,$value['ayah_namalengkap']);
            $objPHPExcel->getActiveSheet()->SetCellValue('S'.$row,$value['ayah_tempatlahir']);
            $objPHPExcel->getActiveSheet()->SetCellValue('T'.$row,$value['ayah_tanggallahir']);
            $objPHPExcel->getActiveSheet()->SetCellValue('U'.$row,$value['ayah_pendidikanterakhir']);
            $objPHPExcel->getActiveSheet()->SetCellValue('V'.$row,$value['ayah_pekerjaan']);
            $objPHPExcel->getActiveSheet()->SetCellValue('W'.$row,$value['ayah_penghasilan']);
            $objPHPExcel->getActiveSheet()->SetCellValue('X'.$row,$value['ayah_telephone']);
            $objPHPExcel->getActiveSheet()->SetCellValue('Y'.$row,$value['ayah_nik']);
            $objPHPExcel->getActiveSheet()->SetCellValue('Z'.$row,$value['ibu_namalengkap']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AA'.$row,$value['ibu_tempatlahir']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AB'.$row,$value['ibu_tanggallahir']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AC'.$row,$value['ibu_pendidikanterakhir']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AD'.$row,$value['ibu_pekerjaan']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AE'.$row,$value['ibu_penghasilan']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AF'.$row,$value['ibu_telephone']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AG'.$row,$value['ibu_nik']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AH'.$row,$value['keluarga_nik']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AI'.$row,$value['keluarga_ksp']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AJ'.$row,$value['keluarga_pkh']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AK'.$row,$value['lbp_sklh_nama']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AL'.$row,$value['lbp_sklh_desa']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AM'.$row,$value['lbp_sklh_kecamatan']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AN'.$row,$value['lbp_sklh_kabupaten']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AO'.$row,$value['lbp_sklh_kodepos']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AP'.$row,$value['lbp_sklh_tahunlulus']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AQ'.$row,$value['lbp_sklh_nisn']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AR'.$row,$value['lbp_sklh_npusklh']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AS'.$row,$value['raport_bi_1']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AT'.$row,$value['raport_bi_2']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AU'.$row,$value['raport_bi_3']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AV'.$row,$value['raport_ipa_1']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AW'.$row,$value['raport_ipa_2']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AX'.$row,$value['raport_ipa_3']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AY'.$row,$value['raport_mtk_1']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AZ'.$row,$value['raport_mtk_2']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BA'.$row,$value['raport_mtk_3']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BB'.$row,$value['raport_pai_1']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BC'.$row,$value['raport_pai_2']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BD'.$row,$value['raport_pai_3']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BE'.$row,$value['raport_akiakh_1']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BF'.$row,$value['raport_akiakh_2']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BG'.$row,$value['raport_akiakh_3']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BH'.$row,$value['raport_qh_1']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BI'.$row,$value['raport_qh_2']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BJ'.$row,$value['raport_qh_3']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BK'.$row,$value['raport_fiqih_1']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BL'.$row,$value['raport_fiqih_2']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BM'.$row,$value['raport_fiqih_3']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BN'.$row,$value['raport_ski_1']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BO'.$row,$value['raport_ski_2']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BP'.$row,$value['raport_ski_3']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BQ'.$row,$value['ijazah_tpqsk']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BR'.$row,$value['ijazah_mdask']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BS'.$row,$value['prestasi_nonakademik_jenis_1']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BT'.$row,$value['prestasi_nonakademik_jenis_2']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BU'.$row,$value['prestasi_nonakademik_peringkat_kec_1']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BV'.$row,$value['prestasi_nonakademik_peringkat_kec_2']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BW'.$row,$value['prestasi_nonakademik_peringkat_kab_1']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BX'.$row,$value['prestasi_nonakademik_peringkat_kab_2']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BY'.$row,$value['prestasi_nonakademik_peringkat_prov_1']);
            $objPHPExcel->getActiveSheet()->SetCellValue('BZ'.$row,$value['prestasi_nonakademik_peringkat_prov_2']);
            $objPHPExcel->getActiveSheet()->SetCellValue('CA'.$row,$value['prestasi_nonakademik_peringkat_nasi_1']);
            $objPHPExcel->getActiveSheet()->SetCellValue('CB'.$row,$value['prestasi_nonakademik_peringkat_nasi_2']);
            $objPHPExcel->getActiveSheet()->SetCellValue('CC'.$row,$value['prestasi_akademik_jenis_1']);
            $objPHPExcel->getActiveSheet()->SetCellValue('CD'.$row,$value['prestasi_akademik_jenis_2']);
            $objPHPExcel->getActiveSheet()->SetCellValue('CE'.$row,$value['prestasi_akademik_peringkat_kec_1']);
            $objPHPExcel->getActiveSheet()->SetCellValue('CF'.$row,$value['prestasi_akademik_peringkat_kec_2']);
            $objPHPExcel->getActiveSheet()->SetCellValue('CG'.$row,$value['prestasi_akademik_peringkat_kab_1']);
            $objPHPExcel->getActiveSheet()->SetCellValue('CH'.$row,$value['prestasi_akademik_peringkat_kab_2']);
            $objPHPExcel->getActiveSheet()->SetCellValue('CI'.$row,$value['prestasi_akademik_peringkat_prov_1']);
            $objPHPExcel->getActiveSheet()->SetCellValue('CJ'.$row,$value['prestasi_akademik_peringkat_prov_2']);
            $objPHPExcel->getActiveSheet()->SetCellValue('CK'.$row,$value['prestasi_akademik_peringkat_nasi_1']);
            $objPHPExcel->getActiveSheet()->SetCellValue('CL'.$row,$value['prestasi_akademik_peringkat_nasi_2']);
            $objPHPExcel->getActiveSheet()->SetCellValue('CM'.$row,$value['prestasi_hafaljus']);
            $objPHPExcel->getActiveSheet()->SetCellValue('CN'.$row,$value['status']);
            
            $row++;
        }

        $objPHPExcel->getActiveSheet()->setTitle('Data Peserta');
        
        $objWriter  = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        header('Last-Modified:'. gmdate("D, d M Y H:i:s").'GMT');
        header('Chace-Control: no-store, no-cache, must-revalation');
        header('Chace-Control: post-check=0, pre-check=0', FALSE);
        header('Pragma: no-cache');
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="ExportDataOrangPHPExcel'. date('Ymd') .'.xlsx"');
        
        $objWriter->save('php://output');
    }
}