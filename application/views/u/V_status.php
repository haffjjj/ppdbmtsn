<div class="title-main">
    <h3>Cek Status Pendaftaran</h3>
</div>

<form class="form-inline form-cek-pin" method="GET" action="<?php echo base_url() ?>cek">
    <div class="form-group mx-sm-3 mb-2">
        <label for="inputPassword2" class="sr-only">masukan PIN</label>
        <input value="<?php if(isset($_GET['pin'])) {echo $_GET['pin'];}?>" style="text-transform:uppercase" type="text" name="pin"
            class="form-control" id="" placeholder="PIN Anda" required>
    </div>
    <button type="submit" class="btn btn-primary mb-2 btn-search">Cek</button>
    <p>Masukan PIN yang anda peroleh dari pendaftaran</p>

</form>