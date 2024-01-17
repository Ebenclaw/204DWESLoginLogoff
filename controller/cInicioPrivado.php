<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.1
 * @since 17/01/2023
 */
if (empty($_SESSION['user204DWESLoginLogout'])) {
// Redirige a la página de inicio
    $_SESSION['paginaActiva'] = 'inicioPublico';
    // Se carga el index
    header('Location: index.php');
    exit();
}

// Se comprueba que se pulsa el boton Cerrar Sesion
if (isset($_REQUEST['cerrarSesion'])) {
    // Se destruye la sesion
    session_destroy();
    // Redirige a la página de Inicio Publico
    $_SESSION['paginaActiva'] = 'inicioPublico';
    // Se carga el index
    header('Location: index.php');
    exit();
}

// Se comprueba que se pulsa el boton Mantenimiento Departamento
if (isset($_REQUEST['mtoDepartamento'])) {
    // Redirige a la página de WIP
    $_SESSION['paginaActiva'] = 'wip';
    // Se carga el index
    header('Location: index.php');
    exit();
}

// Se comprueba que se pulsa el boton Detalle
if (isset($_REQUEST['detalle'])) {
    // Redirige a la página de Detalle
    $_SESSION['paginaActiva'] = 'detalle';
    // Se carga el index
    header('Location: index.php');
    exit();
}

// Se comprueba que se pulsa el boton Editar Perfil
if (isset($_REQUEST['editarPerfil'])) {
    // Redirige a la página de Mi Cuenta
    $_SESSION['paginaActiva'] = 'wip';
    // Se carga el index
    header('Location: index.php');
    exit();
}

// Se muestra la vista del Layout
require_once $view['layout'];

?>