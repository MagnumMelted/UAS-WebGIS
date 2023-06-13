<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS WebGIS Ortega</title>
</head>
<body>
    <h1>Hello World!</h1>
</body>
<script>
    
var baseLayers = {'Google Satellite Hybrid': GoogleSatelliteHybrid}; 
var overlayLayers = {} 
L.control.layers(baseLayers, overlayLayers, {collapsed: false}).addTo(map);

var osmUrl = 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}'; 
var osmAttrib ='Map data &copy; OpenStreetMap contributors'; 
var osm2 = new L.TileLayer(osmUrl, {minZoom: 0, maxZoom: 13, attribution: osmAttrib }); 
var rect1 = {color: "#ff1100", weight: 3}; 
var rect2 = {color: "#0000AA", weight: 1, opacity:0, fillOpacity:0}; 
var miniMap = new L.Control.MiniMap(osm2, {toggleDisplay: true, position : "bottomright", 
    aimingRectOptions : rect1, shadowRectOptions: rect2}).addTo(map);


</script>
</html>