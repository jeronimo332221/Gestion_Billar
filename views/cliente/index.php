

<?php 
    include_once __DIR__ . '/../templates/barra.php';
    
    ?>
    <h1 class="nombre-pagina">Gestor De Clientes</h1>

<section>
    
   
    <?php foreach($clientes as $cliente) { ?>
        <div class="cliente-contenedor">
            <h4><?php echo $cliente->id; ?></h4> 
            <p><?php echo $cliente->nombre; ?></p> 
            <p><?php echo $cliente->apodo; ?></p> 
            <p><?php echo $cliente->telefono; ?></p> 
            <a href="/mesa/ver?id=<?php echo $cliente->mesaId; ?>"><?php echo $cliente->mesaId; ?></a> 
            <p>$ <?php echo $cliente->cumulado; ?></p> 
            <div class="acciones">
                <a class="boton" href="/cliente/actualizar?id=<?php echo $cliente->id; ?>">!</a>
                <form action="/cliente/eliminar" method="POST">
                    <input type="hidden" name="id" value="<?php echo $cliente->id; ?>">
    
                    <input type="submit" value="X" class="boton-eliminar">
                </form>
            </div>
            
            
        </div>
            <?php } ?>
</section>
<?php 
    $script = "
        <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script src='build/js/app.js'></script>
    ";
?>