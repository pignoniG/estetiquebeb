$( document ).ready(
    function(){ 


    	if (!$( "body" ).hasClass( "home" )) {
    		$(".shameful_cover").fadeOut( "100");
            setTimeout(function(){menu_scroll()}, 200);
    	}
    	else{
            $(".shameful_cover svg").css("top", "0");

            setTimeout(function(){$(".shameful_cover").fadeOut( "400");}, 2200);
        }

    	

	


});


