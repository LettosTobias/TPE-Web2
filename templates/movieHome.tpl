

    <ul class="list-group">
    <li class="list-group-item list-group-item-action active" aria-current="true"><b>GENEROS</b></li>
    {foreach from=$genders item=$gender}
        
        <li class='list-group-item d-flex justify-content-between align-items-center'>

            <a class="list-group-item" href="gender/{$gender->id_genero}" >{$gender->genero}</a>
            <div class="ml-auto">
                <a type="button" href="updateGender/{$gender->genero}"><img src="{BASE_URL}/img/edit(2).png"></a>
                <a type="button" href="deleteGender/{$gender->genero}"><img src="{BASE_URL}/img/delete.png"></a>
            </div>
        </li>
    {/foreach}
</ul>





{include file="footer.tpl"}