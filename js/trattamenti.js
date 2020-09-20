



function hasScrolledOfferte() {

    var scroll = $(window).scrollTop() + $(window).height();
    var scroll_margin_top =$(window).height();

    $( ".green_frame" ).each(function( index ) {
        var offset = $( this ).offset();
        var height = $( this ).outerHeight();
 

        var scroll_margin = height;

        if (scroll> offset.top + scroll_margin) {
            $( this ).addClass( "visible" );
           
        }
    });
}




$(window).on('resize', function(){
});



jQuery(document).ready(function () {

    var didScroll = true;
        $(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
        if (didScroll) {
            hasScrolledOfferte();
            didScroll = false;
        }}, 50);


})


    

