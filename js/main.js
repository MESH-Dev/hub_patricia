jQuery(document).ready(function($){
	// var panelwidth = $('.secondary-cta').width();
	// $('.secondary-cta').css({'height':panelwidth + 'px'});
// });

//Globals
var windowW = $(window).width();

$('#mobile-menu-trigger').sidr({
      name: 'sidr-main',
      source: '.close-wrap, .genesis-nav-menu, .gateway-line .wrap',
      renaming: false,
      side: 'right',
      displace: false,
      });

$('.close-sidr').click(function(){
	$.sidr('close', 'sidr-main');
});


$('#dropdown-trigger:not(.form-field)').click(function(){
	$('.dropdown-menu-type').slideToggle();
	$('#dropdown-trigger').toggleClass('open');
});

$('.sidr-inner .menu-item-has-children > a').click(function(event){
	event.preventDefault();
	event.stopPropagation();
	$(this).parent().toggleClass('open');
});

$('.frm_opt_container input').click(function(){
	$(this).parent().toggleClass('checked');
});

var $ctr=0;
	$('.cta-dropdown.form-field').click(function(){

		//$ctr=0;
		$ctr++;
		if($ctr == 1){
			$('.dropdown-menu-type').slideDown('fast');
		}else{
			$('.dropdown-menu-type').stop().slideUp('fast');
			$ctr=0;
		}
		$('.dropdown-menu-type input[type="radio"').click(function(){
			$('.dropdown-menu-type').delay(200).slideUp('fast');
			});

	});

//This doesn't work very well, loads well after the page loads, may need to create a new template just for these forms.
$('.body').has('.frm_pro_form').addClass('form-page');

if (windowW > 1070){

    $('.has-parallax').parallax("50%",.5);
  }

});
