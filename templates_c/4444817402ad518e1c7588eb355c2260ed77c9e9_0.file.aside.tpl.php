<?php
/* Smarty version 3.1.33, created on 2019-11-28 23:06:28
  from 'C:\xampp\htdocs\TPE-WEB-II\templates\aside.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de044e4a319d1_13486786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4444817402ad518e1c7588eb355c2260ed77c9e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB-II\\templates\\aside.tpl',
      1 => 1574873331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de044e4a319d1_13486786 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="fondo-ultimas-noticias pr-3 pl-3 pb-3 pt-0 pt-3">
<div class="list-group">
  <h5 class="h5-responsive font-weight-bold titulo-fondo py-2 pl-2 pr-2 w-100 text-white">Clubes</h5>
  <div class="row">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clubes']->value, 'club');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['club']->value) {
?>
  <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value == true) {?>
  <div class="col-8"><a href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/filtrar/<?php echo $_smarty_tpl->tpl_vars['club']->value['id_club'];?>
" class="list-group-item list-group-item-action clubes" tabindex="-1" aria-disabled="true"><?php echo $_smarty_tpl->tpl_vars['club']->value['nombre_club'];?>
</a></div>
  <div class="col-2"><a href="borrar-club/<?php echo $_smarty_tpl->tpl_vars['club']->value['id_club'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/img/borrar.png" alt=""></a></div>
  <div class="col-2"><a href="editar-club/<?php echo $_smarty_tpl->tpl_vars['club']->value['id_club'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/img/edit.png" alt=""></a></div>
  <?php } else { ?>
    <div class="col-12"><a href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/filtrar/<?php echo $_smarty_tpl->tpl_vars['club']->value['id_club'];?>
" class="list-group-item list-group-item-action clubes" tabindex="-1" aria-disabled="true"><?php echo $_smarty_tpl->tpl_vars['club']->value['nombre_club'];?>
</a></div>
  <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
</div>
</section><?php }
}
