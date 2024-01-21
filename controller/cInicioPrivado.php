<?php
/*
 * @author Rebeca Sánchez Pérez, Ismael Ferreras Garcia
 * @version 1.2
 * @since 17/01/2023
 */
$_SESSION['paginaAnterior'] = 'inicioPrivado';

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

// Define los mensajes según el idioma
if ($_COOKIE['idioma'] == 'ES') {
    $bienvenida = "Bienvenid@, {$_SESSION['user204DWESLoginLogout']->getdescUsuario()}.<br>";
    $numConexiones = "Esta es tu {$_SESSION['user204DWESLoginLogout']->getnumAcceso()} vez conectándote.<br>";
    if ($_SESSION['user204DWESLoginLogout']->getFechaHoraUltimaConexionAnterior()!=null) {
        $ultimaConexion = "Te conectaste por última vez {$_SESSION['user204DWESLoginLogout']->getfechaHoraUltimaConexionAnterior()}.";
    }else{
        $ultimaConexion='';
    }
} elseif ($_COOKIE['idioma'] == 'EN') {
    $bienvenida = "Welcome, {$_SESSION['user204DWESLoginLogout']->getdescUsuario()}.<br>";
    $numConexiones = "This is your {$_SESSION['user204DWESLoginLogout']->getnumAcceso()} time logging in.<br>";
    if ($_SESSION['user204DWESLoginLogout']->getFechaHoraUltimaConexionAnterior()!=null) {
        $ultimaConexion = "You last logged in on {$_SESSION['user204DWESLoginLogout']->getfechaHoraUltimaConexionAnterior()}.";
    } else{
        $ultimaConexion='';
    }
}
// Meter el mensaje en un array
$avInicioPrivado = [
    'bienvenida' => $bienvenida,
    'numConexiones' => $numConexiones,
    'ultimaConexion' => $ultimaConexion
];

// Se muestra la vista del Layout
require_once $view['layout'];

?>