 <h3 class="title-category">
            <i class="fa fa-bars" aria-hidden="true"></i>
            <a href="" title="">hỗ trợ trực tuyến</a>
        </h3>

        <div class="support">
            <div class="business clearfix">
               
               
                     <?php if($supports){
        					foreach($supports as $supot){?>
                            
                <div class="name-business">
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                   <?=$supot->name?>
                </div>
                
                
                <div class="phone-business">
                    <a href="tel:<?=$supot->phone?>" title="" class="pull-left phone-sp"><span>Tel: </span><?=$supot->phone?></a>
                    <a href="" title="" class="pull-right"><i class="fa fa-skype" aria-hidden="true"></i></a>
                </div>
                
                
                <div class="clearfix-10"></div>
                
                <?php }}?>
                
              
              
            </div>
        </div>
        
        

                



					