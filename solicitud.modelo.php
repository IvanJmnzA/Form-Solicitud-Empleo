<?php


define('DB_NAME', 'db_mispruebas');
define('DB_HOST', 'localhost');
define('DB_USER', 'lokodev');
define('DB_PASSWORD', 'root');

class Conexion
{

    static public function conectar()
    {

        try {
            //code...
            $link = new PDO(
                "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
                DB_USER,
                DB_PASSWORD
            );

            $link->exec("set names utf8mb4");

            return $link;
        } catch (PDOException $th) {
            throw $th;
            return false;
        }
    }
}







class SolicitudModelo {

    static public function mdlNuevaSolicitudEmp($data_json_array)
    {
        try {
            //code...
            $sql = "INSERT INTO tbl_solicitud_empleo_sld (sld_solicitud_empleo,sld_datos_personales,sld_documentacion,sld_estado_salud,sld_datos_familiares,sld_escolaridad,sld_conocimientos_generales,sld_empleo_act_ante,sld_referencias,sld_datos_generales,sld_datos_economicos) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, $data_json_array['solicitud_empleo_json']);
            $pps->bindValue(2, $data_json_array['datos_personales_json']);
            $pps->bindValue(3, $data_json_array['datos_documentacion_json']);
            $pps->bindValue(4, $data_json_array['datos_salud_habit_json']);
            $pps->bindValue(5, $data_json_array['datos_familiares_json']);
            $pps->bindValue(6, $data_json_array['datos_escolares_json']);
            $pps->bindValue(7, $data_json_array['datos_conocimientos_generales_json']);
            $pps->bindValue(8, $data_json_array['datos_emp_act_ant_json']);
            $pps->bindValue(9, $data_json_array['datos_referencias_json']);
            $pps->bindValue(10, $data_json_array['datos_generales_json']);
            $pps->bindValue(11, $data_json_array['datos_economicos_json']);
            $pps->execute();
            return $pps->rowCount() > 0;
        } catch (PDOException $th) {
            //throw $th;
        } finally {
            $pps = null;
            $con = null;
        }
    }
  }
