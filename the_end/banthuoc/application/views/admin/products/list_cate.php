<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="<?= base_url('vnadmin') ?>">Admin</a>
                    </li>
                    <li class="active">
                        <a href="<?= base_url('vnadmin/product/products') ?>">File</a>
                    </li>
                    <li class="active">
                        <a href="<?= base_url('vnadmin/product/categories') ?>">Danh mục</a>
                    </li>
                </ol>
            </div>
            <div class="col-md-12">

                <div class="" style="padding-bottom: 15px">
                    <a href="<?= base_url('vnadmin/product/cat_add') ?>" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Thêm
                    </a>
                    <a onclick="ActionDelete('formbk')" class="btn btn-danger btn-sm">
                        <i class="fa fa-times"></i> Xóa
                    </a>
                </div>

                <div class=" ">
                    <form name="formbk" method="post" action="<?=base_url('vnadmin/product/cat_deletes')?>">
                        <table class="table table-striped table-bordered">
                            <tr class="active">
                                <th width="3%"><input type="checkbox" name="checkall" id="checkall" value="0" onclick="DoCheck(this.checked,'formbk',0)" /></th>
                                <th width="7%">Sắp xếp</th>
                                <th  >Tên</th>
                                <th width="20%">Ảnh</th>
                                <th width="8%">Hiển thị</th>
                                <th width="8%" class="text-center">Action</th>
                            </tr>
                            <?php
                            view_product_cate_table($cate,0,'');

                            ?>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <style>
            .view_color{width: 10px; height: 10px;float: left;margin-top: 5px;cursor: pointer}
        </style>
        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })


            $('.view_color').click(function(){
                var color = $( this ).css( "border-color" );
                var background = $( this ).css( "background-color" );

                var baseurl = $("#baseurl").val();
                var form_data = {
                    id: $( this ).attr('data-value'),view:$( this ).attr('data-view')
                };
                $.ajax({
                    url: baseurl+"admin/product/update_cat_view",
                    type: 'POST',
                    dataType: 'json',
                    data: form_data,
                    success: function (rs) {

                    }
                });
                if(color!=background){
                    $( this ).css( "background-color",color ) ;
                }else{
                    $( this ).css( "background-color",'#fff' ) ;
                }
            });

            function cat_sort(s){
                var baseurl = $("#baseurl").val();
                var form_data = {
                    id: s.attr('data-item'),sort:s.val()
                };
                $.ajax({
                    url: baseurl+"admin/product/cat_sort",
                    type: 'POST',
                    dataType: 'json',
                    data: form_data,
                    success: function (rs) {

                    }
                });
            }
        </script>
        <!-- /.row -->


        <!-- /.row -->


        <!-- /.row -->


        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>