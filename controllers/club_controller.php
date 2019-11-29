<?php
require_once "./views/noticias_view.php";
require_once "./models/club_model.php";
require_once "secured_controller.php";
class club_controller extends secured_controller
{
    private $view;
    private $model;

    function __construct()
    {
        parent::__construct();
        $this->view = new noticias_view();
        $this->model = new club_model();
    }

    function agregarClub()
    {
        if ($this->isAdmin == true) {
            if(isset($_POST['club'])){
            $club = $_POST['club'];
            $this->model->agregarClub($club);
            header(Home);
            }
        }
        header(Home);
    }

    function borrarClub($id_club)
    {
        if ($this->isAdmin == true) {
            $this->model->borrarClub($id_club[0]);
            header(Home);
        }
        header(Home);
    }

    function mostrarEditClub($id_club)
    {
        if ($this->isAdmin == true) {
            $this->view->mostrarEditClub($id_club[0]);
        }
    }

    function cambiarClub()
    {
        if(isset($_POST['id_club']) && (isset($_POST['club']))){
        $id = $_POST['id_club'];
        $club = $_POST['club'];
        $this->model->cambiarClub($id, $club);
        header(Home);
        }
    }
}
