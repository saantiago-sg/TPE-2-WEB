<?php
/* Smarty version 3.1.33, created on 2019-11-28 23:06:28
  from 'C:\xampp\htdocs\TPE-WEB-II\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de044e49e26c1_19751814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12d320197011839b4d233b9d6d3166796b24b501' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB-II\\templates\\header.tpl',
      1 => 1574871725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de044e49e26c1_19751814 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="">
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Oscurin'</a>
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
  <?php if ((($_smarty_tpl->tpl_vars['isLogged']->value == true) || ($_smarty_tpl->tpl_vars['isAdmin']->value == true))) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/logout" class="btn bg-light btn-md text-dark">Salir</a>
  
    <?php } else { ?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/login" class="btn bg-light btn-md text-dark">Iniciar Sesion</a>
    
  <?php }?>
  
  
  </div>
 
</nav>
<picture>
    <img src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/img/portada.jpg" class="d-block w-100 img-fluid" alt="portada de futbol">
</picture>
</header><?php }
}
