<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <a href="" class="avatar">
                    <?php if(isset($profile) && !empty($profile)){ ?>
                        <img src="<?php echo base_url() ?>upload/<?php echo $profile['avatar'] ?>" alt="ảnh đại diện"/>
                    <?php } else { ?>
                        <img src="<?php echo base_url() ?>assets/image/avatar.png" alt="ảnh đại diện"/>
                    <?php } ?>
                </a>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <div class="row">
                            <input type="file" name="file" class="form-control" style="border-radius: 0px;width: 100%;display: inline-block; overflow: hidden"/>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <input type="submit" value="Cập nhật" class="btn btn-info" name="up" style="border-radius: 0px; overflow: hidden; display: inline-block; width: 100%"/>
                        </div>
                    </div>
                </form>
            </div>
            <div class="table-responsive">
                <form action="" method="post" class="navbar-form">
                    <table class="table table-bordered">
                        <tr>
                            <td width="25%">Tên của bạn : </td>
                            <td width="75%"><input type="text" name="username" class="form-control" value="<?php echo $profile['username'] ?>" width="100%"/>
                                <span style="color: red;"><?php echo form_error('username'); ?></span>
                            </td>

                        </tr>
                        <tr>
                            <td>Ngày sinh : </td>
                            <td><input type="date" class="form-control" name="date" value="<?php echo $profile['date'] ?>"/>
                                <span style="color: red;"><?php echo form_error('date'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Email : </td>
                            <td><input type="text" class="form-control" name="email" value="<?php echo $profile['email'] ?>" readonly=""/>
                                <span style="color: red;"><?php echo form_error('email'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Địa chỉ : </td>
                            <td><textarea name="address" id="" class="form-control" ><?php echo $profile['address'] ?></textarea>
                                <span style="color: red;"><?php echo form_error('address'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Mô tả bản thân : </td>
                            <td><textarea name="description" id="" class="form-control" ><?php echo $profile['description'] ?></textarea>
                                <span style="color: red;"><?php echo form_error('description'); ?></span>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" name="update" class="btn btn-success pull-right" value="Cập nhật profile"/>
                </form>

            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<style type="text/css">
    .container-fluid {
        padding-top: 50px;
    }

    .avatar img {
        width: 100%;
    }

    .table {
        width: 100%;
    }
    .table-bordered {
        width: 100%;
    }
    .navbar-form {
        width: 100%;
    }

    .navbar-form .form-control {
        width: 100%;
    }
</style>