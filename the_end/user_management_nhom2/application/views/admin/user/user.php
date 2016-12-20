<div class="clearfix" style="margin-top: 150px;"></div>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row" style="text-align: center">
            <div class="table_responsive">
                <a href="<?php echo base_url() ?>admin/user/insert" class="btn btn-success">Thêm mới tài khoản</a>
                <table class="table table-border table-hover">
                    <th>
                        <tr>
                            <td>STT</td>
                            <td>Tên người dùng</td>
                            <td>Email</td>
                            <td>Cấp độ</td>
                            <td>Chỉnh sửa quyền</td>
                            <td>Xóa</td>
                        </tr>
                    </th>
                    <tbody>
                        <?php $i = 1; foreach($user as $val){ ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $val['username']; ?></td>
                                <td><?php echo $val['email']; ?></td>
                                <td><?php
                                    if( $val['level'] == 1) {
                                        echo "cộng tác viên";
                                    } else  if( $val['level'] == 2) {
                                        echo "Nhân viên";
                                    } else  if( $val['level'] == 3) {
                                        echo "quản trị tối cao";
                                    }
                                    ?></td>
                                <td><a href="<?php echo base_url() ?>admin/user/edit_role/<?php echo $val['id'] ?>" >edit role</a></td>
                                <td><a href="<?php echo base_url() ?>admin/user/delete/<?php echo $val['id'] ?>">delete</a></td>
                            </tr>
                        <?php $i++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
