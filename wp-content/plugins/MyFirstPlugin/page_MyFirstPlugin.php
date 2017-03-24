<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!DOCTYPE html>

    <!-- Pasek nawigacji   -->
    <br>
    <h3>Produkty</h3>   
    <div>
        
        
    </div> 
    
    <!-- Mapa Googla --> 
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?sensor=false">
    </script>    
    <script type="text/javascript">
        var map;
        var lat=52.173931692568;
        var lng=18.8525390625;
        var zoom=6;
 
        function initialize() {
            var myOptions = {
                zoom: zoom,
                center: new google.maps.LatLng(lat, lng),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById('moja-mapa'), myOptions);
        }
 
        google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="moja-mapa" style="width: 640px; height: 480px;"></div>
