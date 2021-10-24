<title>Location</title>
<style>
	#map {
		height: 30rem;
		width: 50rem;
	}

		#top-nav li:nth-child(4) {
			background: var(--background); 
		}  
		 
</style>
<?php  include "header.html"; ?>

<div id="map"></div>

<script>
	function initMap() {
		let location = {lat: 6.447810, lng: 3.362530};
		let map = new google.maps.Map(document.getElementById("map"), {
			zoom: 4,
			center: location
		});
	}
	
</script> 
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBthBRErrSkCJXZza0Zz0PB0CrLJwjuwbE&callback=initMap"></script>

<?php  include "footer.html"; ?>