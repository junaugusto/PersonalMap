var map;
function initMap() {
      //if (lat&lng = '') {
        var myLatLng = {lat: -3.8840443, lng: -38.629144};
      //}else{
      //  var myLatLng = {lat, lng };
     // }
        // Create a map object and specify the DOM element for display.
        map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          scrollwheel: true,
          zoom: 13
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
          map: map,
          position: myLatLng,
          icon: 'img/marcador.png',
          draggable: true,
          title: 'Hello World!'
        });
      }
  
function pan() {
        var panPoint = new google.maps.LatLng(document.getElementById("latitude").value, document.getElementById("longitude").value);
        map.panTo(panPoint)

     }
