<?php
/* Smarty version 3.1.33, created on 2019-11-29 01:17:55
  from 'C:\xampp\htdocs\proyectos\1-TPE-FINALIZADO\TPE-WEB-II\templates\vue\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de063b31ca479_79061110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9db73d2d7687aa5556bd0155e8a5ae0872ddbbe6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\1-TPE-FINALIZADO\\TPE-WEB-II\\templates\\vue\\comentarios.tpl',
      1 => 1574981520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de063b31ca479_79061110 (Smarty_Internal_Template $_smarty_tpl) {
?>  
<div id="template-vue-comentarios">
  
    <hr class="my-3">
        
    <div >
    <h5>Promedio: {{promedio}}</h5>
    <article v-for="comentario in comentarios" class="text-left">
      <div>
        <div class="bg-comment p-2">
          <p>Nombre: {{comentario.nombre}}</p>
          <p>Puntaje: {{comentario.puntuacion}}</p>
          <p>{{comentario.comentario}}</p>
          
          <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value == true) {?>
          <button class="rounded-circle bg-danger text-white" v-on:click="eliminarComentario(comentario.id_comentario)">Delete</button>
          <?php }?>
          
        </div>
        <hr class="my-3">
      </div>
    </article>
    </div>
</div>


<?php }
}
