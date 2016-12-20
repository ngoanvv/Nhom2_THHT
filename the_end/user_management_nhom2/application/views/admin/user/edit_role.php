<div class="clearfix" style="margin-top: 150px;"></div>
<!-- Page Content -->
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row" style="text-align: center">
            <h3>Phân quyền user</h3>
            <form action="" class="navbar-form" method="post">
                <div class="form-group">
                    <select name="select" class="form-control" id="">
                        <option value="">--- Chọn quyền ---</option>
                        <option value="1">Cộng tác viên</option>
                        <option value="2">Nhân viên</option>
                        <option value="3">Quản trị tối cao</option>
                    </select>
                    <span style="color: red;"><?php echo form_error('select'); ?></span>
                    <input type="submit" name="role" value="xác nhận quyền" class="btn btn-success"/>
                </div>
            </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
