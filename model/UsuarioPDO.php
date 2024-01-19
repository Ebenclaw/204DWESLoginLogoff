<?php

/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 17/01/2023
 */

class UsuarioPDO implements UsuarioDB {

    // Se implementa la funcion abstracta de UsuarioDB
    public static function validarUsuario($codUsuario, $password) {
        // Se inicializa el objeto usuario a null
        $oUsuario = null;
        // Se inicializa variable heredoc que almacena la consulta que selececciona al usuario introducido
        $sql = 'SELECT * FROM T01_Usuario WHERE T01_CodUsuario="' . $codUsuario . '" and T01_Password="' . hash("sha256", ($codUsuario . $password)) . '";';
        // Se ejecuta la consulta
        $resultado = DBPDO::ejecutaConsulta($sql);
        // Se comprueba que la consulta devuelve un usuario 
        if ($resultado->rowCount() > 0) {
            // Se guarda el resultado en el objeto oResultado
            $oResultado = $resultado->fetchObject();
            // Se instancia un nuevo objeto Usuario con todas las propiedades del objeto oResultado
            if ($oResultado) {
                $oUsuario = new Usuario(
                        $oResultado->T01_CodUsuario,
                        $oResultado->T01_Password,
                        $oResultado->T01_DescUsuario,
                        $oResultado->T01_NumConexiones,
                        $oResultado->T01_FechaHoraUltimaConexion,
                        $oResultado->T01_FechaHoraUltimaConexionAnterior = null,
                        $oResultado->T01_Perfil
                );
            }
        }
        //Devuelve el objeto usuario
        return $oUsuario;
    }

    public static function registrarUltimaConexion($oUsuario) {

        $oUsuario->setnumAcceso($oUsuario->getnumAcceso() + 1);
        $oUsuario->setfechaHoraUltimaConexionAnterior($oUsuario->getfechaHoraUltimaConexion());

        //Realizamos un uptade
        $consultaActualizacionFechaUltimaConexion = <<<CONSULTA
            UPDATE T01_Usuario 
            SET T01_NumConexiones=T01_NumConexiones+1, T01_FechaHoraUltimaConexion=now() 
            WHERE T01_CodUsuario='{$oUsuario->getCodUsuario()}';
        CONSULTA;
        DBPDO::ejecutaConsulta($consultaActualizacionFechaUltimaConexion);
        return $oUsuario;
    }
}
