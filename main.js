
jQuery(document).ready(function($){
	var panelwidth = $('.secondary-cta').width();
	$('.secondary-cta').css({'height':panelwidth + 'px'});
});

$('.sidr-trigger').sidr({
      name: 'sidr-main',
      source: '.main-navigation, .gateway-nav',
      renaming: false,
      side: 'right',
      displace: false,  
      });
});