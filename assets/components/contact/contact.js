import './contact.scss';
import $ from 'jquery';
import '../../../node_modules/og/dist/og.js';
import '../../../node_modules/og/dist/og.core.js';
import { Globe } from '../../../node_modules/og/src/og/Globe.js';
import { GlobusTerrain } from '../../../node_modules/og/src/og/terrain/GlobusTerrain.js';
import { XYZ } from '../../../node_modules/og/src/og/layer/XYZ.js';
import { Vector } from '../../../node_modules/og/src/og/layer/Vector.js';
import { Entity } from '../../../node_modules/og/src/og/entity/Entity.js';


document.getElementById("btnOSM").onclick = function () {
    osm.setVisibility(true);
};
document.getElementById("btnMQS").onclick = function () {
    sat.setVisibility(true);
};
let osm = new XYZ("OpenStreetMap", {
    specular: [0.0003, 0.00012, 0.00001],
    shininess: 20,
    diffuse: [0.89, 0.9, 0.83],
    isBaseLayer: true,
    url: "//{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
    visibility: true
});
let sat = new XYZ("MapQuest Satellite", {
    shininess: 20,
    specular: [0.00048, 0.00037, 0.00035],
    diffuse: [0.88, 0.85, 0.8],
    ambient: [0.15, 0.1, 0.23],
    isBaseLayer: true,
    url: "https://api.mapbox.com/styles/v1/mapbox/satellite-v9/tiles/256/{z}/{x}/{y}@2x?access_token=pk.eyJ1IjoibWdldmxpY2hzY2FuZXgiLCJhIjoiY2pwcGdsaXlnMDQzdDQybXhsOWZlbXBvdSJ9.fR2YE-ehJA4iajaJBAPKvw",
    visibility: false,
});
let globus = new Globe({
    "target": "globus",
    "name": "Earth",
    "terrain": new GlobusTerrain(),
    "layers": [osm, sat]
});

let pointLayer = new Vector("points", {
    'clampToGround': true,
    'entities': [{
        'name': 'Adress 1',
        'lonlat': [53.53, 27.34],
        'billboard': {
            'src': '../../images/marker.png',
            'size': [29, 48],
            'offset': [0, 24]
        }
    }, {
        'name': 'label',
        'lonlat': [8.25, 46.74],
        'label': {
            'text': 'Adress 1',
            'size': [35],
            'outlineColor': "rgba(0,0,0,.5)"
        }
    }],
    'async': false
});

var marker = new Entity({
    'name': 'Blue Marker',
    'lonlat': [53.53, 27.34],
    'billboard': {
        'src': './../images/marker.png',
        'size': [18, 32],
        'offset': [0, 16]
    }
});