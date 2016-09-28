$(document).ready(function(){
	$("#nav-icon").click(function(){
		$(this).toggleClass("open");
		$("#menu-list").toggleClass("open");
	});

	$(".click-down").click(function() {
		$('html, body').animate({
		    scrollTop: $(".explain-product").offset().top
		}, 1000);
	});
});