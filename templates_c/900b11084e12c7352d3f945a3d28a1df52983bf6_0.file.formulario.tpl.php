<?php
/* Smarty version 4.2.1, created on 2022-11-12 21:27:25
  from 'C:\xampp\HTDOCS\Web-2\TPE1\templates\formulario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637001adda0202_67052043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '900b11084e12c7352d3f945a3d28a1df52983bf6' => 
    array (
      0 => 'C:\\xampp\\HTDOCS\\Web-2\\TPE1\\templates\\formulario.tpl',
      1 => 1668284844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637001adda0202_67052043 (Smarty_Internal_Template $_smarty_tpl) {
?>



<form id="formUpdate" action="<?php echo $_smarty_tpl->tpl_vars['actionForm']->value;?>
"   method="POST">
    
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->id;?>
" name="id">
    
    <div class="input-group input-group-sm mb-3">
    <span class="input-group-text" id="inputGroup-sizing-sm">Pelicula</span>
    <input type="text" name="pelicula" value="<?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->nombre;?>
" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <div class="input-group input-group-sm mb-3">
    <span class="input-group-text" id="inputGroup-sizing-sm">Estreno</span>
    <input type="text" name="estreno" value="<?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->estreno;?>
" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <div class="input-group input-group-sm mb-3">
    <span class="input-group-text" id="inputGroup-sizing-sm">Genero</span>
        <select name="genero">
            <option value="<?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->id_genero_fk;?>
"><?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->genero;?>
</option>
               
        </select>

    </div>
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Descripcion</span>
        <input type="text" name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->descripcion;?>
" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
   

    <input class="btn btn-dark" type="submit" value="Enviar" >

</form><?php }
}
