$( document ).ready(
    function(){ 


    	if (!$( "body" ).hasClass( "home" )) {
    		$(".shameful_cover").fadeOut( "400");
            setTimeout(function(){menu_scroll()}, 200);
    	}
    	else{

            setTimeout(function(){$(".shameful_cover").fadeOut( "400");}, 400);
        }

    	

	


});


