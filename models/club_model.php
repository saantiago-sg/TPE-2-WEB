<?php

class club_model
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

    function obtenerClub(){
        $sentencia=$this->db->prepare('SELECT * FROM club');
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function agregarClub($club){
        $sentencia=$this->db->prepare('INSERT INTO club (nombre_club) values(?)');
        $sentencia->execute(array($club));
    }

    function borrarClub($id_club){
      $sentencia = $this->db->prepare("DELETE from club where id_club=(?)");
      $sentencia->execute(array($id_club));
    }

    function cambiarClub($id,$club){
      $sentencia =$this->db->prepare("UPDATE club SET nombre_club=? WHERE id_club=?");
      $sentencia->execute(array($club,$id));
      }

}
