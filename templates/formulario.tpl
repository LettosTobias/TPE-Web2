
{include file="header.tpl"}
    


<form id="formUpdate" action="{$actionForm}"   method="POST">

    <input type="hidden" value="{$selectedMovie->id}" name="id"> 
    <label for="pelicula" value="">Pelicula</label>
    <input type="text" name="pelicula" value="{$selectedMovie->nombre}">

    <label for="estreno" value="">Estreno</label>
    <input type="text" name="estreno" value="{$selectedMovie->estreno}">

        <label for="genero" value="">Genero</label>
            <select name="genero">
                <option selected value="{$selectedMovie->id_genero_fk}">{$selectedMovie->id_genero_fk}</option>
            </select>

    <label for="descripcion" value="">Descripcion</label>
    <input type="text" name="descripcion" value="{$selectedMovie->descripcion}">


<input class="btn btn-dark" type="submit" value="Enviar" >

</form>