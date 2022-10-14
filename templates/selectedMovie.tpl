


<div class="card" style="width: 18rem;">
    <img src="{$selectedMovie->Imagen}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{$selectedMovie->nombre}</h5>
        <p class="card-text">{$selectedMovie->descripcion}</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{$selectedMovie->estreno}</li>
        <li class="list-group-item">

            {if $selectedMovie->valoracion} <b class="success">VALORADA BUENA</b>{/if}

            {if !$selectedMovie->valoracion} VALORADA MALA{/if}
        
        </li>
        <li class="list-group-item">A third item</li>
    </ul>
    <div class="card-body">
        <a href="gender/{$selectedMovie->id_genero_fk}" class="btn btn-dark">Atras</a>
        <a href="#" class="btn btn-dark">Home</a>
     
        
    </div>
</div>


{include file="footer.tpl"}