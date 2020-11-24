//-------- Off canvas  ------------

jQuery(document).ready(function($){
	var bsOverlay = $('.bs-canvas-overlay');
	$('[data-toggle="canvas"]').on('click', function(){
		var ctrl = $(this), 
			elm = ctrl.is('button') ? ctrl.data('target') : ctrl.attr('href');
		$(elm).addClass('mr-0');
		$(elm + ' .bs-canvas-close').attr('aria-expanded', "true");
		$('[data-target="' + elm + '"], a[href="' + elm + '"]').attr('aria-expanded', "true");
		if(bsOverlay.length)
			bsOverlay.addClass('show');
		return false;
	});
	
	$('.bs-canvas-close, .bs-canvas-overlay').on('click', function(){
		var elm;
		if($(this).hasClass('bs-canvas-close')) {
			elm = $(this).closest('.bs-canvas');
			$('[data-target="' + elm + '"], a[href="' + elm + '"]').attr('aria-expanded', "false");
		} else {
			elm = $('.bs-canvas')
			$('[data-toggle="canvas"]').attr('aria-expanded', "false");	
		}
		elm.removeClass('mr-0');
		$('.bs-canvas-close', elm).attr('aria-expanded', "false");
		if(bsOverlay.length)
			bsOverlay.removeClass('show');
		return false;
	});
});


/* ------------ Form Validation ----------- */

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

//--------- Image Slideshow ------------

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
}

// ------- Rating ---------
$(document).ready(function(){
  
  /* 1. Visualizing things on Hover - See next part for action on click */
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
   
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });
  
  
  /* 2. Action to perform on click */
  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
    
    // JUST RESPONSE (Not needed)
    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    var msg = "";
    if (ratingValue > 1) {
        msg = "Thanks! You rated this " + ratingValue + " stars.";
    }
    else {
        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
    }
    responseMessage(msg);
    
  });
  
  
});

function responseMessage(msg) {
  $('.success-box').fadeIn(200);  
  $('.success-box div.text-message').html("<span>" + msg + "</span>");
}
