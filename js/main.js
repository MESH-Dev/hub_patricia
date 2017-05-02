jQuery(document).ready(function($){
	// var panelwidth = $('.secondary-cta').width();
	// $('.secondary-cta').css({'height':panelwidth + 'px'});
// });

$('.gateway-line').sidr({
      name: 'sidr-main',
      source: '.genesis-nav-menu, .gateway-nav',
      renaming: false,
      side: 'left',
      displace: false,  
      });

$(function(){
	$('#dropdown-trigger').click(function(){
		$('.dropdown-menu-type').slideToggle();
	});
});

});