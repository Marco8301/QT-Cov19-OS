<?php

class Submit {
    function __construct($inputIniciales, $inputIP, $inputGeolocCiudad, $inputGeolocDepartamento, $inputEdad, $inputGenero, $inputFebre, $infoFebre, $inputTos, $infoTos, $inputRespirar, $infoRespirar, $inputDigestivos, $infoDigestivos, $optionsContacto, $infoContacto, $optionsContactoOtraPersona, $optionsNumero, $inputTel) {
        
        $this->inputIniciales = $inputIniciales;
        $this->inputIP = $inputIP;
        $this->inputGeolocCiudad = $inputGeolocCiudad;
        $this->inputGeolocDepartamento = $inputGeolocDepartamento;
        // $this->inputGeolocLat = $inputGeolocLat;
        // $this->inputGeolocLng = $inputGeolocLng;
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
        $this->optionsContactoOtraPersona = $optionsContactoOtraPersona;
        $this->optionsNumero = $optionsNumero;
        $this->inputTel = $inputTel;
    }




    function submitForm() {
        include('PDO.class.php');

        $request = 'INSERT INTO responses (time_submit, Iniciales, inputIP, GeolocCiudad, GeolocDepartamento, Edad, Genero, inputFebre, infoFebre, inputTos, infoTos,inputRespirar, infoRespirar, inputDigestivos, infoDigestivos, optionsContacto, infoContacto, optionsContactoOtraPersona, optionsNumero, inputTel)
        VALUES (NOW(), :Iniciales, :inputIP, :GeolocCiudad, :GeolocDepartamento, :Edad, :Genero, :inputFebre, :infoFebre, :inputTos, :infoTos, :inputRespirar, :infoRespirar, :inputDigestivos, :infoDigestivos, :optionsContacto, :infoContacto, :optionsContactoOtraPersona, :optionsNumero, :inputTel)
        ON DUPLICATE KEY UPDATE inputFebre = :inputFebre, infoFebre = :infoFebre, inputTos = :inputTos, infoTos = :infoTos, inputRespirar = :inputRespirar, infoRespirar = :infoRespirar, inputDigestivos = :inputDigestivos, infoDigestivos = :infoDigestivos, optionsContacto = :optionsContacto, infoContacto = :infoContacto, optionsContactoOtraPersona = :optionsContactoOtraPersona, optionsNumero = :optionsNumero, inputTel = :inputTel';

        $order = $db->prepare($request);

        $order->execute([
            ':Iniciales' => $this->inputIniciales,
            ':inputIP' => $this->inputIP,
            ':GeolocCiudad' => $this->inputGeolocCiudad,
            ':GeolocDepartamento' => $this->inputGeolocDepartamento,
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
            ':optionsContactoOtraPersona' => $this->optionsContactoOtraPersona,
            ':optionsNumero' => $this->optionsNumero,
            ':inputTel' => $this->inputTel
        ]);
    } 
}

?>

