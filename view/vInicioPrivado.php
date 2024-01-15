<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 15/01/2023
 */
?>
<h2>Inicio Privado</h2>
</header>
<main class="inicioPrivado">
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formInicioPrivado" method="post">
            <button type="submit" name="cerrarSesion" class="botonCerrarSesion">Cerrar Sesion</button>
            <button type="submit" name="mtoDepartamento" class="botonMtoDepartamento">Mantenimiento Departamentos</button>
            <button type="submit" name="detalle" class="botonDetalle">Detalle</button>
            <button type="submit" name="editarPerfil" class="botonEditarPerfil">Editar Perfil</button>
        </form>
    </div>