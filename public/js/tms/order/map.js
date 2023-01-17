function initMap() {
    var a = new google.maps.LatLng(63.2734719, 123.7512559);
    var b = new google.maps.LatLng(27.2734719, 79.7512559);
    var c = new google.maps.LatLng(37.2734719, 89.7512559);
    var d = new google.maps.LatLng(47.2734719, 99.7512559);
    var e = new google.maps.LatLng(117.2734719, 199.7512559);
    let locations = new Array(a, b, c, d);
    const myLatLng = {
        lat: 22.2734719,
        lng: 70.7512559
    };
    var mapProp = {
        center: myLatLng,
        zoom: 8,
        //mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    // before func
    let map = new google.maps.Map(document.getElementById("map"), mapProp);
    new google.maps.Marker({
        position: myLatLng,
        map,
    });

    function initialize() {
        goToLocations(locations);
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    function goToLocations(locations) {
        $.each(locations, function (index, location) {
            window.setTimeout(function () {
                goToLocation(location);
            }, 6000);
        });
    }

    function goToLocation(location) {
        // here I can not see all locations
        window.setTimeout(map.setCenter(location), 9000);
        new google.maps.Marker({
            position: location,
            map,
        });
    }

}

window.initMap = initMap;
