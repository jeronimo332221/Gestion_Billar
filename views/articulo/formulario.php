<div class="campo">
    <label for="nombre">Nombre articulo</label>
    <input 
        type="text"
        id="nombre"
        placeholder="Nombre Articulo"
        name="nombre"
        value="<?php echo $articulo->nombre ?? "";?>"
    />
</div>
<div class="campo">
    <label for="rubro">Rubro articulo</label>
    <input 
        type="number"
        id="rubro"
        placeholder="Rubro del Articulo"
        name="rubro"
        value="<?php echo $articulo->rubro ?? "";?>"
    />
    <label for="stockMin">Stock</label>
    <input 
        type="number"
        id="stockMin"
        placeholder="Stock Minimo"
        name="stockMin"
        value="<?php echo $articulo->stockMin ?? ""; ?>"
    />
    <label for="precio">Precio Articulo</label>
    <input 
        type="number"
        id="precio"
        placeholder="Precio del Articulo"
        name="precio"
        value="<?php echo $articulo->precio ?? ""; ?>"
    />
</div>

<div class="campo">
    
    <label for="fechaRepo">Reposicion</label>
    <input 
        type="date"
        id="fechaRepo"
        placeholder="Fecha De Reposicion"
        name="fechaRepo"
        value="<?php echo $articulo->fechaRepo ?? ""; ?>"
    />
    <label for="fechaRepoCocina">Reposicion Cocina</label>
    <input 
        type="date"
        id="fechaRepoCocina"
        placeholder="Reposicion de Cocina"
        name="fechaRepoCocina"
        value="<?php echo $articulo->fechaRepoCocina ?? ""; ?>"
    />
    <label for="stockCocina">Stock De Cocina</label>
    <input 
       type="number"
       id="stockCocina"
       placeholder="Stock de Cocina"
       name="stockCocina"
       value="<?php echo $articulo->stockCocina ?? ""; ?>"
    />
   
   
</div>

<div class="campo">
    <label for="existencia">Existencia</label>
    <input 
        type="number"
        id="existencia"
        placeholder="Existencia del articulo"
        name="existencia"
        value="<?php echo $articulo->existencia ?? ""; ?>"
    />
    <label for="fraccion">Fraccion</label>
    <input 
        type="number"
        id="fraccion"
        placeholder="Fraccion del articulo"
        name="fraccion"
        value="<?php echo $articulo->fraccion ?? ""; ?>"
    />
     <label for="cantRep">Cantidad Reposicion</label>
    <input 
        type="number"
        id="cantRep"
        placeholder="Cantidad Reposicion del articulo"
        name="cantRep"
        value="<?php echo $articulo->cantRep ?? ""; ?>"
    />

</div>
