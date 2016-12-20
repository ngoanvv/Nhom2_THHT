

<div class="col-lg-770 col-md-9 col-sm-12 col-xs-12">
                    <div class="row" style="margin-left:10px">
                        <div class="content_right" style="margin-left:2px">
                        
                        <div class=" bg_tit_home">
<div class="txt_name_page_cate">
<a href=""><?=@$cate_curent->name;?>
</div>
</div>


                        
                         <?php if (isset($news_bycate)) {
                    foreach ($news_bycate as $n) {
                        ?>
          						 <div class="row">
                                        <div class="box_news_right" style="margin-left:10px">
                                            <h3 class="tit_news_right">
                                               <a href="<?= base_url($n->alias.'.html') ?>" title="<?= ($n->title); ?>">
                                                   <?= ($n->title); ?>
                                                </a>
                                            </h3>
                                            <a class="box_img_news_right" href=""><img class="w_100" src="<?= base_url($n->image) ?>" alt="<?= ($n->title); ?>"/></a>
                                            <span class="des_news_right">
                                              <?= LimitString($n->description, 300, '...'); ?>
                                            </span>
                                        </div>
                                    </div>
                                    
                           <?php
                    }
                }
                ?>      
                
              <center>  <?php echo $this->pagination->create_links();?></center>    
              
            
                        </div></div></div>
                        
                        
                                   
       