<?php
require_once "../routeAdvance.php";
require_once "comentariosApiController.php";

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]));

// recurso solicitado
$resource = $_GET["resource"];

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

// instancia el router
$router = new Router();

// arma la tabla de ruteo
$router->addRoute("/comentarios", "GET", "noticiasApiController", "obtenerComentarios");
$router->addRoute("/comentarios", "POST", "noticiasApiController", "agregarComentario");
$router->addRoute("/comentarios/:ID", "DELETE", "noticiasApiController", "deleteComentario");
$router->addRoute("/comentarios/:ID", "GET", "noticiasApiController", "obtenerComentario");
$router->addRoute("/comentarios/:ID/promedio", "GET", "noticiasApiController", "getPromedio");




// rutea
$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 