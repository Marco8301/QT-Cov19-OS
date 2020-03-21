

let inputGeoloc = document.getElementById('inputGeoloc');
let btnGeoloc = document.getElementById('btnGeoloc');

document.addEventListener("DOMContentLoaded", () => {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            $.get("https://maps.googleapis.com/maps/api/geocode/json?latlng=" + position.coords.latitude + "," + position.coords.longitude + "&key=AIzaSyA9VCeYTBLZprpSfqWOtlw-j9rQUVTsCzg", function (data) {
                adresse = data.results[7].formatted_address
                sessionStorage.setItem('geoloc', adresse)
                var data = sessionStorage.getItem('geoloc');
                inputGeoloc.value = data
            })
        })
    }
})

btnGeoloc.addEventListener("click", () => {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            $.get("https://maps.googleapis.com/maps/api/geocode/json?latlng=" + position.coords.latitude + "," + position.coords.longitude + "&key=AIzaSyA9VCeYTBLZprpSfqWOtlw-j9rQUVTsCzg", function (data) {
                adresse = data.results[7].formatted_address
                sessionStorage.setItem('geoloc', adresse)
                var data = sessionStorage.getItem('geoloc');
                inputGeoloc.value = data
            })
        })
    }
})

