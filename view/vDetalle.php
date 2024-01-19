<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 17/01/2023
 */
?>
<h2>Detalle</h2>
</header>
<main class="detalle">
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formDetalle" method="post">
            <button type="submit" name="volver" class="botonVolver">Volver</button>
        </form>
    </div>
    <?php
    // $_SESSION
    if (isset($_SESSION)) {
        echo '<h3>$_SESSION</h3>';
        foreach ($_SESSION as $key => $value) {
            if ($key === 'user204DWESLoginLogout') {
                echo("<u>$key</u> => <b>" . $value->getDescUsuario() . "</b><br>");
            }
        }
    } else {
        echo '<h2>La variable <b>$_SESSION</b> no está definida</h2>';
    }

    // $_COOKIE
    echo('<div class="ejercicio">');
    echo('<h3>$_COOKIE</h3>');
    foreach ($_COOKIE as $key => $valor) {
        echo('<u>' . $key . '</u> => <b>' . $valor . '</b><br>');
    }
    echo('</div>');

    // $_SERVER
    echo('<div class="ejercicio">');
    echo('<h3>$_SERVER</h3>');
    foreach ($_SERVER as $key => $valor) {
        echo('<u>' . $key . '</u> => <b>' . $valor . '</b><br>');
    }
    echo('</div>');

    // $GLOBALS
    echo('<div class="ejercicio">');
    echo('<h3>$GLOBALS</h3>');
    foreach ($GLOBALS as $key => $valor) {
        foreach ($valor as $clave => $valor2) {
            echo('<u>' . $clave . '</u> => <b>' . $valor2 . '</b><br>');
        }
    }
    echo('</div>');

    // $_GET
    echo('<div class="ejercicio">');
    echo('<h3>$_GET</h3>');
    foreach ($_GET as $key => $valor) {
        echo('<u>' . $key . '</u> => <b>' . $valor . '</b><br>');
    }
    echo('</div>');

    // $_POST
    echo('<div class="ejercicio">');
    echo('<h3>$_POST</h3>');
    foreach ($_POST as $key => $valor) {
        echo('<u>' . $key . '</u> => <b>' . $valor . '</b><br>');
    }
    echo('</div>');

    // $_FILES
    echo('<div class="ejercicio">');
    echo('<h3>$_FILES</h3>');
    foreach ($_FILES as $key => $valor) {
        echo('<u>' . $key . '</u> => <b>' . $valor . '</b><br>');
    }
    echo('</div>');

    // $_REQUEST
    echo('<div class="ejercicio">');
    echo('<h3>$_REQUEST</h3>');
    foreach ($_REQUEST as $key => $valor) {
        echo('<u>' . $key . '</u> => <b>' . $valor . '</b><br>');
    }
    echo('</div>');

    // $_ENV
    echo('<div class="ejercicio">');
    echo('<h3>$_ENV</h3>');
    foreach ($_ENV as $key => $valor) {
        echo('<u>' . $key . '</u> => <b>' . $valor . '</b><br>');
    }
    echo('</div>');

    // Se muestra en pantalla la información de PHP de nuestro servidor
    phpinfo();
    ?>