
{if isset($smarty.session.USER_ID)}

         
    <div class="formularioCont">
        <form action="add" method="POST" enctype="multipart/form-data">
            
            
                <label for="pelicula" value=""><b>Pelicula:</b></label>
                <input type="text" name="pelicula" value="" required>
                <label for="estreno" value=""><b>Estreno:</b></label>
                <input type="text" name="estreno" value="" required>
                    <label for="genero" value=""><b>Genero:</b></label>
                        <select name="genero" required>
                        <option selected>...</option>
                        {foreach from=$genders item=$gender}
                            <option>{$gender->genero}</option>
                        {/foreach}
                        </select>
                <div class="imagenDesc">
                    <label for="descripcion" value=""> <b> Descripcion:</b></label>
                    <input type="text" name="descripcion" value="" required>
            
                    <div class="input-group mb-3">
                        <label  for="inputGroupFile01"><b>Imagen:</b> </label>
                        <input type="file" class="form-control" name ="imagen" id="inputGroupFile01">
                    </div>
                </div>    
                <input class="btn btn-dark" type="submit" value="Enviar">
            </form>
       
    </div>
    
   
{/if}