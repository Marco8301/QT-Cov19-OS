
// Geoloc
let inputGeolocCiudad = document.getElementById('inputGeolocCiudad');
let inputGeolocDepartamento = document.getElementById('inputGeolocDepartamento');
let inputGeolocLng = document.getElementById('inputGeolocLng');
let inputGeolocLat = document.getElementById('inputGeolocLat');
let btnGeoloc = document.getElementById('btnGeoloc');

function GeolocInput(data, position) {
    lat = position.coords.latitude;
    lng = position.coords.longitude;

    let dataGeoloc = [];

    adresseVille = data.results[7].formatted_address
    adresseProvince = data.results[9].formatted_address

    splitVille = adresseVille.split(", ");
    ville = splitVille[0];
    splitProvince = adresseProvince.split(", ");
    province = splitProvince[0];

    dataGeoloc.push(ville);
    dataGeoloc.push(province);
    dataGeoloc.push(lat);
    dataGeoloc.push(lng);


    // sessionStorage.setItem('geoloc', dataGeoloc)
    // var data = sessionStorage.getItem('geoloc');

    inputGeolocCiudad.value = dataGeoloc[0];
    inputGeolocDepartamento.value = dataGeoloc[1];
    inputGeolocLat.value = lat;
    inputGeolocLng.value = lng;

}

document.addEventListener('DOMContentLoaded', () => {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            $.get("https://maps.googleapis.com/maps/api/geocode/json?latlng=" + position.coords.latitude + "," + position.coords.longitude + "&key=AIzaSyA9VCeYTBLZprpSfqWOtlw-j9rQUVTsCzg", function (data) {
                GeolocInput(data, position)

            })
        })
    }
})

btnGeoloc.addEventListener('click', () => {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            $.get("https://maps.googleapis.com/maps/api/geocode/json?latlng=" + position.coords.latitude + "," + position.coords.longitude + "&key=AIzaSyA9VCeYTBLZprpSfqWOtlw-j9rQUVTsCzg", function (data) {
                GeolocInput(data)
            })
        })
    }
})