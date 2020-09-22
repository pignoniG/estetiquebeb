var isMobile = false;

$(document).ready(function(){

	$('body').addClass('up-scrolling');
	toggle_menu_currents();
	toggle_mobile_menu();
	toggle_menu_elements();

	checkIfMobile();

	//chiudi menù cliccando su spazio bianco

	$("header.site-header").bind( "click", function(e) {
		if (e.target == this){
			collapse_menu_elements();
		};
	});


  } //fine document ready 
); 


function checkIfMobile()  {
	//console.log($(window).width(),"$(window).width()")
	if ( parseInt($(window).width()) < 640) {
		isMobile = true;
	}
	else{ isMobile = false; 

	};
};





$(window).scroll(function(){


});




$(window).resize(function() {
	var lastIsMobile = isMobile;
	checkIfMobile();
	console.log(isMobile);

	set_nav_h();

	if ($(document).height() > $(window).height()+ $('#masthead').height() ) {
    
	} else {
		$('header').removeClass('nav-up').addClass('nav-down');

  
	}

	if ($("header#masthead").hasClass("overflowing")) {
		collapse_menu_elements();
	}
	if (lastIsMobile != isMobile) {
		collapse_menu_elements();
		

	}

});

function set_nav_h (){
	if ($("header#masthead").hasClass("expanded")) {


	var min_header_height = $("ul.sub-menu-element").height() ;
	//console.log(min_header_height,$(this));

	if ( min_header_height + 200 < $(window).height()) {
		min_header_height = min_header_height + 200;
		

	}
	else{
		min_header_height = $(window).height();
		$("header#masthead").addClass("overflowing");
	}

	
	$("header#masthead").css('minHeight', min_header_height);
	}
	else{

		$("header#masthead").css('minHeight', 70);
			console.log("cazzo");

	}




}


function toggle_mobile_menu(){
  $('#mobile_menu_toggle').bind( "click", function(e) {

		if ( $("header#masthead").hasClass("mobile_open") ) {
			$("header#masthead").removeClass("mobile_open");
			$("header#masthead").removeClass("expanded");
			
		}
		else{
			$("header#masthead").addClass("mobile_open");
			$('#masthead').removeClass('hovers_top_slider');
		}  
		set_nav_h(); 
		
  });
}

function toggle_menu_elements(){
  $('li.menu-element.menu-element-has-children > a').bind( "click", function(e) {
	

	if (e.target == this || $(e.target).is("button") || $(e.target).is("svg")){
	
		if ($(this).parent("li").children("ul.sub-menu-element").is(":visible")) {

			$("ul.sub-menu-element").hide();
			$("header.site-header").css('minHeight', 70);
			$("header#masthead").removeClass("expanded");
			$("header#masthead").removeClass("overflowing");
			set_nav_h();
	
			try {get_nav_pos();}
			catch(err) {}
	  	}

		else {

			$('#masthead').removeClass('hovers_top_slider');
	
			$("ul.sub-menu-element").hide();
			$("header#masthead").addClass("expanded");


			set_nav_h();




			
			

			var selector= this
	
			
			if (isMobile && $("header#masthead").hasClass("mobile_open")) {
				show_menu_element(selector)
			}
			else{setTimeout(function() {show_menu_element(selector)}, 200);

			};
			//ritardo per far apparire la lista dopo che il menù si è espanso
		};
	};
	  
  });
}





function show_menu_element(selector){

	$(selector).parent("li").children("ul.sub-menu-element").show();
}

function collapse_menu_elements(){
  
	$("ul.sub-menu-element").hide();
	$("header.site-header").css('minHeight', 0);
	$("header#masthead").removeClass("mobile_open");
	$("header#masthead").removeClass("expanded");
	set_nav_h ();


	try {get_nav_pos();}
	catch(err) {}
   
}


// Hide Header on on scroll down
var didScroll;
var scrolledUp;
var lastScrollTop = 0;
var delta =5;
var delta_down = 10;



var lastScrollTop_general = 0;
$(window).scroll(function(event){
	didScroll = true;

   var st = $(this).scrollTop();
   if (st > lastScrollTop_general){
       scrolledUp = false;
   } else {
      scrolledUp = true;
   }
   lastScrollTop_general = st;
});




setInterval(function() {
	if (didScroll) {
		if (isMobile && $("header#masthead").hasClass("mobile_open")) {
			
		}
		else{
			hasScrolled();
			didScroll = false;
		};
	}
}, 50);


function hasScrolled() {

	//console.log(isMobile,"isMobile");
	if ( $("header#masthead").hasClass("mobile_open") && isMobile ) {
		//console.log("menu not closing, it's mobile!");	
	}
	else{
		collapse_menu_elements();
	}


	

	
	//$("#menuMobile").hide();
	var navbarHeight = $('header').outerHeight();
	var navbarOriginalPos = 0; 
	var st = $(this).scrollTop();

	var topStickDelta = 30;

	if (st< topStickDelta) {
		$('header').addClass('nav_bar');
	}
	else{
		$('header').removeClass('nav_bar');

	}

	//console.log(st);
	
	// Make sure they scroll more than delta
	if(Math.abs(lastScrollTop - st) <= delta)
		return;


	
	// If they scrolled down and are past the navbar, add class .nav-up.
	// This is necessary so you never see what is "behind" the navbar.
	if (st > lastScrollTop && st > topStickDelta+delta) {
		// Scroll Down
		$('header').removeClass('nav-down').addClass('nav-up');

	} else {
		// Scroll Up
		if(st + $(window).height() < $(document).height() ) {
  
		  if (Math.abs(lastScrollTop - st) > delta_down) {
			$('header').removeClass('nav-up').addClass('nav-down');
		  }
		}
	}


	lastScrollTop = st;
}


function toggle_menu_currents(){

		var current_href= String(window.location.href);
	   	$( ".menu-element a" ).each(function( index ) {

	   		var element_href= String($(this).attr('href'));

	   		if (element_href) {

  			if (element_href == current_href){

  				if ($(this).closest(".menu-element").closest("ul.sub-menu-element").length>0) {

  					$(this).closest(".menu-element").closest("ul.sub-menu-element").parent("li.menu-element-has-children").children("a").addClass("current")
  		

  					};

  				$(this).addClass("current");
		}}
	});

}


// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = {37: 1, 38: 1, 39: 1, 40: 1};

var isScrollable=true;

function preventDefault(e) {
  e = e || window.event;
  if (e.preventDefault)
      e.preventDefault();
  e.returnValue = false;  
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

function disableScroll() {
  if (window.addEventListener) // older FF
      window.addEventListener('DOMMouseScroll', preventDefault, false);
  window.onwheel = preventDefault; // modern standard
  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
  window.ontouchmove  = preventDefault; // mobile
  document.onkeydown  = preventDefaultForScrollKeys;
  isScrollable=false;
}

function enableScroll() {
    if (window.removeEventListener)
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.onmousewheel = document.onmousewheel = null; 
    window.onwheel = null; 
    window.ontouchmove = null;  
    document.onkeydown = null; 

    isScrollable=true; 
}

function toggleScroll(){
	if (isScrollable) {
		disableScroll();
	}
	else{
		enableScroll();
	}
}


