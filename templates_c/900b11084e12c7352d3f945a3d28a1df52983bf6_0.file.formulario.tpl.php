<?php
/* Smarty version 4.2.1, created on 2022-10-16 03:32:31
  from 'C:\xampp\HTDOCS\Web-2\TPE1\templates\formulario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b5f2fc77618_95281977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '900b11084e12c7352d3f945a3d28a1df52983bf6' => 
    array (
      0 => 'C:\\xampp\\HTDOCS\\Web-2\\TPE1\\templates\\formulario.tpl',
      1 => 1665876519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634b5f2fc77618_95281977 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
    <input type="text" name="pelicula" value="<?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->estreno;?>
" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <div class="input-group input-group-sm mb-3">
    <span class="input-group-text" id="inputGroup-sizing-sm">Genero</span>
        <select name="genero">
            <option selected value="<?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->id_genero_fk;?>
"><?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->id_genero_fk;?>
</option>
        </select>
    </div>
    <div class="input-group input-group-sm mb-3">
    <span class="input-group-text" id="inputGroup-sizing-sm">Descripcion</span>
    <input type="text" name="pelicula" value="<?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->descripcion;?>
" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
     

    <input class="btn btn-dark" type="submit" value="Enviar" >

</form><?php }
}
