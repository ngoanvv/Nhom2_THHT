<?php foreach($menus_bottom as $menu){
                if($menu->parent_id==0){?>
                
                <div class="col-md-3 col-sm-3 col-sx-6 col-430">
                     <h4 class="title-bottom"><a> <?=$menu->name;?></a></h4>
                     <div class="clearfix-10"></div>
                     <ul class="policy">
                       <?php foreach($menus_bottom_sub as $sub){
                                                            if($menu->id_menu==$sub->parent_id){?>
                         <li><a href="<?=base_url($sub->url);?>" title="<?=$sub->name;?>"><?=$sub->name;?></a></li>
                          <?php }}?>     
                     </ul>
                 </div>
                 
                 <?php }}?>
                 