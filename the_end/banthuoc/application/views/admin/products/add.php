<!--<link rel="stylesheet" href="<?/*= base_url('assets/plugin/colorpicker/bootstrap-colorpicker.min.css') */?>">

<script src="<?/*= base_url('assets/plugin/colorpicker/jquery.minicolors.min.js') */?>"></script>
<link rel="stylesheet" href="<?/*= base_url('assets/plugin/colorpicker/jquery.minicolors.css') */?>">-->
<script>
    function random_str() {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for (var i = 0; i < 5; i++)
            text += possible.charAt(Math.floor(Math.random() * possible.length));

        return text;
    }

    function remove_color(sender) {
        $('#' + sender.attr('data-items')).empty();
    }
    $('.color_22').live(eventName, function () {
        alert('sfsf');
        var id = $(this).attr('data-items');
        $('#' + id).empty();
    });


</script>
<div id="page-wrapper">

<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
<div class="col-sm-12">
    <ol class="breadcrumb">
        <li>
            <a href="<?= base_url('vnadmin') ?>">Admin</a>
        </li>
        <li>
            <a href="<?= base_url('vnadmin/product/products') ?>">File</a>
        </li>
        <li>
            <a href="<?= base_url('vnadmin/product/add') ?>"><?= $btn_name; ?></a>
        </li>
        <li >
            <a onclick="history.back()" style="cursor: pointer"><i class="fa fa-reply"></i></a>
        </li>
        <?php if (isset ($error)) { ?>
            <li class="">
                <span style="color: red"> <?= $error; ?></span>
            </li>
        <?php } ?>
    </ol>
</div>

<form class="validate form-horizontal" role="form" id="form-bk" method="POST" action=""
      enctype="multipart/form-data">
<input type="hidden" name="edit" value="<?= @$edit->id; ?>">

