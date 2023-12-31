<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<link rel="stylesheet" href="<?=base_url()?>assets/leaflet.groupedlayercontrol.css" /> 
<script src="<?=base_url()?>assets/leaflet.groupedlayercontrol.js"></script>
<link rel="stylesheet" href="<?=base_url()?>assets/Control.MiniMap.css" /> 
<script src="<?=base_url()?>assets/Control.MiniMap.js"></script>


<div class="content"> 
    <div id="map" style="width: 100%; height: 530px; color:black;"></div> 
</div> 

<script> 
var map = L.map('map', { 
 center: [-1.7912604466772375, 116.42311966554416], 
 zoom: 5, 
 layers:[] 
}); 
var GoogleSatelliteHybrid= L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', { 
maxZoom: 22, 
attribution: 'Latihan Web GIS' 
}).addTo(map);
</script>
