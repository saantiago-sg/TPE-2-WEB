<?php
/* Smarty version 3.1.33, created on 2019-11-29 01:14:32
  from 'C:\xampp\htdocs\proyectos\1-TPE-FINALIZADO\TPE-WEB-II\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de062e8ba8583_48892308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e27a87b30f1bded016e4469b24c3a6322b04252c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\1-TPE-FINALIZADO\\TPE-WEB-II\\templates\\home.tpl',
      1 => 1574967654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:noticias.tpl' => 3,
    'file:aside.tpl' => 3,
    'file:agregarNoticia.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5de062e8ba8583_48892308 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/css/estilo.css">
    <title>Oscurin</title>
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="centrar">
        <div class="row my-3">
            <?php if ($_smarty_tpl->tpl_vars['isLogged']->value == true) {?>
            <div class="col-9">
                <?php $_smarty_tpl->_subTemplateRender("file:noticias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div class="col-3">
                <?php $_smarty_tpl->_subTemplateRender("file:aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>

            <?php } elseif ($_smarty_tpl->tpl_vars['isAdmin']->value == true) {?>
            <div class="col-3">
                <?php $_smarty_tpl->_subTemplateRender("file:agregarNoticia.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div class="col-6">
                <?php $_smarty_tpl->_subTemplateRender("file:noticias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
            <div class="col-3">
                <?php $_smarty_tpl->_subTemplateRender("file:aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>

            <?php } else { ?>
            <div class="col-3">
                <?php $_smarty_tpl->_subTemplateRender("file:aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
            <div class="col-6">
                <?php $_smarty_tpl->_subTemplateRender("file:noticias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
            <div class="col-3">
                <div class="capa1">
                    <div class="capa2">
                        <div class="capa3">
                            <div class="registro text-center">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/registro">REGISTRATE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>

        </div>

    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
    

</body>

</html><?php }
}
