<?php
/*
 * @author Rebeca Sánchez Pérez, Carlos García Cachón
 * @version 1.0
 * @since 21/01/2023
 */

//Si el usuario pulsa el botón 'Cancelar', mando al usuario al index de DWES
if (isset($_REQUEST['cancel'])) {
    $_SESSION['paginaActiva'] = 'login'; // Asigno a la pagina en curso la pagina de anterior que es la de login
    header('Location: index.php'); // Redirecciono al index de la APP
    exit;
}

// Declaración de constantes por OBLIGATORIEDAD
define('OPCIONAL', 0);
define('OBLIGATORIO', 1);

// Declaración de variables de estructura para validar la ENTRADA de RESPUESTAS o ERRORES
// Valores por defecto
$entradaOK = true;

$aRespuestas = [
    'T01_CodUsuario' => "",
    'T01_DescUsuario' => "",
    'T01_Password' => "",
    'repetirPassword' => ""
];

$aErrores = [
    'T01_CodUsuario' => "",
    'T01_DescUsuario' => "",
    'T01_Password' => "",
    'repetirPassword' => ""
];

//Si el usuario pulsa el botón 'Registrarse', mando al usuario al index de DWES
if (isset($_REQUEST['registrarse'])) {
    /*
     * Ahora inicializo cada 'key' del ARRAY utilizando las funciónes de la clase de 'validacionFormularios' , la cuál 
     * comprueba el valor recibido (en este caso el que recibe la variable '$_REQUEST') y devuelve 'null' si el valor es correcto,
     * o un mensaje de error personalizado por cada función dependiendo de lo que validemos.
     */
    //Introducimos valores en el array $aErrores si ocurre un error
    $aErrores['T01_CodUsuario'] = validacionFormularios::comprobarAlfabetico($_REQUEST['newUsuario'], 8, 3, OBLIGATORIO);
    $aErrores['T01_DescUsuario'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['newDescUsuario'], 255, 3, OBLIGATORIO);
    $aErrores['T01_Password'] = validacionFormularios::validarPassword($_REQUEST['newPassword'], 8, 3, 1, OBLIGATORIO);
    $aErrores['repetirPassword'] = validacionFormularios::validarPassword($_REQUEST['newPassword2'], 8, 3, 1, OBLIGATORIO);

    // Comprobamos por medio del metodo 'validarCodNoExiste()' de la clase 'UsuarioPDO' si el código del usuario existe
        $oUsuarioExistente = UsuarioPDO::validarCodNoExiste($_REQUEST['newUsuario']);
                
    // En caso de existir cargamos un mensaje al array de errores
    if ($oUsuarioExistente) {
        $aErrores['newUsuario'] = "El usuario ya existe";
    }

    // Comprobamos si son distintas las contraseñas y cargamos un mensaje de error
    if ($_REQUEST['newPassword'] != $_REQUEST['newPassword2']) {
            $aErrores['newPassword'] = "Las contraseñas no coinciden.";
            $aErrores['newPassword2'] = "Las contraseñas no coinciden.";
    }
            
    /*
     * En este foreach recorremos el array buscando que exista NULL (Los metodos anteriores si son correctos devuelven NULL)
     * y en caso negativo cambiara el valor de '$entradaOK' a false y borrara el contenido del campo.
     */
    foreach ($aErrores as $campo => $error) {
        if ($error != null) {
            $_REQUEST[$campo] = "";
            $entradaOK = false;
        }
    }
} else {
    $entradaOK = false;
}
//En caso de que '$entradaOK' sea true, cargamos las respuestas en el array '$aRespuestas'
if ($entradaOK) {
    $aRespuestas['newUsuario'] = $_REQUEST['newUsuario'];
    $aRespuestas['newDescUsuario'] = $_REQUEST['newDescUsuario'];
    $aRespuestas['newPassword'] = $_REQUEST['newPassword'];
    $aRespuestas['newPassword2'] = $_REQUEST['newPassword2'];

    $oRegistroUsuario = UsuarioPDO::altaUsuario($_REQUEST['newUsuario'], $_REQUEST['newPassword'], $_REQUEST['newDescUsuario']);

    $_SESSION['user204DWESLoginLogout'] = $oRegistroUsuario; // Almaceno el nuevo Usuario en una variable de sesión 
    $_SESSION['paginaActiva'] = 'inicioPrivado'; // Asigno a la pagina en curso la pagina de inicioPrivado
    header('Location: index.php'); // Redirecciono al index de la APP
    exit();
}

// Se muestra la vista del Layout
require_once $view['layout'];
?>

