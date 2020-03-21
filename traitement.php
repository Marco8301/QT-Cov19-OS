<?php

if(isset($_POST['submitBtn'])) {
    // Geoloc
    $inputGeolocCiudad = $_POST['inputGeolocCiudad'];
    var_dump($inputGeolocCiudad);
    $inputGeolocDepartamento = $_POST['inputGeolocDepartamento'];
    var_dump($inputGeolocDepartamento);

    // Donnés démographiques
    $inputEdad = $_POST['inputEdad'];
    var_dump($inputEdad);

    $inputGenero = $_POST['inputGenero'];
    var_dump($inputGenero);


    //Symptomes 
    $inputFebre = $_POST['inputFebre'];
    var_dump($inputFebre);

    $infoFebre = $_POST['infoFebre'];
    var_dump($infoFebre);


    $inputTos = $_POST['inputTos'];
    var_dump($inputTos);

    $infoTos = $_POST['infoTos'];
    var_dump($infoTos);


    $inputMoqueo = $_POST['inputMoqueo'];
    var_dump($inputMoqueo);

    $infoMoqueo = $_POST['infoMoqueo'];
    var_dump($infoMoqueo);


    //Contacts
    $optionsContacto = $_POST['optionsContacto'];
    var_dump($optionsContacto);

    $infoContacto = $_POST['infoContacto'];
    var_dump($infoContacto);


    $optionsNumero = $_POST['optionsNumero'];
    var_dump($optionsNumero);

    $inputTel = $_POST['inputTel'];
    var_dump($inputTel);

    header('Location: success.html');
    exit();

}

?>