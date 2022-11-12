<?php
/* Smarty version 4.2.1, created on 2022-11-11 19:50:08
  from 'C:\xampp\HTDOCS\Web-2\TPE1\templates\formEditHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636e996067c4e2_50564918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00d536cfb35e3aa60c169cbf22f128ae192b228f' => 
    array (
      0 => 'C:\\xampp\\HTDOCS\\Web-2\\TPE1\\templates\\formEditHome.tpl',
      1 => 1668192606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636e996067c4e2_50564918 (Smarty_Internal_Template $_smarty_tpl) {
?>
       <?php if ((isset($_SESSION['USER_ID']))) {?>


        <div class="formularioCont">
            <form action="setGender" method="POST">
                            
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['selectedGenero']->value->id_genero;?>
" name="id">
                 <div class="input-group input-group-sm mb-3">
                 <span class="input-group-text" id="inputGroup-sizing-sm">GENERO</span>
                 <input type="text" name="generoHome" value="<?php echo $_smarty_tpl->tpl_vars['selectedGenero']->value->genero;?>
" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                 </div>  

                    <input class="btn btn-dark" type="submit" value="Enviar"> 
        
            </form>
           
        </div>
        
       
    <?php }?> <?php }
}
