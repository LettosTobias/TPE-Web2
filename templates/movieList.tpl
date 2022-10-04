
{include file="form-alta.tpl"}
 

  
    <div class="list-group"> 
  
            <a href="" class="list-group-item list-group-item-action active" aria-current="true">
                GENEROS
            </a>
        {foreach from=$genders item=$gender}
            <a href="gender/{$gender->genero}" class="list-group-item list-group-item-action">{$gender->genero}</a>
        {/foreach}
    </div>
 





{include file="footer.tpl"}