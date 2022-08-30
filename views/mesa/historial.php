

<?php 
    include_once __DIR__ . '/../templates/barra.php';
  
    ?>
    <h1 class="nombre-pagina">HISTORIAL CORTES DE MESA</h1>

<section>
    <h3><?php foreach($historial as $h) { ?>
         <div class="cliente-contenedor">
            <h4><?php echo json_encode($h->id); ?></h4> 
            <p><?php echo json_encode($h->fecha); ?></p> 
            <p><?php echo json_encode($h->cumulado); ?></p> 
            <p><?php echo json_encode($h->cortar_en); ?></p> 
            <p><?php echo json_encode(round($h->cumulado / $h->cortar_en)); ?></p> 
            <p><?php echo json_encode($h->game); ?></p> 
        
   
           
            
            
        </div>
    <?php } ?></h3>
</section>
<?php 
    $script = "
        <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script src='build/js/app.js'></script>
    ";
?>