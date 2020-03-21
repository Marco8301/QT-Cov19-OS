<?php

class Submit {
    function __construct($inputGeolocCiudad, $inputGeolocDepartamento, $inputGeolocLat, $inputGeolocLng, $inputEdad, $inputGenero, $inputFebre, $infoFebre, $inputTos, $infoTos, $inputMoqueo, $infoMoqueo, $optionsContacto, $infoContacto, $optionsNumero, $inputTel) {
        $this->inputGeolocCiudad = $inputGeolocCiudad;
        $this->inputGeolocDepartamento = $inputGeolocDepartamento;
        $this->inputGeolocLat = $inputGeolocLat;
        $this->inputGeolocLng = $inputGeolocLng;
        $this->inputEdad = $inputEdad;
        $this->inputGenero = $inputGenero;
        $this->inputFebre = $inputFebre;
        $this->infoFebre = $infoFebre;
        $this->inputTos = $inputTos;
        $this->infoTos = $infoTos;
        $this->inputMoqueo = $inputMoqueo;
        $this->infoMoqueo = $infoMoqueo;
        $this->optionsContacto = $optionsContacto;
        $this->infoContacto = $infoContacto;
        $this->optionsNumero = $optionsNumero;
        $this->inputTel = $inputTel;
    }

    function submitForm() {
        include('PDO.class.php');

        $request = 'INSERT INTO responses (time_submit, GeolocCiudad, GeolocDepartamento, GeolocLat, GeolocLng, Edad, Genero, inputFebre, infoFebre, inputTos, infoTos, inputMoqueo, infoMoqueo, optionsContacto, infoContacto, optionsNumero, inputTel)
        VALUES (NOW(), :GeolocCiudad, :GeolocDepartamento, :GeolocLat, :GeolocLng, :Edad, :Genero, :inputFebre, :infoFebre, :inputTos, :infoTos, :inputMoqueo, :infoMoqueo, :optionsContacto, :infoContacto, :optionsNumero, :inputTel)';
    
        $order = $db->prepare($request);

        $order->execute([
            ':GeolocCiudad' => $this->inputGeolocCiudad,
            ':GeolocDepartamento' => $this->inputGeolocDepartamento,
            ':GeolocLat' => $this->inputGeolocLat,
            ':GeolocLng' => $this->inputGeolocLng,
            ':Edad' => $this->inputEdad,
            ':Genero' => $this->inputGenero,
            ':inputFebre' => $this->inputFebre,
            ':infoFebre' => $this->infoFebre,
            ':inputTos' => $this->inputTos,
            ':infoTos' => $this->infoTos,
            ':inputMoqueo' => $this->inputMoqueo,
            ':infoMoqueo' => $this->infoMoqueo,
            ':optionsContacto' => $this->optionsContacto,
            ':infoContacto' => $this->infoContacto,
            ':optionsNumero' => $this->optionsNumero,
            ':inputTel' => $this->inputTel
        ]);
    } 
}

?>