<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng nhập</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<style type="text/css">
    .swapper {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: white
    }

    .abc {
        width: 100%;
        height: auto;
        padding: 20px 0px;
        background: #ffffff;
        margin-top: 20px;
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        text-align: center;
    }

    .abc .navbar-form {
        width: 100%;
    }

    .abc .navbar-form .form-group {
        width: 100%;
        margin: 10px 0px;
    }

    .abc .navbar-form .form-group .form-control {
        width: 100%;
        height: 40px;
    }

    .abc img {
        width: 50%;

        margin: 0 auto;
        border-radius: 50%;
    }

    .abc label {
        float: left;
    }

    .group h2 {
        font-size: 30px;
        font-weight: bold;
        color: green;
        margin-top: 50px;
        text-transform: uppercase;
    }

    .header {
        width: 100%;
        height: 100px;
        background: white;
        -webkit-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.75);
    }

    .header h3 {
        font-size: 30px;
        font-weight: bold;
        color: green;
        margin: 0px 0px 0px 50px;
        padding: 30px 0px 0px 0px;
        text-align: center;
        display: inline-block;

    }

    .header img {
        width: 70px;
        height: 70px;
        margin-left: 30px;
    }

    .group h4 {
        font-size: 24px;
        text-transform: uppercase;
        color: green;
        font-weight: bold;
    }

    .member {
        margin-left: 50px;
        margin-top: 50px;

    }

    .member ol li {
        color: green;
        font-weight: bold;
        text-transform: uppercase;
        margin: 10px 0px;
        font-size: 16px;
    } 

</style>
<div class="swapper">
     <div class="header">
        <img class="hidden-xs hidden-sm" src="<?php echo base_url() ?>assets/login/logo.jpg">
        <h3>Đại học công nghệ - Đại học quốc gia Hà Nội</h3>
    </div>
    <div class="container">
        <div class="">
            
            <div class="content">
<div class="col-md-8">
                <div class="group">
                    <h2>Nhóm 2 : Tích hợp hệ thống</h2>
                    <div class="clearfix" style="margin-top: 50px"></div>
                    <h4>- Hệ thống Hvol</h4>
                    <h4>- Hệ thống chikitsa</h4>
                    <h4>- Hệ thống bán thuốc</h4>
                </div>

                <div class="member pull-right">
                    <ol>
                        <li>Nhóm trưởng : Nguyễn Văn Điệp</li>
                        <li>Nhóm phó : Nguyễn Qúy Hiệp</li>
                        <li>Thành viên : Nguyễn Văn Dương</li>
                        <li>Thành viên : Nguyễn Minh Hạnh</li>
                        <li>Thành viên : Nguyễn Công Đát</li>
                    </ol>   
                </div> 
            </div>
            <div class="col-md-4 ">
                <div class="abc">
                    <img src="<?php echo base_url() ?>assets/image/avatar.png" alt="" style="margin: 0 auto;"/>
                    <form action="" method="post" class="navbar-form">
                        <div class="form-group">
                            <label for="username">Tài khoản</label>
                            <input type="email" id="username" name="username" placeholder="Tài khoản" class="form-control"/>
                            <span style="color: red"><?php echo form_error('username'); ?></span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" name="password" id="password" placeholder="Mật khẩu" class="form-control"/>
                            <span style="color: red"><?php echo form_error('password'); ?></span>
                        </div>
                        <div class="clearfix" style="margin-top: 10px;"></div>
                        <input type="submit" name="login" class="btn btn-success" value="Đăng nhập"/>

                    </form>
                    <a href="<?php echo base_url() ?>register">register</a>
                </div>
            </div>
            </div>
            
        </div>
    </div>
</div>


</body>
</html>

