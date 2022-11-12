<?php
/* Smarty version 4.2.1, created on 2022-11-12 22:42:36
  from 'C:\xampp\HTDOCS\Web-2\TPE1\templates\movieHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6370134cd35c91_60611170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46076e696c0310d0f69314650cb95824869b58bb' => 
    array (
      0 => 'C:\\xampp\\HTDOCS\\Web-2\\TPE1\\templates\\movieHome.tpl',
      1 => 1668289354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6370134cd35c91_60611170 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="list-group">
    <li class="list-group-item list-group-item-action active" aria-current="true"><b>GENEROS</b></li>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genders']->value, 'gender');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
        
        <li class='list-group-item d-flex justify-content-between align-items-center'>

            <a class="list-group-item" href="gender/<?php echo $_smarty_tpl->tpl_vars['gender']->value->id_genero;?>
" ><?php echo $_smarty_tpl->tpl_vars['gender']->value->genero;?>
</a>
            <div class="ml-auto">
                <a type="button" href="updateGender/<?php echo $_smarty_tpl->tpl_vars['gender']->value->genero;?>
"><img src="<?php echo BASE_URL;?>
/img/edit(2).png"></a>
                <a type="button" href="deleteGender/<?php echo $_smarty_tpl->tpl_vars['gender']->value->genero;?>
"><img src="<?php echo BASE_URL;?>
/img/delete.png"></a>
            </div>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>





<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
