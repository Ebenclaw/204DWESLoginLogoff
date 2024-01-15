<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 15/01/2023
 */
?>
<h2>Login</h2>
</header>
<main class="login">
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formLogin" method="post">
            <button type="submit" name="login" class="botonIniciarSesion">Inicio Privado</button>
            <button type="submit" name="login" class="botonIniciarSesion">Cancelar</button>
        </form>
    </div>