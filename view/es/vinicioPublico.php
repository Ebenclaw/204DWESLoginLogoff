<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 15/01/2023
 */
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="webroot/css/style.css">
        <link rel="icon" type="image/x-icon" href="/webroot/image/flora.png">
        <title>Rebeca Sánchez Pérez</title>
    </head>

    <body>
        <header>
            <p id="pTitulo">Bienvenido a mi aplicacion</p>
            <h1>Login Logoff</h1>
        </header>
        <main class="main1">         
            <div class="container">
                <ul class="listaIndex">
                    <li>
                        <form name="index" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formIndex" method="post">
                            <button type="submit" value="ES" name="castellano"><img src="webroot/image/español.png" alt="esp" class="fotoIdioma"></button>
                            <button type="submit" value="EN" name="ingles"><img src="webroot/image/ingles.png" alt="eng" class="fotoIdioma"></button>
                        </form>
                    </li>
                    <li></li>
                    <li><a class="botonInicioSesion" href="codigoPHP/Login.php">Iniciar sesion</a></li>
                </ul>
                <div class="gallery js-flickity"
                     data-flickity-options='{ "wrapAround": true }'>
                    <div class="gallery-cell" src="webroot/image/esquema.png"></div>
                    <div class="gallery-cell" src="webroot/image/diagrama.png"></div>
                    <div class="gallery-cell" src="webroot/image/mapa.png"></div>
                </div>
            </div>
        </main>
        <footer>
            <div id="derechos">2023-2024 © Todos los derechos reservados: <a href="../index.html">Rebeca Sánchez Pérez</a></div>
            <div id="fotos">
                <a href="https://github.com/Ebenclaw/204DWESLoginLogoff" target="_blank"><img id="git" src="webroot/image/GitHub.png" alt="GitHub"></a>
                <a href="http://ieslossauces.centros.educa.jcyl.es/sitio/" target="_blank"><img id="sauces" src="webroot/image/sauces.png" alt="Sauces"></a>
                <a href="../204DWESProyectoDWES/indexProyectoDWES.php"><img id="home" src="webroot/image/home.png" alt="Inicio"></a>
            </div>
        </footer>
    </body>

</html>