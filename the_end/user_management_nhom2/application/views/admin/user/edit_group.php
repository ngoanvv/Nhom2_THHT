<div class="clearfix" style="margin-top: 150px;"></div>
<!-- Page Content -->
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row" style="text-align: center">
            <h3>Phân nhóm user</h3>
            <form action="" class="navbar-form" method="post">
                <div class="form-group">
                    <select name="select" class="form-control" id="">
                        <option value="">--- Chọn nhóm ---</option>
                        <option value="1">Nhóm 1 : Tích hợp</option>
                        <option value="2">Nhóm 2 : Hệ thống</option>
                    </select>
                    <span style="color: red;"><?php echo form_error('select'); ?></span>
                    <input type="submit" name="group" value="xác nhận nhóm" class="btn btn-success"/>
                </div>
            </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
