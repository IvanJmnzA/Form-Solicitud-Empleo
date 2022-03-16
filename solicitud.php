<?php

//require('config.php');
//---------------SOLICITUD DE EMPLEO--------------------
$sld_fechasolicitud = $_POST['sld_fechasolicitud'];
$sld_puestosolicitud = $_POST['sld_puestosolicitud'];
$sld_sueldodeseado = $_POST['sld_sueldodeseado'];
$sld_fotosolicitante = $_POST['sld_fotosolicitante'];


$sld_sol_empleo_array = array(
  "fecha_de_solicitud" => $sld_fechasolicitud,
  "puesto_solicitado" => $sld_puestosolicitud,
  "sueldo_deseado" => $sld_sueldodeseado,
  "foto_solicitante" => $sld_fotosolicitante
);

$solicitud_empleo_json = json_encode($sld_sol_empleo_array, true);

// SolicitudControlador




// -----------------DATOS PERSONALES------------------------------------
$sld_apellidoPsolicitante = $_POST['sld_apellidoPsolicitante'];
$sld_apellidoMsolicitante = $_POST['sld_apellidoMsolicitante'];
$sld_nombressolicitante = $_POST['sld_nombressolicitante'];
$sld_edadsolicitante = $_POST['sld_edadsolicitante'];
$sld_direccionsolicitante = $_POST['sld_direccionsolicitante'];
$sld_coloniasolicitante = $_POST['sld_coloniasolicitante'];
$sld_codigopsolicitante = $_POST['sld_codigopsolicitante'];
$sld_telsolicitante = $_POST['sld_telsolicitante'];
//radio button-----------------
$sld_sexo = $_POST['sld_sexo'];
//-----------------------------
$sld_lugarnacim = $_POST['sld_lugarnacim'];
$sld_fechanacim = $_POST['sld_fechanacim'];
//radio button-----------------
$sld_nacionalidad = $_POST['sld_nacionalidad'];
$sld_vive_con = $_POST['sld_vive_con'];
$sld_estado_civil = $_POST['sld_estado_civil'];

//----------------------------

//personas que dependen del solicitante
$sld_hijos_dependientes = $_POST['sld_hijos_depen'];
$sld_conyuge_dependientes = $_POST['sld_conyuge_depen'];
$sld_padres_depen = $_POST['sld_padres_depen'];
$sld_otros_depen = $_POST['sld_otros_depen'];
$sld_estatura = $_POST['sld_estatura'];
$sld_peso = $_POST['sld_peso'];



$sld_datos_personales_array = array(
  "apellidoPsolicitante" => $sld_apellidoPsolicitante,
  "apellidoMsolicitante" => $sld_apellidoMsolicitante,
  "nombressolicitante" => $sld_nombressolicitante,
  "edadsolicitante" => $sld_edadsolicitante,
  "direccionsolicitante" => $sld_direccionsolicitante,
  "coloniasolicitante" => $sld_coloniasolicitante,
  "codigopsolicitante" => $sld_codigopsolicitante,
  "telsolicitante" => $sld_telsolicitante,
  "sexo" => $sld_sexo,
  "lugarnacim" => $sld_lugarnacim,
  "fechanacim" => $sld_fechanacim,
  "nacionalidad" => $sld_nacionalidad,
  "vive_con" => $sld_vive_con,
  "estado_civil" => $sld_estado_civil,
  "sld_hijos_dependientes" => $sld_hijos_dependientes,
  "sld_conyuge_dependientes" => $sld_conyuge_dependientes,
  "sld_padres_depen" => $sld_padres_depen,
  "sld_otros_depen" => $sld_otros_depen,
  "sld_estatura" => $sld_estatura,
  "sld_peso" => $sld_peso
);

$datos_personales_json = json_encode($sld_datos_personales_array, true);





//-------------------------DOCUMENTACION-----------------------

$sld_curp = $_POST['sld_curp'];
$sld_afore = $_POST['sld_afore'];
$sld_rfc = $_POST['sld_rfc'];
$sld_nseguro = $_POST['sld_nseguro'];
$sld_cartmil = $_POST['sld_cartmil'];
$sld_pasaport = $_POST['sld_pasaport'];
$sld_licencia = $_POST['sld_licencia'];

