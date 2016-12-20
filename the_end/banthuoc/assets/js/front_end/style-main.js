$(window).load(function () {
    render_size();
    var url = window.location.href;
    $('.menu-item  a[href="' + url + '"]').parent().addClass('active');
});

$(window).resize(function () {
    render_size();
});


function render_size() {
    var h_100 = $('.h_100 img').width();
    $('.h_100 img').height( 1 * parseInt(h_100));
}


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
});

//---------up top--------//

$(window).scroll(function () {
    if ($(window).scrollTop() >=200) {
        $('#scroll_top').show();
    }
    else {
        $('#scroll_top').hide();
    }
});
$('#scroll_top').click(function(){
    jQuery('html, body').animate({scrollTop:parseInt(0)}, 'slow');
});