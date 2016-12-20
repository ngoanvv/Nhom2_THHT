    
    
    <?php foreach($slides as $slide) :  ?>
     <div class="item">
        <a href="<?=base_url(@$slide->url)?>">
            <img  class="w_100" src="<?=base_url(@$slide->link)?>" />
        </a>
    </div>
    <?php endforeach;?>
    <style type="text/css">
        .w_100 {
            height: 350px;
        }
    </style>
    
    
   
    
  