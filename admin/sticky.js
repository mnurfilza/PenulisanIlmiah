$(function(){

	var navigasi = $('#header').offset().top;
	var sticky = function(){
	var scrolltop = $(window).scrollTop();

	if (scrolltop > navigasi)
	{
		$('#header').addClass('fixed');
	}else
	{
		$('#header').removeClass('fixed');
	}
	};
	sticky();
	$(window).scroll(function(){
	sticky();
	});
});