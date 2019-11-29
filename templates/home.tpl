<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{$ruta}/css/estilo.css">
    <title>Oscurin</title>
</head>

<body>
    {include file="header.tpl"}
    <div class="centrar">
        <div class="row my-3">
            {if $isLogged==true}
            <div class="col-9">
                {include file="noticias.tpl"}
            </div>
            <div class="col-3">
                {include file="aside.tpl"}
            </div>

            {elseif $isAdmin==true}
            <div class="col-3">
                {include file="agregarNoticia.tpl"}
            </div>
            <div class="col-6">
                {include file="noticias.tpl"}
            </div>
            <div class="col-3">
                {include file="aside.tpl"}
            </div>

            {else}
            <div class="col-3">
                {include file="aside.tpl"}
            </div>
            <div class="col-6">
                {include file="noticias.tpl"}
            </div>
            <div class="col-3">
                <div class="capa1">
                    <div class="capa2">
                        <div class="capa3">
                            <div class="registro text-center">
                                <a href="{$ruta}/registro">REGISTRATE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {/if}

        </div>

    </div>

    {include file="footer.tpl"}

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    

</body>

</html>