
<?php
    include_once __DIR__ . '/../templates/barra.php';
    include_once __DIR__ . '/../templates/alertas.php';
?>
<h1 class="nombre-pagina">Crear Articulo</h1>

<form action="/articulo/crear" method="POST" class="formulario">

    <?php include_once __DIR__ . '/formulario.php'; ?>
    <input type="submit" class="boton" value="Guardar Articulo">
</form>