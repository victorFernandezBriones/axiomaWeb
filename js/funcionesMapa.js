
inicializemap()

var map = null;
var latitude;
var longitude;
function inicializemap() {
    latitude = -33.4548808;
    longitude = -70.6200282;
    var egglabs = new google.maps.LatLng(latitude, longitude);
    var egglabs1 = new google.maps.LatLng(43.0630171, 89.2296082);
    var egglabs2 = new google.maps.LatLng(13.0630171, 80.2296082);
    var image = new google.maps.MarkerImage('images/marker2.png', new google.maps.Size(84, 56), new google.maps.Point(0, 0), new google.maps.Point(42, 56));
    var mapCoordinates = new google.maps.LatLng(latitude, longitude);
    var mapOptions = {
        backgroundColor: '#ffffff',
        zoom: 18,
        disableDefaultUI: true,
        center: mapCoordinates,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
        draggable: true,
        zoomControl: true,
        disableDoubleClickZoom: true,
        mapTypeControl: false,
        styles: [
            {
                "featureType": "all",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#1f242f"
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "hue": "#761c19"
                    }
                ]
            },
            {
                "featureType": "landscape.man_made",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#fef8ef"
                    }
                ]
            },
            {
                "featureType": "poi.medical",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "hue": "#ff0000"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#c9d142"
                    },
                    {
                        "lightness": "0"
                    },
                    {
                        "visibility": "on"
                    },
                    {
                        "weight": "1"
                    },
                    {
                        "gamma": "1.98"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                    {
                        "weight": "1.00"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#d7b19c"
                    },
                    {
                        "weight": "1"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "weight": "4.03"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "visibility": "off"
                    },
                    {
                        "color": "#ffed00"
                    }
                ]
            },
            {
                "featureType": "road.highway.controlled_access",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#cbcbcb"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#0b727f"
                    }
                ]
            }
        ]
    };
    map = new google.maps.Map(document.getElementById('map-canvas-holder'), mapOptions);
    marker = new google.maps.Marker({position: egglabs, raiseOnDrag: false, icon: image, map: map, draggable: false, title: 'FDSF'});
    marker = new google.maps.Marker({position: egglabs1, raiseOnDrag: false, icon: image, map: map, draggable: false, title: 'FSDFSD'});
    marker = new google.maps.Marker({position: egglabs2, raiseOnDrag: false, icon: image, map: map, draggable: false, title: 'FDSFDS'});
    google.maps.event.addListener(map, 'zoom_changed', function () {
        var center = map.getCenter();
        google.maps.event.trigger(map, 'resize');
        map.setCenter(center);
    });
}/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


