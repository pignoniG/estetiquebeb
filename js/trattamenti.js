



function hasScrolledOfferte() {

    var scroll = $(window).scrollTop() + $(window).height();
    var scroll_margin_top =$(window).height();

    $( ".green_frame" ).each(function( index ) {
        var offset = $( this ).offset();
        var height = $( this ).outerHeight();
 

        var scroll_margin = height*0.3;

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



    $( "ul.sub-menu-element li.menu-element a" ).click(function() {

        

  // Remove the # from the hash, as different browsers may or may not include it.hash
        var link = $(this).attr('href');
        var hash = "";
        if (link.indexOf("#") != -1) {
        // Your code in here accessing the string like this
        hash = link.substr(location.href.indexOf("#")).replace('#','');
        }
         console.log(hash);



         if(hash != ''){

            
            // Clear the hash in the URL
            // location.hash = '';   // delete front "//" if you want to change the address bar
             $('html, body').animate({ scrollTop: $('#element'+hash).offset().top}, 1000);

            }
             
           
         });


})


    

