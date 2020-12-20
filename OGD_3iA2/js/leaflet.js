/* global L */

//create map container
var mymap = L.map('mapid').setView([47.492703, 9.243650], 10);
//define map overlay
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png?{foo}', {maxZoom: 14, minZoom: 10, foo: 'bar', attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>'}).addTo(mymap);

//set map bounds
var topLeft = L.latLng(47.733456, 8.587155), bottomRight = L.latLng(47.377463, 9.546913);
var bounds = L.latLngBounds(topLeft, bottomRight);
mymap.setMaxBounds(bounds);
mymap.on('drag', function () {
    mymap.panInsideBounds(bounds, {animate: false});
});

//array with OGD overlays
var layers = [
    //Feinstaub
    L.tileLayer.wms("https://ows-raster.geo.tg.ch/geofy_access_proxy/luftschadstoffbelastung?", {
        layers: 'Immissionen_PM10_2020',
        transparent: true,
        format: 'image/png',
        opacity: 0.8,
        maxZoom: 14,
        minZoom: 10
    }),
    //Stickstoffdioxid
    L.tileLayer.wms("https://ows-raster.geo.tg.ch/geofy_access_proxy/luftschadstoffbelastung?", {
        layers: 'Immissionen_NO2_2020',
        transparent: true,
        format: 'image/png',
        opacity: 0.8,
        maxZoom: 14,
        minZoom: 10
    })
];

//radio button listeners that change the OGD overlay
document.getElementById("Feinstaub").addEventListener("click", setLayer);
document.getElementById("Stickstoffdioxid").addEventListener("click", setLayer);
document.getElementById("noselect").addEventListener("click", setLayer);
//Listener for Darkmode Button
document.getElementById("darkmode").addEventListener("click", setDarkmode);

//set OGD overlay and legend
function setLayer(sender) {
    var id = sender.target.getAttribute("value");
    if (id == "0") {
        layers[0].addTo(mymap);
        layers[1].removeFrom(mymap);
        document.getElementById("legend").src = "img/legende_feinstaub.png";
    } else if (id == "1") {
        layers[1].addTo(mymap);
        layers[0].removeFrom(mymap);
        document.getElementById("legend").src = "img/legende_stickstoffdioxid.png";
    } else {
        layers[0].removeFrom(mymap);
        layers[1].removeFrom(mymap);
        document.getElementById("legend").src = "";
    }

}

//Toggle Darkmode
function setDarkmode() {
    document.body.classList.toggle("dark");
}



