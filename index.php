<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 15/01/2023
 */
// Se incluyen los ficheros de configuracion
require_once 'config/confAPP.php';
require_once 'config/confDB.php';

// Se inicia la sesion
session_start();

// Se comprueba que no existe un valor para $_SESSION['paginaActiva']
if(!isset($_SESSION['paginaActiva'])){
    // Se le da el valor 'inicioPublico' a $_SESSION['paginaActiva']
    $_SESSION['paginaActiva'] = 'inicioPublico';
}

// Carga l controlador de la pagina en curso
require_once $controller[$_SESSION['paginaActiva']];

?>