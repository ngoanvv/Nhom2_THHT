<form class="dk_event_ft">


                        <div class="input-group">
                            <input id="newsletter-email-3" class="form-control c" placeholder="Email">
                            <span class="input-group-btn">
                                <button on class="btn btn-default btnregistertrial"  type="button"><?=lang('register');?></button>
                            </span>
                        </div>
                    </form>
<div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
                    <div class="clearfix"></div>

                    <h4 class="tit_footer"><?=lang('cach-thuc-thanh-toan');?> </h4>

                    <ul class="list_cttt">
                        <li class="box_cttt_ft">
                           <?=lang('dat-hang');?><br/>
                            <img src="<?=base_url()?>img/cttt1.png" alt=""/>
                        </li>
                        <li class="box_cttt_ft">
                            <?=lang('xac-minh');?><br/>
                            <img src="<?=base_url()?>img/cttt2.png" alt=""/>
                        </li>
                        <li class="box_cttt_ft">
                            <?=lang('payment');?><br/>
                            <img src="<?=base_url()?>img/cttt3.png" alt=""/>
                        </li>
                        <li class="box_cttt_ft">
                             <?=lang('chuyen-hang');?><br/>
                            <img src="<?=base_url()?>img/cttt4.png" alt=""/>
                        </li>
                        <li class="box_cttt_ft">
                             <?=lang('nhan-hang');?><br/>
                            <img src="<?=base_url()?>img/cttt5.png" alt=""/>
                        </li>
                    </ul>
                    
                    
                    <style type="text/css">
               
                .tit_footer{
                    margin-top: 20px;
                    margin-bottom: 20px;
                    font-size: 16px;
                    font-weight: bold;
                    text-transform: uppercase;
                    color: #fff;
                }
                .tit_footer a{
                    color: #fff;
                }
                .dk_event_ft{
                    width: 295px;
                    max-width: 100%;
                    border: 1px solid #ffffff;
                }
                .dk_event_ft .form-control{
                    border-radius: 0px;
                    background: transparent !important;
                    height: 28px;
                    font-size: 14px;
                    border: none;
                    font-style: italic;
                    color: #f6f5f5;
                }
                .dk_event_ft .btn-default{
                    text-transform: uppercase;
                    font-weight: bold;
                    font-size: 14px;
                    border: none;
                    background: #ffda54;
                    color: #483224;
                    border-radius: 0;
                    height: 28px;
                }
                .box_cttt_ft{
                    display: inline-block;
                    height: 53px;
                    text-align: center;
                    margin-right: 15px;
                    color: #fff;
                    position: relative;
                }
                .box_cttt_ft:after{
                    content: "\f061";
                    font: normal normal normal 10px/1 fontawesome;
                    position: absolute;
                    right: -11px;
                    top: 27px;
                }
                .list_cttt li.box_cttt_ft:last-child:after{
                    color: transparent;
                }
            </style>
            
            <script>
                            $('.btnregistertrial').click(function (e) {

                                var email = $("#newsletter-email-3").val();
                                var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
                                var baseurl = '<?=base_url()?>';
                                if (email == '' || !re.test(email)) {
                                    $("#widget-subscribe-form-result").html("<span style='color:#f00'>Email không hợp lệ, mời chọn email khác</span>");
                                    return false;
                                }
                                $.ajax({
                                    type: "GET",
                                    url: baseurl+"home/emails",
                                    data: {giatri:email},
                                    dataType: "json",
                                    success: function (data) {
                                        if (data == 1) {
                                            $("#widget-subscribe-form-result").html("<span style='color:#06f'>Đăng ký thành công</span>");

                                        }
                                        else {
                                            $("#widget-subscribe-form-result").html("<span style='color:#f00'>Email đã tồn tại, mời chọn email khác</span>");

                                        }
                                    },
                                    error: function (data) {
                                    }
                                })

                            })
                        </script>