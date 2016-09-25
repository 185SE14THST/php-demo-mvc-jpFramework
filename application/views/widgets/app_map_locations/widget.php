
<?php
/**
 * PHP MVC template
 *
 * @package jpFramework
 * @author JP
 * @link http://www.???.com
 * @version 0.3a
 *
 * @copyright 2016
 *
 *            Description:
 *            Issues:			ReferenceError: infoWindow is not defined
								infoWindow.setContent(this.info);
 */
?>

<!-- Custom JavaScript Widget -->
<script type="text/javascript">

	/* Google Map API Processing */
	function initMap() {
		var locations = [
			  ['Bondi Beach', -33.890542, 151.274856, 4],
			  ['Coogee Beach', -33.923036, 151.259052, 5],
			  ['Cronulla Beach', -34.028249, 151.157507, 3],
			  ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
			  ['Maroubra Beach', -33.950198, 151.259302, 1]
		];
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 10,
			center: new google.maps.LatLng(-33.92, 151.25),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});

		var contentString = '<div id="content">' +
			'<div id="siteNotice">' +
			'</div>' +
			'<h1 id="firstHeading" class="firstHeading">Uluru</h1>' +
			'<div id="bodyContent">' +
			'<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
			'sandstone rock formation in the southern part of the ' +
			'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) ' +
			'south west of the nearest large town, Alice Springs; 450&#160;km ' +
			'(280&#160;mi) by road. Kata Tjuta and Uluru are the two major ' +
			'features of the Uluru - Kata Tjuta National Park. Uluru is ' +
			'sacred to the Pitjantjatjara and Yankunytjatjara, the ' +
			'Aboriginal people of the area. It has many springs, waterholes, ' +
			'rock caves and ancient paintings. Uluru is listed as a World ' +
			'Heritage Site.</p>' +
			'<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">' +
			'https://en.wikipedia.org/w/index.php?title=Uluru</a> ' +
			'(last visited June 22, 2009).</p>' +
			'</div>' +
			'</div>';

		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		var marker, i;
		for (i = 0; i < locations.length; i++) {
			marker = new google.maps.Marker({
				position: new google.maps.LatLng(locations[i][1], locations[i][2]),
				title: locations[i][0],
				info: locations[i][0],
				map: map
			});

			marker.addListener('click', function () {
				infoWindow.setContent(this.info);
				infoWindow.open(map, this);
			});
		}
	}
</script>
<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=<? echo MAP_BROWSER; ?>&callback=initMap"></script>