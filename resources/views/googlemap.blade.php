<!DOCTYPE html>
<html>
<body>



<div id="map1" style="width:800px;height:350px;background:yellow"></div><br>
<div id="map2" style="width:800px;height:350px;background:yellow"></div><br>
<div id="map3" style="width:800px;height:350px;background:yellow"></div><br>

<script>
function myMap() {
var mapOptions1 = {
    center: new google.maps.LatLng(11.675316, 78.141108),//salem
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var mapOptions2 = {
    center: new google.maps.LatLng(11.020001, 76.967297),//coimbatore
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var mapOptions3 = {
    center: new google.maps.LatLng(12.911544, 77.632638),//bangalore
    zoom: 4,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map1 = new google.maps.Map(document.getElementById("map1"), mapOptions1);
var map2 = new google.maps.Map(document.getElementById("map2"), mapOptions2);
var map3 = new google.maps.Map(document.getElementById("map3"), mapOptions3);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQbS94JYLnrLp4bDQepjkxx2mvcJzGPg4&callback=myMap"></script>

</body>
</html>
