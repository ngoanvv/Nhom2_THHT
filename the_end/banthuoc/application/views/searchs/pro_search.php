
<div class="col-lg-770 col-md-9 col-sm-12 col-xs-12">
                    
                       
                        
                        <div class="bg_tit_home">
<div class="txt_name_page_cate">
<a href="">Kết quả tìm kiếm</a>
</div>
</div>

			
              <?php foreach($lists as $kv => $pro) : ?>
              
              <?
              $giatk=$pro->price -  $pro->price_sale ; 
							
							$gia_pt=round(($giatk/ $pro->price)*100);
			  ?>
              
               <div class="col-md-4 col-sm-4 col-xs-6 col-430 pdd-10">
                    <div class="box-prd">
                        <div class="img-prd">
                            <a href="<?= base_url($pro->pro_alias.'.html') ?>" title="<?= $pro->pro_name; ?>" class="h_100"><img class="w_100" src="<?=base_url('upload/img/products/'.$pro->pro_dir.'/thumbnail_1_'.@$pro->pro_image)?>" alt="<?= $pro->pro_name; ?>"/></a>
                            <span class="sale"><?=$gia_pt?>%</span>
                            <div class="text-caption">
                               
                            </div>
                        </div>
                        <div class="box-dcs-prd">
                            <h3 class="name-prd">
                                <a href="<?= base_url($pro->pro_alias.'.html') ?>"title="<?= $pro->pro_name; ?>"><?= $pro->pro_name; ?></a>
                            </h3>
                            <span class="price pull-left"><?=number_format($pro->price_sale)?></span>
                            <del class="pull-right"><?=number_format($pro->price)?></del> 
                            <div class="clearfix-10"></div>
                            
                           
                            <span class="sale-price pull-left">Tiết kiệm <?=number_format($giatk)?> đ (<?=$gia_pt?>%) </span>
                            <a href="<?= base_url($pro->pro_alias.'.html') ?>" class="view-prd pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>

                    </div>
                </div>
                
                
              
              
             
            
                                    
                        
                           <?php endforeach;?>   
                            
                            <div class="pull-right wft_pagination">
                        <?php echo $this->pagination->create_links();?>
                    </div> 
                        
                        
                
                        </div>
                        
                        










