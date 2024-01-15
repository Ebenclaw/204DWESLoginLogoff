<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 15/01/2023
 */

// Se comprueba que se pulsa el boton login
if (isset($_REQUEST['inicioPrivado'])) {
    // Redirige a la página de login
    $_SESSION['paginaActiva'] = 'inicioPrivado';
    exit();
}

// Se comprueba que se pulsa el boton cancelar
if (isset($_REQUEST['cancel'])) {
    // Redirige a la página de anterior inicio publico
    $_SESSION['paginaActiva'] = 'inicioPublico';
    exit();
}

// Se muestra la vista del Layout
require_once $view['layout'];

?>

