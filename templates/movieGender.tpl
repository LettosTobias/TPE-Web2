
{include file="form-alta.tpl"}


   

        <h1>NOMBRE DEL GENERO SELECCIONADO</h1>
     
    
      <table class="table table-dark table-striped">
        <thead>
            <th>Pelicula</th>   
            <th>Estreno</th>
            <th>Descripcion</th>
            <th>Valoracion</th>
            <th>Acciones</th>
        </thead>
    {foreach from=$selected item=$movie}
   
        <tbody> 
            <tr>
                <td>{$movie->nombre}</td>
                <td>{$movie->estreno}</td>
                <td>{$movie->descripcion}</td>
                <td>
                    <a class="btn 
                              {if $movie->valoracion}btn-success{/if}"
                        type ="button" href="valoracion/1/{$movie->nombre}"> <img src="{BASE_URL}/img/like.png">
                    </a>
    
                    <a class="btn
                              {if !$movie->valoracion}btn-danger{/if}"
                          type ="button" href="valoracion/0/{$movie->nombre}"><img src="{BASE_URL}/img/dislike.png">
                    </a>
                    
                    
                </td>
                <td>
                <a class="btn btn-danger" type ="button" href="delete/{$movie->nombre}">Borrar</a>
                <a class="btn btn-primary" type ="button" href="update/{$movie->nombre}"> <img src="{BASE_URL}/img/edit.png"></a>
                
                </td>
                          
            </tr>      
        </tbody>
   
    {/foreach}
   
    </table>

    {include file="footer.tpl"}

