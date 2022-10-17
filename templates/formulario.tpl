
{include file="header.tpl"}
    


<form id="formUpdate" action="{$actionForm}"   method="POST">
    
    <input type="hidden" value="{$selectedMovie->id}" name="id">
    
    <div class="input-group input-group-sm mb-3">
    <span class="input-group-text" id="inputGroup-sizing-sm">Pelicula</span>
    <input type="text" name="pelicula" value="{$selectedMovie->nombre}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <div class="input-group input-group-sm mb-3">
    <span class="input-group-text" id="inputGroup-sizing-sm">Estreno</span>
    <input type="text" name="estreno" value="{$selectedMovie->estreno}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <div class="input-group input-group-sm mb-3">
    <span class="input-group-text" id="inputGroup-sizing-sm">Genero</span>
        <select name="genero">
            <option selected value="{$selectedMovie->id_genero_fk}">{$selectedMovie->id_genero_fk}</option>
        </select>
    </div>
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Descripcion</span>
        <input type="text" name="descripcion" value="{$selectedMovie->descripcion}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
   

    <input class="btn btn-dark" type="submit" value="Enviar" >

</form>