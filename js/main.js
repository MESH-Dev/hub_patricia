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


	$('#dropdown-trigger:not(.form-field)').click(function(){
		$('.dropdown-menu-type').slideToggle();
		$('#dropdown-trigger').toggleClass('open');
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