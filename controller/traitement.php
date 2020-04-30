<?php
include('../model/Submit.class.php');



if(isset($_POST['submitBtn'])) {
    // Geoloc
    $inputIniciales = filter_var($_POST["inputIniciales"], FILTER_SANITIZE_SPECIAL_CHARS);
    var_dump($inputIniciales);

    $inputIP = filter_var(filter_var($_POST['inputIP'], FILTER_SANITIZE_SPECIAL_CHARS), FILTER_VALIDATE_IP);
    var_dump($inputIP);

    $inputGeolocCiudad = filter_var($_POST["inputGeolocCiudad"], FILTER_SANITIZE_SPECIAL_CHARS);
    var_dump($inputGeolocCiudad);

    $inputGeolocDepartamento = filter_var($_POST["inputGeolocDepartamento"], FILTER_SANITIZE_SPECIAL_CHARS);
    var_dump($inputGeolocDepartamento);

    $inputGeolocLat = filter_var($_POST["inputGeolocLat"], FILTER_SANITIZE_SPECIAL_CHARS);
    var_dump($inputGeolocLat);

    $inputGeolocLng = filter_var($_POST["inputGeolocLng"], FILTER_SANITIZE_SPECIAL_CHARS);
    var_dump($inputGeolocLng);


    // Donnés démographiques
    $inputEdad = filter_var(filter_var($_POST["inputEdad"], FILTER_SANITIZE_NUMBER_INT), FILTER_VALIDATE_INT) ;
    var_dump($inputEdad);

    $inputGenero = filter_var($_POST["inputGenero"], FILTER_SANITIZE_SPECIAL_CHARS);
    var_dump($inputGenero);



    //Symptomes 
    $inputFebre = filter_var($_POST["inputFebre"], FILTER_SANITIZE_SPECIAL_CHARS);
    var_dump($inputFebre);

    $infoFebre = filter_var($_POST["infoFebre"], FILTER_SANITIZE_SPECIAL_CHARS);
    var_dump($infoFebre);


    $inputTos = filter_var($_POST["inputTos"], FILTER_SANITIZE_SPECIAL_CHARS);
    var_dump($inputTos);

    $infoTos = filter_var($_POST["infoTos"], FILTER_SANITIZE_SPECIAL_CHARS);
    var_dump($infoTos);



    $inputRespirar = filter_var($_POST["inputRespirar"], FILTER_SANITIZE_SPECIAL_CHARS);
    var_dump($inputRespirar);

    $infoRespirar = filter_var($_POST["infoRespirar"], FILTER_SANITIZE_SPECIAL_CHARS);
    var_dump($infoRespirar);


    $inputDigestivos = filter_var($_POST["inputDigestivos"], FILTER_SANITIZE_SPECIAL_CHARS);
    var_dump($inputDigestivos);

    $infoDigestivos = filter_var($_POST["infoDigestivos"], FILTER_SANITIZE_SPECIAL_CHARS);
    var_dump($infoDigestivos);



    //Contacts
    $optionsContacto = filter_var($_POST["optionsContacto"], FILTER_SANITIZE_SPECIAL_CHARS);
    var_dump($optionsContacto);

    $infoContacto = filter_var($_POST["infoContacto"], FILTER_SANITIZE_SPECIAL_CHARS);
    var_dump($infoContacto);


    $optionsContactoOtraPersona = filter_var($_POST["optionsContactoOtraPersona"], FILTER_SANITIZE_SPECIAL_CHARS);
    var_dump($optionsContactoOtraPersona);


    $optionsNumero = filter_var($_POST["optionsNumero"], FILTER_SANITIZE_SPECIAL_CHARS);
    var_dump($optionsNumero);


    $inputTel = filter_var($_POST["inputTel"], FILTER_SANITIZE_NUMBER_INT);


    $submit = new Submit($inputIniciales, $inputIP, $inputGeolocCiudad, $inputGeolocDepartamento, $inputGeolocLat, $inputGeolocLng, $inputEdad, $inputGenero, $inputFebre, $infoFebre, $inputTos, $infoTos, $inputRespirar, $infoRespirar, $inputDigestivos, $infoDigestivos, $optionsContacto, $infoContacto, $optionsContactoOtraPersona, $optionsNumero, $inputTel);
    $submit->submitForm();

    

    header('Location: ../success.html');
    exit();

}

?>