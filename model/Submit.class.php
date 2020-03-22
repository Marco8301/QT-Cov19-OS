<?php

class Submit {
    function __construct($inputIniciales, $inputGeolocCiudad, $inputGeolocDepartamento, $inputGeolocLat, $inputGeolocLng, $inputEdad, $inputGenero, $inputFebre, $infoFebre, $inputTos, $infoTos, $inputRespirar, $infoRespirar, $inputDigestivos, $infoDigestivos, $optionsContacto, $infoContacto, $optionsNumero, $inputTel) {
        
        $this->inputIniciales = $inputIniciales;
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


        $this->inputRespirar = $inputRespirar;
        $this->infoRespirar = $infoRespirar;
        $this->inputDigestivos = $inputDigestivos;
        $this->infoDigestivos = $infoDigestivos;

        $this->optionsContacto = $optionsContacto;
        $this->infoContacto = $infoContacto;
        $this->optionsNumero = $optionsNumero;
        $this->inputTel = $inputTel;
    }

    function submitForm() {
        include('PDO.class.php');

        $request = 'INSERT INTO responses (time_submit, Iniciales, GeolocCiudad, GeolocDepartamento, GeolocLat, GeolocLng, Edad, Genero, inputFebre, infoFebre, inputTos, infoTos,inputRespirar, infoRespirar, inputDigestivos, infoDigestivos, optionsContacto, infoContacto, optionsNumero, inputTel)
        VALUES (NOW(), :Iniciales, :GeolocCiudad, :GeolocDepartamento, :GeolocLat, :GeolocLng, :Edad, :Genero, :inputFebre, :infoFebre, :inputTos, :infoTos, :inputRespirar, :infoRespirar, :inputDigestivos, :infoDigestivos, :optionsContacto, :infoContacto, :optionsNumero, :inputTel)';
    
        $order = $db->prepare($request);

        $order->execute([
            ':Iniciales' => $this->inputIniciales,
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
            ':inputRespirar' => $this->inputRespirar,
            ':infoRespirar' => $this->infoRespirar,
            ':inputDigestivos' => $this->inputDigestivos,
            ':infoDigestivos' => $this->infoDigestivos,
            ':optionsContacto' => $this->optionsContacto,
            ':infoContacto' => $this->infoContacto,
            ':optionsNumero' => $this->optionsNumero,
            ':inputTel' => $this->inputTel
        ]);
    } 
}

?>