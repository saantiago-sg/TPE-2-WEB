<?php
class usuario_model
{
    private $db;

    function __construct()
    {
        $this->db = new PDO(
            'mysql:host=localhost;'
                . 'dbname=db_noticias;charset=utf8',
            'root',
            ''
        );
    }

    function obtenerUsuario($id){
        $sentencia = $this->db->prepare("select * from usuarios where id_usuario=? limit 1");
        $sentencia->execute(array($id));
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function obtenerUsuarios()
    {
        $sentencia = $this->db->prepare("select * from usuarios");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function borrarUsuario($id)
    {
        $sentencia = $this->db->prepare("DELETE from usuarios where id_usuario=(?)");
        $sentencia->execute(array($id));
    }

    function permisoUsuario($id)
    {
        $usuario=$this->obtenerUsuario($id);
        $isAdmin=$usuario[0]['isAdmin'];
        if ($isAdmin==0) {
            $isAdmin=1;
            $sentencia =$this->db->prepare("UPDATE usuarios SET isAdmin=? WHERE id_usuario=?");
             $sentencia->execute([$isAdmin,$id]);
        }else{
            $isAdmin=0;
            $sentencia =$this->db->prepare("UPDATE usuarios SET isAdmin=? WHERE id_usuario=?");
            $sentencia->execute([$isAdmin,$id]);
        }
        
    }
}
