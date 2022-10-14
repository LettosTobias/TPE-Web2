<?php
/* Smarty version 4.2.1, created on 2022-10-12 15:43:25
  from 'C:\xampp\HTDOCS\Web-2\TPE1\templates\formulario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6346c47de0ddf5_42669917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '900b11084e12c7352d3f945a3d28a1df52983bf6' => 
    array (
      0 => 'C:\\xampp\\HTDOCS\\Web-2\\TPE1\\templates\\formulario.tpl',
      1 => 1665582185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6346c47de0ddf5_42669917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    


<form id="formUpdate" action="<?php echo $_smarty_tpl->tpl_vars['actionForm']->value;?>
"   method="POST">

    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->id;?>
" name="id"> 
    <label for="pelicula" value="">Pelicula</label>
    <input type="text" name="pelicula" value="<?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->nombre;?>
">

    <label for="estreno" value="">Estreno</label>
    <input type="text" name="estreno" value="<?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->estreno;?>
">

        <label for="genero" value="">Genero</label>
            <select name="genero">
                <option selected value="<?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->id_genero_fk;?>
"><?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->id_genero_fk;?>
</option>
            </select>

    <label for="descripcion" value="">Descripcion</label>
    <input type="text" name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->descripcion;?>
">


<input class="btn btn-dark" type="submit" value="Enviar" >

</form><?php }
}
