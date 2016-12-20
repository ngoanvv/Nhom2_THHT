 	<article>


    <section id="content" class="content clearfix">
    <div class="container top" role="main">
    <div class="col-md-12">
            <div class="block-head clearfix">
            <h2 style="margin-top:20px" class="txt_name_page_cate"><?=lang('shop_ping_c')?></h2> 
            
                
            </div>
            <div class="block-content clearfix">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover orderinfo-table  itemInfo-table">
                        <thead>
                        <tr class="active">
                            <th class="th-title hidden-xs" width='20%'><?=lang('img_shopping')?></th>
                            <th class="th-title" ><?=lang('name_shopping')?></th>
                            <th class="th-title" width='10%'><?=lang('sol_shopping')?></th>
                            <th class="th-title" width='10%'><?=lang('cost_shopping')?></th>
                            <th class="th-title" width='10%'><?=lang('total_shopping')?></th>
                            <th class="th-title" width='5%'></th>
                        </tr>
                        </thead>


                        <tbody>
                        <?php if (!empty($cart)) {
                            //                                    print_r($cart);
                            $stt=1;
                            foreach ($cart as $key => $v) {
                                ?>
                                <tr style="padding: 10px 2px;height: 31px; margin-bottom: 10px !important; ">
                                    <td class="hidden-xs">
                                        <a href="#"  title="">
                                            <?= isset($v['image'])?'<img  style="width: 100%;"
                                                                  src="'.base_url('upload/img/products/'.$v['pro_dir'].'/thumbnail_2_'.$v['image']).'" alt="'.$v['name'].'" />':'';?>

                                        </a>
                                        <input type="hidden" value="<?=$v['rowid'];?>" id="rowid" name="rowid"/>
                                    </td>
                                    <td>
                                        <a href="#"
                                           title="<?=$v['name'];?>"><?=$v['name'];?></a><br>



                                    </td>

                                    <td>
                                        <div class="numeric-input">
                                            <input onchange="update_cart('<?=$key?>',$(this).val(),$('#address').val())"
                                                   min="1" max="99"
                                                   type="number" value="<?=$v['qty'];?>" id="qty<?=$v['rowid'];?>" name="count[]">
                                            <input type="hidden" name="item_id[]" value="<?=$v['rowid'];?>">
                                            <input type="hidden" name="price[]"  value="<?=$v['price_sale'];?>">


                                        </div>
                                    </td>
                                    <td><?=number_format($v['price_sale']);?>₫</td>
                                    <td><span id="item_total<?=$key;?>"><?=number_format($v['qty']*$v['price_sale']);?></span>₫</td>
                                    <td class="text-center" style="text-align: center">
                                        <a title="xóa sản phẩm khỏi giỏ hàng" href="<?= base_url('xoa-gio-hang/' . $key) ?>" class="btn btn-danger btn-xs">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td colspan="7" class="align-right">
                                    <?=lang('total_order')?>

                                    <strong><span id="total_cart">  <?=number_format(@$total);?></span>₫</strong>
                                </td>
                            </tr>
                        <?php }else{?>
                            <tr>
                                <td colspan="6" class="align-left"><strong class="red">→
                                        <?=lang('alert_shop')?></strong></td>
                            </tr>
                        <?php  }?>

                        </tbody>
                    </table>
                </div>
                <div style="margin-bottom:30px">
                <?php if (!empty($cart)) { ?>
                    <div style="text-align: right" class="btn btn-success checkout_btn" data-toggle="modal"
                         data-target=".bs-example-modal-sm_checkout">
                        <div class="button-green">
                            <a style="color: #fff" href="<?= base_url('dat-hang')?>"><i class="icons icon-basket-2"></i><?=lang('th_order')?></a>
                        </div>
                    </div>
                    <div style="text-align: right" class="btn btn-success checkout_btn" onclick="window.history.go(-2);">
                        <div class="button-green">
                            <i class="icons icon-basket-2"></i><?=lang('continue_shopp')?>
                        </div>
                    </div>
                    <div style="text-align: right" class="btn btn-success checkout_btn">
                        <a style="color:#fff" href="<?= base_url('shoppingcart/destroy_cart') ?>" class="button-green"
                           onclick="return confirm('Hủy giỏ hàng sẽ xóa toàn bộ sản phẩm trong giỏ hàng của bạn?')">
                            <i class="icons icon-basket-2"></i><?=lang('cancel_shopp')?>
                        </a>
                    </div>
                <?php }
                ?>
            </div>
        </div>
        </div>
        
        </div>
</section>
        <script>
    function formatNumber (num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
    }
    /*function abc()
    {
        alert('gjdslajgljs');
    }*/
    function update_cart(id,qty){
        jQuery.ajax({
            type: "POST",
            dataType: "json",
            url: '<?php echo base_url()?>' + 'shoppingcart/update_cart',
            data: {id:id,qty:qty},
            success: function (ketqua) {
                jQuery('.badge-inverse').html(ketqua.count);
                jQuery('.total-sub').html(formatNumber(ketqua.total) + '₫');
                jQuery('#item_total'+id).html(formatNumber(ketqua.item_total));
            }
        })
    }

</script>
