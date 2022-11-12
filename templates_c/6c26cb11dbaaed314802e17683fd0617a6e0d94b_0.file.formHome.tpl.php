<?php
/* Smarty version 4.2.1, created on 2022-10-22 15:37:09
  from 'C:\xampp\HTDOCS\Web-2\TPE1\templates\formHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6353f20530f532_63755546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c26cb11dbaaed314802e17683fd0617a6e0d94b' => 
    array (
      0 => 'C:\\xampp\\HTDOCS\\Web-2\\TPE1\\templates\\formHome.tpl',
      1 => 1666445827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6353f20530f532_63755546 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_SESSION['USER_ID']))) {?>

         
        <div class="formularioCont">
            <form action="addGender" method="POST">
                
                 <div class="input-group input-group-sm mb-3">
                 <span class="input-group-text" id="inputGroup-sizing-sm">GENERO</span>
                 <input type="text" name="generoHome" value="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                 </div>  


               
                    <input class="btn btn-dark" type="submit" value="Enviar">
                </form>
           
        </div>
        
       
    <?php }
}
}
