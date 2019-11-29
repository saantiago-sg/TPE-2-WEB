<div class="col-lg-12">

    {include file="vue/comentarios.tpl"}
    
    {if (($isLogged==true)||($isAdmin==true))}

    <form  action="form-action"id="form-comentario">
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
            <p>ASDASD{$id}</p>
            <label for="exampleFormControlTextarea1">Que te parecio la noticia</label>
            <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentario">
            <input type="text" value="{$id}" name="id-usuario" hidden>
            <input type="text" value="{$nombre}" name="nombre" hidden>
            <input type="text" value="{$posteado['id_noticia']}" name="id-noticia" hidden>
            <button type="submit" class="btn mt-2 btnCrear text-white bg-dark" id="btn-comment">Comentar</button>
        </div>
    </form>
    {/if}

</div>
