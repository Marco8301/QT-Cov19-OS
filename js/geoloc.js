
// Geoloc
let inputGeolocCiudad = document.getElementById('inputGeolocCiudad');
let inputGeolocDepartamento = document.getElementById('inputGeolocDepartamento');
let btnGeoloc = document.getElementById('btnGeoloc');

document.addEventListener('DOMContentLoaded', () => {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            $.get("https://maps.googleapis.com/maps/api/geocode/json?latlng=" + position.coords.latitude + "," + position.coords.longitude + "&key=AIzaSyA9VCeYTBLZprpSfqWOtlw-j9rQUVTsCzg", function (data) {
                let dataGeoloc = [];

                adresseVille = data.results[7].formatted_address
                adresseProvince = data.results[9].formatted_address

                splitVille = adresseVille.split(", ");
                ville = splitVille[0];
                splitProvince = adresseProvince.split(", ");
                province = splitProvince[0];

                dataGeoloc.push(ville);
                dataGeoloc.push(province);

                // sessionStorage.setItem('geoloc', dataGeoloc)
                // var data = sessionStorage.getItem('geoloc');

                inputGeolocCiudad.value = dataGeoloc[0];
                inputGeolocDepartamento.value = dataGeoloc[1];

            })
        })
    }
})
btnGeoloc.addEventListener('click', () => {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            $.get("https://maps.googleapis.com/maps/api/geocode/json?latlng=" + position.coords.latitude + "," + position.coords.longitude + "&key=AIzaSyA9VCeYTBLZprpSfqWOtlw-j9rQUVTsCzg", function (data) {
                let dataGeoloc = [];

                adresseVille = data.results[7].formatted_address
                adresseProvince = data.results[9].formatted_address

                splitVille = adresseVille.split(", ");
                ville = splitVille[0];
                splitProvince = adresseProvince.split(", ");
                province = splitProvince[0];

                dataGeoloc.push(ville);
                dataGeoloc.push(province);

                // sessionStorage.setItem('geoloc', dataGeoloc)
                // var data = sessionStorage.getItem('geoloc');

                inputGeolocCiudad.value = dataGeoloc[0];
                inputGeolocDepartamento.value = dataGeoloc[1];
            })
        })
    }
})