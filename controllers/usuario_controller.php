<?php
require_once "./views/login_view.php";
require_once "./models/usuario_model.php";

class usuario_controller
{
    private $view;
    private $model;

    function __construct()
    {

        $this->view = new login_view;
        $this->model = new usuario_model;
    }
    function borrarUsuario($id){
        $this->model->borrarUsuario($id[0]);
        header(Home);
    }

    function permisoUsuario($id){
        $this->model->permisoUsuario($id[0]);
         header(Home);
    }
}