


<?php
    include_once __DIR__ . '/../templates/barra.php';
    include_once __DIR__ . '/../templates/alertas.php';
    ?>
    <h1 class="nombre-pagina">Nuevo Cliente-Articulo</h1>

<form action="/clienteArticulo/crear?id=<?php echo $cliente->id; ?>" method="POST" class="formulario">

    <?php include_once __DIR__ . '/formulario.php'; ?>
    
    <input type="submit" class="boton" value="Guardar Cliente Articulo">
</form>