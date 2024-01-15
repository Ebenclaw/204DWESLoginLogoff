<?php
/*
 * @author Ismael Ferreras García, Rebeca Sánchez Pérez
 * @version 1.0
 * @since 15/01/2023
 */
// Se comprueba si esta declarada la cookie del idioma
if (!isset($_COOKIE['idioma'])) { 
    // Si no está declarada, se pone por defecto el valor de ES (español)
    setcookie('idioma', 'ES', time() + 2592000);
}

// Se comprueba si la cookie ya estaba anteriormente guardada con el valor ingles
//if($_COOKIE['idioma']=='EN'){
//    // Si el idioma seleccionado es ingles, se redirige la pagina al index en ingles
//    header('Location: indexLoginLogoffTema5EN.php');
//    exit();
//}

//// Se comprueba el idioma seleccionado
//if(isset($_REQUEST['ingles'])){
//    // Si se ha pulsado una bandera, se declara una cookie con el valor ingles
//    setcookie( 'idioma', $_REQUEST['ingles'], time() + 2592000);
//    // Si el idioma seleccionado es ingles, se redirige la pagina al index en ingles
//    header('Location: indexLoginLogoffTema5EN.php');
//    exit();
//}elseif(isset($_REQUEST['castellano'])){
//    // Si se ha pulsado una bandera, se declara una cookie con el valor castellano
//    setcookie( 'idioma', $_REQUEST['castellano'], time() + 2592000);
//    // Si el idioma seleccionado es español, se redirige la pagina al index en español
//    header('Location: indexLoginLogoffTema5ES.php');
//    exit();
//}

// Se comprueba que se pulsa el boton login
if (isset($_REQUEST['login'])) {
    // Redirige a la página de login
    $_SESSION['paginaActiva'] = 'login';
    exit();
}

// Se muestra la vista del Layout
require_once $view['layout'];

?>

