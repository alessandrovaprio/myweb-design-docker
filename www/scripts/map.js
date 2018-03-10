
function initMap(map) {
    debugger;
  var uluru = {lat: -25.363, lng: 131.044};
  var map = new google.maps.Map(map, {
    zoom: 4,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}


