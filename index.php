<!DOCTYPE html>
<html lang="es">

<?php
$inputIP = $_SERVER['REMOTE_ADDR'];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>COVID</title>
    <script src="./js/lib/jquery-3.4.0.js"></script>

    <script src="https://kit.fontawesome.com/ce9a5e3fb3.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">COVID-19</a>

        </nav>
    </header>

    <main>
        <div class="container mt-5 col-xs-12 col-sm-9 col-md-9">
            <div class="jumbotron" style="padding-top:2rem; padding-bottom:2rem;">
                <h1 class="display-4">Formulario Técnico de detección de caso</h1>
                <p class="lead">Este formulario tiene como objetivo el mapeo y análisis de Cov19 en Colombia. Es un
                  proyecto
                  de código abierto y cualquier ayuda es más que bienvenida.</p>
                <hr class="my-4">
                <p>Por favor complete este formulario debajo.
                </p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#anchor" role="button">Iniciar</a>
                </p>
            </div>
        </div>

        <!-- Bloc identité -->
        <div class="container col-xs-12 col-sm-9 col-md-9">
            <div class="jumbotron">
                <form action="controller/traitement.php" method="post" id="formSintomas" name="formSintomas">
                    <fieldset id="anchor">
                        <div class="container">
                            <legend style="padding-left:0px;">Su identidad</legend>

                            <div class="form-group ">
                                <label class="col-form-label" for="inputIniciales">Su nombre y apellido</label>

                                <input type="text" class="form-control col-xs-12 col-sm-5" placeholder="Su nombre y apellido"
                                    id="inputIniciales" name="inputIniciales" required>

                                <input type="hidden" id="inputIP" name="inputIP" value="<?= $inputIP ?>">
                            </div>


                            <div class="form-group ">
                                <label class="col-form-label" for="inputGeolocCiudad">Geolocalización</label>
                                <div style="display:flex; ">

                                    <input type="text" class="form-control col-xs-12 col-sm-5" placeholder="Su ciudad"
                                        id="inputGeolocCiudad" name="inputGeolocCiudad" required>

                                    <input type="text" class="form-control col-xs-12 col-sm-5"
                                        placeholder="Su departamento" id="inputGeolocDepartamento"
                                        name="inputGeolocDepartamento" required>

                                    <input type="hidden" id="inputGeolocLat" name="inputGeolocLat" required>

                                    <input type="hidden" id="inputGeolocLng" name="inputGeolocLng" required>

                                    <a class="btn btn-primary" id="btnGeoloc"><i class="fas fa-map-marker-alt"
                                            style="color:white;"></i></a>
                                </div>
                            </div>

                            <div class="form-group w-100" style="display:flex;">
                                <div class="w-100">
                                    <label class="col-form-label" for="inputEdad">Edad</label>
                                    <input type="number" class="form-control col-xs-12 col-sm-9 col-md-9"
                                        placeholder="Su edad" id="inputEdad" name="inputEdad" required>
                                </div>
                                <div class="w-100">
                                    <label class="col-form-label" for="inputGenero">Genero</label>
                                    <select required class="form-control col-xs-12 col-sm-9 col-md-9" id="inputGenero"
                                        name="inputGenero">
                                        <option value="">Su genero</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Feminino">Femenino</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Bloc symptomes -->
                        <div class="container mt-5">
                            <legend>Sus Síntomas</legend>

                            <div class="form-group w-100" style="display:flex;">
                                <div class="w-100">
                                    <label class="col-form-label" for="inputFebre">Fiebre</label>
                                    <select required class="form-control col-xs-12 col-sm-9 col-md-9" id="inputFebre"
                                        name="inputFebre" onchange="changeState(inputFebre)">
                                        <option value="">Elige</option>
                                        <option value="fiebre">Tengo fiebre</option>
                                        <option value="no fiebre">No tengo fiebre</option>
                                    </select>
                                </div>

                                <div class="w-100">
                                    <label class="col-form-label" for="infoFebre">¿Si sí desde cuándo?</label>
                                    <select required class="form-control col-xs-12 col-sm-9 col-md-9" id="infoFebre"
                                        name="infoFebre" disabled>
                                        <option value="">Elige</option>
                                        <option value="1 dia">1 dia</option>
                                        <option value="2 dias">2 dias</option>
                                        <option value="3 dias">3 dias</option>
                                        <option value="4 dias">4 dias</option>
                                        <option value="5 dias">5 dias</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group w-100" style="display:flex;">
                                <div class="w-100">
                                    <label class="col-form-label" for="inputTos">Tos</label>
                                    <select required class="form-control col-xs-12 col-sm-9 col-md-9" id="inputTos"
                                        name="inputTos" onchange="changeState(inputTos)">
                                        <option value="">Elige</option>
                                        <option value="tos">Tengo tos</option>
                                        <option value="no tos">No tengo tos</option>
                                    </select>
                                </div>

                                <div class="w-100">
                                    <label class="col-form-label" for="infoTos">¿Si sí desde cuándo?</label>
                                    <select required class="form-control col-xs-12 col-sm-9 col-md-9" id="infoTos"
                                        name="infoTos" disabled>
                                        <option value="">Elige</option>
                                        <option value="1 dia">1 dia</option>
                                        <option value="2 dias">2 dias</option>
                                        <option value="3 dias">3 dias</option>
                                        <option value="4 dias">4 dias</option>
                                        <option value="5 dias">5 dias</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group w-100" style="display:flex;">
                                <div class="w-100">
                                    <label class="col-form-label" for="inputRespirar">Dificultad para respirar</label>
                                    <select required class="form-control col-xs-12 col-sm-9 col-md-9" id="inputRespirar"
                                        name="inputRespirar" onchange="changeState(inputRespirar)">
                                        <option value="">Elige</option>
                                        <option value="dificultad a respirar">Tengo dificultad para respirar</option>
                                        <option value="no dificultad a respirar">No tengo dificultad para respirar</option>
                                    </select>
                                </div>

                                <div class="w-100">
                                    <label class="col-form-label" for="infoRespirar">¿Si sí desde cuándo?</label>
                                    <select required class="form-control col-xs-12 col-sm-9 col-md-9" id="infoRespirar"
                                        name="infoRespirar" disabled>
                                        <option value="">Elige</option>
                                        <option value="1 dia">1 dia</option>
                                        <option value="2 dias">2 dias</option>
                                        <option value="3 dias">3 dias</option>
                                        <option value="4 dias">4 dias</option>
                                        <option value="5 dias">5 dias</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group w-100" style="display:flex;">
                                <div class="w-100">
                                    <label class="col-form-label" for="inputDigestivos">Problemas digestivos</label>
                                    <select required class="form-control col-xs-12 col-sm-9 col-md-9"
                                        id="inputDigestivos" name="inputDigestivos"
                                        onchange="changeState(inputDigestivos)">
                                        <option value="">Elige</option>
                                        <option value="problemas digestivos">Tengo problemas digestivos</option>
                                        <option value="no problemas digestivos">No tengo problemas digestivos</option>
                                    </select>
                                </div>

                                <div class="w-100">
                                    <label class="col-form-label" for="infoDigestivos">¿Si sí desde cuándo?</label>
                                    <select required class="form-control col-xs-12 col-sm-9 col-md-9"
                                        id="infoDigestivos" name="infoDigestivos" disabled>
                                        <option value="">Elige</option>
                                        <option value="1 dia">1 dia</option>
                                        <option value="2 dias">2 dias</option>
                                        <option value="3 dias">3 dias</option>
                                        <option value="4 dias">4 dias</option>
                                        <option value="5 dias">5 dias</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Bloc Oui/Non -->
                        <div class="container mt-5">
                            <fieldset class="form-group">
                                <legend style="padding-left:0px;" class="col-xs-12 col-sm-9 col-md-6">¿Estuvo en contacto
                                    con otras personas desde
                                    que siente los síntomas
                                    o
                                    en los 14
                                    últimos días?</legend>

                                <div class="custom-control custom-radio">
                                <input required type="radio" class="custom-control-input" name="optionsContacto"
                                            id="contactoSi" value="si" onchange="changeState(contactoSi)">
                                    <label class="custom-control-label" for="contactoSi">Si</label>
                                </div>

                                <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="optionsContacto"
                                            id="contactoNo" value="no" onchange="changeState(contactoNo)">
                                    <label class="custom-control-label" for="contactoNo">No</label>
                                </div>

                                <div class="w-100">
                                    <label class="col-form-label" for="infoContacto">¿Si sí, cuantas personas aprox
                                        ?</label>
                                    <select required class="form-control col-xs-12 col-sm-9 col-md-5" id="infoContacto"
                                        name="infoContacto" disabled>
                                        <option value="">Elige</option>
                                        <option value="1 personna">1 personna</option>
                                        <option value="2 personnas">2 personnas</option>
                                        <option value="3 personnas">3 personnas</option>
                                        <option value="4 personnas">4 personnas</option>
                                        <option value="mas de 4 personnas">Mas de 4 personnas</option>
                                    </select>
                                </div>
                            </fieldset>
                        </div>

                        <div class="container mt-5">
                            <fieldset class="form-group">
                                <legend style="padding-left:0px;" class="col-xs-12 col-sm-9 col-md-6">¿Ha estado en contacto con una persona que tiene estos síntomas?</legend>

                                <div class="custom-control custom-radio">
                                <input required type="radio" class="custom-control-input" name="optionsContactoOtraPersona"
                                            id="contactoOtraPersonaSi" value="si">
                                    <label class="custom-control-label" for="contactoOtraPersonaSi">Si</label>
                                </div>

                                <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="optionsContactoOtraPersona"
                                            id="contactoOtraPersonaNo" value="no">
                                    <label class="custom-control-label" for="contactoOtraPersonaNo">No</label>
                                </div>
                            </fieldset>
                        </div>

                        <div class="container mt-5 mb-4">
                            <fieldset class="form-group mb-5">
                                <legend style="padding-left:0px;" class="col-xs-12 col-sm-9 col-md-6">¿Aceptaría que su información sea compartida a las autoridades nacionales?</legend>

                                <div class="custom-control custom-radio">
                                <input required type="radio" class="custom-control-input" name="optionsNumero"
                                            id="numeroSi" value="si" onchange="changeState(numeroSi)">
                                    <label class="custom-control-label" for="numeroSi">Si</label>
                                </div>

                                <div class="custom-control custom-radio">
                                <input required type="radio" class="custom-control-input" name="optionsNumero" id="numeroNo"
                                            value="no" onchange="changeState(numeroNo)">
                                    <label class="custom-control-label" for="numeroNo">No</label>
                                </div>

                                <div class="w-100">
                                    <label class="col-form-label" for="inputTel">¿Si sí, dejar teléfono o celular?</label>
                                    <input required type="number" class="form-control col-xs-12 col-sm-9 col-md-5"
                                        placeholder="Su numero" minlength="10" id="inputTel"name="inputTel" style="#inputTel:invalid {border: 2px dashed red;}" disabled>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkApruebo" onclick="removeDisabled()">
                                        <label class="custom-control-label" for="checkApruebo">Doy mi consentimiento para el procesamiento de datos confidenciales</label>
                                    </div>
                                </div>

                            </fieldset>
                            <input type="submit" id="submitBtn" name="submitBtn" class="btn btn-primary btn-lg"
                                value="Enviar" disabled>
                        </div>
                    </fieldset>
                </form>
            </div>

        </div>
    </main>


    <footer>

    </footer>
    <script src="./js/main.js"></script>
    <script src="./js/geoloc.js"></script>
</body>

</html>
