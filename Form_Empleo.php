<?php
require_once('solicitud.controlador.php');
require_once('solicitud.modelo.php');
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Solicitud de empleo</title>
    <style>
        .required:after {
            content: "*";
            font-weight: bold;
            color: red;
        }
    </style>
</head>


<body>


    <div class="container-fluid mt-3">

        <form id="formSolicitud" method="POST">





            <div class="row">
                <div class="col-12 mb-3">
                    <div class="card bg-light border-primary p-3">
                        <div class="card-header text-center">
                            SOLICITUD DE EMPLEO
                        </div>

                        <div class="row">
                            <div class=" col-md-3">
                                <label for="fechasolicitud" class="form-label">Fecha</label>
                                <input type="date" class="form-control" id="fechasolicitud" name="sld_fechasolicitud" value="<?php echo date("Y-m-d"); ?>">
                            </div>
                            <div class="col-md-3">
                                <label for="puestosolicitud" class="form-label required">Puesto que solicita</label>
                                <input type="text" class="form-control" id="puestosolicitud" name="sld_puestosolicitud">
                            </div>
                            <div class="col-md-3">
                                <label for="sueldodeseado" class="form-label required ">Sueldo mensual deseado</label>
                                <input type="text" class="form-control" id="sueldodeseado" name="sld_sueldodeseado">
                            </div>
                            <div class="col-md-3">
                                <label for="fotosolicitante" class="form-label  required">Fotografia reciente del
                                    solicitante</label>
                                <input type="file" class="form-control" id="fotosolicitante" name="sld_fotosolicitante">
                            </div>
                        </div>
                    </div>
                </div>
            </div>















            <div class="row">
                <div class="col-12 mb-3">
                    <div class="card border-primary bg-light p-3">
                        <div class="card-header text-center">
                            DATOS PERSONAES
                        </div>

                        <div class="row">
                            <div class=" col-md-3">
                                <label for="apellidoPsolicitante" class="form-label  required">Apellido Paterno</label>
                                <input type="text" class="form-control" id="apellidoPsolicitante" name="sld_apellidoPsolicitante">
                            </div>
                            <div class="col-md-3">
                                <label for="apellidoMsolicitante" class="form-label required">Apellido Materno</label>
                                <input type="text" class="form-control" id="apellidoMsolicitante" name="sld_apellidoMsolicitante">
                            </div>
                            <div class="col-md-4">
                                <label for="nombressolicitante" class="form-label required">Nombre (s)</label>
                                <input type="text" class="form-control" id="nombressolicitante" name="sld_nombressolicitante">
                            </div>
                            <div class="col-md-2">
                                <label for="edadsolicitante" class="form-label required">Edad</label>
                                <input type="text" class="form-control" id="edadsolicitante" name="sld_edadsolicitante">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="direccionsolicitante" class="form-label required">Direccion</label>
                                <input type="text" class="form-control" id="direccionsolicitante" name="sld_direccionsolicitante">
                            </div>
                            <div class="col-md-4">
                                <label for="coloniasolicitante" class="form-label required">Colonia</label>
                                <input type="text" class="form-control" id="coloniasolicitante" name="sld_coloniasolicitante">
                            </div>
                            <div class="col-md-1">
                                <label for="codigopsolicitante" class="form-label required">C. Postal</label>
                                <input type="text" class="form-control" id="codigopsolicitante" name="sld_codigopsolicitante">
                            </div>

                            <div class="col-md-2">
                                <label for="telsolicitante" class="form-label required">Telefono</label>
                                <input type="text" class="form-control" id="telsolicitante" name="sld_telsolicitante">
                            </div>


                            <div class="col-md-1">
                                <label class=" required">Genero</label>
                                <div class="form-check">
                                    <input for="sex" type="radio" name="sld_sexo" id="sexmascu" value="sexomasculino">
                                    <label class="form-check-label" for="sex">M</label><br>
                                </div>

                                <div class="form-check">
                                    <input class="sex" type="radio" name="sld_sexo" id="sexfem" value="sexofemenino">
                                    <label class="form-check-label" for="sex">F</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="lugarnacim" class="form-label">Lugar de nacimiento</label>
                                <input type="text" class="form-control" id="lugarnacim" name="sld_lugarnacim">
                            </div>

                            <div class="col-md-2">
                                <label for="fechanacim" class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="fechanacim" name="sld_fechanacim">
                            </div>

                            <div class="col-md-2">
                                <label>Nacionalidad</label>
                                <div class="form-check">
                                    <input type="radio" name="sld_nacionalidad" value="mexicana" id="nacionalidad">
                                    <label class="form-check-label" for="nacimex">Mexicana</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sld_nacionalidad" value="extrangera" id="nacionalidad">
                                    <label class="form-check-label" for="naciext">Extrangera</label>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <label>Vive con</label>
                                <div class="form-check">
                                    <input type="radio" name="sld_vive_con" id="vivecon" value="conpadres">
                                    <label class="form-check-label" for="vivecon">Sus padres</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" name="sld_vive_con" id="confam" value="confamilia">
                                    <label class="form-check-label" for="confam">Su familia</label>
                                </div>


                            </div>

                            <div class="col-md-2">
                                <label> </label>
                                <div class="form-check">
                                    <input type="radio" name="sld_vive_con" id="conpariente" value="conparientes">
                                    <label class="form-check-label" for="conpariente">Parientes</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" name="sld_vive_con" id="solo" value="solo">
                                    <label class="form-check-label" for="solo">Solo</label>
                                </div>

                            </div>


                            <div class="col-md-2">
                                <label>Estado Civil</label>
                                <div class="form-check form-chec-inline">
                                    <input type="radio" name="sld_estado_civil" id="soltero" value="soltero">
                                    <label class="form-check-label" for="soltero">Soltero</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sld_estado_civil" id="casado" value="casado">
                                    <label class="form-check-label" for="casado">Casado</label>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-2">
                                    <label for="hijos" class="form-label">Personas que dependen de usted(cuantos)</label>
                                    <input type="text" class="form-control" id="hijos" name="sld_hijos_depen" placeholder="Hijos">
                                </div>
                                <div class="col-2">
                                    <label for="conyuge" class="form-label"><br><br></label>
                                    <input type="text" class="form-control" id="conyuge" name="sld_conyuge_depen" placeholder="Conyuge">
                                </div>
                                <div class="col-2">
                                    <label for="padres" class="form-label"><br><br></label>
                                    <input type="text" class="form-control" id="padres" name="sld_padres_depen" placeholder="Padres">
                                </div>
                                <div class="col-2">
                                    <label for="otros" class="form-label"><br><br></label>
                                    <input type="text" class="form-control" id="otros" name="sld_otros_depen" placeholder="Otros">
                                </div>
                                <div class="col-2">
                                    <label for="estatura" class="form-label"><br>Estatura solicitante</label>
                                    <input type="text" class="form-control" id="estatura" name="sld_estatura" placeholder="">
                                </div>
                                <div class="col-2">
                                    <label for="peso" class="form-label"><br>Peso Solicitante</label>
                                    <input type="text" class="form-control" id="peso" name="sld_peso" placeholder="kg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>














            <div class="row">
                <div class="col-12 mb-3">
                    <div class="card border-primary bg-light p-3">

                        <div class="card-header text-center">
                            DOCUMENTACION
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="curp" class="form-label required">CURP</label>
                                <input type="text" class="form-control" id="curp" name="sld_curp" placeholder="">
                            </div>
                            <div class="col-md-6">
                                <label for="apellidoM" class="form-label">Afore</label>
                                <input type="text" class="form-control" id="inputPassword4" name="sld_afore" placeholder="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <label for="rfc" class="form-label">RFC</label>
                                <input type="text" class="form-control" id="rfc" name="sld_rfc" placeholder="">
                            </div>
                            <div class="col-md-3">
                                <label for="nseguro" class="form-label">Numero de Seguridad Social</label>
                                <input type="text" class="form-control" id="nseguro" name="sld_nseguro" placeholder="">
                            </div>
                            <div class="col-md-2">
                                <label for="cartmil" class="form-label">Cartilla Servicio Militar No.</label>
                                <input type="text" class="form-control" id="cartmil" name="sld_cartmil" placeholder="">
                            </div>
                            <div class="col-md-2">
                                <label for="pasaport" class="form-label">Pasaporte No.</label>
                                <input type="text" class="form-control" id="pasaport" name="sld_pasaport">
                            </div>

                            <div class="col-md-2">
                                <label>Licencia de Manejo</label>
                                <div class="form-check form-chec-inline">
                                    <input type="radio" name="sld_licencia" id="silicencia" value="silicencia">
                                    <label class="form-check-label" for="silicencia">Si</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sld_licencia" id="nolicencia" value="nolicencia">
                                    <label class="form-check-label" for="nolicencia">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>










            <div class="row">
                <div class="col-12 mb-3">
                    <div class="card border-primary bg-light p-3">

                        <div class="card-header text-center">
                            ESTADO DE SALUD
                        </div>

                        <div class="row">

                            <div class="col-md-4">
                                <label class="required">Actualmente ¿Como considera su estado de salud?</label>
                                <div class="form-check form-chec-inline">
                                    <input type="radio" name="sld_salud_estado" id="estadobueno" value="estadobueno">
                                    <label class="form-check-label" for="estadobueno">Bueno</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sld_salud_estado" id="estadoregular" value="estadoregular">
                                    <label class="form-check-label" for="estadoregular">Regular</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sld_salud_estado" id="estadomalo" value="estadomalo">
                                    <label class="form-check-label" for="estadomalo">Malo</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label class=" required">¿Padece alguna enfermedad cronica?</label>
                                <div class="form-check form-chec-inline">
                                    <input type="radio" name="sld_enf_cronica" id="no_enfer_cronic" value="no_enfermo">
                                    <label class="form-check-label" for="no_enfer_cronic">No</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sld_enf_cronica" id="si_enfer_cronic" value="si_enfermo">
                                    <label class="form-check-label" for="si_enfer_cronic">Si</label>
                                </div>



                            </div>


                            <div class="col-md-4">
                                <label for="croni_cual" class="form-label">¿Cual?</label>
                                <input type="text" class="form-control" id="croni_cual" name="sld_croni_cual">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label for="deporte" class="form-label">¿Que deporte practica?</label>
                                <input type="text" class="form-control" id="deporte" name="sld_deporte">
                            </div>

                            <div class="col-md-4">
                                <label for="club" class="form-label">¿Pertenece a algun club social o deportivo?</label>
                                <input type="text" class="form-control" id="club" name="sld_club">
                            </div>

                            <div class="col-md-4">
                                <label for="pasatiempo" class="form-label">¿Cual es su pasatiempo favorito?</label>
                                <input type="text" class="form-control" id="pasatiempo" name="sld_pasatiempo">
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-12">
                                <label for="metavida" class="form-label">¿Cual es su meta en la vida?</label>
                                <input type="text" class="form-control" id="metavida" name="sld_metavida">
                            </div>
                        </div>

                    </div>
                </div>
            </div>








            <div class="row">
                <div class="col-12 mb-3">
                    <div class="card border-primary bg-light p-3">

                        <div class="card-header text-center">
                            DATOS FAMILIARES
                        </div>

                        <div class="row">

                            <div class="col-md-3">
                                <label>Nombre</label><br>
                                <label for="nom_padre" class="form-label">Padre</label>
                                <input type="text" class="form-control" id="nom_padre" name="sld_nom_padre">
                            </div>


                            <div class="col-md-2">
                                <label></label><br><br><br>

                                <div class="form-check form-check-inline">
                                    <input id="vivepadre" type="radio" name="sld_est_vida_padre" id="vivepadre" value="vive_padre">
                                    <label class="form-check-label" for="vivepadre">Vive</label>
                                </div>


                                <div class="form-check form-check-inline">
                                    <input id="novivepadre" type="radio" name="sld_est_vida_padre" id="novivepadre" value="no_vive_padre">
                                    <label class="form-check-label" for="novivepadre">Finado</label>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <label>Direccion</label><br>
                                <label for="dir_padre" class="form-label"><br></label>
                                <input type="text" class="form-control" id="dir_padre" name="sld_dir_padre">
                            </div>


                            <div class="col-md-4">
                                <label>Ocupación</label><br>
                                <label for="ocup_padre" class="form-label"><br></label>
                                <input type="text" class="form-control" id="ocup_padre" name="sld_ocup_padre">
                            </div>

                        </div>



                        <div class="row">

                            <div class="col-md-3">

                                <label for="nom_madre" class="form-label">Madre</label>
                                <input type="text" class="form-control" id="nom_madre" name="sld_nom_madre">
                            </div>


                            <div class="col-md-2">
                                <label></label><br><br>

                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sld_est_vida_madre" id="vivemadre">
                                    <label class="form-check-label" for="vivemadre">Vive</label>
                                </div>


                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sld_est_vida_madre" id="novivemadre">
                                    <label class="form-check-label" for="novivemadre">Finado</label>
                                </div>
                            </div>


                            <div class="col-md-3">

                                <label for="dir_madre" class="form-label"><br></label>
                                <input type="text" class="form-control" id="dir_madre" name="sld_dir_madre">
                            </div>


                            <div class="col-md-4">

                                <label for="ocup_madre" class="form-label"><br></label>
                                <input type="text" class="form-control" id="ocup_madre" name="sld_ocup_madre">
                            </div>


                        </div>





                        <div class="row">

                            <div class="col-md-3">

                                <label for="nom_espos" class="form-label">Esposo(a)</label>
                                <input type="text" class="form-control" id="nom_espos" name="sld_nom_espos">
                            </div>


                            <div class="col-md-2">
                                <label></label><br><br>

                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sld_est_vida_espos" id="viveespos">
                                    <label class="form-check-label" for="viveespos">Vive</label>
                                </div>


                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sld_est_vida_espos" id="noviveespos">
                                    <label class="form-check-label" for="noviveespos">Finado</label>
                                </div>
                            </div>


                            <div class="col-md-3">

                                <label for="dir_espos" class="form-label"><br></label>
                                <input type="text" class="form-control" id="dir_espos" name="sld_dir_espos">
                            </div>


                            <div class="col-md-4">

                                <label for="ocup_espos" class="form-label"><br></label>
                                <input type="text" class="form-control" id="ocup_espos" name="sld_ocup_espos">
                            </div>


                        </div>


                        <div class="row">
                            <label for="nomhijos" class="form-label">Nombres y edades de sus hijos</label>
                        </div>

                        <div class="row">


                            <div class="col-md-12">
                                <input type="text" class="form-control" id="nomhijos" name="sld_nom_hijos">
                            </div>



                        </div>


                    </div>
                </div>
            </div>

















            <div class="row">
                <div class="col-12 mb-3">
                    <div class="card border-primary bg-light p-3">

                        <div class="card-header text-center">
                            ESCOLARIDAD
                        </div>

                        <div class="row">

                            <div class="col-md-3">
                                <label>Nombre de la escuela</label><br>
                                <label for="nom_primaria" class="form-label  required">Primaria</label>
                                <input type="text" class="form-control" id="nom_primaria" name="sld_nom_primaria">
                            </div>



                            <div class="col-md-2">
                                <label>Direccion</label><br>
                                <label for="dir_primaria" class="form-label"><br></label>
                                <input type="text" class="form-control" id="dir_primaria" name="sld_dir_primaria">
                            </div>


                            <div class="col-md-2">
                                <label>De</label><br>
                                <label for="finicio_primaria" class="form-label"><br></label>
                                <input type="date" class="form-control" id="finicio_primaria" name="sld_finicio_primaria" placeholder="Fecha de inicio">


                            </div>

                            <div class="col-md-2">
                                <label>A</label><br>
                                <label for="ffinal_primaria" class="form-label"><br></label>
                                <input type="date" class="form-control" id="ffinal_primaria" name="sld_ffinal_primaria" placeholder="Fecha de termino">


                            </div>


                            <div class="col-md-1">
                                <label>Años</label><br>
                                <label for="anos_primaria" class="form-label"><br></label>
                                <input type="text" class="form-control" id="anos_primaria" name="sld_anos_primaria">
                            </div>

                            <div class="col-md-2">
                                <label>Titulo recibido</label><br>
                                <label for="titulo_primaria" class="form-label"><br></label>
                                <input type="text" class="form-control" id="titulo_primaria" name="sld_titulo_primaria">
                            </div>

                        </div>




                        <div class="row">

                            <div class="col-md-3">
                                <label for="nom_secundaria" class="form-label required">Secundaria</label>
                                <input type="text" class="form-control" id="nom_secundaria" name="sld_nom_secundaria">
                            </div>



                            <div class="col-md-2">
                                <label for="dir_secundaria" class="form-label"><br></label>
                                <input type="text" class="form-control" id="dir_secundaria" name="sld_dir_secundaria">
                            </div>


                            <div class="col-md-2">
                                <label for="finicio_secundaria" class="form-label"><br></label>
                                <input type="date" class="form-control" id="finicio_secundaria" name="sld_finicio_secundaria" placeholder="Fecha de inicio">


                            </div>

                            <div class="col-md-2">
                                <label for="ffinal_secundaria" class="form-label"><br></label>
                                <input type="date" class="form-control" id="ffinal_secundaria" name="sld_ffinal_secundaria" placeholder="Fecha de termino">


                            </div>


                            <div class="col-md-1">
                                <label for="anos_secundaria" class="form-label"><br></label>
                                <input type="text" class="form-control" id="anos_secundaria" name="sld_anos_secundaria">
                            </div>

                            <div class="col-md-2">
                                <label for="titulo_secundaria" class="form-label"><br></label>
                                <input type="text" class="form-control" id="titulo_secundaria" name="sld_titulo_secundaria">
                            </div>

                        </div>



                        <div class="row">

                            <div class="col-md-3">
                                <label for="nom_preparatoria" class="form-label required">Preparatoria o Vocacional</label>
                                <input type="text" class="form-control" id="nom_preparatoria" name="sld_nom_preparatoria">
                            </div>



                            <div class="col-md-2">
                                <label for="dir_preparatoria" class="form-label"><br></label>
                                <input type="text" class="form-control" id="dir_preparatoria" name="sld_dir_preparatoria">
                            </div>


                            <div class="col-md-2">
                                <label for="finicio_preparatoria" class="form-label"><br></label>
                                <input type="date" class="form-control" id="finicio_preparatoria" name="sld_finicio_preparatoria" placeholder="Fecha de inicio">


                            </div>

                            <div class="col-md-2">
                                <label for="ffinal_preparatoria" class="form-label"><br></label>
                                <input type="date" class="form-control" id="ffinal_preparatoria" name="sld_ffinal_secundaria" placeholder="Fecha de termino">


                            </div>


                            <div class="col-md-1">
                                <label for="anos_preparatoria" class="form-label"><br></label>
                                <input type="text" class="form-control" id="anos_preparatoria" name="sld_anos_preparatoria">
                            </div>

                            <div class="col-md-2">
                                <label for="titulo_preparatoria" class="form-label"><br></label>
                                <input type="text" class="form-control" id="titulo_preparatoria" name="sld_titulo_preparatoria">
                            </div>

                        </div>



                        <div class="row">

                            <div class="col-md-3">
                                <label for="nom_profesional" class="form-label required">Profecional</label>
                                <input type="text" class="form-control" id="nom_profesional" name="sld_nom_profesional">
                            </div>



                            <div class="col-md-2">
                                <label for="dir_profesional" class="form-label"><br></label>
                                <input type="text" class="form-control" id="dir_profesional" name="sld_dir_profesional">
                            </div>


                            <div class="col-md-2">
                                <label for="finicio_profesional" class="form-label"><br></label>
                                <input type="date" class="form-control" id="finicio_profesional" name="sld_finicio_profesional" placeholder="Fecha de inicio">


                            </div>

                            <div class="col-md-2">
                                <label for="ffinal_profesional" class="form-label"><br></label>
                                <input type="date" class="form-control" id="ffinal_profesional" name="sld_ffinal_profesional" placeholder="Fecha de termino">


                            </div>


                            <div class="col-md-1">
                                <label for="anos_profesional" class="form-label"><br></label>
                                <input type="text" class="form-control" id="anos_profesional" name="sld_anos_profesional">
                            </div>

                            <div class="col-md-2">
                                <label for="titulo_profesional" class="form-label"><br></label>
                                <input type="text" class="form-control" id="titulo_profesional" name="sld_titulo_profesional">
                            </div>

                        </div>



                        <div class="row">

                            <div class="col-md-3">
                                <label for="nom_comercial" class="form-label">Comercial u otras</label>
                                <input type="text" class="form-control" id="nom_comercial" name="sld_nom_comercial">
                            </div>



                            <div class="col-md-2">
                                <label for="dir_comercial" class="form-label"><br></label>
                                <input type="text" class="form-control" id="dir_comercial" name="sld_dir_comercial">
                            </div>


                            <div class="col-md-2">
                                <label for="finicio_comercial" class="form-label"><br></label>
                                <input type="date" class="form-control" id="finicio_comercial" name="sld_finicio_comercial" placeholder="Fecha de inicio">


                            </div>

                            <div class="col-md-2">
                                <label for="ffinal_comercial" class="form-label"><br></label>
                                <input type="date" class="form-control" id="ffinal_comercial" name="sld_ffinal_comercial" placeholder="Fecha de termino">


                            </div>


                            <div class="col-md-1">
                                <label for="anos_comercial" class="form-label"><br></label>
                                <input type="text" class="form-control" id="anos_comercial" name="sld_anos_comercial">
                            </div>

                            <div class="col-md-2">
                                <label for="titulo_comercial" class="form-label"><br></label>
                                <input type="text" class="form-control" id="titulo_comercial" name="sld_titulo_comercial">
                            </div>

                        </div>



                        <div class="row">

                            <div class="col-md-3">
                                <br><label>Estudios que efectua actualmente</label><br>
                                <label for="esc_actual" class="form-label">Escuela</label>
                                <input type="text" class="form-control" id="nom_esc_actual" name="sld_nom_esc_actual">
                            </div>



                            <div class="col-md-3">
                                <label></label><br>
                                <label for="esc_actual_horario" class="form-label"><br>Horario</label>
                                <input type="text" class="form-control" id="esc_actual_horario" name="sld_esc_actual_horario">
                            </div>


                            <div class="col-md-3">
                                <label></label><br>
                                <label for="esc_actual_carrera" class="form-label"><br>Curso o Carrera</label>
                                <input type="text" class="form-control" id="esc_actual_carrera" name="sld_esc_actual_carrera">


                            </div>

                            <div class="col-md-3">
                                <label></label><br>
                                <label for="esc_actual_hor" class="form-label"><br>Grado</label>
                                <input type="text" class="form-control" id="esc_actual_grado" name="sld_esc_actual_grado">


                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-12 mb-3">
                    <div class="card border-primary bg-light p-3">
                        <div class="card-header text-center">
                            CONOCIMIENTOS GENERALES
                        </div>

                        <div class="row">
                            <div class=" col-md-6">
                                <label for="idiom_domina" class="form-label required">¿Que idiomas dominas?</label>
                                <input type="text" class="form-control" id="idiom_domina" name="sld_idiom_domina">
                            </div>
                            <div class="col-md-6">
                                <label for="funofic_domina" class="form-label required">¿Que funciones de oficina domina?</label>
                                <input type="text" class="form-control" id="funofic_domina" name="sld_funofic_domina">
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <label for="maq_ofi_domina" class="form-label required">Maquinas de oficina que sepa
                                    manejar</label>
                                <input type="text" class="form-control" id="maq_ofi_domina" name="sld_maq_ofi_domina">
                            </div>

                            <div class="col-md-6">
                                <label for="soft_domina" class="form-label required">Software que domina</label>
                                <input type="text" class="form-control" id="soft_domina" name="sld_soft_domina">
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <label for="otras_fun_domina" class="form-label required">Otras funciones que domina</label>
                                <input type="text" class="form-control" id="otras_fun_domina" name="sld_otras_fun_domina">
                            </div>
                        </div>
                    </div>
                </div>
            </div>









            <div class="row">
                <div class="col-12 mb-3">
                    <div class="card border-primary bg-light p-3">
                        <div class="card-header text-center">
                            EMPLEO ACTUAL Y ANTERIORES
                        </div>

                        <div class="row">

                            <div class="col-md-2">
                                <label>Concepto</label><br>
                                <label for="" class="form-label"><br>Tiempo que presto sus servicios</label>

                            </div>



                            <div class="col-md-3">
                                <label>Empleo Actual o Ultimo</label><br>
                                <label for="t_emp_actual" class="form-label"><br></label>
                                <input type="text" class="form-control" id="t_emp_actual" name="sld_t_emp_actual">
                            </div>


                            <div class="col-md-3">
                                <label>Empleo Anterior</label><br>
                                <label for="t_emp_ant1" class="form-label"><br></label>
                                <input type="text" class="form-control" id="t_emp_ant1" name="sld_t_emp_ant1">


                            </div>

                            <div class="col-md-2">
                                <label>Empleo Anterior</label><br>
                                <label for="t_emp_ant2" class="form-label"><br></label>
                                <input type="text" class="form-control" id="t_emp_ant2" name="sld_t_emp_ant2">


                            </div>

                            <div class="col-md-2">
                                <label>Empleo Anterior</label><br>
                                <label for="t_emp_ant3" class="form-label"><br></label>
                                <input type="text" class="form-control" id="t_emp_ant3" name="sld_t_emp_ant3">
                            </div>

                        </div>


                        <div class="row">

                            <div class="col-md-2">

                                <label for="padre" class="form-label"><br>Nombre de la compañia</label>

                            </div>



                            <div class="col-md-3">

                                <label for="nom_emp_actual" class="form-label"><br></label>
                                <input type="text" class="form-control" id="nom_emp_actual" name="sld_nom_emp_actual">
                            </div>


                            <div class="col-md-3">

                                <label for="nom_emp_ant1" class="form-label"><br></label>
                                <input type="text" class="form-control" id="nom_emp_ant1" name="sld_nom_emp_ant1">


                            </div>

                            <div class="col-md-2">

                                <label for="nom_emp_ant2" class="form-label"><br></label>
                                <input type="text" class="form-control" id="nom_emp_ant2" name="sld_nom_emp_ant2">


                            </div>

                            <div class="col-md-2">

                                <label for="nom_emp_ant3" class="form-label"><br></label>
                                <input type="text" class="form-control" id="nom_emp_ant3" name="sld_nom_emp_ant3">
                            </div>

                        </div>




                        <div class="row">

                            <div class="col-md-2">

                                <label for="padre" class="form-label"><br>Direccion</label>

                            </div>



                            <div class="col-md-3">

                                <label for="dir_emp_actual" class="form-label"><br></label>
                                <input type="text" class="form-control" id="dir_emp_actual" name="sld_dir_emp_actual">
                            </div>


                            <div class="col-md-3">

                                <label for="dir_emp_ant1" class="form-label"><br></label>
                                <input type="text" class="form-control" id="dir_emp_ant1" name="sld_dir_emp_ant1">


                            </div>

                            <div class="col-md-2">

                                <label for="dir_emp_ant2" class="form-label"><br></label>
                                <input type="text" class="form-control" id="dir_emp_ant2" name="sld_dir_emp_ant2">


                            </div>

                            <div class="col-md-2">

                                <label for="dir_emp_ant3" class="form-label"><br></label>
                                <input type="text" class="form-control" id="dir_emp_ant3" name="sld_dir_emp_ant3">
                            </div>

                        </div>






                        <div class="row">

                            <div class="col-md-2">

                                <label for="padre" class="form-label"><br>Telefono</label>

                            </div>



                            <div class="col-md-3">

                                <label for="tel_emp_actual" class="form-label"><br></label>
                                <input type="text" class="form-control" id="tel_emp_actual" name="sld_tel_emp_actual">
                            </div>


                            <div class="col-md-3">

                                <label for="tel_emp_ant1" class="form-label"><br></label>
                                <input type="text" class="form-control" id="tel_emp_ant1" name="sld_tel_emp_ant1">


                            </div>

                            <div class="col-md-2">

                                <label for="tel_emp_ant2" class="form-label"><br></label>
                                <input type="text" class="form-control" id="tel_emp_ant2" name="sld_tel_emp_ant2">


                            </div>

                            <div class="col-md-2">

                                <label for="tel_emp_ant3" class="form-label"><br></label>
                                <input type="text" class="form-control" id="tel_emp_ant3" name="sld_tel_emp_ant3">
                            </div>

                        </div>







                        <div class="row">

                            <div class="col-md-2">

                                <label for="padre" class="form-label"><br>Puesto que desempeña</label>

                            </div>



                            <div class="col-md-3">

                                <label for="puesto_emp_actual" class="form-label"><br></label>
                                <input type="text" class="form-control" id="puesto_emp_actual" name="sld_puesto_emp_actual">
                            </div>


                            <div class="col-md-3">

                                <label for="puesto_emp_ant1" class="form-label"><br></label>
                                <input type="text" class="form-control" id="puesto_emp_ant1" name="sld_puesto_emp_ant1">


                            </div>

                            <div class="col-md-2">

                                <label for="puesto_emp_ant2" class="form-label"><br></label>
                                <input type="text" class="form-control" id="puesto_emp_ant2" name="sld_puesto_emp_ant2">


                            </div>

                            <div class="col-md-2">

                                <label for="puesto_emp_ant3" class="form-label"><br></label>
                                <input type="text" class="form-control" id="puesto_emp_ant3" name="sld_puesto_emp_ant3">
                            </div>

                        </div>





                        <div class="row">

                            <div class="col-md-2">

                                <label for="padre" class="form-label"><br>Sueldo Inicial</label>

                            </div>



                            <div class="col-md-3">

                                <label for="sueldo_ini_emp_actual" class="form-label"><br></label>
                                <input type="text" class="form-control" id="sueldo_ini_emp_actual" name="sld_sueldo_ini_emp_actual">
                            </div>


                            <div class="col-md-3">

                                <label for="sueldo_ini_emp_ant1" class="form-label"><br></label>
                                <input type="text" class="form-control" id="sueldo_ini_emp_ant1" name="sld_sueldo_ini_emp_ant1">


                            </div>

                            <div class="col-md-2">

                                <label for="sueldo_ini_emp_ant2" class="form-label"><br></label>
                                <input type="text" class="form-control" id="sueldo_ini_emp_ant2" name="sld_sueldo_ini_emp_ant2">


                            </div>

                            <div class="col-md-2">

                                <label for="sueldo_ini_emp_ant3" class="form-label"><br></label>
                                <input type="text" class="form-control" id="sueldo_ini_emp_ant3" name="sld_sueldo_ini_emp_ant3">
                            </div>

                        </div>





                        <div class="row">

                            <div class="col-md-2">

                                <label for="padre" class="form-label"><br>Sueldo Final</label>

                            </div>



                            <div class="col-md-3">

                                <label for="sueldo_fin_emp_actual" class="form-label"><br></label>
                                <input type="text" class="form-control" id="sueldo_fin_emp_actual" name="sld_sueldo_fin_emp_actual">
                            </div>


                            <div class="col-md-3">

                                <label for="sueldo_fin_emp_ant1" class="form-label"><br></label>
                                <input type="text" class="form-control" id="sueldo_fin_emp_ant1" name="sld_sueldo_fin_emp_ant1">


                            </div>

                            <div class="col-md-2">

                                <label for="sueldo_fin_emp_ant2" class="form-label"><br></label>
                                <input type="text" class="form-control" id="sueldo_fin_emp_ant2" name="sld_sueldo_fin_emp_ant2">


                            </div>

                            <div class="col-md-2">

                                <label for="sueldo_fin_emp_ant3" class="form-label"><br></label>
                                <input type="text" class="form-control" id="sueldo_fin_emp_ant3" name="sld_sueldo_fin_emp_ant3">
                            </div>

                        </div>





                        <div class="row">

                            <div class="col-md-2">

                                <label for="padre" class="form-label"><br>Motivo de su separacion</label>

                            </div>



                            <div class="col-md-3">

                                <label for="motsep_emp_actual" class="form-label"><br></label>
                                <input type="text" class="form-control" id="motsep_emp_actual" name="sld_motsep_emp_actual">
                            </div>


                            <div class="col-md-3">

                                <label for="motsep_emp_ant1" class="form-label"><br></label>
                                <input type="text" class="form-control" id="motsep_emp_ant1" name="sld_motsep_emp_ant1">


                            </div>

                            <div class="col-md-2">

                                <label for="motsep_emp_ant2" class="form-label"><br></label>
                                <input type="text" class="form-control" id="motsep_emp_ant2" name="sld_motsep_emp_ant2">


                            </div>

                            <div class="col-md-2">

                                <label for="motsep_emp_ant3" class="form-label"><br></label>
                                <input type="text" class="form-control" id="motsep_emp_ant3" name="sld_motsep_emp_ant3">
                            </div>

                        </div>




                        <div class="row">

                            <div class="col-md-2">

                                <label for="padre" class="form-label"><br>Nombre de su jefe directo</label>

                            </div>



                            <div class="col-md-3">

                                <label for="nomjef_emp_actual" class="form-label"><br></label>
                                <input type="text" class="form-control" id="nomjef_emp_actual" name="sld_nomjef_emp_actual">
                            </div>


                            <div class="col-md-3">

                                <label for="nomjef_emp_ant1" class="form-label"><br></label>
                                <input type="text" class="form-control" id="nomjef_emp_ant1" name="sld_nomjef_emp_ant1">


                            </div>

                            <div class="col-md-2">

                                <label for="nomjef_emp_ant2" class="form-label"><br></label>
                                <input type="text" class="form-control" id="nomjef_emp_ant2" name="sld_nomjef_emp_ant2">


                            </div>

                            <div class="col-md-2">

                                <label for="nomjef_emp_ant3" class="form-label"><br></label>
                                <input type="text" class="form-control" id="nomjef_emp_ant3" name="sld_nomjef_emp_ant3">
                            </div>

                        </div>




                        <div class="row">

                            <div class="col-md-2">

                                <label for="padre" class="form-label"><br>Puesto de su jefe directo</label>

                            </div>



                            <div class="col-md-3">

                                <label for="puestojef_emp_actual" class="form-label"><br></label>
                                <input type="text" class="form-control" id="puestojef_emp_actual" name="sld_puestojef_emp_actual">
                            </div>


                            <div class="col-md-3">

                                <label for="puestojef_emp_ant1" class="form-label"><br></label>
                                <input type="text" class="form-control" id="puestojef_emp_ant1" name="sld_puestojef_emp_ant1">


                            </div>

                            <div class="col-md-2">

                                <label for="puestojef_emp_ant2" class="form-label"><br></label>
                                <input type="text" class="form-control" id="puestojef_emp_ant2" name="sld_puestojef_emp_ant2">


                            </div>

                            <div class="col-md-2">

                                <label for="puestojef_emp_ant3" class="form-label"><br></label>
                                <input type="text" class="form-control" id="puestojef_emp_ant3" name="sld_puestojef_emp_ant3">
                            </div>

                        </div>




                        <div class="row">

                            <div class="col-md-2">

                                <label for="padre" class="form-label"><br>Podriamos solicitar informacion sobre
                                    usted</label>

                            </div>



                            <div class="col-md-1">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <br><input type="radio" id="soli_info" name="sld_soli_info" class="custom-control-input" value="si_se_puede_solicitar_info">
                                    <label class="custom-control-label" for="soli_info">Si</label>
                                </div>
                            </div>


                            <div class="col-md-1">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <br>
                                    <input type="radio" id="soli_info" name="sld_soli_info" class="custom-control-input" value="no_se_puede_solicitar_info">
                                    <label class="custom-control-label" for="soli_info">No</label>
                                </div>
                            </div>


                            <div class="col-md-8">

                                <label for="por_que_info" class="form-label">¿Por qué?</label>
                                <input type="text" class="form-control" id="por_que_info" name="sld_por_que_info">


                            </div>
                        </div>
                    </div>
                </div>
            </div>












            <div class="row">
                <div class="col-12 mb-3">
                    <div class="card border-primary bg-light p-3">
                        <div class="card-header text-center">
                            REFERENCIAS PERSONALES
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <label for="personal" class="form-label required">Nombre</label>
                            </div>

                            <div class="col-md-3">
                                <label for="personal" class="form-label required">Dirección</label>
                            </div>

                            <div class="col-md-2">
                                <label for="personal" class="form-label required">Télefono</label>
                            </div>

                            <div class="col-md-2">
                                <label for="personal" class="form-label required">Ocupacion</label>
                            </div>

                            <div class="col-md-2">
                                <label for="personal" class="form-label required">Tiempo de conocerlo</label>
                            </div>


                        </div>





                        <div class="row">
                            <div class=" col-md-3">

                                <input type="text" class="form-control" id="nom_ref1" name="sld_nom_ref1">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="dir_ref1" name="sld_dir_ref1">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="tel_ref1" name="sld_tel_ref1">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="ocup_ref1" name="sld_ocup_ref1">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="tiempocono_ref1" name="sld_tiempocono_ref1">
                            </div>

                        </div>



                        <div class="row">
                            <div class=" col-md-3">
                                <label></label>
                                <input type="text" class="form-control" id="nom_ref2" name="sld_nom_ref2">
                            </div>
                            <div class="col-md-3">
                                <label></label>
                                <input type="text" class="form-control" id="dir_ref2" name="sld_dir_ref2">
                            </div>
                            <div class="col-md-2">
                                <label></label>
                                <input type="text" class="form-control" id="tel_ref2" name="sld_tel_ref2">
                            </div>
                            <div class="col-md-2">
                                <label></label>
                                <input type="text" class="form-control" id="ocup_ref2" name="sld_ocup_ref2">
                            </div>
                            <div class="col-md-2">
                                <label></label>
                                <input type="text" class="form-control" id="tiempocono_ref2" name="sld_tiempocono_ref2">
                            </div>

                        </div>





                        <div class="row">
                            <div class=" col-md-3">
                                <label></label>
                                <input type="text" class="form-control" id="nom_ref3" name="sld_nom_ref3">
                            </div>
                            <div class="col-md-3">
                                <label></label>
                                <input type="text" class="form-control" id="dir_ref3" name="sld_dir_ref3">
                            </div>
                            <div class="col-md-2">
                                <label></label>
                                <input type="text" class="form-control" id="tel_ref3" name="sld_tel_ref3">
                            </div>
                            <div class="col-md-2">
                                <label></label>
                                <input type="text" class="form-control" id="ocup_ref3" name="sld_ocup_ref3">
                            </div>
                            <div class="col-md-2">
                                <label></label>
                                <input type="text" class="form-control" id="tiempocono_ref3" name="sld_tiempocono_ref3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-6 mb-3">
                    <div class="card border-primary bg-light p-3" style="height:620px;">
                        <div class="card-header text-center">
                            DATOS GENERALES
                        </div>

                        <div class="row">

                            <label for="comoseentero" class="form-label required">¿Como se entero de este empleo?</label>

                        </div>


                        <div class="row">

                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="como_se_entero" name="sld_como_se_entero_rb" class="custom-control-input" value="se_entero_anuncio">
                                    <label class="custom-control-label" for="como_se_entero">Anuncio</label>
                                </div>
                            </div>


                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="como_se_entero" name="sld_como_se_entero_rb" class="custom-control-input" value="se_entero_otromedio">
                                    <label class="custom-control-label" for="como_se_entero">Otro medio</label>
                                </div>
                            </div>



                            <div class=" col-md-8">
                                <input class="form-control inline" type="text" name="sld_como_se_entero" id="comoseentero" placeholder="Anotelo">

                            </div>

                        </div>



                        <div class="row">
                            <label for="algunpariente" class="form-label required">¿Algun pariente trabaja en esta
                                empresa?</label>
                        </div>

                        <div class="row">

                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="pariente_en_la_empresa" name="sld_pariente_en_la_empresa" class="custom-control-input" value="no_parientes_en_la_empresa">
                                    <label class="custom-control-label" for="pariente_en_la_empresa">No</label>
                                </div>
                            </div>


                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="pariente_en_la_empresa" name="sld_pariente_en_la_empresa" class="custom-control-input" value="si_parientes_en_la_empresa">
                                    <label class="custom-control-label" for="pariente_en_la_empresa">Si</label>
                                </div>
                            </div>


                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nombre_pariente_empresa" name="sld_nombre_pariente_empresa" placeholder="Nombrelo">
                            </div>
                        </div>



                        <div class="row">
                            <label for="afianzado" class="form-label required">¿Ha sido afianzado?</label>
                        </div>

                        <div class="row">


                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="afianzado" name="sld_afianzado" class="custom-control-input" value="no_afianzado">
                                    <label class="custom-control-label" for="afianzado">No</label>
                                </div>
                            </div>


                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="afianzado" name="sld_afianzado" class="custom-control-input" value="si_afianzado">
                                    <label class="custom-control-label" for="afianzado">Si</label>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <input type="text" class="form-control" id="afianzado" name="sld_nombre_cia" placeholder="Nombre de la Cia">
                            </div>
                        </div>



                        <div class="row">
                            <label for="sindicato" class="form-label required">¿Ha estado afiliado a algún sindicato?</label>
                        </div>

                        <div class="row">


                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="sindicato" name="sld_sindicato" class="custom-control-input" value="no_sindicato">
                                    <label class="custom-control-label" for="sindicato">No</label>
                                </div>
                            </div>


                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="sindicato" name="sld_sindicato" class="custom-control-input" value="si_sindicato">
                                    <label class="custom-control-label" for="sindicato">Si</label>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nombre_sindicato" name="sld_nombre_sindicato" placeholder="¿A cuál?">
                            </div>
                        </div>


                        <div class="row">
                            <label for="segurovida" class="form-label required">¿Tiene seguro de vida?</label>
                        </div>

                        <div class="row">


                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="segurovida" name="sld_segurovida" class="custom-control-input" value="no_segurovida">
                                    <label class="custom-control-label" for="segurovida">No</label>
                                </div>
                            </div>


                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="segurovida" name="sld_segurovida" class="custom-control-input" value="si_segurovida">
                                    <label class="custom-control-label" for="segurovida">Si</label>
                                </div>
                            </div>


                            <div class="col-md-5">
                                <input type="text" class="form-control" id="segurovida_cia" name="sld_segurovida_cia" placeholder="Nombre de la Cia">
                            </div>

                            <div class="col-md-3">
                                <input type="text" class="form-control" id="segurovida_suma" name="sld_segurovida_suma" placeholder="Suma asegurada">
                            </div>

                        </div>


                        <div class="row">
                            <label for="podriaviajar" class="form-label required">¿Podria viajar?</label>
                        </div>

                        <div class="row">

                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="podria_viajar" name="sld_podria_viajar" class="custom-control-input" value="si_podria_viajar">
                                    <label class="custom-control-label" for="podria_viajar">Si</label>
                                </div>
                            </div>


                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="podria_viajar" name="sld_podria_viajar" class="custom-control-input" value="no_podria_viajar">
                                    <label class="custom-control-label" for="podria_viajar">No</label>
                                </div>
                            </div>


                            <div class="col-md-8">
                                <input type="text" class="form-control" id="podria_viajar_razones" name="sld_podria_viajar_razones" placeholder="Razones">
                            </div>
                        </div>


                        <div class="row">
                            <label for="cambiarresidencia" class="form-label required">¿Estaria dispuesto a cambiar su lugar
                                de residencia?</label>
                        </div>

                        <div class="row">

                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="dispuesto_cambiar_residencia" name="sld_dispuesto_cambiar_residencia" class="custom-control-input" value="si_dispuesto_cambiar_residencia">
                                    <label class="custom-control-label" for="dispuesto_cambiar_residencia">Si</label>
                                </div>
                            </div>


                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="dispuesto_cambiar_residencia" name="sld_dispuesto_cambiar_residencia" class="custom-control-input" value="no_dispuesto_cambiar_residencia">
                                    <label class="custom-control-label" for="dispuesto_cambiar_residencia">No</label>
                                </div>
                            </div>


                            <div class="col-md-8">
                                <input type="text" class="form-control" id="cambiarresidenciarazones" name="sld_cambiar_residencia_razones" placeholder="Razones">
                            </div>

                        </div>



                        <br>
                        <div class="row">

                            <div class="col-md-4">
                                <label for="fechacomenzar" class="form-label required">¿En que fecha podría presentarse a
                                    trabajar?</label>
                            </div>
                            <div class="col-md-8">

                                <input type="date" class="form-control" id="fechacomenzar" name="sld_fechacomenzar">
                            </div>

                        </div>
                    </div>







                </div>






                <div class="col-6 mb-3">
                    <div class="card border-primary bg-light p-3 " style="height:620px;">
                        <div class="card-header text-center">
                            DATOS ECONIMICOS
                        </div>

                        <div class="row">

                            <label for="comoseentero" class="form-label required">¿Tiene usted otros ingresos?</label>

                        </div>


                        <div class="row">

                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="otros_ingresos" name="sld_otros_ingresos" class="custom-control-input" value="no_otros_ingresos">
                                    <label class="custom-control-label" for="otros_ingresos">No</label>
                                </div>
                            </div>


                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="otros_ingresos" name="sld_otros_ingresos" class="custom-control-input" value="si_otros_ingresos">
                                    <label class="custom-control-label" for="otros_ingresos">Si</label>
                                </div>
                            </div>



                            <div class=" col-md-8">
                                <input class="form-control inline" type="text" name="sld_otro_ingreso_import" id="comoseentero" placeholder="Importe mensual en pesos mexicanos">

                            </div>

                        </div>



                        <div class="row">
                            <label for="algunpariente" class="form-label  required">¿Su conyugue trabaja?</label>
                        </div>

                        <div class="row">

                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="conyugue_trabaja" name="sld_conyugue_trabaja" class="custom-control-input" value="conyugue_no_trabaja">
                                    <label class="custom-control-label" for="conyugue_trabaja">No</label>
                                </div>
                            </div>


                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="conyugue_trabaja" name="sld_conyugue_trabaja" class="custom-control-input" value="conyugue_si_trabaja">
                                    <label class="custom-control-label" for="conyugue_trabaja">Si</label>
                                </div>
                            </div>


                            <div class="col-md-5">
                                <input type="text" class="form-control" id="lugar_trabajo_conyug" name="sld_dondetrabaja_conyug" placeholder="¿donde?">
                            </div>


                            <div class="col-md-3">
                                <input type="text" class="form-control" id="percepcion_trabajo_conyug" name="sld_percepcion_conyug" placeholder="Percepción mensual">
                            </div>
                        </div>



                        <div class="row">
                            <label for="casapropia" class="form-label required">¿Vive en casa propia?</label>
                        </div>

                        <div class="row">


                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="casapropia" name="sld_casapropia" class="custom-control-input" value="no_casapropia">
                                    <label class="custom-control-label" for="casapropia">No</label>
                                </div>
                            </div>


                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="casapropia" name="sld_casapropia" class="custom-control-input" value="si_casapropia">
                                    <label class="custom-control-label" for="casapropia">Si</label>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <input type="text" class="form-control" id="casapropia" name="sld_donde_casa_propia" placeholder="¿donde?">
                            </div>

                            <div class="col-md-3">
                                <input type="text" class="form-control" id="casapropia" name="sld_valor_casa_propia" placeholder="Valor aproximado">
                            </div>
                        </div>



                        <div class="row">
                            <label for="renta" class="form-label required">¿Paga renta?</label>
                        </div>

                        <div class="row">


                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="paga_renta" name="sld_paga_renta" class="custom-control-input" value="no_paga_renta">
                                    <label class="custom-control-label" for="paga_renta">No</label>
                                </div>
                            </div>


                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="paga_renta" name="sld_paga_renta" class="custom-control-input" value="si_paga_renta">
                                    <label class="custom-control-label" for="paga_renta">Si</label>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nombre_paga_renta" name="sld_importe_mensu_renta" placeholder="Renta Mensual">
                            </div>
                        </div>


                        <div class="row">
                            <label for="automovilpropio" class="form-label">¿Posee automovil propio?</label>
                        </div>

                        <div class="row">


                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="automovilpropio" name="sld_automovilpropio" class="custom-control-input" value="no_automovilpropio">
                                    <label class="custom-control-label" for="automovilpropio">No</label>
                                </div>
                            </div>


                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="automovilpropio" name="sld_automovilpropio" class="custom-control-input" value="si_automovilpropio">
                                    <label class="custom-control-label" for="automovilpropio">Si</label>
                                </div>
                            </div>


                            <div class="col-md-5">
                                <input type="text" class="form-control" id="automovilpropio_marca" name="sld_automovilpropio_marca" placeholder="Marca">
                            </div>

                            <div class="col-md-3">
                                <input type="text" class="form-control" id="automovilpropio_modelo" name="sld_automovilpropio_modelo" placeholder="Modelo">
                            </div>

                        </div>


                        <div class="row">
                            <label for="deudas" class="form-label required">¿Tiene deudas</label>
                        </div>

                        <div class="row">

                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="deudas" name="sld_deudas" class="custom-control-input" value="no_deudas">
                                    <label class="custom-control-label" for="deudas">No</label>
                                </div>
                            </div>


                            <div class="col-md-2">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="deudas" name="sld_deudas" class="custom-control-input" value="si_deudas">
                                    <label class="custom-control-label" for="deudas">Si</label>
                                </div>
                            </div>


                            <div class="col-md-8">
                                <input type="text" class="form-control" id="deudas_importe" name="sld_deudas_importe" placeholder="Importe en pesos mexicanos">
                            </div>
                        </div>


                        <div class="row">
                            <label for="abono_deuda" class="form-label required">¿Cuanto abonas mensualmente?</label>
                        </div>

                        <div class="row">

                            <div class="col-md-8">
                                <input type="text" class="form-control" id="abono_deuda" name="sld_abono_mensual_deudas" placeholder="Importe mensual en pesos mexicanos">
                            </div>

                        </div>



                        <div class="row">
                            <label for="gastos_men" class="form-label required">¿A cuanto ascienden sus gastos mensuales?</label>
                        </div>

                        <div class="row">

                            <div class="col-md-8">
                                <input type="text" class="form-control" id="gastos_men" name="sld_gasto_mensual" placeholder="Importe mensual en pesos mexicanos">
                            </div>

                        </div>
                        <br>

                    </div>

                </div>

            </div>



            <div class="mb-3 for-check">
                <div class="form-check">
                    <input class="form-check-input " type="checkbox" value="Respuestas_confirmacion" id="flexCheckDefault" required>
                    <label for="constar" class="form-check-label required">Hago constar que mis respuestas son
                        verdaderas</label>
                </div>
            </div>




            <button type="submit" name="btnEnviarSolicitud" class="btn btn-primary btn-lg">Confirmar</button>

            <?php
            $procesa_solicitud = new SolicitudControlador();
            $procesa_solicitud->ctrNuevaSolicitudEmp();

            ?>
