<?php
require_once "JSONView.php";
require_once "../models/noticias_model.php";
require_once "../models/comentarios_model.php";

class noticiasApiController{
private $model;
private $model_comentario;
private $view;
private $data;
    function __construct()
    {       
        $this->model = new noticias_model();
        $this->model_comentario = new comentarios_model();
        $this->view = new JSONView();
        $this->data = file_get_contents("php://input");
    }

    private function getData() {
        return json_decode($this->data);
    }


    function agregarComentario($params = null){
        $data = $this->getData();
        $id = $this->model_comentario->guardarComentario($data->id_noticia,$data->id_usuario,$data->nombre,$data->comentario,$data->puntuacion);
        $comentario = $this->model_comentario->obtenerComentario($id);
        if ($comentario)
            $this->view->response($comentario, 200);
        else
            $this->view->response("La noticia no fue creada", 500);

    }

    function obtenerComentarios(){
        $comentarios = $this->model_comentario->obtenerComentarios();
        $this->view->response($comentarios, 200);
    }

    function obtenerComentario($params = null){
        $id = $params[':ID'];
        $comentario = $this->model_comentario->obtenerComentario($id);
        $this->view->response($comentario, 200);
    }

    function deleteComentario($params = null) {
        $id = $params[':ID'];
        
        $this->model_comentario->borrarComentario($id);

    }

    function getPromedio($params = null){
    $id = $params[':ID'];
    $promedio=$this->model_comentario->getPromedio($id);
    if ($promedio)
    $this->view->response($promedio, 200);
else
    $this->view->response("La noticia no fue creada", 500);
}
        
    }




