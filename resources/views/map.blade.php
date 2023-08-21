<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Quick Start - Leaflet</title>

    <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        .leaflet-container {
            height: 400px;
            width: 1500px;
            max-width: 100%;
            max-height: 100%;
        }
        /* Gaya untuk elemen #map */
        #map {
            width: 1500px;
            height: 400px;
            border-radius: 40px;
            margin: 0 auto;
            margin-top: 70px; /* Sesuaikan dengan tinggi navbar Anda */
            position: relative;
            z-index: 1; /* Pastikan z-index lebih rendah dari navbar */
            /* Gaya lain yang Anda butuhkan */
        }
    </style>

</head>
<body>

<div id="map" class="rounded-map "></div>
<script>
    var map = L.map('map').setView([-6.862541, 108.530968], 13);

    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var marker = L.marker([-6.862541, 108.530968]).addTo(map)
        .bindPopup('<b>Desa Ciawigajah</b><br />Beber.').openPopup();

    var circle = L.circle([-6.862541, 108.530968], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 500
    }).addTo(map).bindPopup('Desa Ciawigajah.');

    var polygon = L.polygon([
        [51.509, -0.08],
        [51.503, -0.06],
        [51.51, -0.047]
    ]).addTo(map).bindPopup('I am a polygon.');

    var popup = L.popup()
        .setLatLng([-6.862541, 108.530968])
        .setContent('Desa Ciawigajah.')
        .openOn(map);

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent('You clicked the map at ' + e.latlng.toString())
            .openOn(map);
    }

    map.on('click', onMapClick);
</script>

</body>
</html>