<!--         
            
                if(!document.querySelector('input[name="sld_sexo"]:checked')) {
                alert('Error, rellena el campo Genero');
                hasError = true;
                }


                if(!document.querySelector('input[name="sld_nacionalidad"]:checked')) {
                alert('Error, rellena el campo Nacionalidad');
                hasError = true;
                }

                if(!document.querySelector('input[name="sld_vive_con"]:checked')) {
                alert('Error, rellena el campo Vive con');
                hasError = true;
                }

                if(!document.querySelector('input[name="sld_estado_civil"]:checked')) {
                alert('Error, rellena el campo Estado Civil');
                hasError = true;
                }

                if(!document.querySelector('input[name="sld_licencia"]:checked')) {
                alert('Error, rellena el campo Licencia');
                hasError = true;
                }

                if(!document.querySelector('input[name="sld_salud_estado"]:checked')) {
                alert('Error, rellena el campo Estado de Salud');
                hasError = true;
                }

                if(!document.querySelector('input[name="sld_enf_cronica"]:checked')) {
                alert('Error, rellena el campo ¿Padece alguna enfermedad cronica?');
                hasError = true;
                }

                if(!document.querySelector('input[name="sld_est_vida_padre"]:checked')) {
                alert('Error, rellena el campo requerido');
                hasError = true;
                }

                if(!document.querySelector('input[name="sld_est_vida_madre"]:checked')) {
                alert('Error, rellena el campo requerido');
                hasError = true;
                }
                
                if(!document.querySelector('input[name="sld_est_vida_espos"]:checked')) {
                alert('Error, rellena el campo requerido');
                hasError = true;
                }

                if(!document.querySelector('input[name="sld_soli_info"]:checked')) {
                alert('Error, rellena el campo requerido');
                hasError = true;
                }

                if(!document.querySelector('input[name="sld_como_se_entero_rb"]:checked')) {
                alert('Error, rellena el campo requerido');
                hasError = true;
                }

                 if(!document.querySelector('input[name="sld_sexo"]:checked')) {
                 alert('Error, rellena el campo Genero');
                 hasError = true;
                 }

                 if(!document.querySelector('input[name="sld_sexo"]:checked')) {
                 alert('Error, rellena el campo Genero');
                 hasError = true;
                 }

                 if(!document.querySelector('input[name="sld_sexo"]:checked')) {
                 alert('Error, rellena el campo Genero');
                 hasError = true;
                 }

                 if(!document.querySelector('input[name="sld_sexo"]:checked')) {
                 alert('Error, rellena el campo Genero');
                 hasError = true;
                 }

                 if(hasError) event.preventDefault(); -->
           
            

        </form>


    </div><br>




    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>