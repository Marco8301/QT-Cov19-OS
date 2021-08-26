// Geoloc
let inputGeolocLng = document.getElementById("inputGeolocLng");
let inputGeolocLat = document.getElementById("inputGeolocLat");

function GeolocInput(data, position) {
  let dataGeoloc = [];
  lat = position.coords.latitude;
  lng = position.coords.longitude;

  adresseVille = data.results[3].formatted_address;
  splitVille = adresseVille.split(", ");
  ville = splitVille[0];

  adresseProvince = data.results[5].formatted_address;
  splitProvince = adresseProvince.split(", ");
  province = splitProvince[0];

  dataGeoloc.push(ville);
  dataGeoloc.push(province);

  inputGeolocLat.value = lat;
  inputGeolocLng.value = lng;
}

document.addEventListener("DOMContentLoaded", () => {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (position) {
      $.get(
        "https://maps.googleapis.com/maps/api/geocode/json?latlng=" +
          position.coords.latitude +
          "," +
          position.coords.longitude +
          "&key=AIzaSyA9VCeYTBLZprpSfqWOtlw - j9rQUVTsCzg",
        function (data) {
          GeolocInput(data, position);
        }
      );
    });
  }
});
