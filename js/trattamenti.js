




$(window).on('resize', function(){
});



jQuery(document).ready(function () {





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


    

