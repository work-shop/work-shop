
//global variables
var cw,ch;
var loaded = false;
var state = 'intro';
var moving = false;

var log = console.log;

//initial events, and general event binding
jQuery(document).ready(function($) {

	view();
	
	$('#backtotop').click(function(event) {
	  	event.preventDefault();
		$('body,html').animate({scrollTop:0},2000);
	});
	
	$('.menu-toggle').click(function(event) {
	  	event.preventDefault();
		menuToggle();
		console.log('.menu-toggle clicked');
	});
	
	$('.invitation-toggle').click(function(event) {
	  	event.preventDefault();
		invitationToggle();
	});	

	$(".jump").click(function(e){
		e.preventDefault();
		var href = $(this).attr("href");
		href = href.toLowerCase();
		scrollLink(href);	
	});
	
	$('.flexslider-full .flex-previous').click(function() {
	    $('.flexslider-full').flexslider('prev');
	    return false;		
	});		
	
	$('.flexslider-full .flex-next').click(function() {
	    $('.flexslider-full').flexslider('next');
	    return false;		
	});	
	

	$('.flex-end-previous').click(function() {
		console.log('previous');
	    $('.flexslider-end').flexslider('prev');
	    return false;		
	});		
	
	$('.flex-end-next').click(function() {
		console.log('next');
	    $('.flexslider-end').flexslider('next');
	    return false;		
	});	
	
/*
	$('.flexslider-project-end-slideshow .flex-next').click(function() {
		console.log('next');
	    $('.flexslider-project-end-slideshow').flexslider('next');
	    return false;		
	});	
			
*/
	


});//end document.ready

$(window).ready(function() {

	$('[data-toggle="tooltip"]').tooltip();

});//end window.ready


$(window).resize(function() {

	view();	
	
});//end window.resize

//FUNCTIONS

//m or M	
$(document).keypress(function(e) {
	if(e.which == 109 || e.which == 77) {	
		if($("input:focus")){
			var elem = document.activeElement;
			if ( elem.type ){ 
				
			}
			else{ 
				menuToggle();	
			}
		}
	}
});

//down arrow
$(document).keydown(function(e){
    if (e.keyCode == 40 && !moving) { 
    	moving = true;
    	pos = stateNext.offset().top;

	 	$('html,body').animate({
			scrollTop: pos
		},2000, function() {
			moving = false;
		});  
       return false;
    }
});

//up arrow
$(document).keydown(function(e){
    if (e.keyCode == 38 && !moving) { 
    	moving = true;
    	pos = statePrevious.offset().top;

	 	$('html,body').animate({
			scrollTop: pos
		},2000, function() {
			moving = false;
		});  
       return false;
    }
});

//left arrow
$(document).keydown(function(e){
    if (e.keyCode == 37) { 
    	
       return false;
    }
});

//right arrow
$(document).keydown(function(e){
    if (e.keyCode == 39) { 
    	
       return false;
    }
});


//initialize flexslider slideshows
function flexsliderSetup(){

	$('.flexslider-home').flexslider({	
	      animation: 'fade',
	      slideshowSpeed: 4000,           
		  animationSpeed: 1000,
	      directionNav: false,
	      controlNav: false
	 });	 

	$('.flexslider-full').flexslider({
	      animation: 'slide',
	      controlsContainer: '.flexslider-full-controls',
	      slideshowSpeed: 5000,           
		  animationSpeed: 600,
	      directionNav: false,
	      keyboard: true
	 });
	 
	$('.flexslider-end').flexslider({
	      animation: 'slide',
	      controlsContainer: '.flexslider-end-controls',
	      slideshowSpeed: 5000,           
		  animationSpeed: 600,
	      directionNav: false,
	      keyboard: true
	 });	 			 
	 	 	
}

//animate jump links
function scrollLink(destination){
	$('html,body').animate({
		scrollTop: $(destination).offset().top - 0
	},1500);
}

//open and close the menu
function menuToggle(){
	console.log('menutoggle');
	
	if($('#menu').hasClass('off')){
		$('#menu').removeClass('off');
		$('#menu').addClass('on');
		$('html').removeClass('menu-closed');
		$('html').addClass('menu-open');
		$('#menu').scrollTop(0);				
		$('html,body').scrollTop(0);			
		var trim = $(window).height();		
		$('html,body').css('height',trim);
		$('html,body').css('overflow','hidden');
	}
	
	else if($('#menu').hasClass('on')){
		$('#menu').removeClass('on');
		$('#menu').addClass('off');
		$('html').removeClass('menu-open');
		$('html').addClass('menu-closed');
		$('html').scrollTop(0);	
		$('html,body').css('height','100%');
		$('html,body').css('overflow','visible');
	}
	
}