$sld_documentacion_array = array(
  "curp_solicitante" => $sld_curp,
  "afore_solicitante" => $sld_afore,
  "rfc_solicitante" => $sld_rfc,
  "nseguro_social_solicitante" => $sld_nseguro,
  "cartilla_militar" => $sld_cartmil,
  "pasaporte_solicitante" => $sld_pasaport,
  "licencia_solicitante" => $sld_licencia
);
$datos_documentacion_json = json_encode($sld_documentacion_array, true);





//------------ESTADO DE SALUD Y HABITOS------------
//radiob 
$sld_salud_estado = $_POST['sld_salud_estado'];
$sld_enf_cronica = $_POST['sld_enf_cronica'];
$sld_croni_cual = $_POST['sld_croni_cual'];
$sld_deporte = $_POST['sld_deporte'];
$sld_club = $_POST['sld_club'];
$sld_pasatiempo = $_POST['sld_pasatiempo'];
$sld_metavida = $_POST['sld_metavida'];

$sld_estado_salud_habit_array = array(
  "salud_estado_solicitante" => $sld_salud_estado,
  "enf_cronica_solicitante" => $sld_enf_cronica,
  "croni_cual_solicitante" => $sld_croni_cual,
  "deporte_solicitante" => $sld_deporte,
  "club_solicitante" => $sld_club,
  "pasatiempo_solicitante" => $sld_pasatiempo,
  "metavida_solicitante" => $sld_metavida
);
$datos_salud_habit_json = json_encode($sld_estado_salud_habit_array, true);









//-------DATOS FAMILIARES----------------
$sld_nom_padre = $_POST['sld_nom_padre'];
$sld_est_vida_padre = $_POST['sld_est_vida_padre'];
$sld_dir_padre = $_POST['sld_dir_padre'];
$ocup_padre = $_POST['sld_ocup_padre'];


$sld_nom_madre = $_POST['sld_nom_madre'];
$sld_est_vida_madre = $_POST['sld_est_vida_madre'];
$sld_dir_madre = $_POST['sld_dir_madre'];
$sld_ocup_madre = $_POST['sld_ocup_madre'];


$sld_nom_espos = $_POST['sld_nom_espos'];
$sld_est_vida_espos = $_POST['sld_est_vida_espos'];
$sld_dir_espos = $_POST['sld_dir_espos'];
$sld_ocup_espos = $_POST['sld_ocup_espos'];

$sld_nom_hijos = $_POST['sld_nom_hijos'];

$sld_datos_familiares_array = array(
  "sld_nom_padre" => $sld_nom_padre,
  "sld_est_vida_padre" => $sld_est_vida_padre,
  "sld_dir_padre" => $sld_dir_padre,
  "ocup_padre" => $ocup_padre,

  "sld_nom_madre" => $sld_nom_madre,
  "sld_est_vida_madre" => $sld_est_vida_madre,
  "sld_dir_madre" => $sld_dir_madre,
  "sld_ocup_madre" => $sld_ocup_madre,

  "sld_nom_espos" => $sld_nom_espos,
  "sld_est_vida_espos" => $sld_est_vida_espos,
  "sld_dir_espos" => $sld_dir_espos,
  "sld_ocup_espos" => $sld_ocup_espos,

  "sld_nom_hijos" => $sld_nom_hijos
);

$datos_familiares_json = json_encode($sld_datos_familiares_array, true);














//-------------ESCOLARIDAD-------------------
$sld_nom_primaria = $_POST['sld_nom_primaria'];
$sld_dir_primaria = $_POST['sld_dir_primaria'];
$sld_finicio_primaria = $_POST['sld_finicio_primaria'];
$sld_ffinal_primaria = $_POST['sld_ffinal_primaria'];
$sld_anos_primaria = $_POST['sld_anos_primaria'];
$sld_titulo_primaria = $_POST['sld_titulo_primaria'];


$sld_nom_secundaria = $_POST['sld_nom_secundaria'];
$sld_dir_secundaria = $_POST['sld_dir_secundaria'];
$sld_finicio_secundaria = $_POST['sld_finicio_secundaria'];
$sld_ffinal_secundaria = $_POST['sld_ffinal_secundaria'];
$sld_anos_secundaria = $_POST['sld_anos_secundaria'];
$sld_titulo_secundaria = $_POST['sld_titulo_secundaria'];


