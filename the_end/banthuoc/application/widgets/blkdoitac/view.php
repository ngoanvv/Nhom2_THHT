
           
           
             <?php foreach($slides as $slide) :  ?>
             
             <div class="item">
                           <a href="<?=base_url(@$slide->url)?>"><img style="width:120px; height:100px"  src="<?=base_url(@$slide->link)?>" alt=""/></a>
                        </div>
            
                
              <?php endforeach;?>
          
            
      
        
        
        

    
    
  