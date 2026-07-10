<?php include_once __DIR__ . '/header-dashboard.php'; ?>


<div class="contendor-sm">
    <?php include_once __DIR__ . '/../templates/alertas.php'; ?>

    <a href="/perfil" class="enlace">Volver a perfil</a>


    <form class="formulario" method="POST" action="/cambiar-password">
        <div class="campo">
            <label for="nombre">Password actual</label>
            <input type="password"  name="password_actual" placeholder="Tu password actual">
        </div>
        <div class="campo">
            <label for="email">Password nuevo</label>
            <input type="password" name="password_nuevo" placeholder="Tu password nuevo">
        </div>
        <input type="submit" value="Guardar cambios">
    </form>
</div>



<?php include_once __DIR__ . '/footer-dashboard.php'; ?>