$sld_nom_preparatoria = $_POST['sld_nom_preparatoria'];
$sld_dir_preparatoria = $_POST['sld_dir_preparatoria'];
$sld_finicio_preparatoria = $_POST['sld_finicio_preparatoria'];
$sld_ffinal_secundaria = $_POST['sld_ffinal_secundaria'];
$sld_anos_preparatoria = $_POST['sld_anos_preparatoria'];
$sld_titulo_preparatoria = $_POST['sld_titulo_preparatoria'];


$sld_nom_profesional = $_POST['sld_nom_profesional'];
$sld_dir_profesional = $_POST['sld_dir_profesional'];
$sld_finicio_profesional = $_POST['sld_finicio_profesional'];
$sld_ffinal_profesional = $_POST['sld_ffinal_profesional'];
$sld_anos_profesional = $_POST['sld_anos_profesional'];
$sld_titulo_profesional = $_POST['sld_titulo_profesional'];


$sld_nom_comercial = $_POST['sld_nom_comercial'];
$sld_dir_comercial = $_POST['sld_dir_comercial'];
$sld_finicio_comercial = $_POST['sld_finicio_comercial'];
$sld_ffinal_comercial = $_POST['sld_ffinal_comercial'];
$sld_anos_comercial = $_POST['sld_anos_comercial'];
$sld_titulo_comercial = $_POST['sld_titulo_comercial'];


$sld_nom_esc_actual = $_POST['sld_nom_esc_actual'];
$sld_esc_actual_horario = $_POST['sld_esc_actual_horario'];
$sld_esc_actual_carrera = $_POST['sld_esc_actual_carrera'];
$sld_esc_actual_grado = $_POST['sld_esc_actual_grado'];


$sld_datos_escolares_array = array(
  "sld_nom_primaria" => $sld_nom_primaria,
  "sld_dir_primaria" => $sld_dir_primaria,
  "sld_finicio_primaria" => $sld_finicio_primaria,
  "sld_ffinal_primaria" => $sld_ffinal_primaria,
  "sld_anos_primaria" => $sld_anos_primaria,
  "sld_titulo_primaria" => $sld_titulo_primaria,

  "sld_nom_secundaria" => $sld_nom_secundaria,
  "sld_dir_secundaria" => $sld_dir_secundaria,
  "sld_finicio_secundaria" => $sld_finicio_secundaria,
  "sld_ffinal_secundaria" => $sld_ffinal_secundaria,
  "sld_anos_secundaria" => $sld_anos_secundaria,
  "sld_titulo_secundaria" => $sld_titulo_secundaria,


  "sld_nom_preparatoria" => $sld_nom_preparatoria,
  "sld_dir_preparatoria" => $sld_dir_preparatoria,
  "sld_finicio_preparatoria" => $sld_finicio_preparatoria,
  "sld_ffinal_secundaria" => $sld_ffinal_secundaria,
  "sld_anos_preparatoria" => $sld_anos_preparatoria,
  "sld_titulo_preparatoria" => $sld_titulo_preparatoria,

  "sld_nom_profesional" => $sld_nom_profesional,
  "sld_dir_profesional" => $sld_dir_profesional,
  "sld_finicio_profesional" => $sld_finicio_profesional,
  "sld_ffinal_profesional" => $sld_ffinal_profesional,
  "sld_anos_profesional" => $sld_anos_profesional,
  "sld_titulo_profesional" => $sld_titulo_profesional,

  "sld_nom_comercial" => $sld_nom_comercial,
  "sld_dir_comercial" => $sld_dir_comercial,
  "sld_finicio_comercial" => $sld_finicio_comercial,
  "sld_ffinal_comercial" => $sld_ffinal_comercial,
  "sld_anos_comercial" => $sld_anos_comercial,
  "sld_titulo_comercial" => $sld_titulo_comercial,

  "sld_nom_esc_actual" => $sld_nom_esc_actual,
  "sld_esc_actual_horario" => $sld_esc_actual_horario,
  "sld_esc_actual_carrera" => $sld_esc_actual_carrera,
  "sld_esc_actual_grado" => $sld_esc_actual_grado,

);

