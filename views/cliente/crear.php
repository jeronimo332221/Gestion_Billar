
<?php
    include_once __DIR__ . '/../templates/barra.php';
    include_once __DIR__ . '/../templates/alertas.php';
    ?>
<h1 class="nombre-pagina">Nuevo Cliente</h1>

<form action="/cliente/crear" method="POST" class="formulario">

    <?php include_once __DIR__ . '/formulario.php'; ?>
    <input type="submit" class="boton" value="Guardar Cliente/s">
</form>