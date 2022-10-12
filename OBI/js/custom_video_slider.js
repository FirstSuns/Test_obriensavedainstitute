	$(document).ready(function(){
			
		/* slider auto rotate */
		sliderauto();
		
		/* close popup box */
		$(".c-close").click(function(){
			var _par = $(this).closest(".c-popup");
			_par.find('iframe').attr('src', '');
			$(this).closest(".c-popup").hide();
		});
		
		/* show popup   */
		var _par = $(".c-popup");
		$(".c-play-video").click(function(){
			var _this = $(this);
			var play_video = _this.data("src");
			var src = _par.find(".c-iframe").attr("src",play_video);
			var xx = eval($(window).scrollTop()) + eval(100);
			
			xx = eval($(window).scrollTop()) - eval(500);
			
			_par.css('top',xx+"px");
			_par.css('z-index',99999999999);
			_par.show();
		});
	});
	
	/* slider auto rotate */
	function sliderauto()	{
		setTimeout(function(){
			$(".next").trigger("click");
			sliderauto();
		},8000);
	}
	
	var slideIndex = 1;
	showSlides(slideIndex);
	
	/* Next/previous controls */
	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	/* Thumbnail image controls */
	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		if (n > slides.length) {slideIndex = 1} 
		if (n < 1) {slideIndex = slides.length}
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none"; 
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block"; 
		dots[slideIndex-1].className += " active";
	}