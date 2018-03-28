<div class="row container">
    <section class="content-header">
        <h1>Setting PPDB (YYY-MM-DD)</h1>
        <br>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url()?>admin">
                    <i class="fa fa-dashboard"></i> Setting</a>
            </li>
        </ol>
    </section>
    <form style="width: 300px;padding: 15px;" method="post" action="<?php echo base_url() ?>admin/setting/update">
        <div class="form-group">
            <label for="">Mulai Tanggal</label>
            <input value="<?php echo $data['mulai'] ?>" required type="text" name="mulai" class="form-control datepicker" id="" placeholder="username">
        </div>
        <div class="form-group">
            <label for="">Selesai Tanggal</label>
            <input value="<?php echo $data['selesai'] ?>" required type="selesai" name="selesai" class="form-control datepicker" id="" placeholder="password">
        </div>
        <button onclick="" type="submit" name="submit" value="submit"
            class="btn btn-primary">Update Setting</button>
    </form>
</div>