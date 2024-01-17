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
            <table>
                <tr>
                    <td><label for="usuario">Usuario:</label></td>
                    <td><input class="obligatorio" type="text" name="usuario" value="<?php echo (isset($_REQUEST['usuario']) ? $_REQUEST['usuario'] : ''); ?>"></td>
                </tr>
                <tr>
                    <td><label for="contrasena">Contraseña:</label></td>
                    <td><input class="obligatorio" type="password" name="password" value="<?php echo (isset($_REQUEST['password']) ? $_REQUEST['password'] : ''); ?>"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="inicioPrivado" class="botonInicioPrivado">Inicio Privado</button></td>
                    <td><button type="submit" name="cancel" class="botonCancelar">Cancelar</button></td>
                </tr>
            </table>
        </form>
    </div>