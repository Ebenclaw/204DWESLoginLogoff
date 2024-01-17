<?php
/**
 * @author Ismael Ferreras García, Rebeca Sánchez Pérez
 * @version 1.0
 * @since 15/01/2024
 */
// Se incluyen los ficheros del modelo
require_once 'core/231018libreriaValidacion.php';
//require_once 'model/DB.php';
//require_once 'model/DBPDO.php';
//require_once 'model/ERROR.php';
//require_once 'model/Usuario.php';
//require_once 'model/UsuarioDB.php';
//require_once 'model/UsuarioPDO.php';

// El array $controller almacena los ficheros del controlador
$controller = [
    'inicioPublico' => 'controller/cInicioPublico.php',
    'login' => 'controller/cLogin.php',
    'inicioPrivado' => 'controller/cInicioPrivado.php',
    'detalle' => 'controller/cDetalle.php',
    'tecnologias' => 'controller/cTecnologias.php',
    'rss' => 'controller/cRSS.php',
    'registro' => 'controller/cRegistro.php',
    'miCuenta' => 'controller/cMiCuenta.php',
    'borrarCuenta' => 'controller/cBorrarCuenta.php',
    'wip' => 'controller/cWIP.php',
    'error' => 'controller/cError.php'
];

// El array $view almacena los ficheros de la vista
$view = [
    'layout' => 'view/Layout.php',
    'inicioPublico' => 'view/vInicioPublico.php',
    'login' => 'view/vLogin.php',
    'inicioPrivado' => 'view/vInicioPrivado.php',
    'detalle' => 'view/vDetalle.php',
    'tecnologias' => 'view/vTecnologias.php',
    'rss' => 'view/vRSS.php',
    'registro' => 'view/vRegistro.php',
    'miCuenta' => 'view/vMiCuenta.php',
    'borrarCuenta' => 'view/vBorrarCuenta.php',
    'wip' => 'view/vWIP.php',
    'error' => 'view/vError.php'
];