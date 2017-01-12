<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- This stylesheet contains specific styles for displaying the map
         on this page. Replace it with your own styles as described in the
         documentation:
         https://developers.google.com/maps/documentation/javascript/tutorial -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Personal Map</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <!--<div id="map" style="height: 500px; width: 700px"></div>-->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Personal Map</h1>
            </div>
            <div class="col-md-6">
                
            </div>
        </div>
        <div class="row">
            <div id="map" class="col-md-12">
                
            </div>
            
        </div>
    </div>

    <script <script src="js/mapa.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key= AIzaSyCuzuj1UynAM-jb8WV27BGseFblFCjXKpA&callback=initMap"async defer></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
   