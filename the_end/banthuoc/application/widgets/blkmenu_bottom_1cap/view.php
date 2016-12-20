
                
                
                <div class="footer_menu">
 <?php foreach($menus_bottom as $menu){
                if($menu->parent_id==0){?>
		<a href="<?=base_url($menu->url);?>" title="<?=$menu->name;?>"><?=$menu->name;?></a><span>|</span>
         <?php }}?>    
        
		
		</div>



                         
                      
                        
                   

