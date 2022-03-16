CREATE TABLE `db_mispruebas`.`tbl_solicitud_empleo_sld` ( `sld_solicitud_empleo` TEXT NOT NULL , `sld_datos_personales` TEXT NOT NULL , `sld_documentacion` TEXT NOT NULL , `sld_estado_salud` TEXT NOT NULL , `sld_datos_familiares` TEXT NOT NULL , `sld_escolaridad` TEXT NOT NULL , `sld_conocimientos_generales` TEXT NOT NULL , `sld_empleo_act_ante` TEXT NOT NULL , `sld_referencias` TEXT NOT NULL , `sld_datos_generales` TEXT NOT NULL , `sld_datos_economicos` TEXT NOT NULL ) ENGINE = InnoDB;



ALTER TABLE `tbl_solicitud_empleo_sld` ADD `sld_id_solicitud` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`sld_id_solicitud`);