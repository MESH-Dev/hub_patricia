jQuery(document).ready(function($){
	// var panelwidth = $('.secondary-cta').width();
	// $('.secondary-cta').css({'height':panelwidth + 'px'});
// });

//Globals
var windowW = $(window).width();

// $('.gateway-line').sidr({
//       name: 'sidr-main',
//       source: '.genesis-nav-menu, .gateway-nav',
//       renaming: false,
//       side: 'left',
//       displace: false,  
//       });

$(function(){
	$('#dropdown-trigger').click(function(){
		$('.dropdown-menu-type').slideToggle();
		$('#dropdown-trigger').toggleClass('open');
	});
});

if (windowW > 1070){

    $('.has-parallax').parallax("50%",.5);
  }

});