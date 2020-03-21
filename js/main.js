
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

// Form Logic
function changeState(id) {
    switch (id) {
        case inputFebre:
            if (id.value === 'febre') {
                infoFebre.removeAttribute('disabled');
            } else {
                infoFebre.setAttribute('disabled', '')
            }
            break;

        case inputTos:
            if (id.value === 'tos') {
                infoTos.removeAttribute('disabled');
            } else {
                infoTos.setAttribute('disabled', '')
            }
            break;

        case inputMoqueo:
            if (id.value === 'moqueo') {
                infoMoqueo.removeAttribute('disabled');
            } else {
                infoMoqueo.setAttribute('disabled', '')
            }
            break;

        case contactoSi:
            if (id.value === 'si') {
                infoContacto.removeAttribute('disabled');
            }
            break;

        case contactoNo:
            if (id.value === 'no') {
                infoContacto.setAttribute('disabled', '')
            }
            break;

        case numeroSi:
            if (id.value === 'si') {
                inputTel.removeAttribute('disabled');
            }
            break;

        case numeroNo:
            if (id.value === 'no') {
                inputTel.setAttribute('disabled', '')
            }
            break;



    }



}

// let submitBtn = document.getElementById('submitBtn');
// let alertPopUp = document.getElementById('alert-pop-up');
// let btnAlert = document.getElementById('btnAlert');

// btnAlert.addEventListener('click', (event) => {
//     alertPopUp.style.display = "none";


// })