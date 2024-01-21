<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 21/01/2023
 */
?>
<h2>Registro</h2>
</header>
<main class="registro">
    <div class="container">
        <div class="formulacioRegistro">
            <h3>Crea tu cuenta:</h3>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formRegistro" method="post">
                <table>
                    <tr>
                        <td>Usuario:</td>
                        <td><input class="obligatorio" type="text" name="newUsuario" value="<?php echo (isset($_REQUEST['newUsuario']) ? $_REQUEST['newUsuario'] : ''); ?>"></td>
                    </tr>
                    <tr>
                        <td>Descripcion de Usuario:</td>
                        <td><input class="obligatorio" type="text" name="newDescUsuario" value="<?php echo (isset($_REQUEST['newDescUsuario']) ? $_REQUEST['newDescUsuario'] : ''); ?>"></td>
                    </tr>
                    <tr>
                        <td>Contraseña:</td>
                        <td><input class="obligatorio" type="password" name="newPassword" value="<?php echo (isset($_REQUEST['newPassword']) ? $_REQUEST['newPassword'] : ''); ?>"></td>
                    </tr>
                    <tr>
                        <td>Repetir contraseña:</td>
                        <td><input class="obligatorio" type="password" name="newPassword2" value="<?php echo (isset($_REQUEST['newPassword2']) ? $_REQUEST['newPassword2'] : ''); ?>"></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="registrarse" class="botonRegistrarse">Registrarse</button></td>
                        <td><button type="submit" name="cancel" class="botonCancelar">Cancelar</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>