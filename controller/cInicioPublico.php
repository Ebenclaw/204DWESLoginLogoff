<?php
/*
 * @author Ismael Ferreras García, Rebeca Sánchez Pérez
 * @version 1.2
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
    // Se carga el index
    header('Location: index.php');
    exit();
}

//Comprobamos si pulsa algun boton de idioma
if (isset($_REQUEST['castellano'])) {
//Cambiamos la cookie al idioma seleccionado y refrescamos la pagina
    setcookie("idioma", "ES", time() + 2592000);
    header('Location: index.php');
    exit();
}
if (isset($_REQUEST['ingles'])) {
//Cambiamos la cookie al idioma seleccionado y refrescamos la pagina
    setcookie("idioma", "EN", time() + 2592000);
    header('Location: index.php');
    exit();
}

// Se muestra la vista del Layout
require_once $view['layout'];

?>

