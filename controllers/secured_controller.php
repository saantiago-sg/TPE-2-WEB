<?php
class secured_controller
{
    protected $nombre="";
    protected $id=0;
    protected $isLogged=false;
    protected $isAdmin=false;
    function __construct()
    {
        session_start();
        if (isset($_SESSION["usuario"]) && ($_SESSION["isAdmin"]==1)){
            $this->id=$_SESSION["id_usuario"];
            $this->nombre=$_SESSION["usuario"];
            return $this->isAdmin= true;
        }
        if (isset($_SESSION["usuario"])){
            $this->nombre=$_SESSION["usuario"];
            $this->id=$_SESSION["id_usuario"];
            return $this->isLogged= true;
        }
        else{       
        return $this->isLogged=false;
    }
    
    }   
}

