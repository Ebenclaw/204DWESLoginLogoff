<?php
/*
 * @author Rebeca Sánchez Pérez, Ismael Ferreras Garcia
 * @version 1.0
 * @since 19/01/2023
 */

// Se comprueba que se pulsa el boton Volver
if (isset($_REQUEST['volver'])) {
    // Redirige a la página de inicio privado
    $_SESSION['paginaActiva'] = $_SESSION['paginaAnterior'];
    // Se cierra la sesion de error
    unset($_SESSION['error']);
    // Se carga el index
    header('Location: index.php');
    exit();
}
// Asigna a cada variable los datos almacenamos en la sesion error
$sCodError = $_SESSION['error']->getCodError();
$sDescError = $_SESSION['error']->getDescError();
$sArchivoError = $_SESSION['error']->getArchivoError();
$iLineaError = $_SESSION['error']->getLineaError();

// Se muestra la vista del Layout
require_once $view['layout'];

?>

