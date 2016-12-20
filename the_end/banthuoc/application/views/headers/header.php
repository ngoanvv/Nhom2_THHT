<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= isset($seo['title']) && $seo['title'] != '' ? $seo['title'] : @$this->option->site_name; ?></title>
    <link rel="shortcut icon" href="<?=base_url(@$this->option->site_logo)?>"/>
    <meta name='description'
          content='<?= isset($seo['description']) ? $seo['description'] : @$this->option->site_description; ?>'/>
    <meta name='keywords'
          content='<?= isset($seo['keyword']) && $seo['keyword'] != '' ? $seo['keyword'] : $this->option->site_keyword; ?>'/>
    <meta name='robots' content='index,follow'/>
    <meta name='revisit-after' content='1 days'/>
    <meta http-equiv='content-language' content='vi'/>

    <!--    for facebook-->
    <meta property="og:title"
          content="<?= isset($seo['title']) && $seo['title'] != '' ? $seo['title'] : @$this->option->site_name; ?>"/>
    <meta property="og:site_name" content="<?= @$this->option->site_name; ?>"/>
    <meta property="og:url" content="<?= current_url(); ?>"/>
    <meta property="og:description"
          content="<?= isset($seo['description']) && $seo['description'] != '' ? $seo['description'] : @$this->option->site_description; ?>"/>
    <meta property="og:type" content="<?= @$seo['type']; ?>"/>
    <meta property="og:image" content="<?= isset($seo['image']) && @$seo['image'] != '' ? base_url(@$seo['image']) : @$this->option->site_logo ; ?>"/>

    <meta property="og:locale" content="vi"/>

    <!-- for Twitter -->
    <meta name="twitter:card"
          content="<?= isset($seo['description']) && $seo['description'] != '' ? $seo['description'] : @$this->option->site_description; ?>"/>
    <meta name="twitter:title"
          content="<?= isset($seo['title']) && $seo['title'] != '' ? $seo['title'] : @$this->option->site_name; ?>"/>
    <meta name="twitter:description"
          content="<?= isset($seo['description']) && $seo['description'] != '' ? $seo['description'] : @$this->option->site_description; ?>"/>
    <meta name="twitter:image"
          content="<?= isset($seo['image']) && $seo['image'] != '' ? base_url($seo['image']) : base_url(@$this->option->site_logo); ?>"/>


<!-- thay đổi css -->


 <link rel="stylesheet" href="<?=base_url()?>assets/css/front_end/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/front_end/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/front_end/owl.carousel.css"/>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/front_end/animate.min.css"/>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/front_end/resetDefalt.css"/>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/front_end/setmedia.css"/>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/front_end/nav-menu.css"/>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/front_end/style.css"/>
    
    <script src="<?=base_url()?>assets/js/front_end/jquery-1.11.1.min.js" type="text/javascript"></script>
 

<!-- thay đổi js -->



 
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Header-->
<header>
    <section class="header">
        <div class="header-top hidden-xs">
            <div class="container">
                <div class="row">
                     <div class="col-lg-3 col-md-3 col-sm-3 col-20">
                         <div class="logo-pc">
                             <a href="<?=base_url()?>" title=""><img class="img-responsive" src="<?=base_url(@$this->option->site_logo)?>" alt=""/></a>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-9 col-60">
                         <div class="box-service">
                             <div class="service">
                                 <ul class="service-item">
                                     <li>
                                         <div class="row row-xs">
                                             <div class="col-md-3 col-sm-4 pdd-xs">
                                                 <img src="<?=base_url()?>img/icon-sv1.png" alt=""/>
                                             </div>
                                             <div class="col-md-9 col-sm-8 pdd-xs">
                                                 <div class="dcs-service">
                                                     Đổi trả hàng<br>
                                                     trong 7 ngày
                                                 </div>
                                             </div>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="row row-xs">
                                             <div class="col-md-4 col-sm-4 pdd-xs">
                                                 <img src="<?=base_url()?>img/icon-sv2.png" alt=""/>
                                             </div>
                                             <div class="col-md-8 col-sm-8 pdd-xs">
                                                 <div class="dcs-service">
                                                     Thanh toán<br>
                                                     khi giao hàng
                                                 </div>
                                             </div>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="row row-xs">
                                             <div class="col-md-3 col-sm-4 pdd-xs">
                                                 <img src="<?=base_url()?>img/icon-sv-3.png" alt=""/>
                                             </div>
                                             <div class="col-md-9 col-sm-8 pdd-xs">
                                                 <div class="dcs-service">
                                                     Vận chuyển<br>
                                                     nội thành miễn phí
                                                 </div>
                                             </div>
                                         </div>
                                     </li>
                                 </ul>
                             </div>
                             <div class="search-box">
                                 <div class="row">
                                     <div class="col-md-11 col-sm-10">
                                      <?=$blksearch?>
                                      
                                        
                                     </div>
                                     <div class="col-md-1 col-sm-2">
                                         <a href="<?=base_url()?>gio-hang" class="btn btn-cart"><img src="<?=base_url()?>img/icon-cart.png" alt=""/></a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                    </div>
                     <div class="col-lg-3 col-md-3 hidden-sm col-20">
                         <div class="hot-line-top">
                             Hotline<br>
                             <a href="tel:<?= @$this->option->hotline1;?>" title=""><?= @$this->option->hotline1;?> </a>
                         </div>
                         <div class="clearfix"></div> 
                         <ul class="social pull-right">
                             <li><a target="_blank" href="<?= @$this->option->site_fanpage;?>" title=""><img src="<?=base_url()?>img/fb.jpg" alt=""/></a></li>
                             <li><a target="_blank" href="<?= @$this->option->face_id;?>" title=""><img src="<?=base_url()?>img/zalo.jpg" alt=""/></a></li>
                             <li><a target="_blank" href="<?= @$this->option->link_tt;?>" title=""><img src="<?=base_url()?>img/tw.jpg" alt=""/></a></li>
                             <li><a target="_blank" href="<?= @$this->option->link_gg;?>" title=""><img src="<?=base_url()?>img/g.jpg" alt=""/></a></li>
                         </ul>
                     </div>
                </div>
            </div>
        </div>
        <section class="top-center">
            <div class="visible-xs menu_mb">
                <div class="">
                    <button class="nav-toggle">
                        <div class="icon-menu">
                            <span class="line line-1"></span>
                            <span class="line line-2"></span>
                            <span class="line line-3"></span>
                        </div>
                    </button>
                    <a href="<?=base_url()?>" title=""><img src="<?=base_url(@$this->option->site_logo)?>" alt=""/></a>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <section id="menu-main">
            <div class="container">
                <!-- /menu_mb -->
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="menu_main">
                            <nav class="nav is-fixed" role="navigation">
                                <div class="wrapper wrapper-flush">
                                    <div class="nav-container">
                                         <?=@$menu;?>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</header>
<!-- End Header-->








<div class="clearfix"></div>
<!-- code menu -->
<script>
    jQuery('.rm-m').parent().addClass('has-dropdown');
</script>
            <!-- end header-->