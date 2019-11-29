<?php
/* Smarty version 3.1.33, created on 2019-11-29 01:58:02
  from 'C:\xampp\htdocs\proyectos\1-TPE-FINALIZADO\TPE-WEB-II\templates\agregarNoticia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de06d1a432f87_75854054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b86fc909036a719dc840f38efdd527e3da97f76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\1-TPE-FINALIZADO\\TPE-WEB-II\\templates\\agregarNoticia.tpl',
      1 => 1574949883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:usuarios.tpl' => 1,
  ),
),false)) {
function content_5de06d1a432f87_75854054 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Oscurin</title>
</head>

<body>

<section class="fondo-ultimas-noticias pr-3 pl-3 pb-3 pt-0 pt-3">
<div class="abm">
<form action="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/agregar" method="post">
<h5 class="h5-responsive font-weight-bold text-center titulo-fondo py-2 w-100 text-white">Agregar una noticia</h5>
  <div class="form-group small">
  <label for="exampleFormControlFile1" class="mt-3" >Titulo de la noticia</label>
  <input class="form-control" type="text" name="titulo">
  <label for="exampleFormControlFile1" class="mt-3" >Descripcion de la noticia</label>
  <input class="form-control" type="text" name="descripcion">
  <label for="exampleFormControlFile1" class="mt-3" >Fecha de publicacion</label>
  <input class="form-control" type="date" name="fecha">
  <select id="inputState" class="form-control mt-3" name="club">
        <option selected>Elige Un Club</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clubes']->value, 'club');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['club']->value) {
?>
          <option><?php echo $_smarty_tpl->tpl_vars['club']->value['nombre_club'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
      </select>
  <label for="exampleFormControlFile1" class="mt-3" >Nombre de la imagen</label>
  <input class="form-control" type="text" name="imagen">
  </div>
  <button type="submit" class="btn mb-2 btnCrear text-white">Crear una nueva noticia</button>
</form>

</div>
</section>

<section class="fondo-ultimas-noticias pr-3 pl-3 pb-3 pt-0 pt-3 mt-2">
<form action="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/agregarClub" method="post">
  <div class="form-group small">
  <label for="exampleFormControlFile1" class="mt-3" >Ingrese un nuevo club</label>
  <input class="form-control mb-3" type="text" name="club">
  <button type="submit" class="btn mb-2 btnCrear text-white">Crear un nuevo club</button>
</form>

</div>

</section>

<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value == true) {?>
    
<?php $_smarty_tpl->_subTemplateRender("file:usuarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

</body>

</html><?php }
}
