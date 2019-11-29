<?php
/* Smarty version 3.1.33, created on 2019-11-28 23:07:50
  from 'C:\xampp\htdocs\TPE-WEB-II\templates\noticiaConComentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de04536caf797_45427252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af4f5879212b90e9199ecf0d19d2153e5fd147b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB-II\\templates\\noticiaConComentarios.tpl',
      1 => 1574977195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:vue/comentarios.tpl' => 1,
  ),
),false)) {
function content_5de04536caf797_45427252 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-lg-12">

    <section class="text-center fondo-ultimas-noticias pr-3 pl-3 pb-3 pt-0 pt-3 mb-3">
        <article class="row">
            <div class="col-lg-12">
                <h3 class="h2-responsive font-weight-bold mb-1 titulo-fondo py-3 w-100 text-white">
                    <?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo'];?>

                </h3>
                <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
                    <img width=100%; src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['noticia']->value['imagen'];?>
.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-12">
                <p><?php echo $_smarty_tpl->tpl_vars['noticia']->value['descripcion'];?>
</p>
                <p>Fecha : <?php echo $_smarty_tpl->tpl_vars['noticia']->value['fecha'];?>
</p>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clubes']->value, 'club');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['club']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['club']->value['id_club'] == $_smarty_tpl->tpl_vars['noticia']->value['id_club']) {?>
                <p>Club : <span class="resaltado"><?php echo $_smarty_tpl->tpl_vars['club']->value['nombre_club'];?>
</span></p>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value == true) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/borrar/<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
" class="btn  btn-md text-white btnBorrar">Borrar</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/editar/<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
" class="btn  btn-md text-white btnEditar">Editar</a>
                <?php }?>

            </div>
        </article>

        <?php $_smarty_tpl->_subTemplateRender("file:vue/comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
" name="id-noticia" hidden>
        <?php if ((($_smarty_tpl->tpl_vars['isLogged']->value == true) || ($_smarty_tpl->tpl_vars['isAdmin']->value == true))) {?>

        <form action="form-comentario" method="post" id="form-comentario">
            <div class="form-group text-left">
                <label for="exampleFormControlSelect1">Puntuación</label>
                <select class="form-control" id="exampleFormControlSelect1" name="puntos">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>

            <div class="form-group text-left">
                <label for="exampleFormControlTextarea1">Que te parecio la noticia</label>
                <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentario">
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id-usuario" hidden>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
" name="nombre" hidden>
                <button type="submit" class="btn mt-2 btnCrear text-white bg-dark" id="btn-comment">Comentar</button>
            </div>
        </form>
        <?php }?>



    </section>
</div>
<?php }
}
