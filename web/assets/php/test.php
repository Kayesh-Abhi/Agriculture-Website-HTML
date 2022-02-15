<!DOCTYPE html>
<html>
<body>

<h1>My First Google Map</h1>

<div id="googleMap" style="width:100vh;height:100vh;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(6.9271,79.8612),
  zoom:10,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7xwCw4-bYGNcjsRHT2JeDvTcgfJ4r8mQ&callback=myMap"></script>

</body>
</html>