$datos_escolares_json = json_encode($sld_datos_escolares_array, true);









//-----CONOCIMIENTOS GENERALES------------------------
$sld_idiom_domina = $_POST['sld_idiom_domina'];
$sld_funofic_domina = $_POST['sld_funofic_domina'];
$sld_maq_ofi_domina = $_POST['sld_maq_ofi_domina'];
$sld_soft_domina = $_POST['sld_soft_domina'];
$sld_otras_fun_domina = $_POST['sld_otras_fun_domina'];


$sld_conocimientos_generales_array = array(
  "sld_idiom_domina" => $sld_idiom_domina,
  "sld_funofic_domina" => $sld_funofic_domina,
  "sld_maq_ofi_domina" => $sld_maq_ofi_domina,
  "sld_soft_domina" => $sld_soft_domina,
  "sld_otras_fun_domina" => $sld_otras_fun_domina,
);

$datos_conocimientos_generales_json = json_encode($sld_conocimientos_generales_array, true);











//---------EMPLEO ACTUAL Y ANTERIORES------------------------------
$sld_t_emp_actual = $_POST['sld_t_emp_actual'];
$sld_nom_emp_actual = $_POST['sld_nom_emp_actual'];
$sld_dir_emp_actual = $_POST['sld_dir_emp_actual'];
$sld_tel_emp_actual = $_POST['sld_tel_emp_actual'];
$sld_puesto_emp_actual = $_POST['sld_puesto_emp_actual'];
$sld_sueldo_ini_emp_actual = $_POST['sld_sueldo_ini_emp_actual'];
$sld_sueldo_fin_emp_actual = $_POST['sld_sueldo_fin_emp_actual'];
$sld_motsep_emp_actual = $_POST['sld_motsep_emp_actual'];
$sld_nomjef_emp_actual = $_POST['sld_nomjef_emp_actual'];
$sld_puestojef_emp_actual = $_POST['sld_puestojef_emp_actual'];


$sld_t_emp_ant1 = $_POST['sld_t_emp_ant1'];
$sld_nom_emp_ant1 = $_POST['sld_nom_emp_ant1'];
$sld_dir_emp_ant1 = $_POST['sld_dir_emp_ant1'];
$sld_tel_emp_ant1 = $_POST['sld_tel_emp_ant1'];
$sld_puesto_emp_ant1 = $_POST['sld_puesto_emp_ant1'];
$sld_sueldo_ini_emp_ant1 = $_POST['sld_sueldo_ini_emp_ant1'];
$sld_sueldo_fin_emp_ant1 = $_POST['sld_sueldo_fin_emp_ant1'];
$sld_motsep_emp_ant1 = $_POST['sld_motsep_emp_ant1'];
$sld_nomjef_emp_ant1 = $_POST['sld_nomjef_emp_ant1'];
$sld_puestojef_emp_ant1 = $_POST['sld_puestojef_emp_ant1'];



$sld_t_emp_ant2 = $_POST['sld_t_emp_ant2'];
$sld_nom_emp_ant2 = $_POST['sld_nom_emp_ant2'];
$sld_dir_emp_ant2 = $_POST['sld_dir_emp_ant2'];
$sld_tel_emp_ant2 = $_POST['sld_tel_emp_ant2'];
$sld_puesto_emp_ant2 = $_POST['sld_puesto_emp_ant2'];
$sld_sueldo_ini_emp_ant2 = $_POST['sld_sueldo_ini_emp_ant2'];
$sld_sueldo_fin_emp_ant2 = $_POST['sld_sueldo_fin_emp_ant2'];
$sld_motsep_emp_ant2 = $_POST['sld_motsep_emp_ant2'];
$sld_nomjef_emp_ant2 = $_POST['sld_nomjef_emp_ant2'];
$sld_puestojef_emp_ant2 = $_POST['sld_puestojef_emp_ant2'];


