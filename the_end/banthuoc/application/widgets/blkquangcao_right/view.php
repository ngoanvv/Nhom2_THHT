    
    
    <?php foreach($slides as $slide) :  ?>
     
        <a href="<?=base_url(@$slide->url)?>">
            <img  class="w_100" src="<?=base_url(@$slide->link)?>" />
        </a>
    
    <?php endforeach;?>
    
    
  
    
    
    
  