

<?php 
    include_once __DIR__ . '/../templates/barra.php';

?>
<h1 class="nombre-pagina">Gestor De Articulos</h1>


<section>
   <div class="cliente-contenedor">
            <h5>id</h5> 
            <h5>Nombre</h5> 
            <h5>Rubro</h5> 
            <h5>StockMin</h5> 
            <h5>Precio</h5> 
            <h5>FechaRepo</h5> 
            <h5>FechaRepoCocina</h5> 
            <h5>StockCocina</h5> 
            <h5>Existencia</h5> 
            <h5>AcumVend</h5> 
            <h5>Fraccion</h5> 
            <h5>CantRep</h5> 
    
   </div>
           
   
    <?php foreach($articulos as $articulo) { ?>
        <div class="cliente-contenedor">
            <!-- public $id;
            public $nombre;
            public $rubro;
            public $stockMin;
            public $precio;
            public $fechaRepo;
            public $fechaRepoCocina;
            public $stockCocina;
            public $existencia;
            public $acumVend;
            public $fraccion;
            public $cantRep; -->

            <h4><?php echo $articulo->id; ?></h4> 
            <p><?php echo $articulo->nombre; ?></p> 
            <p><?php echo $articulo->rubro; ?></p> 
            <p><?php echo $articulo->stockMin; ?></p> 
            <p>$ <?php echo $articulo->precio; ?></p> 
            <p><?php echo $articulo->fechaRepo; ?></p> 
            <p><?php echo $articulo->fechaRepoCocina; ?></p> 
            <p><?php echo $articulo->stockCocina; ?></p> 
            <p><?php echo $articulo->existencia; ?></p> 
            <p><?php echo $articulo->acumVend; ?></p> 
            <p><?php echo $articulo->fraccion; ?></p> 
            <p><?php echo $articulo->cantRep; ?></p> 
            <div class="acciones">
                <a class="boton" href="/articulo/actualizar?id=<?php echo $articulo->id; ?>">!</a>
                <form action="/articulo/eliminar" method="POST">
                    <input type="hidden" name="id" value="<?php echo $articulo->id; ?>">
    
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