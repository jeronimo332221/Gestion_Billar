<div class="campo">
    <label for="nombre">Nombre Cliente</label>
    <input 
        type="text"
        id="nombre"
        placeholder="Nombre Cliente"
        name="nombre"
        value="<?php echo $cliente->nombre ?? "";?>"
    />
    <label for="nombre">Apodo Cliente</label>
    <input 
        type="text"
        id="apodo"
        placeholder="Apodo Cliente"
        name="apodo"
        value="<?php echo $cliente->apodo ?? "";?>"
    />
</div>

<div class="campo">
    <label for="telefono">Telefono Cliente</label>
    <input 
        type="number"
        id="telefono"
        placeholder="Telefono del Cliente"
        name="telefono"
        value="<?php echo $cliente->telefono ?? ""; ?>"
    />
    <label for="mesaId">Mesa = </label>
    <input 
        type="text"
        id="mesaId"
        placeholder="Mesa Id"
        name="mesaId"
        value="<?php echo $cliente->mesaId ?? ""; ?>"
    />
</div>
