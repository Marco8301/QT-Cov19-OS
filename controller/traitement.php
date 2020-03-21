<?php
include('../model/Submit.class.php');

if(isset($_POST['submitBtn'])) {
    // Geoloc
    $inputGeolocCiudad = $_POST['inputGeolocCiudad'];
    $inputGeolocDepartamento = $_POST['inputGeolocDepartamento'];
    $inputGeolocLat = $_POST['inputGeolocLat'];
    $inputGeolocLng = $_POST['inputGeolocLng'];


    // Donnés démographiques
    $inputEdad = $_POST['inputEdad'];
    $inputGenero = $_POST['inputGenero'];


    //Symptomes 
    $inputFebre = $_POST['inputFebre'];
    $infoFebre = $_POST['infoFebre'];

    $inputTos = $_POST['inputTos'];
    $infoTos = $_POST['infoTos'];

    $inputMoqueo = $_POST['inputMoqueo'];
    $infoMoqueo = $_POST['infoMoqueo'];


    //Contacts
    $optionsContacto = $_POST['optionsContacto'];
    $infoContacto = $_POST['infoContacto'];

    $optionsNumero = $_POST['optionsNumero'];
    $inputTel = $_POST['inputTel'];

    $submit = new Submit($inputGeolocCiudad, $inputGeolocDepartamento, $inputGeolocLat, $inputGeolocLng, $inputEdad, $inputGenero, $inputFebre, $infoFebre, $inputTos, $infoTos, $inputMoqueo, $infoMoqueo, $optionsContacto, $infoContacto, $optionsNumero, $inputTel);
    $submit->submitForm();

    header('Location: ../success.html');
    exit();

}

?>