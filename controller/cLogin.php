<?php
/*
 * @author Rebeca Sánchez Pérez, Ismael Ferreras García
 * @version 1.0
 * @since 15/01/2023
 */
// Se comprueba que se pulsa el boton cancelar
if (isset($_REQUEST['cancel'])) {
    // Redirige a la página de anterior inicio publico
    $_SESSION['paginaActiva'] = 'inicioPublico';
    exit();
}
//
//$entradaOK = true; // Indica si todas las respuestas son correctas
//// Almacena los errores
//$aErrores = [
//    'usuario' => '',
//    'password' => '',
//];
//if (isset($_REQUEST['enviar'])) {
//
//    // Validamos si el usuario existe y es oUsuarioActivo utilizando el metodo 'validarUsuario()' de la clase 'UsuarioPDO'
//    $oUsuarioActivo = UsuarioPDO::validarUsuario($_REQUEST['usuario'], $_REQUEST['password']);
//    // Comprobamos si '$oUsuarioActivo' no esta declarado o es 'null'
//    if (!isset($oUsuarioActivo)) {
//        $entradaOK = false; // En caso verdadero cambiamos el valor de '$entradaOK' a 'false'
//    }
//    // Validar los campos
//    $aErrores = [
//        'usuario' => (!$oUsuarioActivo) ? 'Error de autentificacion. Vuelve a introducir las credenciales.' : validacionFormularios::comprobarAlfaNumerico($_REQUEST['usuario'], 32, 4, 1),
//        'password' => (!$oUsuarioActivo) ? 'Error de autentificacion. Vuelve a introducir las credenciales.' : validacionFormularios::validarPassword($_REQUEST['password'], 32, 4, 2, 1)
//    ];
//
//    // Recorre aErrores para ver si hay alguno
//    foreach ($aErrores as $campo => $valor) {
//        if ($valor != null) {
//            $entradaOK = false;
//            // Limpiamos el campo
//            $_REQUEST[$campo] = '';
//        }
//    }
//} else {
//    $entradaOK = false;
//}
//// En caso de que '$entradaOK' sea true, cargamos las respuestas en el array '$aRespuestas' 
//if ($entradaOK) {

    // Actualizamos la fecha y hora de la última conexión
//    $oUsuarioActivo = UsuarioPDO::registrarUltimaConexion($oUsuarioActivo);
    //Redireccionamos a el inicio privado
//    $_SESSION['user208DWESLoginLogout'] = $oUsuarioActivo;
    $_SESSION['paginaActiva'] = 'inicioPrivado';
    require_once $controller[$_SESSION['paginaActiva']];
    exit();
//}

// Se muestra la vista del Layout
require_once $view['layout'];

?>

