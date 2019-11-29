<?php
require_once('libs/Smarty.class.php');
class login_view{
    function mostrarLogin($mensaje){
        $smarty = new Smarty();
        $smarty->assign('mensaje',$mensaje);
        $smarty->display('templates/login.tpl');
     }

     function mostrarRegistro(){
        $smarty = new Smarty();
        $smarty->display('templates/registro.tpl');
     }

     function mostrarRecuperarPass(){
      $smarty = new Smarty();;
      $smarty->display('templates/recuperar.tpl');
     }

}
    

