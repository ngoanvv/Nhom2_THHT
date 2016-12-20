    
   <SCRIPT src="<?=base_url()?>assets/js/front_end/floater_xlib.js" type=text/javascript></SCRIPT>


<SCRIPT type=text/javascript>

var slideTime = 700;
var floatAtBottom = false;

function pepsi_floating_init()
{
	xMoveTo('floating_banner_right', 887 - (1024-screen.width), 0);

	winOnResize(); // set initial position
	xAddEventListener(window, 'resize', winOnResize, false);
	xAddEventListener(window, 'scroll', winOnScroll, false);
}
function winOnResize() {
	checkScreenWidth();
	winOnScroll(); // initial slide
}
function winOnScroll() {
  var y = xScrollTop();
  if (floatAtBottom) {
    y += xClientHeight() - xHeight('floating_banner_left');
  }
  
  xSlideTo('floating_banner_left', (screen.width - (800-545) - 770)/2-115 , y, slideTime);  // Chỉnh khoảng cách bên trái
  xSlideTo('floating_banner_right', (screen.width - (550-795) + 770)/2, y, slideTime); // // Chỉnh khoảng cách bên Phải
}
	
function checkScreenWidth()
{
	if( document.body.clientWidth < 926 )
	{	
		document.getElementById('floating_banner_left').style.display = 'none';
		document.getElementById('floating_banner_right').style.display = 'none';
	}
	else
	{
		document.getElementById('floating_banner_left').style.display = '';
		document.getElementById('floating_banner_right').style.display = '';	
	}
}

</SCRIPT>  
    <div id="floating_banner_left" style="margin-top:230px;text-align:right; position:absolute; overflow:hidden; top: 10px; left: 0px; width: 105px; border: 0px solid #000;">
<div id="floating_banner_left_content">
 <?php foreach($slides_left as $left) :  ?>
    <a href="<?=base_url(@$left->url)?>" target="_blank"><img src="<?=base_url(@$left->link)?>" border="0" width="105px" alt="" /></a><br />
   <?php endforeach;?>  
</div>
</div>



<div id="floating_banner_right" style=" margin-top:230px;text-align:left; position:absolute; overflow:hidden; top: 10px; right: 0px; width: 105px; border: 0px solid #000;">
	<div id="floating_banner_right_content"  >
    <?php foreach($slides_right as $right) :  ?>
    <a href="<?=base_url(@$right->url)?>" target="_blank"><img src="<?=base_url(@$right->link)?>" border="0" width="105px" alt="" /></a><br />
     <?php endforeach;?>  
</div>
</div>
<script>
	runQuery();
</script>
<script>
	pepsi_floating_init();
</script>

    
    
 