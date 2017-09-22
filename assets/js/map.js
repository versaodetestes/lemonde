function initMap() {
        var mapcenter = {lat: -23.539918, lng: -47.468771};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: mapcenter,
          styles:[]
        });
        var marker = new google.maps.Marker({
          position: mapcenter,
          map: map
        });
      }