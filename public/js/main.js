/* JS Document */

$(document).ready(function() {

	$("#go-to-top").click(function(){
		$('html, body').animate({scrollTop:0}, 'slow');
		return false;
	});

	$(".panel > .panel-heading").click(function(){
		var icone = $(this).find("i.fa");
		if (icone.hasClass("fa-expand")) {
			icone.removeClass("fa-expand").addClass("fa-compress");
		} else {
			icone.removeClass("fa-compress").addClass("fa-expand");
		}
		$(this).next(".panel-body").toggle("slow");
	});

	$(".card-group > .card").each(function(){
		var direita = $(window).width() - ($(this).offset().left + $(this).width());
		if (direita < ($(this).width() + 50)) {
			$(this).addClass("popup-left");
			$(this).find(".card-hover").css("left", "-115%");
		}
	});

	$(".sidebar a").click(function(){
		var href = $(this).attr("href");
		if (href == "#") {
			$("nav.sidebar").addClass("in");
		}
	});

});