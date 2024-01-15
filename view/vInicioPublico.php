<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 15/01/2023
 */
?>
<h2>Inicio Publico</h2>
</header>
<main class="inicioPublico">
    <div class="container">
        <form name="inicioPublico" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formInicioPublico" method="post">
            <button type="submit" value="ES" name="castellano" disabled><img src="webroot/image/español.png" alt="esp" class="fotoIdioma"></button>
            <button type="submit" value="EN" name="ingles" disabled><img src="webroot/image/ingles.png" alt="eng" class="fotoIdioma"></button>
        </form>
        <div class="carousel">
            <div><img src="webroot/image/arbol.PNG" alt="arbol"></div>
            <div><img src="webroot/image/relacion.PNG" alt="relacion de ficheros"></div>
            <div><img src="webroot/image/diagrama.PNG" alt="diagrama de clases"></div>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formInicioPublico" method="post">
            <button type="submit" name="login" class="botonIniciarSesion">Iniciar Sesion</button>
        </form>
    </div>