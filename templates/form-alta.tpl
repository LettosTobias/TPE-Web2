
    <div class="formularioCont">
        <form action="add" method="POST" enctype="multipart/form-data">

            {* <input type="hidden" value="{$movie->id}" name="id"> *}
            <label for="pelicula" value=""><b>Pelicula:</b></label>
            <input type="text" name="pelicula" value="">

            <label for="estreno" value=""><b>Estreno:</b></label>
            <input type="text" name="estreno" value="">

                <label for="genero" value=""><b>Genero:</b></label>
                    <select name="genero">
                        <option selected>...</option>
                        <option>Terror</option>
                        <option>Ciencia Ficcion</option>
                        <option>Romance</option>
                        <option>Suspenso</option>
                        <option>Accion</option>
                    </select>

            <label for="descripcion" value=""> <b> Descripcion:</b></label>
            <input type="text" name="descripcion" value="">

            <div>
                <div class="input-group mb-3">
                    <label  for="inputGroupFile01"><b>Imagen:</b> </label>
                    <input type="file" class="form-control" id="inputGroupFile01">
                </div>

            </div>    

            <input class="btn btn-dark" type="submit" value="Enviar" >
        </form>

    </div>