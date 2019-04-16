$(function() {

// THIRD PARTY PLUGINS

// slider
var $slickElement = $('.headslider');
    $slickElement.slick({
		dots: true,
		speed: 750,
		autoplaySpeed: 5000,
		autoplay: true,
    });

var $slickElement2 = $('.slider');
    $slickElement2.slick({
		dots: true,
		speed: 750,
    });

// end slider

// END THIRD PARTY PLUGINS


// OWN SCRIPTS

// main nav and sidebar
var pull = $('#pull');
	menu = $('#main-nav ul.menu');

	$(pull).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
		pull.toggleClass('open');
		$('body').toggleClass('fixed');
	});
        
	$(window).resize(function(){
		var w = $(this).width();
		if(w > 768 && menu.is(':hidden')) {
			menu.removeAttr('style');
			menu.removeClass('open');
			pull.removeClass('open');
			$('body').removeClass('fixed');
		}
	});
	$('#main-nav ul li').on('click', function(e) {                
		var w = $(window).width();
		if(w < 768 ) {
			menu.fadeOut();
			menu.removeClass('open');
			pull.removeClass('open');
		}
	});
// end main nav and sidebar

// scrollto and fixed navigation
	$('a[href^=\\#].scroll').on('click', function(e){
		e.preventDefault();
		var href = $(this).attr('href');
		$('html, body').animate({
			scrollTop:$(href).offset().top - 100
		},'slow');
	});
// end scrollto

// fixed navigation	
	var toppoint = $('main').offset().top + 10;
		var scrollPosition = $(window).scrollTop();
		if (scrollPosition > toppoint) {
			fix();
		}
  
	$(window).scroll(function (event) {
    var y = $(this).scrollTop();
		if (y >= toppoint) {
			fix();
		} else {
			unfix();
		}
	});

	function fix(){
		$('#main-header').addClass('fixed');
		$('#main-nav').addClass('fixed');
		$('#back-top').css('display', 'block');
		return false;
	}
	function unfix(){
		$('#main-header').removeClass('fixed');
		$('#main-nav').removeClass('fixed');
		$('#back-top').hide();
		return false;
	}
// end scroll and fixed navigation

});
// end document ready

// sticky footer
var footer       = $('footer');
	body         = $('body');
$(window).on('load ready resize', function () {
	var h = $(this).height();
	if(h > body.height() + 124) {
		footer.addClass('fixed');
	}
	if(h < body.height() + 124) {
		footer.removeClass('fixed');
	}
});
// sticky footer

// anchor offset fix
$( window ).load(function() { 
  if($(location.href.split("#")[1])) {
	  var target = $('#'+location.href.split("#")[1]);
	  if (target.length) {
		$('html,body').animate({
		  scrollTop: target.offset().top - 52
		}, 200);
		return false;
	  }
	}
});
// anchor offset fix