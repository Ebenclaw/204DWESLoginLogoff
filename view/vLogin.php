<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.2
 * @since 15/01/2023
 */
?>
<h2>Login</h2>
</header>
<main class="login">
    <div class="container">
        <div class="formulacioInicioSesion">
            <h3>Accede a tu cuenta:</h3>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formLogin" method="post">
                <table>
                    <tr>
                        <td>Usuario:</td>
                        <td><input class="obligatorio" type="text" name="usuario" value="<?php echo (isset($_REQUEST['usuario']) ? $_REQUEST['usuario'] : ''); ?>"></td>
                    </tr>
                    <tr>
                        <td>Contraseña:</td>
                        <td><input class="obligatorio" type="password" name="password" value="<?php echo (isset($_REQUEST['password']) ? $_REQUEST['password'] : ''); ?>"></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="inicioPrivado" class="botonInicioPrivado">Inicio Privado</button></td>
                        <td><button type="submit" name="cancel" class="botonCancelar">Cancelar</button></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="formulacioInicioSesion">
            <h3>¿Aun no tienes cuenta?</h3>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formLogin" method="post">
                <td><button type="submit" name="registrarse" class="botonRegistro">Quiero registrarme</button></td>
            </form>
        </div>
    </div>