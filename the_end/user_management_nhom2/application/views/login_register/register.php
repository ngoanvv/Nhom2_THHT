<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">

    <!-- Website CSS style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/register.css">

    <!-- Website Font style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <title>Đăng ký</title>
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
        <div class="col-md-4">
            <div class="clearfix" style="margin-top: 50px;"></div>
            <div class="main-login main-center">
                <form class="form-horizontal" method="post" action="#">

                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Tên của ban</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="name" id="name"  placeholder="Tên cua bạn"/>
                            </div>
                            <span style="color: red"><?php echo form_error('name'); ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Email của bạn</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="email" id="email"  placeholder="Email của bạn"/>
                            </div>
                            <span style="color: red"><?php echo form_error('email'); ?></span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="password" class="cols-sm-2 control-label">Mật khẩu</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="password" id="password"  placeholder="nhập password"/>
                            </div>
                            <span style="color: red"><?php echo form_error('password'); ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirm" class="cols-sm-2 control-label">Xác nhận mật khẩu</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Nhập lại password"/>
                            </div>
                            <span style="color: red"><?php echo form_error('confirm'); ?></span>
                        </div>
                    </div>

                    <div class="form-group ">
                        <input type="submit" name="register" class="btn btn-primary btn-lg btn-block login-button" value="Đăng ký">
                    </div>
                    <div class="login-register">
                        <a href="<?php echo base_url() ?>login">Login</a>
                    </div>
                </form>
            </div>
         </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
</body>
</html>