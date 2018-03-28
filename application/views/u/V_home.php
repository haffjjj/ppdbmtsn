<?php 
function date_convert($source){
    $date = new DateTime($source);
    return $date->format('d-m-Y'); // 31-07-2012
}

?>


<?php if($ppdb == 'dalam') :?>
<div class="title-main">
    <h3>Selamat Datang di PPDB MTS Negeri 1 Tegal</h3>
</div>
<div class="home-title title-pendaftaran">
    <h3>Silahkan pilih asal sekolah</h3>
    <div class="line"></div>
</div>
<div class="sekolah-asal">
    <a href="<?php echo base_url()?>pendaftaran/sd">saya dari SD</a>
    <a href="<?php echo base_url()?>pendaftaran/mi">saya dari MI</a>
</div>
<br>
<br>
<h5 align="center">*PPDB dibuka <?php echo date_convert($date['mulai']) ?> Sampai <?php echo date_convert($date['selesai']) ?></h5>

<?php elseif($ppdb == 'belum') :?>
<div class="title-main">
    <h3>PPDB dibuka tanggal <?php echo date_convert($date['mulai']) ?> Sampai <?php echo date_convert($date['selesai']) ?></h3>
</div>

<?php elseif($ppdb == 'selesai') :?>
<div class="title-main">
    <h3>PPDB MTs Negeri 1 Tegal Sudah Ditutup</h3>
</div>
<?php endif ?>
