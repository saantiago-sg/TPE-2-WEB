<section class="fondo-ultimas-noticias pr-3 pl-3 pb-3 pt-0 pt-3">
<div class="list-group">
  <h5 class="h5-responsive font-weight-bold titulo-fondo py-2 pl-2 pr-2 w-100 text-white">Clubes</h5>
  <div class="row">
  {foreach from=$clubes item=club}
  {if $isAdmin==true}
  <div class="col-8"><a href="{$ruta}/filtrar/{$club['id_club']}" class="list-group-item list-group-item-action clubes" tabindex="-1" aria-disabled="true">{$club['nombre_club']}</a></div>
  <div class="col-2"><a href="borrar-club/{$club['id_club']}"><img src="{$ruta}/img/borrar.png" alt=""></a></div>
  <div class="col-2"><a href="editar-club/{$club['id_club']}"><img src="{$ruta}/img/edit.png" alt=""></a></div>
  {else}
    <div class="col-12"><a href="{$ruta}/filtrar/{$club['id_club']}" class="list-group-item list-group-item-action clubes" tabindex="-1" aria-disabled="true">{$club['nombre_club']}</a></div>
  {/if}
  {/foreach}
</div>
</div>
</section>