<section class="fondo-ultimas-noticias pr-3 pl-3 pb-3 pt-0 pt-3 mt-2">
<h5 class="h5-responsive font-weight-bold text-center titulo-fondo py-2 w-100 text-white">Usuarios</h5>
{foreach from=$usuarios item=usuario}
{if $usuario['usuario']!="Faacundito123"}
<div class="row">
    <div class="col-8">{$usuario['usuario']}</div>
    <div class="col-2"><a href="borrar-usuario/{$usuario['id_usuario']}"><img src="{$ruta}/img/borrar.png" alt=""></a></div>
    <div class="col-2"><a href="permiso-usuario/{$usuario['id_usuario']}"> 
    {if $usuario['isAdmin']!=0}
        <img src="{$ruta}/img/remove-admin.png" alt=""></a></div>
    {else}
        <img src="{$ruta}/img/add-admin.png" alt=""></a></div>
    {/if}
</div>
{/if}  
  {/foreach}
</section>