$sld_t_emp_ant3 = $_POST['sld_t_emp_ant3'];
$sld_nom_emp_ant3 = $_POST['sld_nom_emp_ant3'];
$sld_dir_emp_ant3 = $_POST['sld_dir_emp_ant3'];
$sld_tel_emp_ant3 = $_POST['sld_tel_emp_ant3'];
$sld_puesto_emp_ant3 = $_POST['sld_puesto_emp_ant3'];
$sld_sueldo_ini_emp_ant3 = $_POST['sld_sueldo_ini_emp_ant3'];
$sld_sueldo_fin_emp_ant3 = $_POST['sld_sueldo_fin_emp_ant3'];
$sld_motsep_emp_ant3 = $_POST['sld_motsep_emp_ant3'];
$sld_nomjef_emp_ant3 = $_POST['sld_nomjef_emp_ant3'];
$sld_puestojef_emp_ant3 = $_POST['sld_puestojef_emp_ant3'];



$sld_soli_info = $_POST['sld_soli_info'];
$sld_por_que_info = $_POST['sld_por_que_info'];

$sld_emp_act_ant_array = array(


  "sld_t_emp_actual" => $sld_t_emp_actual,
  "sld_nom_emp_actual" => $sld_nom_emp_actual,
  "sld_dir_emp_actual" => $sld_dir_emp_actual,
  "sld_tel_emp_actual" => $sld_tel_emp_actual,
  "sld_puesto_emp_actual" => $sld_puesto_emp_actual,
  "sld_sueldo_ini_emp_actual" => $sld_sueldo_ini_emp_actual,
  "sld_sueldo_fin_emp_actual" => $sld_sueldo_fin_emp_actual,
  "sld_motsep_emp_actual" => $sld_motsep_emp_actual,
  "sld_nomjef_emp_actual" => $sld_nomjef_emp_actual,
  "sld_puestojef_emp_actual" => $sld_puestojef_emp_actual,


  "sld_t_emp_ant1" => $sld_t_emp_ant1,
  "sld_nom_emp_ant1" => $sld_nom_emp_ant1,
  "sld_dir_emp_ant1" => $sld_dir_emp_ant1,
  "sld_tel_emp_ant1" => $sld_tel_emp_ant1,
  "sld_puesto_emp_ant1" => $sld_puesto_emp_ant1,
  "sld_sueldo_ini_emp_ant1" => $sld_sueldo_ini_emp_ant1,
  "sld_sueldo_fin_emp_ant1" => $sld_sueldo_fin_emp_ant1,
  "sld_motsep_emp_ant1" => $sld_motsep_emp_ant1,
  "sld_nomjef_emp_ant1" => $sld_nomjef_emp_ant1,
  "sld_puestojef_emp_ant1" => $sld_puestojef_emp_ant1,


  "sld_t_emp_ant2" => $sld_t_emp_ant2,
  "sld_nom_emp_ant2" => $sld_nom_emp_ant2,
  "sld_dir_emp_ant2" => $sld_dir_emp_ant2,
  "sld_tel_emp_ant2" => $sld_tel_emp_ant2,
  "sld_puesto_emp_ant2" => $sld_puesto_emp_ant2,
  "sld_sueldo_ini_emp_ant2" => $sld_sueldo_ini_emp_ant2,
  "sld_sueldo_fin_emp_ant2" => $sld_sueldo_fin_emp_ant2,
  "sld_motsep_emp_ant2" => $sld_motsep_emp_ant2,
  "sld_nomjef_emp_ant2" => $sld_nomjef_emp_ant2,
  "sld_puestojef_emp_ant2" => $sld_puestojef_emp_ant2,



  "sld_t_emp_ant3" => $sld_t_emp_ant3,
  "sld_nom_emp_ant3" => $sld_nom_emp_ant3,
  "sld_dir_emp_ant3" => $sld_dir_emp_ant3,
  "sld_tel_emp_ant3" => $sld_tel_emp_ant3,
  "sld_puesto_emp_ant3" => $sld_puesto_emp_ant3,
  "sld_sueldo_ini_emp_ant3" => $sld_sueldo_ini_emp_ant3,
  "sld_sueldo_fin_emp_ant3" => $sld_sueldo_fin_emp_ant3,
  "sld_motsep_emp_ant3" => $sld_motsep_emp_ant3,
  "sld_nomjef_emp_ant3" => $sld_nomjef_emp_ant3,
  "sld_puestojef_emp_ant3" => $sld_puestojef_emp_ant3,


  "sld_soli_info" => $sld_soli_info,
  "sld_por_que_info" => $sld_por_que_info,

);