function invitationToggle(){
	
	if($('.invitation-form').hasClass('closed')){
		$('.invitation-form').removeClass('closed');
		$('.invitation-form').addClass('open');
	}
	
}

//measure, resize, and adjust the viewport
function view(){
	
	ch = $(window).height();
	cw = $(window).width();
	ph = ch - 130;
	fw = cw*.5;
	
	if($(window).width() >= 768){		
		$('.block.half').css('height',ch/2);
		$('.block.golden-max').css('max-height',ch*.72);		
		$('.block.sixty').css('height',ch*.69);										
		$('.block.full').css('height',ch+60);	
		$('.block.min').css('min-height',ch);				
		$('.block.min-large').css('min-height',ch);	
		$('.block.three-quarter').css('height',ph);	
		$('.block.three-quarter-max').css('max-height',ph);		
		$('.flexslider-hero').css('height',fw);																									
	}
	else{
		$('.block.half').css('height',ch/2);
		$('.block.golden-max').css('max-height',ch*.70);		
		$('.block.full').css('height',ch+60);	
		$('.block.min').css('min-height',ch);							
		$('.block.min-large').css('min-height','none');	
		$('.block.three-quarter').css('height',ph);			
		$('.block.three-quarter-max').css('max-height',ph);	
		$('.flexslider-hero').css('height',fw);																																	
	}
	
	if(!loaded){
		loadPage();
	}		

}

//once all elements are sized, slideshows initialized, fade in the content
function loadPage(){
	loaded = true;
	
	flexsliderSetup();

	setTimeout(function(){
		$('.loading').addClass('loaded');
		$('.landing').addClass('landed');
		view();
		if ( $('.spy').length > 0 ) { $(document).trigger('spy-init'); }	
	},1000);		
		
}

$(window).scroll(function() { 

	if( !$('html').hasClass('menu-open') ) {	
	
		var after = $('body').offset().top + 200;
		       
		if($(this).scrollTop() >= after && $("body").hasClass('before')){
			$("body").removeClass('before').addClass('after');
		} 
		else if($(this).scrollTop() < after && $("body").hasClass('after')){
			$("body").removeClass('after').addClass('before');	
		} 
	
	}

});//end window.scroll

$(document).on('spy-init', function() {

	var current = undefined;

	spied = {};

	$('.spy .jump:not(.exclude)').each( function( i,d ) { 
		spied[ $(d).attr('href') ] = true;
	});
	/**
	 * When spying on the state of the page, we're interested in:
	 * the currently-viewed element. (and performing actions on it).
	 * at any point we can:
	 * jump to
	 */

	 $(document).on('spy-recalculate', function() {
	 	decideActive(  $('.block:in-viewport').filter(
	 		function( i,x ) { return spied[ '#' + $(x).attr('id') ]; }
	 	));
	 });

	 $(document).on('spy-repaint', function( event, d ) {
	 	if ( current != d ) {
	 		var c = $(current);
	 		    d = $( d );

	 		c.removeClass('active');
	 		d.addClass('active').addClass('activated');
	 		$('.spy .jump[href="#' + c.attr('id') + '"]').removeClass('active');
	 		$('.spy .jump[href="#' + d.attr('id') + '"]').addClass('active');

	 		current = d;
	 	}
	 })


	 $(window).on('scroll', function() {
	 	if( !$('html').hasClass('menu-open') ) {	
	 		if ( current == undefined ) { $('.spy .jump').removeClass('active'); }
	 		$(document).trigger('spy-recalculate');
	 	}
	 });

	 $(document).trigger('spy-recalculate');

	 function decideActive( candidates ) {
	 	/**
		 * Let's define an element as "active" if its body is intersecting the
		 * centerpoint of the page. Let's compute the current centerpoint, and 
		 * iterate across the blocks that are in view, decide which ones are active,
		 * and trigger the desired action on them.
		 */


		if($('.spy').hasClass('falloff')){
			var falloffPosition = $( $('.falloff-link').attr('href')).offset().top;
		}

		var w = $(window), doc = $(document);
		var centerline = w.scrollTop() + (w.height() / 2);

		candidates.each( function( i,d ) {
			d = $( d );

			if ( d.offset().top < centerline && (d.offset().top + d.height()) > centerline ) {
 				var s = $('.spy');

 				doc.trigger('spy-repaint', d);

 				if ( $('.spy').hasClass('falloff') && d.is( $('.falloff-link').attr('href') ) ) {
 					s.addClass('off');
 				} else {
 					s.removeClass('off');
 				}
 			}
		});
	 }

	 function decideOffset() {
	 	var w = $(window);
	 	return ($('body').hasClass('home')) ? ((w.width() < 768) ? 350 : (w.height() / 2)) : 80;
	 }
});




