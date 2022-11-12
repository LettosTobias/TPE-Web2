
{include file="form-alta.tpl"}




    
    {foreach from=$selected item=$item}
        
   

        <h1>{$item->genero}</h1>
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
    
        
        <tbody> 
        {foreach from=$selected item=$item}
            <tr>
                <td> <a href="movie/{$item->id}"> <img src="{BASE_URL}/img/expand_circle.png"> </a> </td>
                <td>{$item->nombre}</td>
                <td>{$item->estreno}</td>
                <td>{$item->descripcion}</td>

                <td>
                   <button class="btn {if $item->valoracion}btn-success{/if}" type ="button" {if !isset($smarty.session.USER_ID)} disabled {/if}> 
                    
                        <a  href="valoracion/1/{$item->id}" > <img src="{BASE_URL}/img/like.png"> </a>
                    
                    </button>

                   <button class="btn {if !$item->valoracion}btn-danger{/if}" type ="button" {if !isset($smarty.session.USER_ID)} disabled {/if}> 
                        
                        <a  href="valoracion/0/{$item->id}" > <img src="{BASE_URL}/img/dislike.png"> </a>
                    
                    </button>       
                </td>
              
                <td>
                        {if isset($item->Imagen)} <img class="imagenInput" src="{$item->Imagen}">{/if}
                
                </td>
                {if isset($smarty.session.USER_ID)}
                    <td>
                        <a class="btn btn-danger" type ="button" href="delete/{$item->id}">Borrar</a>
                        <a class="btn btn-primary" type ="button" href="update/{$item->id}"> <img src="{BASE_URL}/img/edit.png"></a>
                    </td>
                {/if}          
            </tr>  
            {/foreach}    
        </tbody>
       
   
    </table>

    {include file="footer.tpl"}

