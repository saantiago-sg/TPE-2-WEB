<div class="col-lg-12">

    <section class="text-center fondo-ultimas-noticias pr-3 pl-3 pb-3 pt-0 pt-3 mb-3">
        <article class="row">
            <div class="col-lg-12">
                <h3 class="h2-responsive font-weight-bold mb-1 titulo-fondo py-3 w-100 text-white">
                    {$noticia['titulo']}
                </h3>
                <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
                    <img width=100%; src="{$ruta}/img/{$noticia['imagen']}.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-12">
                <p>{$noticia['descripcion']}</p>
                <p>Fecha : {$noticia['fecha']}</p>
                {foreach from=$clubes item=club}
                {if $club['id_club']==$noticia['id_club']}
                <p>Club : <span class="resaltado">{$club['nombre_club']}</span></p>
                {/if}
                {/foreach}
                {if $isAdmin==true}
                <a href="{$ruta}/borrar/{$noticia['id_noticia']}" class="btn  btn-md text-white btnBorrar">Borrar</a>
                <a href="{$ruta}/editar/{$noticia['id_noticia']}" class="btn  btn-md text-white btnEditar">Editar</a>
                {/if}

            </div>
        </article>

        {include file="vue/comentarios.tpl"}
        <input type="text" value="{$noticia['id_noticia']}" name="id-noticia" hidden>
        {if (($isLogged==true)||($isAdmin==true))}

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
                <input type="text" value="{$id}" name="id-usuario" hidden>
                <input type="text" value="{$nombre}" name="nombre" hidden>
                <button type="submit" class="btn mt-2 btnCrear text-white bg-dark" id="btn-comment">Comentar</button>
            </div>
        </form>
        {/if}



    </section>
</div>
