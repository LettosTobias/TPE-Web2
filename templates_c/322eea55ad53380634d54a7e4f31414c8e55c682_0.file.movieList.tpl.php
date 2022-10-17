<?php
/* Smarty version 4.2.1, created on 2022-10-16 00:21:27
  from 'C:\xampp\HTDOCS\Web-2\TPE1\templates\movieList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b3267cf8112_74206691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '322eea55ad53380634d54a7e4f31414c8e55c682' => 
    array (
      0 => 'C:\\xampp\\HTDOCS\\Web-2\\TPE1\\templates\\movieList.tpl',
      1 => 1665872486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form-alta.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634b3267cf8112_74206691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:form-alta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selected']->value, 'movie');
$_smarty_tpl->tpl_vars['movie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->do_else = false;
?>

        <h1><?php echo $_smarty_tpl->tpl_vars['movie']->value->id_genero_fk;?>
</h1>  
        <?php break 1;?> 
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>        
  
  <table class="table table-dark table-striped">
        <thead>
            <th></th>   
            <th>Pelicula</th>   
            <th>Estreno</th>
            <th>Descripcion</th>
            <th>Valoracion</th>
            <th>Imagen</th>
            <?php if ((isset($_SESSION['USER_ID']))) {?> <th>Acciones</th><?php }?>
        </thead>
    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selected']->value, 'movie');
$_smarty_tpl->tpl_vars['movie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->do_else = false;
?>
        <tbody> 
            <tr>
                <td> <a href="movie/<?php echo $_smarty_tpl->tpl_vars['movie']->value->id;?>
"> <img src="<?php echo BASE_URL;?>
/img/expand_circle.png"> </a> </td>
                <td><?php echo $_smarty_tpl->tpl_vars['movie']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['movie']->value->estreno;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['movie']->value->descripcion;?>
</td>

                <td>
                   <button class="btn <?php if ($_smarty_tpl->tpl_vars['movie']->value->valoracion) {?>btn-success<?php }?>" type ="button" <?php if (!(isset($_SESSION['USER_ID']))) {?> disabled <?php }?>> 
                    
                        <a  href="valoracion/1/<?php echo $_smarty_tpl->tpl_vars['movie']->value->id;?>
" > <img src="<?php echo BASE_URL;?>
/img/like.png"> </a>
                    
                    </button>

                   <button class="btn <?php if (!$_smarty_tpl->tpl_vars['movie']->value->valoracion) {?>btn-danger<?php }?>" type ="button" <?php if (!(isset($_SESSION['USER_ID']))) {?> disabled <?php }?>> 
                        
                        <a  href="valoracion/0/<?php echo $_smarty_tpl->tpl_vars['movie']->value->id;?>
" > <img src="<?php echo BASE_URL;?>
/img/dislike.png"> </a>
                    
                    </button>       
                </td>
              
                <td>
                        <?php if ((isset($_smarty_tpl->tpl_vars['movie']->value->Imagen))) {?> <img class="imagenInput"  src="<?php echo $_smarty_tpl->tpl_vars['movie']->value->Imagen;?>
"><?php }?>
                
                </td>
                <?php if ((isset($_SESSION['USER_ID']))) {?>
                    <td>
                        <a class="btn btn-danger" type ="button" href="delete/<?php echo $_smarty_tpl->tpl_vars['movie']->value->id;?>
">Borrar</a>
                        <a class="btn btn-primary" type ="button" href="update/<?php echo $_smarty_tpl->tpl_vars['movie']->value->id;?>
"> <img src="<?php echo BASE_URL;?>
/img/edit.png"></a>
                    </td>
                <?php }?>          
            </tr>      
        </tbody>
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   
    </table>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
