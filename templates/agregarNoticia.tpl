<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Oscurin</title>
</head>

<body>

<section class="fondo-ultimas-noticias pr-3 pl-3 pb-3 pt-0 pt-3">
<div class="abm">
<form action="{$ruta}/agregar" method="post">
<h5 class="h5-responsive font-weight-bold text-center titulo-fondo py-2 w-100 text-white">Agregar una noticia</h5>
  <div class="form-group small">
  <label for="exampleFormControlFile1" class="mt-3" >Titulo de la noticia</label>
  <input class="form-control" type="text" name="titulo">
  <label for="exampleFormControlFile1" class="mt-3" >Descripcion de la noticia</label>
  <input class="form-control" type="text" name="descripcion">
  <label for="exampleFormControlFile1" class="mt-3" >Fecha de publicacion</label>
  <input class="form-control" type="date" name="fecha">
  <select id="inputState" class="form-control mt-3" name="club">
        <option selected>Elige Un Club</option>
        {foreach from=$clubes item=club}
          <option>{$club['nombre_club']}</option>
        {/foreach}
        
      </select>
  <label for="exampleFormControlFile1" class="mt-3" >Nombre de la imagen</label>
  <input class="form-control" type="text" name="imagen">
  </div>
  <button type="submit" class="btn mb-2 btnCrear text-white">Crear una nueva noticia</button>
</form>

</div>
</section>

<section class="fondo-ultimas-noticias pr-3 pl-3 pb-3 pt-0 pt-3 mt-2">
<form action="{$ruta}/agregarClub" method="post">
  <div class="form-group small">
  <label for="exampleFormControlFile1" class="mt-3" >Ingrese un nuevo club</label>
  <input class="form-control mb-3" type="text" name="club">
  <button type="submit" class="btn mb-2 btnCrear text-white">Crear un nuevo club</button>
</form>

</div>

</section>

{if $isAdmin==true}
    
{include file="usuarios.tpl"}
{/if}

</body>

</html>