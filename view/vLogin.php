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
            <label>Usuario</label><input type="text">
            <button type="submit" name="inicioPrivado" class="botonInicioPrivado">Inicio Privado</button>
            <button type="submit" name="cancel" class="botonCancelar">Cancelar</button>
        </form>
    </div>