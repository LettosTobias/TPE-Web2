

    {if isset($smarty.session.USER_ID)}

         
        <div class="formularioCont">
            <form action="addGender" method="POST">
                
                 <div class="input-group input-group-sm mb-3">
                 <span class="input-group-text" id="inputGroup-sizing-sm">GENERO</span>
                 <input type="text" name="generoHome" value="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                 </div>  


               
                    <input class="btn btn-dark" type="submit" value="Enviar">
                </form>
           
        </div>
        
       
    {/if}