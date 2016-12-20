
$(document).ready(function(){
    $('.on_search').click(function(e) {
        e.preventDefault();
        if ($('#form_search').css('display') == 'none') {
            $('#form_search').show();
        }
        else {
            $('#form_search').hide();
        }
    });

//    up top    //

    $('.scroll_top').click(function(e){
        jQuery('html, body').animate({scrollTop:parseInt(0)}, 'slow');
    });

    $('.GoDown').click(function(e){
        var catTopPosition = jQuery('#PageDown').offset().top;
        // Scroll down to 'catTopPosition'
        jQuery('html, body').animate({scrollTop:parseInt(catTopPosition)-0}, 'slow');
    });
});


jQuery(document).ready(function(){
    jQuery(' .da-thumbs .list-li ').each( function() { jQuery(this).hoverdir(); } );
    /* ==========================================================================
     Mobile Menu trigger
     ========================================================================== */
    jQuery('.sidebar aside').addClass('col-md-12 col-sm-12 col-sm-6 col-xs-12');

});



$( window ).load(function() {
    render_size();
    var url = window.location.href;
    $('.menu-item  a[href="' + url + '"]').parent().addClass('active');
});

$( window ).resize(function() {
    render_size();
});

function render_size(){

    var h_6779 = $('.h_6779').width();
    $('.h_6779').height( 0.6779 * parseInt(h_6779))

    var h_655 = $('.h_655').width();
    $('.h_655').height( 0.655 * parseInt(h_655))

    var h_681 = $('.h_681').width();
    $('.h_681').height( 0.681 * parseInt(h_681))

}

