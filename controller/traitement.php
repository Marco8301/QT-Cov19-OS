<?php
include('../model/Submit.class.php');



if(isset($_POST['submitBtn'])) {
    // Geoloc
    $inputIniciales = $_POST['inputIniciales'];
    $inputIP = $_POST['inputIP'];
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

    $inputRespirar = $_POST['inputRespirar'];
    $infoRespirar = $_POST['infoRespirar'];

    $inputDigestivos = $_POST['inputDigestivos'];
    $infoDigestivos = $_POST['infoDigestivos'];


    //Contacts
    $optionsContacto = $_POST['optionsContacto'];
    $infoContacto = $_POST['infoContacto'];

    $optionsContactoOtraPersona = $_POST['optionsContactoOtraPersona'];

    $optionsNumero = $_POST['optionsNumero'];
    $inputTel = $_POST['inputTel'];

    $submit = new Submit($inputIniciales, $inputIP, $inputGeolocCiudad, $inputGeolocDepartamento, $inputGeolocLat, $inputGeolocLng, $inputEdad, $inputGenero, $inputFebre, $infoFebre, $inputTos, $infoTos, $inputRespirar, $infoRespirar, $inputDigestivos, $infoDigestivos, $optionsContacto, $infoContacto, $optionsContactoOtraPersona, $optionsNumero, $inputTel);
    $submit->submitForm();

    

    header('Location: ../success.html');
    exit();

}

?>