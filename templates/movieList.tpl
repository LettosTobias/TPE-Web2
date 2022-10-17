
{include file="form-alta.tpl"}




    {foreach from=$selected item=$movie}

        <h1>{$movie->id_genero_fk}</h1>  
        {break} 
    {/foreach}        
  
  <table class="table table-dark table-striped">
        <thead>
            <th></th>   
            <th>Pelicula</th>   
            <th>Estreno</th>
            <th>Descripcion</th>
            <th>Valoracion</th>
            <th>Imagen</th>
            {if isset($smarty.session.USER_ID)}<th>Acciones</th>{/if}
        </thead>
    
        {foreach from=$selected item=$movie}
        <tbody> 
            <tr>
                <td> <a href="movie/{$movie->id}"> <img src="{BASE_URL}/img/expand_circle.png"> </a> </td>
                <td>{$movie->nombre}</td>
                <td>{$movie->estreno}</td>
                <td>{$movie->descripcion}</td>

                <td>
                   <button class="btn {if $movie->valoracion}btn-success{/if}" type ="button" {if !isset($smarty.session.USER_ID)} disabled {/if}> 
                    
                        <a  href="valoracion/1/{$movie->id}" > <img src="{BASE_URL}/img/like.png"> </a>
                    
                    </button>

                   <button class="btn {if !$movie->valoracion}btn-danger{/if}" type ="button" {if !isset($smarty.session.USER_ID)} disabled {/if}> 
                        
                        <a  href="valoracion/0/{$movie->id}" > <img src="{BASE_URL}/img/dislike.png"> </a>
                    
                    </button>       
                </td>
              
                <td>
                        {if isset($movie->Imagen)} <img class="imagenInput" src="{$movie->Imagen}">{/if}
                
                </td>
                {if isset($smarty.session.USER_ID)}
                    <td>
                        <a class="btn btn-danger" type ="button" href="delete/{$movie->id}">Borrar</a>
                        <a class="btn btn-primary" type ="button" href="update/{$movie->id}"> <img src="{BASE_URL}/img/edit.png"></a>
                    </td>
                {/if}          
            </tr>      
        </tbody>
       {/foreach}
   
    </table>

    {include file="footer.tpl"}

