<section class="key_news">
    
            <div class="row">

	
     <div class="bg_tit_home"> <?=lang('latest_new');?></div>
                            <div class="clearfix"></div>
                            
               <?php foreach($news as $n) : ?>              
                <div class="col-md-3 col-sm-4 col-xs-6 col-480-12">
                    <div class="box_news_home ">
                        <a title="<?= ($n->title); ?>" href="<?= base_url($n->alias.'.html') ?>" class="img_news_home h_611">
                            <img class="w_100"  src="<?= base_url($n->image) ?>" alt="<?= ($n->title); ?>"/>
                        </a>
                        <div class="clearfix"></div>
                        <div class="sub_news_home">
                         <span class="date_news_home"> <i class="fa fa-calendar"></i> <?=date("d/m/Y",$n->time);?> </span><br/>
                            <h3 class="name_news_home">
                                <a href="<?= base_url($n->alias.'.html') ?>"><?= ($n->title); ?></a>
                            </h3>
                           
                            <span class="des_news_home">
                             <?=LimitString(@$n->description,'420','...');?>
                                
                            </span><br/>
                           
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
                

            </div>


            <style type="text/css">
                /*==============================   css news home     ======================================*/
                .box_news_home{
                   
                   
                    padding: 2px 5px 10px 5px;
                    overflow: hidden;
                }
                .img_news_home img:hover{
                    opacity: 0.9;
                }
                .sub_news_home{
                    padding-top: 7px;
					margin-right:10px;
                }
                .name_news_home{
                    margin-top: 0px;
                    margin-bottom: 7px;
                    font-size: 14px;
                    color: #343331;
                    font-weight: bold;
                }
                .name_news_home a{
                    color: #343331;
					font-size:12px;
                }
                .name_news_home a:hover{
                    color: #ff0000;
                }
                .date_news_home{
                    font-size: 12px;
                    color: #444;
                    display: inline-block;
                    margin-bottom: 7px;
                    width: 100%;
                }
                .des_news_home{
                    display: inline-block;
                    width: 100%;
                    height: 56px;
                    overflow: hidden;
                    font-size: 12px;
                    color: #343331;
                    text-align: justify;
                }
                .view_news_home{
                    display: inline-block;
                    float: right;
                    font-size: 14px;
                    color: #644032;
                    margin-top: 5px;
                }
            </style>
        
</section>                          
                            
<br />
                     