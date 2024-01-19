<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 15/01/2023
 */

// Se comprueba que se pulsa el boton Volver
if (isset($_REQUEST['volver'])) {
    // Redirige a la página de inicio privado
    $_SESSION['paginaActiva'] = $_SESSION['paginaAnterior'];
    // Se carga el index
    header('Location: index.php');
    exit();
}

// Se muestra la vista del Layout
require_once $view['layout'];

?>

