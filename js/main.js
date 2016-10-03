$(document).ready(function(){

	$("#nav-icon").click(function() {
 		// Opening and closing menu		
		$(this).toggleClass("open");
		$("#menu-list").toggleClass("open");
		// When clicked on an menu item the menu closes
		$("#menu-list li a").click(function(){
			$("#nav-icon").removeClass("open");
			$("#menu-list").removeClass("open");
		});
	});

	// When click on a link scroll to div with the right ID
	$('a').click(function(){
	    $('html, body').animate({
	        scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top
	    }, 500);
	    return false;
	});
});


