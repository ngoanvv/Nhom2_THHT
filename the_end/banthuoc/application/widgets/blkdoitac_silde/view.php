<script src="<?=base_url()?>assets/silde/jquery.min.js" type="text/javascript"></script>

<script src="<?=base_url()?>assets/silde/jquery.carouFredSel.js" type="text/javascript"></script>
<script type="text/javascript"> 
$(document).ready(function() { 
    // Using default configuration 
     // Using custom configuration 
    $('#carousel').carouFredSel({ 
        items                : 5, //số item trên 1 vòng
        direction            : "up", 
        auto : { 
            timeoutDuration :0,// thời gian từ vòng này chuyển sang vòng khác
            easing : "linear",// hiệu ứng cuộn
            duration         : 40000, //thời gian chạy 1 vòng
            pauseOnHover    : "immediate",
        } 
    }); 
}); 
</script>



<div class="doitac"><?=lang('partner');?>
        </div>
<div class="row_pc">


	
    
    <ul class="list_news_right" style="height:420px !important;width:200px !important">
    
    <ul  id="carousel">
     <?php foreach($slides as $slide) :  ?>
    <li> 
        
         <a title="<?=base_url(@$slide->url)?>" href="" class="">
                        <img class="w_100" style="margin-left:30px; width:150px" src="<?=base_url(@$slide->link)?>" alt="">
                    </a>
    </li> 
    
     <?php endforeach;?> 
    
    
   
        
    
    </ul>
  
           
         
            
        </div>
        
        
        
