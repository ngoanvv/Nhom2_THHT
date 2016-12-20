<div class="box_right_box">
    <h3 class="tit_right_box"><a href="">Menu Món Ăn</a></h3>
    <ul class="list_menu_right">
    
    
    
          <?php foreach($menus_left as $menu){
                if($menu->parent_id==0){?>
	
        
        <li><a href="<?=base_url($menu->url);?>" title="<?=$menu->name;?>"><?=$menu->name;?></a></li>
        
        
        <?php }}?>
    </ul>
</div>
<div class="clearfix"></div>