<div class="col-md-9" style="font-size: 12px">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title pull-left">Tổng quan</h3>

            <div class="pull-right">
                <button type="submit" onclick="createItem()" class="btn btn-success btn-xs" name="add_news"><i
                        class="fa fa-check"></i> <?= $btn_name; ?>
                </button>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-12">Tên sản phẩm</label>

                <div class="col-sm-12">
                    <input type="text" oninput="createAlias(this)" class="validate[required] form-control input-sm " name="name"
                           value="<?= @$edit->name; ?>" placeholder=""/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-12">Alias</label>
                <div class="col-sm-12" id="error-alias">
                    <input type="text" onchange="createAlias(this)" class="form-control input-sm validate[required]" name="alias"
                           value="<?= @$edit->alias; ?>" id="alias" placeholder=""/>
                </div>
            </div>

            <div class="row">
            
            <div class="col-md-4">
                    <div class="form-group">
                        <label class="col-sm-12">Giá cũ:</label>
                        <div class="col-sm-12">
                            <input type="text" name="price" id="product_price"
                                   data-v-max="9999999999999" data-v-min="0"
                                   class="auto form-control input-sm"
                                   value="<?= @$edit->price; ?>" placeholder=""/>
                        </div>
                    </div>
                </div>
                
                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="col-sm-12">Giá mới :</label>
                        <div class="col-sm-12">
                            <input type="text" name="price_sale" id="product_price_sale"
                                   data-v-max="9999999999999" data-v-min="0"
                                   class="auto form-control input-sm"
                                   value="<?= @$edit->price_sale; ?>" placeholder=""/>
                        </div>
                    </div>
                </div>
                
                
             
                
               

            </div>


		  <div class="form-group">
                <div class="col-sm-12 ">
                    <label for="inputcontent" class=" control-label">Số mẫu:</label>
                     <input type="text" name="caption_1" class="form-control input-sm" 
                                   value="<?= @$edit->caption_1; ?>"/>
                </div>
            </div>
            
           
            
            <div class="form-group">
                <div class="col-sm-12 ">
                    <label for="inputcontent" class=" control-label">Mô tả ngắn:</label>
                    <textarea name="description" class="form-control input-sm" id="ckeditor2"
                              style="height: 200px"><?= @$edit->description; ?></textarea>
                    <?php echo display_ckeditor($ckeditor2); ?>
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-12 ">
                    <label  class="  ">Chi tiết</label>
                    <textarea name="detail" class="form-control input-sm" id="ckeditor"
                              style="height: 200px"><?= @$edit->detail; ?></textarea>
                    <?php echo display_ckeditor($ckeditor); ?>
                </div>
            </div>
            <!--<div class="form-group">
                <div class="col-sm-12 ">
                    <label  class=" ">Video</label>
                    <textarea name="pricing" class="form-control input-sm" id="pricing"
                              style="height: 200px"><?/*= @$edit->pricing; */?></textarea>
                    <?php /*echo display_ckeditor($pricing); */?>
                </div>
            </div>-->
            <hr>

            <div class="form-group">
                <label class="col-sm-12 ">Title SEO</label>

                <div class="col-sm-12">
                    <input type="text" name="keyword" placeholder=""
                           value="<?= @$edit->keyword; ?>" class="form-control input-sm"/>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-12 ">Key word SEO</label>

                <div class="col-sm-12">
                    <input type="text" name="keyword" placeholder=""
                           value="<?= @$edit->keyword; ?>" class="form-control input-sm"/>
                </div>
            </div>
            <div class="form-group">
                <label f class="col-sm-12 ">Description SEO:</label>

                <div class="col-sm-12">
                    <textarea name="description_seo" placeholder=""
                              class="form-control input-sm"><?= @$edit->description_seo; ?></textarea>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="text-right" style="padding-bottom: 15px">
                    <input type="hidden" name="addnews" value="1">
                    <button type="submit" onclick="createItem()" class="btn btn-success btn-xs" name="add_news"><i
                            class="fa fa-check"></i> <?= $btn_name; ?>
                    </button>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="col-md-3" style="font-size: 12px">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Tùy chọn</h3>
        </div>
        <div class="panel-body">
            <div class="">
                <label class="col-sm-12" style="padding-left: 0px">
                    Danh mục
                </label>
                <div class="col-sm-12  " style="border: 1px solid #ccc;padding: 5px">
                    <div class=" checklist_cate cat_checklist">
                        <?php if (isset($cate_selected)) $cate_selected = $cate_selected;
                        else $cate_selected = null;
                        view_product_cate_checklist($cate, 0, '', @$cate_selected)?>
                    </div>
                </div>
                <div style="clear: both"></div>
                <br>
                <label class="col-sm-12" style="padding-left: 0px">
                    Hiển thị
                </label>

                <div class="col-sm-12" style="  border: 1px solid #ccc;   padding: 10px 0px">
                    

                    <label class="col-sm-12">
                        <input type="checkbox" value="1" class="checkbox-inline"
                               name="hot" <?= @$edit->hot == 1 ? 'checked' : '' ?>>
                       Trang chủ
                    </label>

                    <!--<label class="col-sm-12">
                        <input type="checkbox" value="1"
                               name="focus" <?/*= @$edit->focus == 1 ? 'checked' : '' */?>>
                        Sản phẩm nổi bật

                    </label>-->

                   <!-- <label class="col-sm-12">
                        <input type="checkbox" value="1" name="coupon" <?= @$edit->coupon == 1 ? 'checked' : ''?>>
                        Sản phẩm xem nhiều nhất
                    </label>-->
                </div>
                <div class="clearfix"></div>
                <br>
               <!-- <label class="col-sm-12" style="padding-left: 0px">
                    Loại sản phẩm
                </label>
                <div>
                    <select class="form-control input-sm" name="style">
                        <option value="">Lựa chọn</option>
                        <?php view_product_hangsx_select(@$types, 0, '', @$edit->type); ?>
                    </select>
                </div>
                <div class="clearfix"></div>
                <br>
                <label class="col-sm-12" style="padding-left: 0px">
                    Xuất xứ
                </label>
                <div>
                    <select class="form-control input-sm" name="style">
                        <option value="Korea">Hàn Quốc</option>
                        <option value="Thai">Thái Lan</option>
                        <option value="Japan">Nhật bản</option>
                    </select>
                </div>-->
                <div class="clearfix"></div>
                <!--<br>
                <label class="col-sm-12" style="padding-left: 0px">
                    Tình trạng
                </label>
                <div>
                    <select class="form-control input-sm" name="tinhtrang">
                        <option value="">Lựa chọn</option>
                        <option value="1">Hàng mới về</option>
                        <option value="2">Còn hàng</option>
                        <option value="3">Hết hàng</option>
                    </select>
                </div>-->
                <br/>
                <!--<div class="form-group">

                    <label class="col-sm-12">File hướng dẫn</label>

                    <div class="col-sm-12">
                        <input type="file" name="file_demo" class="" id="user"/>
                    </div>

                </div>
                <br>-->
                <div class="form-group">

                    <label class="col-sm-12">Ảnh</label>

                    <div class="col-sm-12">
                        <input type="file" name="userfile" class="" id="input_img" onchange="handleFiles()"/>

                        <?php
                        if(file_exists(@$edit->image)){
                            echo '<img src="'.base_url($edit->image).'" id="image_review">';
                        }else{
                            echo '<img src="" id="image_review">';
                        }
                        ?>
                    </div>

                </div>
                <!--<div class="form-group">
                    <label class="col-sm-12 ">Tags : (Ngăn cách bằng dấu phẩy)</label>
                    <div class="col-sm-12">
                        <textarea name="tags" id="tags" class="form-control input-sm" rows="5"><?/*= @$edit->tags; */?></textarea>

                    </div>
                </div>-->
                <div style="clear: both"></div>

            </div>



        </div>

    </div>
</div>
</form>


<script src="<?=base_url('assets/plugin/slimscroll/jquery.slimscroll.min.js')?>"></script>

<script>
    $('#product_price,#product_price_sale').autoNumeric(0);
    $('.cat_checklist').slimScroll({
        height: '200px',
        alwaysVisible: true,
        railVisible: true
    });

</script>
<script>
    function addDayTour()
    {
        var baseurl = $('#baseurl').val();
        $.ajax({
            type: "post",
            dataType: 'html',
            url: baseurl + 'vnadmin/product/getDayForm',
            data: {id:1},
            success: function (rs) {
                $("#add_day_content").empty();
                $("#add_day_content").html(rs);
            }
        });
    }
    function createItem()
    {
        $('#error-alias .alert-danger').remove();
        if($('#form-bk').validationEngine('validate')){
            $.ajax({
                type: "POST",
                dataType: "json",
                url: base_url() + 'vnadmin/alias/checkAdd',
                data: {alias:$('#alias').val()},
                success:function(result){
                    if(result.check == true){
                        $('#form-bk').submit();
                    }else{
                        $('#error-alias').append('<div class="alert-danger">Alias này đã tồn tại ! Vui lòng nhập alias khác</div>');
                    }
                }
            });
        }
    }
</script>
</div>
<!-- /.container-fluid -->

</div>