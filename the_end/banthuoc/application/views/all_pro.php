
<div class="col-lg-770 col-md-9 col-sm-12 col-xs-12" style="padding-right:0px !important">
                    <div class="row" style="margin-left:0px; margin-top:10px;">
                        <div class="content_right">
                        
                       
                                    
              			<div class="bg_tit_home"><div class="txt_name_page_cate"><?=lang('product');?> </div></div>
                            <div class="clearfix"></div>
                            
                            	
                                    
                                    <div class="list_prod_cate">
                                    
                                   
                    <?php foreach($list as $p) : ?>
                            
                                    <div class="col-md-3 col-sm-4 col-xs-6 col-480-12">
                    <div class="box_news_home">
                        <a href="<?=base_url(@$p->pro_alias.'.html')?>" title="<?= $p->pro_name; ?>" class="img_news_home h_851">
                            <img class="w_100" src="<?=base_url('upload/img/products/'.$p->pro_dir.'/thumbnail_1_'.@$p->pro_img)?>" alt=""/>
                        </a>
                        <div class="clearfix"></div>
                        
                    </div>
                    
                    <div class="sub_news_home">
                            <h3 class="name_news_home">
                                <a style="font-size:14px" href="<?=base_url(@$p->pro_alias.'.html')?>"><?=@$p->pro_name?></a>
                            </h3>
                           
                            <span class="des_news_home">
                               
                               <? if (@$p->caption_1){ ?>
                               <li> Thông số kỹ thuật</li>
                               <li>- Lưu lượng max: <?=@$p->caption_1?></li>
                               <? } ?>
                               <? if (@$p->caption_2){ ?>
                               <li>- Cột áp max: <?=@$p->caption_2?></li>
                                 <? } ?>
                                  <? if (@$p->caption_3){ ?>
                               <li>- Nhiệt độ chất lỏng: <?=@$p->caption_3?></li> 
                                 <? } ?>
                                
                            </span><br/>
                            
                            
                        </div>
                </div>
                
                
                                    
                                    
                                    
                                   
                
            
             <?php endforeach;?>
               
                                    
                                    
                                
                            </div>
                            
                            
                                 
                          
                   
     	                  
 </div>
 
  

 </div></div>


  

<center> <?php echo $this->pagination->create_links();?></center>        
</div>


        </div>
        
        
<style>
.sub_news_home {
    
    height: 120px !important;
}
</style>
