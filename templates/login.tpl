<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Oscurin</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="./">Oscurin'</a>
    <div class="collapse navbar-collapse small" id="navbarNavAltMarkup">
            <section class="text-center fechas">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <article class="col">
                                    <img src="img/river-tigre.png" alt="">
                                </article>

                                <article class="col">
                                    <img src="img/aldosivi-boca.png" alt="">

                                </article>

                                <article class="col">
                                    <img src="img/gim-colon.png" alt="">
                                </article>

                                <article class="col d-none d-md-block">
                                    <img src="img/lanus-velez.png" alt="">
                                </article>

                                <article class="col d-none d-md-block">
                                    <img src="img/estudiantes-union.png" alt="">
                                </article>

                                <article class="col d-none d-md-block">
                                    <img src="img/sanMartin-Talleres.png" alt="">
                                </article>

                            </div>

                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <article class="col">
                                    <img src="img/huracan-tucuman.png" alt="">
                                </article>

                                <article class="col">
                                    <img src="img/racing-dyj.png" alt="">

                                </article>
                                <article class="col">
                                    <img src="img/banfield-nob.png" alt="">
                                </article>

                                <article class="col d-none d-md-block">
                                    <img src="img/central-independiente.png" alt="">

                                </article>

                                <article class="col d-none d-md-block">
                                    <img src="img/patronato-argentinos.png" alt="">
                                </article>

                                <article class="col d-none d-md-block">
                                    <img src="img/belgrano-godoy.png" alt="">
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
            </div>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      
    </ul>
    
  </div>
</nav>

    <div class="fixed-center container">
        <div class="my-auto">
            <form method="post" action="verificar">
                {if $mensaje == 'Has Cerrado Sesion Con Exito'}
                <div class="alert alert-primary" role="alert">
                    {$mensaje}
                </div>
                {elseif $mensaje =='Usted Se Ha Registrado Correctamente'}
                <div class="alert alert-success" role="alert">
                    {$mensaje}
                </div>
                {/if}
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" class="form-control" name="usuario">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="contraseña">
                </div>
                {if $mensaje == 'Contraseña Incorrecta'}
                <div class="alert alert-danger" role="alert">
                    {$mensaje}
                </div>
                {elseif $mensaje == 'Usuario Incorrecto'}
                <div class="alert alert-danger" role="alert">
                    {$mensaje}
                </div>
                {elseif $mensaje == 'Se envio un email con su nueva contraseña'}
                <div class="alert alert-success" role="alert">
                    {$mensaje}
                </div>
                {elseif $mensaje == 'El email no esta asociado a ninguna cuenta'}
                <div class="alert alert-danger" role="alert">
                    {$mensaje}
                </div>
                
                {/if}

                
                    <div class="col p-0">
                        <button type="submit" class="btn bg-primary text-white">Iniciar</button>
                    </div>

                    <a href="./recuperar-pass" class="btn bg-danger btn-md text-white mt-2">Olvide la contraseña</a>
                
            </form>
        </div>
    </div>

    <footer class="page-footer font-small pt-2 fondo-footer text-center footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="#"><img src="img/icoFacebook.png" alt="" class="img-fluid"></a>
                </div>
                <div class="col">
                    <a href="#"><img src="img/icoInstagram.png" alt="" class="img-fluid"></a>
                </div>
                <div class="col">
                    <a href="#"><img src="img/icoTwitter.png" alt="" class="img-fluid"></a>
                </div>
                <div class="col">
                    <a href="#"><img src="img/icoYoutube.png" alt="" class="img-fluid"></a>
                </div>
            </div>
        </div>
    </footer>
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