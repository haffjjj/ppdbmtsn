<div class="row container">
    <section class="content-header">
        <h1>User</h1>
        <br>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url()?>admin">
                    <i class="fa fa-dashboard"></i> User</a>
            </li>
        </ol>
    </section>
    <form style="width: 300px;padding: 15px;" method="post" action="<?php echo base_url() ?>admin/user/update">
        <div class="form-group">
            <label for="">Username</label>
            <input value="<?php echo $data['username'] ?>" required type="text" name="username" class="form-control" id="" placeholder="username">
        </div>
        <div class="form-group">
            <label for="">New Password</label>
            <input value="" required type="text" name="password" class="form-control" id="" placeholder="password">
        </div>
        <button onclick="return confirm('Pastikan anda mengingat username dan password baru');" type="submit" name="submit" value="submit"
            class="btn btn-primary">Update User</button>

    </form>
</div>