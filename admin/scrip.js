$(document).ready(function(){

$('.menu').on('click', function(e){

	var tujuan = $(this).attr('href');
	var elemenTujuan = $(tujuan);

	$('body').animate({
		scrollTop: elemenTujuan.offset().top-145
	});

	e.preventDefault();
});
});