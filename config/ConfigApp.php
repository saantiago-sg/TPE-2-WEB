<?php
$port = ":80";
define ('Logout', "Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');
define('Home', "Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define ('Login', "Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define ('Registro', "Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/registro');
class ConfigApp

{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
        '' => 'noticias_controller#home',
        'agregar' => 'noticias_controller#agregarNoticia',
        'agregarClub' => 'club_controller#agregarClub',
        'borrar' => 'noticias_controller#borrarNoticia',
        'cambiar' => 'noticias_controller#cambiar',
        'editar' => 'noticias_controller#mostrarEditNoticia',
        'borrar-club' => 'club_controller#borrarClub',
        'cambiarClub' => 'club_controller#cambiarClub',
        'editar-club' => 'club_controller#mostrarEditClub',
        'filtrar' => 'noticias_controller#filtrarNoticia',
        'login' => 'login_controller#login',
        'verificar' => 'login_controller#verificar',
        'registro' => 'login_controller#mostrarRegistro',
	    'registrarse' => 'login_controller#registrarCuenta',
	    'logout' => 'login_controller#logout',
        'recuperar-pass'=>'login_controller#mostrarRecuperarPass',
        'recuperar'=>'login_controller#recuperar',
        'borrar-usuario'=>'usuario_controller#borrarUsuario',
        'permiso-usuario'=>'usuario_controller#permisoUsuario',
        'noticia' => 'noticias_controller#mostrarNoticia',
    ];

}