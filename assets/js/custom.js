var image = document.getElementsByClassName('parallax-img');
new simpleParallax(image, {
	delay: 2,
	transition: 'cubic-bezier(0,0,0,1)'
});

$(window).scroll(function() {
	if ($(document).scrollTop() > 100) {
	  $('#navarea').addClass('affix');
	} else {
	  $('#navarea').removeClass('affix');
	}
});

function gotoFrm(v){
	$('.sn_form').hide();
	$('.sn_form_'+v).show();
}

if($('.start_now')[0]){

	$('input[name=own_home]').click(function(){
		if($(this).val() == "Yes"){
			$('.sn_form_1_Yes').show();
			$('.sn_form_1_No').hide();
		}
		else{
			$('.sn_form_1_No').show();
			$('.sn_form_1_Yes').hide();
		}
	})

	$('input[name=own_home]').prop('checked', false);
}

$('a.page-scroll').click(function(){
	hash = $(this).attr('href');
	$('html, body').animate({
        scrollTop: $(hash).offset().top-59
      }, 1000);
});
