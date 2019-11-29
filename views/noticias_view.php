<?php

require_once('libs/Smarty.class.php');
class noticias_view 
{    
   function home($noticia,$clubes,$ruta,$usuarios,$nombre,$id,$isLogged,$isAdmin){
       $smarty = new Smarty();
       $smarty->assign('noticia',$noticia);
       $smarty->assign('clubes',$clubes);
       $smarty->assign('ruta',$ruta);
       $smarty->assign('usuarios',$usuarios);
       $smarty->assign('nombre',$nombre);
       $smarty->assign('id',$id);
       $smarty->assign('isLogged',$isLogged);
       $smarty->assign('isAdmin',$isAdmin);
       $smarty->display('templates/home.tpl');
    }

    function mostrarEditNoticia($id_noticia,$clubes){
        $smarty= new Smarty();
        $smarty->assign('noticia',$id_noticia);
        $smarty->assign('clubes',$clubes);
        $smarty->display('templates/editarNoticia.tpl');
    }

    function mostrarEditClub($id_club){
        $smarty= new Smarty();
        $smarty->assign('id_club',$id_club);
        $smarty->display('templates/editarClub.tpl');
    }

    function noticiaSimple($noticia,$clubes,$ruta,$usuarios,$nombre,$id,$isLogged,$isAdmin){
        $smarty = new Smarty();
        $smarty->assign('noticia',$noticia);
        $smarty->assign('clubes',$clubes);
        $smarty->assign('ruta',$ruta);
        $smarty->assign('usuarios',$usuarios);
        $smarty->assign('nombre',$nombre);
        $smarty->assign('id',$id);
        $smarty->assign('isLogged',$isLogged);
        $smarty->assign('isAdmin',$isAdmin);
        $smarty->display('templates/noticia-individual.tpl');
     }
}

