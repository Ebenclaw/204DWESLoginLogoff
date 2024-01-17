<?php
/*
 * @author Ismael Ferreras García, Rebeca Sánchez Pérez
 * @version 1.1
 * @since 15/01/2023
 */
// Se comprueba si esta declarada la cookie del idioma
if (!isset($_COOKIE['idioma'])) { 
    // Si no está declarada, se pone por defecto el valor de ES (español)
    setcookie('idioma', 'ES', time() + 2592000);
}

// Se comprueba que se pulsa el boton login
if (isset($_REQUEST['login'])) {
    // Redirige a la página de login
    $_SESSION['paginaActiva'] = 'login';
    // Se carga el controlador de la pagina en curso
    require_once $controller[$_SESSION['paginaActiva']];
    exit();
}

// Se muestra la vista del Layout
require_once $view['layout'];

?>

