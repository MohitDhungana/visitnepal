<!-- <?php include "includes/db.php" ?> -->

<html>
  <head>
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
  </head>
  <body>
   <!-- <?php
// $mysqli = new mysqli("localhost", "root", "root", "visitnepal");
// SELECT
//  longitude,latitude from places WHERE name=$places  
        ?> -->
    <!--The div element for the map -->
  <?php

  $query = "SELECT longitude,latitude FROM places WHERE id={$place_id}";

  $yo = mysqli_query($connection, $query);
  $row = mysqli_fetch_assoc($yo);

  $longitude = $row['longitude'];
  $latitude = $row['latitude'];


  ?> 
    <div id="map"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: <?php echo $longitude ?>, lng: <?php echo $latitude ?>};
 
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcKFA-_ampBT77Gz1ylPhy4VITvy5Rkl8&callback=initMap">
    </script>
  </body>
</html>