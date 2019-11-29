{literal}  
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
          {/literal}
          {if $isAdmin==true}
          <button class="rounded-circle bg-danger text-white" v-on:click="eliminarComentario(comentario.id_comentario)">Delete</button>
          {/if}
          
        </div>
        <hr class="my-3">
      </div>
    </article>
    </div>
</div>


