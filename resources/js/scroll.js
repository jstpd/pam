
$(document).ready(function() {

  var offsettop = $('header').offset().top;
	if (offsettop > 100) {
		$('header').addClass('header-scroll');
	} else {
		$('header').removeClass('header-scroll');
	}

	$(window).bind('scroll', function () {
		if ($(window).scrollTop() > 1) {
			$('header').addClass('header-scroll');
		} else {
			$('header').removeClass('header-scroll');
		}
	});

	$("a.scroll").click(function () { 
		var elementClick = $(this).attr("href");
		var destination = $(elementClick).offset().top-125;
		$('html,body').animate( { scrollTop: destination }, 1200 );
		return false;
	});
	
	$(function() {
		$('a[href*="#"]').on('click', function(e) {
			e.preventDefault();
			$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
		});
	});

  $(".team-list").on("click", "a", function(a) {
    a.preventDefault();
    var e = $(this).data("team");
    $(".team-single").removeClass("active"), $(".team-list li").removeClass("active"), $("#" + e).addClass("active"), $(this).parent().addClass("active")
  });

});