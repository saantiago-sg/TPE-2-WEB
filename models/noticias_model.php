<?php

class noticias_model
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


function obtenerNoticias(){
  $sentencia=$this->db->prepare("select * from noticia");
  $sentencia->execute();
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}

function obtenerNoticia($id_noticia){
  $sentencia=$this->db->prepare("SELECT * from noticia WHERE id_noticia=?");
  $sentencia->execute(array($id_noticia));
  return $sentencia->fetch(PDO::FETCH_ASSOC);
}

function agregarNoticia($titulo,$descripcion,$fecha,$club,$imagen){
  $id_club=$this->obtenerID($club);
  $sentencia = $this->db->prepare("INSERT INTO noticia(id_club,imagen,titulo,descripcion,fecha) VALUES(?,?,?,?,?)");
  $sentencia->execute(array($id_club, $imagen,$titulo,$descripcion,$fecha));
}

function guardar($titulo,$descripcion,$fecha,$club,$imagen) {
  $id_club=$this->obtenerID($club);
  $sentencia = $this->db->prepare("INSERT INTO noticia(id_club,imagen,titulo,descripcion,fecha) VALUES(?,?,?,?,?)");
  $sentencia->execute([$id_club, $imagen,$titulo,$descripcion,$fecha]); 

  return $this->db->lastInsertId();
}


function obtenerID($clubIngresado){
  $sentencia=$this->db->prepare("select * from club");
  $sentencia->execute();
  $club=$sentencia->fetchAll(PDO::FETCH_ASSOC);
  foreach ($club as $clubes) {
    if($clubes["nombre_club"]==$clubIngresado){
      return $clubes["id_club"];
    }
  }
}

function borrarNoticia($id_club){
  $sentencia = $this->db->prepare("DELETE from noticia where id_noticia=(?)");
  $sentencia->execute(array($id_club));
}

function cambiar($id,$titulo,$descripcion,$fecha,$club,$imagen){
$id_club=$this->obtenerID($club);
$sentencia =$this->db->prepare("UPDATE noticia SET id_club=?, imagen=?, titulo=?, descripcion=?, fecha=? WHERE id_noticia=?");
$sentencia->execute([$id_club,$imagen,$titulo,$descripcion,$fecha,$id]);
}

function filtrarNoticia($id_club){
  $sentencia=$this->db->prepare("select * from noticia where id_club=?");
  $sentencia->execute(array($id_club));
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}

}


?>