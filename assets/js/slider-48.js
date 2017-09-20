	// SLIDERS
  $(function() {
    var swiper = new Swiper ('#slider-plantas', {
      // Optional parameters
			speed: 600,
			nextButton: '#next-planta',
 			prevButton: '#prev-planta',
      loop: true,
   	  paginationType: 'fraction',
      autoplay: 3500,
      autoplayDisableOnInteraction: true,
    });
 });