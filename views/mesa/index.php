<h1 class="nombre-pagina">Gestor De Mesas</h1>


<?php 
    include_once __DIR__ . '/../templates/barra.php';

?>

<section class="mesa">
    <?php foreach($mesas as $mesa) { ?>
        <a href="mesa/ver?id= <?php echo $mesa->id; ?>" class="mesa-contenedor <?php if($mesa->billar_type == 1){echo "mesa-billar-contenedor";} ?>">
            <h4 class="id-mesa"><?php echo $mesa->id; ?></h4> 
            <div class="mesa-listado">
                <?php foreach($clientes as $cliente) { ?>
                    
                    
                    <?php if($cliente->mesaId == $mesa->id){ ?>
                        <div class="cliente-contenedor">
                            <p class="mesa"> <?php echo $cliente->apodo ?>  </p>
                            <p class="mesa"> <?php echo $cliente->cumulado; ?>  </p>

                            
                            <div class="cliente-acciones">
                                
                                <form class="campo-articulo" action="/clienteArticulo/crear?id=<?php echo $cliente->id ?>" method="POST">
                                    <input type="hidden" name="id" >            
                                    <input type="submit" value="+" class="boton-agregar">
                                </form>
                            </div>
                            
                        </div>
                        
                    <?php }; ?>
                    
                <?php }  ; ?>
            </div>

            <div class="acciones-mesa">

                <form action="/cliente/eliminar" method="POST">
                    <input type="hidden" name="id" value="">
    
                    <input type="submit" value="X" class="boton-eliminar boton-eliminar-mesa">
                </form>
            </div>
            
        </a>
     <?php } ;?>
</section>

<?php 
    $script = "
        
    ";
?>