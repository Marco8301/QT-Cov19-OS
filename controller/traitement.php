<?php
include('../model/Submit.class.php');

if(isset($_POST['submitBtn'])) {
    // Geoloc
    $inputIniciales = filter_var($_POST["inputIniciales"], FILTER_SANITIZE_SPECIAL_CHARS);
    $inputIP = filter_var(filter_var($_POST['inputIP'], FILTER_SANITIZE_SPECIAL_CHARS), FILTER_VALIDATE_IP);
    $inputGeolocCiudad = filter_var($_POST["inputGeolocCiudad"], FILTER_SANITIZE_SPECIAL_CHARS);
    $inputGeolocDepartamento = filter_var($_POST["inputGeolocDepartamento"], FILTER_SANITIZE_SPECIAL_CHARS);
    $inputGeolocLat = filter_var($_POST["inputGeolocLat"], FILTER_SANITIZE_SPECIAL_CHARS);
    $inputGeolocLng = filter_var($_POST["inputGeolocLng"], FILTER_SANITIZE_SPECIAL_CHARS);

    // Donnés démographiques
    $inputEdad = filter_var(filter_var($_POST["inputEdad"], FILTER_SANITIZE_NUMBER_INT), FILTER_VALIDATE_INT) ;
    $inputGenero = filter_var($_POST["inputGenero"], FILTER_SANITIZE_SPECIAL_CHARS);

    //Symptomes 
    $inputFebre = filter_var($_POST["inputFebre"], FILTER_SANITIZE_SPECIAL_CHARS);
    $infoFebre = filter_var($_POST["infoFebre"], FILTER_SANITIZE_SPECIAL_CHARS);
    $inputTos = filter_var($_POST["inputTos"], FILTER_SANITIZE_SPECIAL_CHARS);
    $infoTos = filter_var($_POST["infoTos"], FILTER_SANITIZE_SPECIAL_CHARS);
    $inputRespirar = filter_var($_POST["inputRespirar"], FILTER_SANITIZE_SPECIAL_CHARS);
    $infoRespirar = filter_var($_POST["infoRespirar"], FILTER_SANITIZE_SPECIAL_CHARS);
    $inputDigestivos = filter_var($_POST["inputDigestivos"], FILTER_SANITIZE_SPECIAL_CHARS);
    $infoDigestivos = filter_var($_POST["infoDigestivos"], FILTER_SANITIZE_SPECIAL_CHARS);

    //Contacts
    $optionsContacto = filter_var($_POST["optionsContacto"], FILTER_SANITIZE_SPECIAL_CHARS);
    $infoContacto = filter_var($_POST["infoContacto"], FILTER_SANITIZE_SPECIAL_CHARS);
    $optionsContactoOtraPersona = filter_var($_POST["optionsContactoOtraPersona"], FILTER_SANITIZE_SPECIAL_CHARS);
    $optionsNumero = filter_var($_POST["optionsNumero"], FILTER_SANITIZE_SPECIAL_CHARS);
    $inputTel = filter_var($_POST["inputTel"], FILTER_SANITIZE_NUMBER_INT);
    $submit = new Submit($inputIniciales, $inputIP, $inputGeolocCiudad, $inputGeolocDepartamento, $inputGeolocLat, $inputGeolocLng, $inputEdad, $inputGenero, $inputFebre, $infoFebre, $inputTos, $infoTos, $inputRespirar, $infoRespirar, $inputDigestivos, $infoDigestivos, $optionsContacto, $infoContacto, $optionsContactoOtraPersona, $optionsNumero, $inputTel);
    $submit->submitForm();

    header('Location: ../success.html');
    exit();
}
?>
