<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Hospice Volunteer Solutions | Login</title>
  <link href="<?php echo base_url();?>css/default.css" rel="stylesheet" type="text/css" />
  <noscript>
    Javascript is not enabled! Please turn on Javascript to use this site.
  </noscript>

<script type="text/javascript">
//<![CDATA[
base_url = '<?php echo base_url();?>';
//]]>
</script>


</head>
<?php
   global  $glUserID, $gstrFName;

   echoT('
      <body>
      <!-- <div id="wrapper" >  -->
         <div id="header" >
       
            <div class="login">
               <div class="loginWelcome">
                  <img src="'.base_url().'images/layout/dl_logo02.png"><br>
                  <img src="'.base_url().'images/layout/dl_logo03.png">
               </div> ');

   echoT('<br>Upgrading the database...<br><br>'
      .$status.'<br>');
   
   if ($bSuccess){
      echoT('Upgrade successful! Click '
          .anchor('login/signout', 'here', 'style="font-size: 12pt;"').' to continue.<br><br>');
   }
   
   echoT('               
         </div>   ');
         
   echoT('
      </body>
      </html>');

