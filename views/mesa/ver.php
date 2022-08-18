<h1 class="nombre-pagina">Informacion Mesa</h1>

<?php
    include_once __DIR__ . '/../templates/barra.php';
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form method="POST" class="formulario">
    
    
    <div class="contenedor-clientes">
       
        <?php  foreach($clienteV as $clV) {$cumulado = 0; ?>
        <div class="contenedor-cliente-mesa">
            <div class="datos-mesa"> <h4><?php echo $clV->id  ?></h4><h4><?php echo $clV->nombre  ?></h4></div>
           
           
            <section class="articulos">

                
                <div class="articulos-list">
                    <?php 
                    foreach($artV as $aV) {
                        
                        if($clV->id == $aV->clienteId) {
                            foreach($articulos as $articulo) {
                                if($aV->articuloId == $articulo->id) {
                                 
                                    $cumulado += $articulo->precio;
                                   ?>
                                    <div class="articulo-list">
                                        <h4 class="articulo"><?php echo $articulo->id ?></h4>
                                        <h4 class="articulo"><?php echo $articulo->nombre ?></h4>
                                        <label class="articulo"><?php echo $articulo->precio ?></label>
                                        <form action="/clienteArticulo/eliminar?id=<?php echo $articulo->id ?>" method="POST" class="formulario">
                                            <a href="" class="boton-eliminar" value="X">
                                        </form>
                                        

                                    </div>
                                    
                               <?php }
                            }
                            
                        }
                    
            
                    }
       
                     ?>
                   
                    
  
                    <a class="campo-articulo" href="/clienteArticulo/crear?id=<?php echo $clV->id; ?>">+</a>
                </div>

                
                   
                <div class="cumulado"><p>Cumulado</p> 
                <h4><?php echo $cumulado;  ?></h4></div>

            </section>     
            
        </div>
    
    
    <?php }?>
    </div>
    
    

</form> 

<?php 
    $script = "

    ";
?>
