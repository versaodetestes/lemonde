// youtube cover player
$('#youtubecover').click(function() {
$('#ytplayer').show();
$('#ytplayer').append('<iframe width="911" height="627" src="http://www.youtube.com/embed/9ZKEJ6OFCV4?autoplay=1" frameborder="0" allowfullscreen></iframe>');
$('#youtubecover').hide();
});

	// SLIDERS
  $(function() {
    var swiper = new Swiper ('#slider-perspectivas', {
      // Optional parameters
			speed: 600,
			nextButton: '#next-ilustra',
 			prevButton: '#prev-ilustra',
      loop: true,
      pagination: '.swiper-pagination',
   	  paginationType: 'fraction',
      autoplay: 3500,
      autoplayDisableOnInteraction: true,
    });
 });

window.sr = ScrollReveal();
sr.reveal('.reveal', {
  viewFactor: 0.4,
  duration: 700,
} );