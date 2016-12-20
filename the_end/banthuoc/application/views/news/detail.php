
<div class="col-lg-770 col-md-9 col-sm-12 col-xs-12">
                    <div class="row" style="margin-left:10px">
                        <div class="content_right">
                        
                        <div class="bg_tit_home">
<div class="txt_name_page_cate">
<a href=""><?=@$news->title;?></a>
</div>
</div>


                        
                         <p style="line-height:23px; margin-top:20px;">
				<div class="page-des">
                            <?=@$news->description;?>
                        </div>
                        <div class="page-detail">
                            <?=@$news->content;?><br />
                        </div>
                        
                        
                         <?php if(count($new_same)) : ?>
                            
                                <div class="new_chuyenmuc">Bài viết cùng chuyên mục</div>
                                <ul>
                                    <?php foreach($new_same as $same) : ?>
                                        <li class="title_new_chuyenmuc"><strong><a href="<?=@$same->alias.'.html'?>" title="<?=@$same->title?>"><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;<?=@$same->title?></a></strong> </li>
                                    <?php endforeach;?>
                                </ul>
                           
                        <?php endif;?> 
         <!-- end -->
         
         
                </p>
                
                        
                        
                  
     
                        </div></div></div>
                        
                        
                        







      
       