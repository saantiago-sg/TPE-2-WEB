<?php
/* Smarty version 3.1.33, created on 2019-11-28 23:08:54
  from 'C:\xampp\htdocs\TPE-WEB-II\templates\usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de04576e45d95_39239004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f929a9c82b47e718a2e5e6fb083eb5c35a61023' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB-II\\templates\\usuarios.tpl',
      1 => 1574879212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de04576e45d95_39239004 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="fondo-ultimas-noticias pr-3 pl-3 pb-3 pt-0 pt-3 mt-2">
<h5 class="h5-responsive font-weight-bold text-center titulo-fondo py-2 w-100 text-white">Usuarios</h5>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
if ($_smarty_tpl->tpl_vars['usuario']->value['usuario'] != "Faacundito123") {?>
<div class="row">
    <div class="col-8"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['usuario'];?>
</div>
    <div class="col-2"><a href="borrar-usuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/img/borrar.png" alt=""></a></div>
    <div class="col-2"><a href="permiso-usuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
"> 
    <?php if ($_smarty_tpl->tpl_vars['usuario']->value['isAdmin'] != 0) {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/img/remove-admin.png" alt=""></a></div>
    <?php } else { ?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/img/add-admin.png" alt=""></a></div>
    <?php }?>
</div>
<?php }?>  
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section>

<?php }
}
