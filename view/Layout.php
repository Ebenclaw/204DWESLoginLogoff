<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 15/01/2023
 */
/*aqui se muestra la estructura del programa que se muestra en cada vista (ejemplo: se repite el header y el footer)*/
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="webroot/css/style.css">
        <link rel="icon" type="image/x-icon" href="../webroot/image/flora.png">
        <title>Rebeca Sánchez Pérez</title>
    </head>

    <body>
        <header>
            <h1 id="tituloApp">Login Logoff</h1>        
            <?php require_once $view[$_SESSION['paginaActiva']]; ?>
        </main>
        <footer>
            <div id="derechos">2023-2024 © Todos los derechos reservados: <a href="../index.html">Rebeca Sánchez Pérez</a></div>
            <div id="fotos">
                <form method="post" class="formTecnologias">
                    <button type="submit" name="tecnologias" value="tecnologias" class="tecnologias">
                        <img alt="herramientas" src="../webroot/image/GitHub.png" />
                    </button>
                </form>
                <a href="https://github.com/Ebenclaw/204DWESLoginLogoff" target="_blank"><img id="git" src="../webroot/image/GitHub.png" alt="GitHub"></a>
                <a href="http://ieslossauces.centros.educa.jcyl.es/sitio/" target="_blank"><img id="sauces" src="../webroot/image/sauces.png" alt="Sauces"></a>
                <!--<a href="../204DWESProyectoDWES/indexProyectoDWES.php"><img id="home" src="webroot/image/home.png" alt="Inicio"></a>-->
            </div>
        </footer>
    </body>
</html>