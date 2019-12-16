$(window).on('load', function () {

    //variables for map
    var addressString = 'Hoskerahalli';
    var myLatLng = {
        lat: 12.932580,
        lng: 77.544910
    };

    //render maps
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 8,
        center: myLatLng
    })
});