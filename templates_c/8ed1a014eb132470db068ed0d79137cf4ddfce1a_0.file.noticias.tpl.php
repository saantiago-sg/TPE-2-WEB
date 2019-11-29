<?php
/* Smarty version 3.1.33, created on 2019-11-28 23:24:00
  from 'C:\xampp\htdocs\TPE-WEB-II\templates\noticias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de049000098b7_75607829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ed1a014eb132470db068ed0d79137cf4ddfce1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB-II\\templates\\noticias.tpl',
      1 => 1574979819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de049000098b7_75607829 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['noticia']->value, 'posteado');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['posteado']->value) {
?>
<section class="text-center fondo-ultimas-noticias pr-3 pl-3 pb-3 pt-0 pt-3 mb-3">
    <article class="row">
        <div class="col-lg-12">
             <h3 class="h2-responsive font-weight-bold mb-1 titulo-fondo py-3 w-100 text-white"><a href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/noticia/<?php echo $_smarty_tpl->tpl_vars['posteado']->value['id_noticia'];?>
"><span class="estiloTitulo"><?php echo $_smarty_tpl->tpl_vars['posteado']->value['titulo'];?>
</span></a>
            </h3>
            <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
                <img width=100%; src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['posteado']->value['imagen'];?>
.jpg" alt="">
            </div>
        </div>
        <div class="col-lg-12">
            <p><?php echo $_smarty_tpl->tpl_vars['posteado']->value['descripcion'];?>
</p>
            <p>Fecha : <?php echo $_smarty_tpl->tpl_vars['posteado']->value['fecha'];?>
</p>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clubes']->value, 'club');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['club']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['club']->value['id_club'] == $_smarty_tpl->tpl_vars['posteado']->value['id_club']) {?>
            <p>Club : <span class="resaltado"><?php echo $_smarty_tpl->tpl_vars['club']->value['nombre_club'];?>
</span></p>
            <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value == true) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/borrar/<?php echo $_smarty_tpl->tpl_vars['posteado']->value['id_noticia'];?>
" class="btn  btn-md text-white btnBorrar">Borrar</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/editar/<?php echo $_smarty_tpl->tpl_vars['posteado']->value['id_noticia'];?>
" class="btn  btn-md text-white btnEditar">Editar</a>
            <?php }?>
        </div>
    </article>
</section>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
