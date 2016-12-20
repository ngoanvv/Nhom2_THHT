    
    
    <?php foreach($slides as $slide) :  ?>
     
        <a href="<?=base_url(@$slide->url)?>">
            <img style="height: 150px;"  class="w_100" src="<?=base_url(@$slide->link)?>" />
        </a>
    
    <?php endforeach;?>
    <style type="text/css">
    </style>
    
    
  
    
    
    
  