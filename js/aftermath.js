$( document ).ready(
    function(){ 


	setTimeout(function(){cleanTheShame()}, 500);



});

function cleanTheShame() {
    $(".shameful_cover").fadeOut( "400");

    setTimeout(function(){menu_scroll()}, 400);
    
}


