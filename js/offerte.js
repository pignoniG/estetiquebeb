



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

    function countdownComplete(unit, value, total){
    

        if(total<=0){
            console.log("offerta_scaduta")

            $(".offerta_scaduta_show").show();
            $(".offerta_scaduta_hide").hide();
           

        }
    }


$(window).on('resize', function(){
            $("#countdownOfferta_giorni").TimeCircles().rebuild();
            $("#countdownOfferta_ore").TimeCircles().rebuild();
            $("#countdownOfferta_minuti").TimeCircles().rebuild();
            $("#countdownOfferta_secondi").TimeCircles().rebuild();
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




            $("#countdownOfferta_giorni").TimeCircles({ time: { Days: { show: true } }});
            $("#countdownOfferta_ore").TimeCircles({ time: { Hours: { show: true } }});
            $("#countdownOfferta_minuti").TimeCircles({ time: { Minutes: { show: true } }})
            $("#countdownOfferta_secondi").TimeCircles({ time: {  Seconds: { show: true } }}).addListener(countdownComplete);;

            if ( $(".offerta_scaduta_show").hasClass("countComplete")) {
                countdownComplete(0,0,0);

            };

})


    

