import './contact.scss';
import $ from 'jquery';

function initialize() {

    var options = {atmosphere: true, center: [0, 0], zoom: 0};
    var earth = new WE.map('earth_div', options);
    WE.tileLayer('http://tileserver.maptiler.com/nasa/{z}/{x}/{y}.jpg', {
        minZoom: 0,
        maxZoom: 5,
        attribution: 'NASA'
    }).addTo(earth);


    var marker = WE.marker([51.5, -0.09]).addTo(earth);
    marker.bindPopup("<b>Hello world!</b><br>I am a popup.<br /><span style='font-size:10px;color:#999'>Tip: Another popup is hidden in Cairo..</span>", {maxWidth: 150, closeButton: true});

    var marker2 = WE.marker([30.058056, 31.228889]).addTo(earth);
    marker2.bindPopup("<b>Hello world!</b><br>I am a popup.<br /><span style='font-size:10px;color:#999'>Tip: Another popup is hidden in Cairo..</span>", {maxWidth: 150, closeButton: true});

    var markerCustom = WE.marker([50, -9], '../../images/marker.png', 100, 24).addTo(earth);
}

initialize();