$datos_emp_act_ant_json = json_encode($sld_emp_act_ant_array, true);











//-------REFERENCIAS-----------------------------
$sld_nom_ref1 = $_POST['sld_nom_ref1'];
$sld_dir_ref1 = $_POST['sld_dir_ref1'];
$sld_tel_ref1 = $_POST['sld_tel_ref1'];
$sld_ocup_ref1 = $_POST['sld_ocup_ref1'];
$sld_tiempocono_ref1 = $_POST['sld_tiempocono_ref1'];

$sld_nom_ref2 = $_POST['sld_nom_ref2'];
$sld_dir_ref2 = $_POST['sld_dir_ref2'];
$sld_tel_ref2 = $_POST['sld_tel_ref2'];
$sld_ocup_ref2 = $_POST['sld_ocup_ref2'];
$sld_tiempocono_ref2 = $_POST['sld_tiempocono_ref2'];


$sld_nom_ref3 = $_POST['sld_nom_ref3'];
$sld_dir_ref3 = $_POST['sld_dir_ref3'];
$sld_tel_ref3 = $_POST['sld_tel_ref3'];
$sld_ocup_ref3 = $_POST['sld_ocup_ref3'];
$sld_tiempocono_ref3 = $_POST['sld_tiempocono_ref3'];



$sld_referencias_array = array(
  "sld_nom_ref1" => $sld_nom_ref1,
  "sld_dir_ref1" => $sld_dir_ref1,
  "sld_tel_ref1" => $sld_tel_ref1,
  "sld_ocup_ref1" => $sld_ocup_ref1,
  "sld_tiempocono_ref1" => $sld_tiempocono_ref1,


  "sld_nom_ref2" => $sld_nom_ref2,
  "sld_dir_ref2" => $sld_dir_ref2,
  "sld_tel_ref2" => $sld_tel_ref2,
  "sld_ocup_ref2" => $sld_ocup_ref2,
  "sld_tiempocono_ref2" => $sld_tiempocono_ref2,


  "sld_nom_ref3" => $sld_nom_ref3,
  "sld_dir_ref3" => $sld_dir_ref3,
  "sld_tel_ref3" => $sld_tel_ref3,
  "sld_ocup_ref3" => $sld_ocup_ref3,
  "sld_tiempocono_ref3" => $sld_tiempocono_ref3,
);

$datos_referencias_json = json_encode($sld_referencias_array, true);













//-------------DATOS GENERALES------------------------
$sld_como_se_entero_rb = $_POST['sld_como_se_entero_rb'];
$sld_como_se_entero = $_POST['sld_como_se_entero'];
$sld_pariente_en_la_empresa = $_POST['sld_pariente_en_la_empresa'];
$sld_nombre_pariente_empresa = $_POST['sld_nombre_pariente_empresa'];
$sld_afianzado = $_POST['sld_afianzado'];
$sld_nombre_cia = $_POST['sld_nombre_cia'];
$sld_sindicato = $_POST['sld_sindicato'];
$sld_nombre_sindicato = $_POST['sld_nombre_sindicato'];
$sld_segurovida = $_POST['sld_segurovida'];
$sld_segurovida_cia = $_POST['sld_segurovida_cia'];
$sld_segurovida_suma = $_POST['sld_segurovida_suma'];
$sld_podria_viajar = $_POST['sld_podria_viajar'];
$sld_podria_viajar_razones = $_POST['sld_podria_viajar_razones'];
$sld_dispuesto_cambiar_residencia = $_POST['sld_dispuesto_cambiar_residencia'];
$sld_cambiar_residencia_razones = $_POST['sld_cambiar_residencia_razones'];
$sld_fechacomenzar = $_POST['sld_fechacomenzar'];


