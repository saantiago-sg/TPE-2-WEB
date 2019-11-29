<?php

class comentarios_model
{
  private $db;

    function __construct()
    {
      $this->db = new PDO(
        'mysql:host=localhost;'
          . 'dbname=db_noticias;charset=utf8',
        'root',
        '');
    }

    function obtenerComentario($id){
        $sentencia=$this->db->prepare("SELECT * from comentario WHERE id_noticia=?");
        $sentencia->execute(array($id));
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

      function obtenerComentarios(){
        $sentencia=$this->db->prepare("SELECT * from comentario");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function guardarComentario($id_noticia,$id,$nombre,$comentario,$puntuacion) {
        $sentencia = $this->db->prepare("INSERT INTO comentario(id_noticia,id_usuario,nombre,comentario,puntuacion) VALUES(?,?,?,?,?)");
        $sentencia->execute([$id_noticia,$id,$nombre, $comentario,$puntuacion]); 
        return $this->db->lastInsertId();
    }

    function borrarComentario($id){
        $sentencia = $this->db->prepare("DELETE from comentario where id_comentario=(?)");
        $sentencia->execute(array($id));
    }
    function getPromedio($id){
        $sentencia=$this->db->prepare("SELECT AVG(puntuacion) AS puntuacion from comentario WHERE id_noticia=?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

}