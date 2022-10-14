<?php
/* Smarty version 4.2.1, created on 2022-10-13 21:43:31
  from 'C:\xampp\HTDOCS\Web-2\TPE1\templates\movieHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63486a63d23f52_90087289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46076e696c0310d0f69314650cb95824869b58bb' => 
    array (
      0 => 'C:\\xampp\\HTDOCS\\Web-2\\TPE1\\templates\\movieHome.tpl',
      1 => 1665690210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form-alta.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63486a63d23f52_90087289 (Smarty_Internal_Template $_smarty_tpl) {
?>

 

  
    <div class="list-group"> 
  
            <a href="" class="list-group-item list-group-item-action active" aria-current="true">
                GENEROS
            </a>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genders']->value, 'gender');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
            <a href="gender/<?php echo $_smarty_tpl->tpl_vars['gender']->value->genero;?>
" class="list-group-item list-group-item-action"><?php echo $_smarty_tpl->tpl_vars['gender']->value->genero;?>
</a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
 

<?php $_smarty_tpl->_subTemplateRender("file:form-alta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
