{foreach from=$noticia item=posteado}
<section class="text-center fondo-ultimas-noticias pr-3 pl-3 pb-3 pt-0 pt-3 mb-3">
    <article class="row">
        <div class="col-lg-12">
             <h3 class="h2-responsive font-weight-bold mb-1 titulo-fondo py-3 w-100 text-white"><a href="{$ruta}/noticia/{$posteado['id_noticia']}"><span class="estiloTitulo">{$posteado['titulo']}</span></a>
            </h3>
            <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
                <img width=100%; src="{$ruta}/img/{$posteado['imagen']}.jpg" alt="">
            </div>
        </div>
        <div class="col-lg-12">
            <p>{$posteado['descripcion']}</p>
            <p>Fecha : {$posteado['fecha']}</p>
            {foreach from=$clubes item=club}
            {if $club['id_club']==$posteado['id_club']}
            <p>Club : <span class="resaltado">{$club['nombre_club']}</span></p>
            {/if}
            {/foreach}
            {if $isAdmin==true}
            <a href="{$ruta}/borrar/{$posteado['id_noticia']}" class="btn  btn-md text-white btnBorrar">Borrar</a>
            <a href="{$ruta}/editar/{$posteado['id_noticia']}" class="btn  btn-md text-white btnEditar">Editar</a>
            {/if}
        </div>
    </article>
</section>

{/foreach}