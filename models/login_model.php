<?php

class login_model
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

function obtenerUsuario($usuario){
        $sentencia = $this->db->prepare("select * from usuarios where usuario=? limit 1");
        $sentencia->execute(array($usuario));
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}

function registrarCuenta($usuario,$hash,$email){
  $sentencia = $this->db->prepare("INSERT INTO usuarios(usuario,contraseña,email) VALUES(?,?,?)");
  $sentencia->execute(array($usuario,$hash,$email));
}

function obtenerEmail($email){
  $sentencia = $this->db->prepare("select * from usuarios where email=? limit 1");
  $sentencia->execute(array($email));
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}

function cambiarPassRandom($email,$pass){
  $sentencia =$this->db->prepare("UPDATE usuarios SET contraseña=? WHERE email=?");
  $sentencia->execute([$pass,$email]);
  }
}