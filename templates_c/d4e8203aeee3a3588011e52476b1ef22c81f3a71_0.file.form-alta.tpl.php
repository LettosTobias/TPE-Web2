<?php
/* Smarty version 4.2.1, created on 2022-10-17 04:06:47
  from 'C:\xampp\HTDOCS\Web-2\TPE1\templates\form-alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cb8b701ddf4_92795575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4e8203aeee3a3588011e52476b1ef22c81f3a71' => 
    array (
      0 => 'C:\\xampp\\HTDOCS\\Web-2\\TPE1\\templates\\form-alta.tpl',
      1 => 1665972405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634cb8b701ddf4_92795575 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_SESSION['USER_ID']))) {?>

         
    <div class="formularioCont">
        <form action="add" method="POST" enctype="multipart/form-data">
            
            
                <label for="pelicula" value=""><b>Pelicula:</b></label>
                <input type="text" name="pelicula" value="">
                <label for="estreno" value=""><b>Estreno:</b></label>
                <input type="text" name="estreno" value="">
                    <label for="genero" value=""><b>Genero:</b></label>
                        <select name="genero">
                        <option selected>...</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genders']->value, 'gender');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
                            <option><?php echo $_smarty_tpl->tpl_vars['gender']->value->genero;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                <div class="imagenDesc">
                    <label for="descripcion" value=""> <b> Descripcion:</b></label>
                    <input type="text" name="descripcion" value="">
            
                    <div class="input-group mb-3">
                        <label  for="inputGroupFile01"><b>Imagen:</b> </label>
                        <input type="file" class="form-control" id="inputGroupFile01">
                    </div>
                </div>    
                <input class="btn btn-dark" type="submit" value="Enviar" >
            </form>
       
    </div>
    
   
<?php }
}
}
