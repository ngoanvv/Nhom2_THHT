
    
    
          <?php foreach($menus_right as $menu){
                if($menu->parent_id==0){?>
            
            <li class="menutop"><a class="menu-link " href="<?=base_url($menu->url);?>" title="<?=$menu->name;?>"><?=$menu->name;?></a> 
            
            </li>
            
            
        
        
        <?php }}?>
 