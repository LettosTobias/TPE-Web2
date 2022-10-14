<?php
/* Smarty version 4.2.1, created on 2022-10-13 21:40:49
  from 'C:\xampp\HTDOCS\Web-2\TPE1\templates\selectedMovie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634869c142bf39_08170310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e41eabad1429c1aa6ceb0924c6e1c209dc45f8ca' => 
    array (
      0 => 'C:\\xampp\\HTDOCS\\Web-2\\TPE1\\templates\\selectedMovie.tpl',
      1 => 1665690047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634869c142bf39_08170310 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="card" style="width: 18rem;">
    <img src="<?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->Imagen;?>
" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->nombre;?>
</h5>
        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->descripcion;?>
</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->estreno;?>
</li>
        <li class="list-group-item">

            <?php if ($_smarty_tpl->tpl_vars['selectedMovie']->value->valoracion) {?> <b class="success">VALORADA BUENA</b><?php }?>

            <?php if (!$_smarty_tpl->tpl_vars['selectedMovie']->value->valoracion) {?> VALORADA MALA<?php }?>
        
        </li>
        <li class="list-group-item">A third item</li>
    </ul>
    <div class="card-body">
        <a href="gender/<?php echo $_smarty_tpl->tpl_vars['selectedMovie']->value->id_genero_fk;?>
" class="btn btn-dark">Atras</a>
        <a href="#" class="btn btn-dark">Home</a>
     
        
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
