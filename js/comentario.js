"use strict"
let app = new Vue({
    el: "#template-vue-comentarios",
    data: {
        promedio: 0,
        comentarios: [],

    },
    methods:{
        eliminarComentario: async function eliminarComentario(id){
            await fetch("../api/comentarios/"+id,
           {method:"DELETE"}
           );
           getComentarios();
        
        },
        getPromedio: async function getPromedio() {
            let id_noticia = document.querySelector("input[name=id-noticia]").value;
            let response = await fetch("../api/comentarios/" + id_noticia+"/promedio");
            let promedio = await response.json();
            app.promedio = Math.round((promedio['puntuacion']*10)/10);   
        }
    }
});




let comentar = document.querySelector("#btn-comment");
if (comentar != null)
    comentar.addEventListener("click",addComentario);

async function addComentario(e) {
    e.preventDefault();
    let puntuacion = document.querySelector("select[name=puntos]").value;
    let comentario = document.querySelector("input[name=comentario]").value;
    let id_noticia = document.querySelector("input[name=id-noticia]").value;
    let id_usuario = document.querySelector("input[name=id-usuario]").value;
    let nombre = document.querySelector("input[name=nombre]").value;
    let data = {
        puntuacion,
        comentario,
        id_noticia,
        id_usuario,
        nombre
    }
    console.log(data);

    await fetch('../api/comentarios', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    })
    getComentarios();
}

async function getComentarios() {
    let id_noticia = document.querySelector("input[name=id-noticia]").value;
    let response = await fetch("../api/comentarios/" + id_noticia);
    let comentarios = await response.json();
    app.comentarios = comentarios;
    app.getPromedio();
    
}
    getComentarios();
    app.getPromedio();



