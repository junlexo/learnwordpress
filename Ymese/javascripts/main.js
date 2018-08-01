function clickDropUp() {
	$('span.drop').on('click', function(){
		var form_group = $(this).parents('.form-group');
		if(form_group.hasClass('isDropUp'))		
		{
			form_group.removeClass('isDropUp');
			form_group.find('input').slideDown();
		}
		else
		{
			form_group.find('input').slideUp();
			form_group.addClass('isDropUp');
		}
	});
}

$(document).ready(function(){
	if($( window ).width() > 991)	
		clickDropUp();
	else
	{
		$('.form-group').removeClass('isDropUp');
		$('.form-group').addClass('mobile');
	}
});