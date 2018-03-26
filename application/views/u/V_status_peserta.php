<div class="title-pendaftaran">
    <h3>Info Calon Peserta Didik</h3>
    <div class="line"></div>
</div>
<?php if(count($data) > 0) : ?>
<table class="table">
    <tr>
        <td>
            <label for="">Foto Peserta</label>
        </td>
        <td>:</td>
        <td>
            <img class="foto-peserta" src="<?php echo base_url() ?>uploads/<?php echo $data[0]['siswa_foto'] ?>" alt="">
        </td>
    </tr>
    <tr>
        <td>
            <label for="">Nama Lengkap</label>
        </td>
        <td>:</td>
        <td>
            <h4><?php echo $data[0]['siswa_namalengkap'] ?></h4>
        </td>
    </tr>
    <tr>
        <td>
            <label for=""><?php echo $data[0]['siswa_kelamin'] ?></label>
        </td>
        <td>:</td>
        <td>
            <h4>Laki Laki</h4>
        </td>
    </tr>
    <tr>
        <td>
            <label for="">Sekolah</label>
        </td>
        <td>:</td>
        <td>
            <h4><?php echo $data[0]['lbp_sklh_nama'] ?></h4>
        </td>
    </tr>
    <tr>
        <td>
            <label for="">Status</label>
        </td>
        <td>:</td>
        <td>
            <?php if($data[0]['status'] == 'belumdiperiksa') : ?>
            <div class="check-status false">
                <h4 class="">Belum di Cek</h4>
            </div>
            <p style="display:inline-block;">Data masih menunggu antrian</p>
            <?php elseif($data[0]['status'] == 'sudahdiperiksa') : ?>
            <div class="check-status true">
                <h4 class="">Sudah diperiksa</h4>
            </div>
            <p style="display:inline-block;">Silahkan download kartu Peserta</p>
            <?php endif ?>
        </td>
    </tr>
</table>

<?php if($data[0]['status'] == 'sudahdiperiksa') : ?>
    <p class="kartu-download">
        <a href="<?php echo base_url() ?>cek/to_pdf?pin=<?php echo $_GET['pin'] ?>">Download Kartu Peserta</a>
    </p>
<?php endif ?>

<?php else : ?>

<h2>Maaf PIN tidak ditemukan, silahkan hubungi panitia</h2>
<?php endif; ?>