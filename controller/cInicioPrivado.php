<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 15/01/2023
 */

// Se comprueba que se pulsa el boton Cerrar Sesion
if (isset($_REQUEST['cerrarSesion'])) {
    // Redirige a la página de Inicio Publico
    $_SESSION['paginaActiva'] = 'inicioPublico';
    exit();
}

// Se comprueba que se pulsa el boton Mantenimiento Departamento
if (isset($_REQUEST['mtoDepartamento'])) {
    // Redirige a la página de WIP
    $_SESSION['paginaActiva'] = 'wip';
    exit();
}

// Se comprueba que se pulsa el boton Detalle
if (isset($_REQUEST['detalle'])) {
    // Redirige a la página de Detalle
    $_SESSION['paginaActiva'] = 'detalle';
    exit();
}

// Se comprueba que se pulsa el boton Editar Perfil
if (isset($_REQUEST['editarPerfil'])) {
    // Redirige a la página de Mi Cuenta
    $_SESSION['paginaActiva'] = 'miCuenta';
    exit();
}

// Se muestra la vista del Layout
require_once $view['layout'];

?>