	// SLIDERS
  $(function() {
    var swiper = new Swiper ('#slider-lazer', {
      // Optional parameters
			speed: 600,
			nextButton: '#next-lazer',
 			prevButton: '#prev-lazer',
      loop: true,
      pagination: '#pagination-lazer',
   	  paginationType: 'fraction',
      autoplay: 3500,
      autoplayDisableOnInteraction: true,
    });
 });