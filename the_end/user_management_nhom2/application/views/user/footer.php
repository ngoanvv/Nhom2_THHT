<div class="clearfix-20"></div>

<footer class="">
   
</footer>
<script src="<?php echo base_url() ?>assets/baohung/js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/baohung/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/baohung/js/owl.carousel.min.js" type="text/javascript"></script>

<script async="" src="<?php echo base_url() ?>assets/baohung/js/nav-menu.js" type="text/javascript"></script>
<script async="" src="<?php echo base_url() ?>assets/baohung/js/jquery.hoverdir.js" type="text/javascript"></script>
<script async="" src="<?php echo base_url() ?>assets/baohung/js/modernizr.custom.97074.js" type="text/javascript"></script>
<script async="" src="<?php echo base_url() ?>assets/baohung/js/style-main.js" type="text/javascript"></script>
<script>
    $('.slider-main').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });


    $('.slider-dt').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        responsive: {
            0: {
                items: 3
            },
            600: {
                items: 4
            },
            1000: {
                items: 5
            }
        }
    });

</script>
</body>
</html>