$sld_datos_generales_array = array(
  "sld_como_se_entero_rb" => $sld_como_se_entero_rb,
  "sld_como_se_entero" => $sld_como_se_entero,
  "sld_pariente_en_la_empresa" => $sld_pariente_en_la_empresa,
  "sld_nombre_pariente_empresa" => $sld_nombre_pariente_empresa,
  "sld_afianzado" => $sld_afianzado,
  "sld_nombre_cia" => $sld_nombre_cia,
  "sld_sindicato" => $sld_sindicato,
  "sld_nombre_sindicato" => $sld_nombre_sindicato,
  "sld_segurovida" => $sld_segurovida,
  "sld_segurovida_cia" => $sld_segurovida_cia,
  "sld_segurovida_suma" => $sld_segurovida_suma,
  "sld_podria_viajar" => $sld_podria_viajar,
  "sld_podria_viajar_razones" => $sld_podria_viajar_razones,
  "sld_dispuesto_cambiar_residencia" => $sld_dispuesto_cambiar_residencia,
  "sld_cambiar_residencia_razones" => $sld_cambiar_residencia_razones,
  "sld_fechacomenzar" => $sld_fechacomenzar,
);

$datos_generales_json = json_encode($sld_datos_generales_array, true);





//-------DATOS ECONOMICOS---------------------------

$sld_otros_ingresos = $_POST['sld_otros_ingresos'];
$sld_otro_ingreso_import = $_POST['sld_otro_ingreso_import'];
$sld_conyugue_trabaja = $_POST['sld_conyugue_trabaja'];
$sld_dondetrabaja_conyug = $_POST['sld_dondetrabaja_conyug'];
$sld_percepcion_conyug = $_POST['sld_percepcion_conyug'];
$sld_casapropia = $_POST['sld_casapropia'];
$sld_donde_casa_propia = $_POST['sld_donde_casa_propia'];
$sld_valor_casa_propia = $_POST['sld_valor_casa_propia'];
$sld_paga_renta = $_POST['sld_paga_renta'];
$sld_importe_mensu_renta = $_POST['sld_importe_mensu_renta'];
$sld_automovilpropio = $_POST['sld_automovilpropio'];
$sld_automovilpropio_marca = $_POST['sld_automovilpropio_marca'];
$sld_automovilpropio_modelo = $_POST['sld_automovilpropio_modelo'];
$sld_deudas = $_POST['sld_deudas'];
$sld_deudas_importe = $_POST['sld_deudas_importe'];
$sld_abono_mensual_deudas = $_POST['sld_abono_mensual_deudas'];
$sld_gasto_mensual = $_POST['sld_gasto_mensual'];

$sld_datos_economicos_array = array(
  "sld_otros_ingresos" => $sld_otros_ingresos,
  "sld_otro_ingreso_import" => $sld_otro_ingreso_import,
  "sld_conyugue_trabaja" => $sld_conyugue_trabaja,
  "sld_dondetrabaja_conyug" => $sld_dondetrabaja_conyug,
  "sld_percepcion_conyug" => $sld_percepcion_conyug,
  "sld_casapropia" => $sld_casapropia,
  "sld_donde_casa_propia" => $sld_donde_casa_propia,
  "sld_valor_casa_propia" => $sld_valor_casa_propia,
  "sld_paga_renta" => $sld_paga_renta,
  "sld_importe_mensu_renta" => $sld_importe_mensu_renta,
  "sld_automovilpropio" => $sld_automovilpropio,
  "sld_automovilpropio_marca" => $sld_automovilpropio_marca,
  "sld_automovilpropio_modelo" => $sld_automovilpropio_modelo,
  "sld_deudas" => $sld_deudas,
  "sld_deudas_importe" => $sld_deudas_importe,
  "sld_abono_mensual_deudas" => $sld_abono_mensual_deudas,
  "sld_gasto_mensual" => $sld_gasto_mensual,

);

$datos_economicos_json = json_encode($sld_datos_economicos_array, true);




$data_json_array = array (
  $solicitud_empleo_json => $solicitud_empleo_json,
  $datos_generales_json => $datos_generales_json,
  $datos_documentacion_json => $datos_documentacion_json,
  $datos_salud_habit_json => $datos_salud_habit_json,
  $datos_familiares_json => $datos_familiares_json,
  $datos_escolares_json => $datos_escolares_json,
  $datos_conocimientos_generales_json => $datos_conocimientos_generales_json,
  $datos_emp_act_ant_json => $datos_emp_act_ant_json,
  $datos_referencias_json => $datos_referencias_json,
  $datos_generales_json => $datos_generales_json,
  $datos_economicos_json => $datos_economicos_json,
);


