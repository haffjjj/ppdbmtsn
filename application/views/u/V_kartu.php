<?php 
$bulan = array(
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'Novermber',
    '12' => 'Desember',
);
?>
<!DOCTYPE html>
<html lang="en">
<style>
    body {
        font-family: sans-serif;
    }

    img {
        width: 710px;
    }

    .title {
        background-color: #157b41;
        padding: 2px;
        margin-top: 20px;
    }

    .title>h2 {
        text-align: center;
        color: white;
    }

    .title-sub {
        text-align: center;
        line-height: 7px;
        font-size: 15px;
    }
</style>

<body>
    <p style="text-align:right "><?php date_default_timezone_set('Asia/Jakarta');echo date('d-m-Y H:i:s');?></p>
    <img src="<?php echo base_url()?>_assets/images/logo_kartu.png" alt="">
    <div class="title">
        <h2 style="text-align:center; color:white;">Kartu Peserta</h2>
    </div>
    <hr>
    <br>
    <br>
    <table cellpadding="10" width="100%">
        <tr>
            <td>
                <div style="" class="img">
                    <img style="max-width:180px;" src="<?php echo base_url() ?>uploads/<?php echo $data['siswa_foto'] ?>" alt="">
                </div>
            </td>
            <td>
                <div style="">
                    <div class="peserta-data">
                        <h5>Data Peserta UJIAN</h5>
                        <br>
                        <table>
                            <tr>
                                <td>Nomor Peserta</td>
                                <td>:</td>
                                <td><?php echo str_pad($data['urutan'], 4, '0', STR_PAD_LEFT); ?>/PPDB/<?php 
                                echo strtoupper($data['dari_sekolah']);
                                if($data['siswa_kelamin'] == 'laki laki'){
                                    echo 'PA';
                                }
                                else{
                                    echo 'PI';
                                }
                                ?>/2018</td>
                            </tr>
                            <tr>
                                <td>Nama Peserta</td>
                                <td>:</td>
                                <td><?php echo $data['siswa_namalengkap'] ?></td>
                            </tr>
                            <tr>
                                <td>NISN</td>
                                <td>:</td>
                                <td><?php echo $data['lbp_sklh_nisn'] ?></td>
                            </tr>
                            <tr>
                                <td>Asal Sekolah</td>
                                <td>:</td>
                                <td><?php echo $data['lbp_sklh_nama'] ?></td>
                            </tr>
                        </table>
                        <br>
                        <h5>Informasi : http://mtsn1tegal.sch.id</h5>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <hr>
    <table border="1" cellpadding="10" cellspacing="0" width='100%'>
        <tr>
            <th>Waktu Pelaksanaan UJIAN</th>
            <th>Lokasi UJIAN</th>
        </tr>
        <tr>
            <td align="center">29 April 2018</td>
            <td align="center">MTS Negeri 1 Tegal</td>
        </tr>
    </table>
    <br>
    <br>
    <p style="margin-left: 470px;line-height: 1px;font-size: 13px;">Babakan,  <?php echo date('d').' '.$bulan[date('m')].' '.date('Y')?></p>
    <img style="width:650px;" src="<?php echo base_url()?>_assets/images/footer.png" alt="">
</body>

</html>