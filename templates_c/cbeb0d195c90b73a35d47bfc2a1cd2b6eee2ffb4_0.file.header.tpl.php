<?php
/* Smarty version 4.2.1, created on 2022-11-09 21:46:51
  from 'C:\xampp\HTDOCS\Web-2\TPE1\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636c11bbd40061_54301884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbeb0d195c90b73a35d47bfc2a1cd2b6eee2ffb4' => 
    array (
      0 => 'C:\\xampp\\HTDOCS\\Web-2\\TPE1\\templates\\header.tpl',
      1 => 1668026773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636c11bbd40061_54301884 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img/logo-peliculas.png">
    <link rel="stylesheet" href="css/estiloMovie.css" >
    <title>Peliculas</title>
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="home">Peliculas</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Generos
                </a>
                <ul class="dropdown-menu">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genders']->value, 'gender');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
                  
                  <li><a class="dropdown-item" href="gender/<?php echo $_smarty_tpl->tpl_vars['gender']->value->id_genero;?>
"><?php echo $_smarty_tpl->tpl_vars['gender']->value->genero;?>
</a></li>
    
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
                
                <?php if (!(isset($_SESSION['USER_ID']))) {?>
                  
                    <button class= "btn btn-outline-dark"> <a class="nav-link" href="login" >Login</a></button>
                  
                <?php } else { ?> 
                  <button class= "btn btn-outline-dark"> <a class="nav-link" href="logout" > Logout/ <?php echo $_SESSION['USER_NAME'];?>
</a></button>   
                <?php }?>

            </form>
          </div>
        </div>
      </nav>
      
      

    </header>

    <main class="container"><?php }
}
