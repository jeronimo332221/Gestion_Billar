


<?php
    include_once __DIR__ . '/../templates/barra.php';
    include_once __DIR__ . '/../templates/alertas.php';
    ?>
    <h1 class="nombre-pagina">Cortar Mesa</h1>

<form action="" method="POST" class="formulario">
   
    <nav class="nav">
        <p>Acumulado Total <input name="cumulado" type="number" value="<?php echo $total;   ?>"> </p>

        <p>Fecha De Cierre=> <input name="fecha" type="time"></p>
        
        <select name="game" id="">
            <option name="game" value="1">Billar Chico</option>
            <option name="game" value="2">Billar Grande</option>
            <option name="game" value="3">Blackjack</option>
        </select>
        <p>Cortar en => <input type="number" name="cortar_en" id=""></p>
     
        

    </nav>


   
    <input type="submit" class="boton" value="Cortar Mesa ">
</form>