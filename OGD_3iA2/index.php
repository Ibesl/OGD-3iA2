<!DOCTYPE html>
<?php
error_reporting(0);
?>
<html>
    <head>
        <title>OGD Luftschadstoffbelastung</title>
        <!--custom css-->
        <link rel="stylesheet" href="css/style.css"/>
        <!--leaflet css-->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
              integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
              crossorigin=""/>
        <!--leaflet js-->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
                integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    </head>

    <body>
        <header>
            <h1 style="color: gold">Luftschadstoffbelastung Kanton Thurgau</h1>
            <br>
            <h3 style="color: white; font-family: 'Gill Sans', sans-serif">Eine Website die Daten von <a style="color: black;" href="https://opendata.swiss/de/dataset/luftschadstoffbelastung" target="_blank">Opendata.swiss</a> nutzt.</h3>
            <h4 style="color: white; font-family: 'Gill Sans', sans-serif">Die Website zeigt die Hektarraster für Stickstoffdioxid (NO2) und Feinstaub (PM10) im Kanton Thurgau an.</h4>
        </header>
        <div class="container">
            <div class="box_top">
                <!--radio buttons-->
                <div class="radiobuttons">
                    <input type="radio" id="noselect" name="Luftschadstoffbelastung" value="2" checked>
                    <label style="font-family: 'Gill Sans', sans-serif;" for="noselect"> Nichts</label>

                    <input type="radio" id="Feinstaub" name="Luftschadstoffbelastung" value="0">
                    <label style="font-family: 'Gill Sans', sans-serif;" for="Feinstaub"> Feinstaub</label>

                    <input type="radio" id="Stickstoffdioxid" name="Luftschadstoffbelastung" value="1">
                    <label style="font-family: 'Gill Sans', sans-serif;" for="Stickstoffdioxid"> Stickstoffdioxid</label>
                </div>
            </div>

            <div class="box_left">
                <!--Dark Mode-->
                <label style="font-family: 'Gill Sans', sans-serif;" for="darkmode">Dark Mode</label>
                <label class="switch">
                    <input id="darkmode" type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>

            <!--map-->
            <div id="mapid"></div>

            <div class="box_right">
                <!--Legende-->
                <img id="legend">
            </div>
        </div>
    </body>
    <footer>
        <p style="font-family: 'Gill Sans', sans-serif;">COPYRIGHT © Noah P, Ivo, Noah Schwe</p>
    </footer>

    <!--custom js-->
    <script src="js/leaflet.js"></script>
</html>
