<div class="cart-scroll">
    <a href="" title="" data-toggle="modal" data-target="#myModal" class="btn">Ðặt Hàng</a>
</div>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

	<form action="" method="post" class="validate form-horizontal" role="form">
    
    <div class="alert alert-success alert-dismissible" role="alert"
                                                     style="position: fixed; right: 450px;background:none;;font-style:italic;
                                                     top:250px; width: 650px;
                                                     font-size:40px;padding: 2px; margin: auto; line-height: normal;
                                                     color: red; border: none; text-shadow: 0px 0px 5px #ffff00;
                                                     ">
                                                    <?php if(isset($_SESSION['message'])){
                                                        echo $_SESSION['message']; unset($_SESSION['message']);}  ?>
                                                </div>
                                                <script type="text/javascript">
                                                    (function () {
                                                        setTimeout(showTooltip, 1500)
                                                    })();

                                                    function showTooltip() {
                                                        $('.alert-success').fadeOut();
                                                    }
                                                </script>
                                                
    <!-- Modal content-->
    <div class="modal-content" style="padding:20px !important">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thông tin đặt hàng</h4>
      </div>
      <div class="modal-body">
       <div class="form-group">
                                                    <label class="control-label"><?=lang('name');?></label>
                                                    <div class="controls">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i style="font-size:15px;" class="fa fa-user"></i></span>
                                                            <input type="text" style="z-index: 0;" name="full_name" class="validate[required] form-control placeholder" id="personName"
                                                                   placeholder="<?=lang('name');?>" data-bind="value: name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label"><?=lang('phone');?></label>
                                                    <div class="controls">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i style="font-size:20px;" class="fa fa-mobile"></i></span>
                                                            <input  name="phone" class="validate[required,custom[phone]] form-control placeholder" id="phone"
                                                                    
                                                                    data-bind="value: email, event: { change: checkDuplicateEmail }"
                                                                    type="text" style="z-index: 0;" class="form-control"  placeholder="<?=lang('phone');?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label"><?=lang('email');?></label>
                                                    <div class="controls">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i style="font-size:10px;" class="fa fa-envelope-o"></i></span>
                                                            <input type="text"  style="z-index: 0;"  placeholder="<?=lang('email');?>"
                                                                   name="email" class="validate[required,custom[email]] form-control placeholder" id="personEmail"
                                                                   data-original-title="Your activation email will be sent to this address."
                                                                   data-bind="value: email, event: { change: checkDuplicateEmail }">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group ">
                                                    <label class="control-label"><?=lang('ghichu');?></label>
                                                    <div class="controls">
                                                        <div class="input-group" style="z-index: 0;">
                                                            <span  class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                            <textarea  name="comment"   class="form-control placeholder"
                                                                       rows="4" cols="78" placeholder="<?=lang('ghichu');?>"></textarea>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="controls" style="margin-left: 40%;">
                                                    <input type="submit"  name="sendcontact" id="signupuser"
                                                           class="btn btn-primary btn-sm" value="<?=lang('guidi');?>" />
                                                    <input type="reset" id="mybtn" class="btn btn-primary btn-sm" value="<?=lang('nhaplai');?>">
                                                </div><!--end form-contact-->
                                           
                                        </div>
                                       
                                        
                                        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      </div>
    </div>
</form>

  </div>
</div>



<footer class="">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider-brand">
                        <?=$blkdoitac?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
<div class="clearfix-30"></div>
    <div class="footer-center">
        <div class="container">
           <?=$blkquangcao_bottom?>
        </div>
    </div>
    <div class="clearfix-20"></div>
    <div class="footer-bottom">
         <div class="container">
             <div class="row">
             
<?=$counter?>
             <?=$blkmenu_bottom?>
             
             
                 
                 
                 
                 <div class="col-md-3 col-sm-3 col-sx-6 col-430">
                     <h4 class="title-bottom"><a href="">THÔNG TIN CÔNG TY</a></h4>
                     <div class="clearfix-10"></div>
                     <ul class="policy">
                         <li><a href="" class="name-cty-bottom">  <?=@$this->option->site_name;?></a></li>
                         <li><a href=""><img src="<?=base_url()?>img/address.png" alt=""/> Địa chỉ: Đội 9 Đình Xuyên - Gia Lâm Hà Nội</a></li>
                         <li><a href="tel:<?=@$this->option->hotline1;?>"><img src="<?=base_url()?>img/phone-bottom.png" alt=""/> Điện thoại: <?=@$this->option->hotline1;?>  <?=@$this->option->hotline2;?>     </a></li>
                         <li><a href=""><img src="<?=base_url()?>img/mail.png" alt=""/>  <?=@$this->option->site_email;?>  </a></li>
                     </ul>
                 </div>
                 <div class="clearfix-10"></div>
                 <div class="sp-bottom clearfix">
                     <div class="col-md-6 col-sm-6 col-xs-12">
                         <div class="title-sp-bottom">
                                Hỗ trợ thanh toán
                         </div>
                         <div class="clearfix-15"></div>
                         <ul class="sp-pay">
                             <li><a href="" title=""><img src="<?=base_url()?>img/band-1.png" alt=""/></a></li>
                             <li><a href="" title=""><img src="<?=base_url()?>img/band-2.png" alt=""/></a></li>
                             <li><a href="" title=""><img src="<?=base_url()?>img/band-3.png" alt=""/></a></li>
                             <li><a href="" title=""><img src="<?=base_url()?>img/band-4.png" alt=""/></a></li>
                         </ul>
                     </div>
                     <div class="clearfix-20 visible-xs"></div>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                         <div class="title-sp-bottom">
                             Kết nối
                         </div>
                         <div class="clearfix-15"></div>
                         <ul class="sp-pay link">
                             <li><a href="" title=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                             <li><a href="" title=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                             <li><a href="" title=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                             <li><a href="" title=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
    </div>
</footer>
<a id="scroll_top"></a>



<div class="support-icon-right">
<h3><i class="fa fa-hand-o-right"></i> Chat Live Facebook</h3>
<div class="online-support">
<div
class="fb-page"
data-href="<?= @$this->option->site_fanpage;?>"
data-small-header="true"
data-height="300"
data-width="250"
data-tabs="messages"
data-adapt-container-width="false"
data-hide-cover="false"
data-show-facepile="false"
data-show-posts="false">
</div>
</div>
</div>
<script>
    $(document).ready(function(){
  $('.online-support').hide();
  $('.support-icon-right h3').click(function(e){
    e.stopPropagation();
    $('.online-support').slideToggle();
  });
  $('.online-support').click(function(e){
    e.stopPropagation();
  });
  $(document).click(function(){
    $('.online-support').slideUp();
  });
});
</script>




<script src="<?=base_url()?>assets/js/front_end/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/front_end/owl.carousel.min.js" type="text/javascript"></script>
<script async="" src="<?=base_url()?>assets/js/front_end/nav-menu.js" type="text/javascript"></script>
<script async="" src="<?=base_url()?>assets/js/front_end/style-main.js" type="text/javascript"></script>



<script>
    $('.slider-main').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        navText:['',''],
        autoplay: true,
        autoplayTimeout: 4500,
        autoplayHoverPause: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $('.slider-brand').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        navText:['',''],
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        responsive:{
            0:{
                items:3
            },
            600:{
                items:4
            },
            1000:{
                items:7
            }
        }
    });

</script>
 
</body>
</html>

