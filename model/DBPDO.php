<?php

/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 17/01/2023
 */

class DBPDO implements DB {

    // Se implementa la funcion abstracta de DB
    public static function ejecutaConsulta($sentenciaSQL) {
        try {
            // Se instancia un objeto tipo PDO que establece la conexion a la base de datos con el usuario especificado
            $miDB = new PDO('mysql:host=' . IPMYSQL . '; dbname=' . NOMBREDB, USUARIO, PASSWORD);
            // Se prepara la consulta
            $consulta = $miDB->prepare($sentenciaSQL);
            // Se ejecuta la consulta
            $consulta->execute();
            // Se devuelve el resultado de la consulta
            return $consulta;
        } catch(PDOException $exception){
            // Si aparecen errores, se muestra por pantalla el error
            echo('<div class="ejercicio"><span class="error">❌ Ha fallado la conexion: ' . $exception->getMessage() . '</span></div>');
            exit();
        } finally {
            // Se cierra la conexion con la base de datos
            unset($miDB);
        }
    }
}
