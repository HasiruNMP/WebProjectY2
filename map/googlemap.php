<!DOCTYPE html>
<html>
<body>

<h1>My First Google Map</h1>

<div id="map" style="width:90%;height:800px;"></div>

<script>
function myMap() {
	let myCenter = new google.maps.LatLng(6.9271,79.8612);
	let mapCanvas = document.getElementById("map");
	let mapOptions = {center: myCenter, zoom: 10};
	let map = new google.maps.Map(mapCanvas, mapOptions);
	let marker = new google.maps.Marker({position:myCenter});
	marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWH-XTux9pCrmqDoV6YM63Ex8FPrAQNLU&callback=myMap"></script>

</body>
</html>