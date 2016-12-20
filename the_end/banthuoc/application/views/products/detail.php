<link href="<?=base_url()?>assets/plugin/qts/magiczoomplus/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="<?=base_url()?>assets/plugin/qts/magiczoomplus/magiczoomplus.js" type="text/javascript"></script>


<div class="col-lg-770 col-md-9 col-sm-12 col-xs-12" style="padding-right:0px !important">
                     <div class="row" style="margin-left:0px; margin-top:10px;">
                        <div class="content_right" style="margin-left:10px" >
                        
                        <div class="bg_tit_home">
<div class="txt_name_page_cate">
<a href=""><?=creat_break_crum('products',$cate_all,$cate_current->id)?></a>
</div>
</div>


                        
                    
                 
                  <div class="nd_product_ct">
                  
                  
                  <div class="col-md-5">
                  
                  <a href="<?=base_url('upload/img/products/'.$pro_first->pro_dir.'/'.$pro_first->image)?>"  class="MagicZoomPlus"> 
                  
                  <img style="width:100%" src="<?=base_url('upload/img/products/'.$pro_first->pro_dir.'/thumbnail_2_'.$pro_first->image)?>" alt="<?=@$pro_first->name;?>"
                  
                                            /></a>
                                            
                                           <center>Click ảnh xem ảnh to</center> 
                  </div>
                  
                  <div class="col-md-7">
                  <h1 class="name_prod_detail"><?=@$pro_first->name;?></h1>
                  <p class="market_note"></p>
                 

                  
                  <span><strong>Giá gốc</strong>: </span><span id="detail_trueprice" class="detail_trueprice">335.000đ</span><br />
                  <span id="price" class="detail_price">139.000đ</span> <span></span>
                  
                  				<span class="des_news_home">


                                <?=@$pro_first->detail;?>



                            </span><br/>
                            
                            <a class="btn btn-primary" href="<?=base_url('shoppingcart/add_cart?id='.$pro_first->id)?>">Đặt hàng</a>
                            
                             
                            

                  
                
                  
                  </div>
                  
                  
                  
                  
				 
                 </div>
                 <div class="col-md-12 content_sp">
                 
                <div class="txt_name_page_cate" ><a>Thông tin sản phẩm</a></div> 
					<?=@$pro_first->detail;?>
		         </div>
               
               
               <div class="col-xs-12 comment-face" style="overflow: hidden">
                        <h3>
                            <i class="fa fa-comments"></i> Nhận xét &amp; Thảo luận
                        </h3>
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="fb-comments" data-href="<?=base_url($pro_first->alias)?>" data-width="100%"
                             data-numposts="100"
                             data-colorscheme="light">

                        </div>
                    </div>
               
                <div class="clearfix"></div>
                <div class="prod_other"></div>
           
           <div class=" bg_tit_home" style="margin-top:20px">
                <div class="txt_name_page_cate">
                <a href="">Sản phẩm liên quan</a>
                </div>
                </div>
           
         	
            
            
            
           <?php if(count($pros)) : ?>
                 
                 <?php foreach($pros as $pro) : 
				 
				 $giatk=$pro->price -  $pro->price_sale ; 
							
							$gia_pt=round(($giatk/ $pro->price)*100);
				  ?>
          
          
          
          <div class="col-md-4 col-sm-4 col-xs-6 col-430 pdd-10">
                    <div class="box-prd">
                        <div class="img-prd">
                            <a href="<?= base_url($pro->pro_alias.'.html') ?>" title="<?= $pro->product_name; ?>" class="h_100"><img class="w_100" src="<?=base_url('upload/img/products/'.$pro->pro_dir.'/thumbnail_1_'.@$pro->pro_image)?>" alt="<?= $pro->product_name; ?>"/></a>
                            <span class="sale"><?=$gia_pt?>%</span>
                            <div class="text-caption">
                               Có <?= $pro->caption_1; ?> mẫu
                            </div>
                        </div>
                        <div class="box-dcs-prd">
                            <h3 class="name-prd">
                                <a href="<?= base_url($pro->pro_alias.'.html') ?>"title="<?= $pro->product_name; ?>"><?= $pro->product_name; ?></a>
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
                                 <?php endif;?>
                         
                         
                         
            
                
                
                        </div></div></div>
                        
                        

