 <html>
<head>
	<title>Location page</title>
	<link rel="stylesheet" type="text/css" href="link.php">
<style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>

    </head>
<body bgcolor="#fff2e5">
<?php
	include "index.php";
?>
<br>
<table border=0>
	<tr>
		<td>&nbsp;</td>
		<center><font color=choco size=4><b><i><u>LOCATION</u></i></b></font></center>
	</tr>
	<tr>
		<td><strong><em><font color="violet">VIT HOTEL</font></em></strong>is strategically located colse to the business hub of VELLORE
		and in close vicinity of the Railway station and central Bus station.
		It provides an easy access to the industrial zones of tamil nadu.
		of you are travelling by car.</td>
		</tr>

</table>
<br><br>
<table width=100%>
	<tr>
		<th>LOCATION</th>
		<th>DISTANCE</th>
		</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>Railway-Station</td>
		<td>1 Km</td>
	</tr>
	<tr>
		<td>Bus Station</td>
		<td>0 Km</td>
	</tr>
	<tr>
		<td><font color="#7c0000">Sitting</font></td>
		<td></td>
		<td></td>

	</tr>
</table>
<html>
  <head>

  </head>
  <body>
    <h3>My Google Maps LOCATION</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 12.9165, lng: 79.1325};
        var map = new google.maps.Map(document.getElementById('map'), {zoom: 8, center: uluru});
        var marker = new google.maps.Marker({position: uluru, map: map});
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap">
    </script>
  </body>
<marquee behavior=alternate bgcolor="#7e0000"><b><i><font color="white">Devloped By :- Ruchir Bhaskar </i></b></font></marquee>
</body>

</html>
