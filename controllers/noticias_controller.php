<?php
require_once "./views/noticias_view.php";
require_once "./models/noticias_model.php";
require_once "./models/club_model.php";
require_once "./models/comentarios_model.php";
require_once "./models/usuario_model.php";
require_once "secured_controller.php";
class noticias_controller extends secured_controller
{
    private $view;
    private $model;
    private $model_club;
    private $model_comentarios;

    function __construct()
    {
        parent::__construct();
        $this->view = new noticias_view();
        $this->model = new noticias_model();
        $this->model_club = new club_model();
        $this->model_usuario=new usuario_model();
        $this->model_comentarios = new comentarios_model();
    }

    function home()
    {
        $noticia = $this->model->obtenerNoticias();
        $club = $this->model_club->obtenerClub();
        $usuarios=$this->model_usuario->obtenerUsuarios();
        $ruta = '.';
        $this->view->home($noticia, $club, $ruta,$usuarios,$this->nombre,$this->id,$this->isLogged,$this->isAdmin);
    }

    function agregarNoticia()
    {
        if ($this->isAdmin == true) {
            if ((isset($_POST['titulo']) && (isset($_POST['descripcion'])) && (isset($_POST['fecha'])&& (isset($_POST['club'])) && (isset($_POST['imagen']))))) {    
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $fecha = $_POST['fecha'];
            $club = $_POST['club'];
            $imagen = $_POST['imagen'];
            $this->model->agregarNoticia($titulo, $descripcion, $fecha, $club, $imagen);
            header(Home);
        }
    }
        header(Home);
    }

    function borrarNoticia($id_club)
    {
        if ($this->isAdmin == true) {
            $this->model->borrarNoticia($id_club[0]);
            header(Home);
        }
        header(Home);
    }

    function mostrarEditNoticia($id)
    {
        if ($this->isAdmin == true) {
            $club = $this->model_club->obtenerClub();
            $this->view->mostrarEditNoticia($id[0], $club);
        }
    }
    
    function cambiar()
    {
        if ((isset($_POST['titulo']) && (isset($_POST['descripcion'])) && (isset($_POST['fecha'])&& (isset($_POST['club'])) && (isset($_POST['imagen']))))) {
        $id = $_POST['noticia'];
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $fecha = $_POST['fecha'];
        $club = $_POST['club'];
        $imagen = $_POST['imagen'];
        $this->model->cambiar($id, $titulo, $descripcion, $fecha, $club, $imagen);
        var_dump($id);
        header(Home);
        }
    }
    
    function filtrarNoticia($id)
    {
        $noticia = $this->model->filtrarNoticia($id[0]);
        $club = $this->model_club->obtenerClub();
        $usuarios=$this->model_usuario->obtenerUsuarios();
        $ruta = '..';
        $this->view->home($noticia, $club, $ruta,$usuarios,$this->nombre,$this->id,$this->isLogged,$this->isAdmin);
    }

    function mostrarNoticia($id){
       $noticia= $this->model->obtenerNoticia($id[0]);
       $club = $this->model_club->obtenerClub();
       $usuarios=$this->model_usuario->obtenerUsuarios();
       $ruta = '..';
       $this->view->noticiaSimple($noticia, $club, $ruta,$usuarios,$this->nombre,$this->id,$this->isLogged,$this->isAdmin);
    }

}


