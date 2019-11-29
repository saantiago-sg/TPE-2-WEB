<?php
require_once './phpmail/PHPMailer.php';
require_once './phpmail/SMTP.php';
require_once './phpmail/Exception.php';
require_once './phpmail/OAuth.php';
require_once "./views/login_view.php";
require_once "./models/login_model.php";

class login_controller
{
    private $view;
    private $model;

    function __construct()
    {

        $this->view = new login_view;
        $this->model = new login_model;
    }

    function login()
    {
        $this->view->mostrarLogin("");
    }

    function verificar()
    {
        if(isset($_POST['usuario']) && (isset($_POST['contraseña']))){
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        
        $dbUsuario = $this->model->obtenerUsuario($usuario);
        if (isset($dbUsuario) && ($dbUsuario != null)) {
            if (password_verify($contraseña, $dbUsuario[0]["contraseña"])) { //el 0 va por la posicion del arreglo
                session_start();
                $_SESSION["usuario"] = $usuario;
                $_SESSION["id_usuario"] = $dbUsuario[0]["id_usuario"];
                $_SESSION["isAdmin"]= $dbUsuario[0]["isAdmin"];
                 header(Home);
            } else {
                $this->view->mostrarLogin('Contraseña Incorrecta');
            }
        } else {
            $this->view->mostrarLogin('Usuario Incorrecto');
        }
    }

    }

    function mostrarRegistro()
    {
        $this->view->mostrarRegistro();
    }

    function registrarCuenta()
    {
        if ((isset($_POST['usuario']) && (isset($_POST['contraseña'])) && (isset($_POST['email'])))) {
            $usuario = $_POST['usuario'];
            $contraseña = $_POST['contraseña'];
            $email = $_POST['email'];
            $hash = password_hash($contraseña, PASSWORD_DEFAULT);
            $this->model->registrarCuenta($usuario, $hash, $email);
            $this->verificar();
            $this->view->mostrarLogin('el usuario ya existe');
        }
    }

    function logout()
    {
        session_start();
        session_destroy();
        header(Home);
    }

    function mostrarRecuperarPass()
    {
        $this->view->mostrarRecuperarPass();
    }

    function recuperar()
    {
        $cadena = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = $_POST['email'];
            $pass = $this->generarString($cadena, 20);
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $emailValid = $this->model->obtenerEmail($email);
            if (isset($emailValid) && !empty($emailValid)) {
                $this->model->cambiarPassRandom($email, $hash);
                $destino = $email;
                $claveNueva = $pass;

                $this->enviarEmail($destino, $claveNueva);
            } else {
                $this->view->mostrarLogin('El email no esta asociado a ninguna cuenta');
            }
        }
    }


    function enviarEmail($destino, $claveNueva)
    {
        $mail = new PHPMailer\PHPMailer\PHPMailer();

        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "smtp.gmail.com"; // SMTP a utilizar. Por ej. smtp.elserver.com
        $mail->Username = "saantiagosg@gmail.com"; // Correo completo a utilizar
        $mail->Password = "racingsosladroga"; // Contraseña
        $mail->Port = 587; // Puerto a utilizar

        $mail->From = "saantiagosg@gmail.com"; // Desde donde enviamos (Para mostrar)
        $mail->FromName = ("Oscurin");

        $mail->AddAddress($destino); // Esta es la dirección a donde enviamos
        $mail->IsHTML(true); // El correo se envía como HTML
        $mail->Subject = ("Recuperar Clave"); // Este es el titulo del email.
        $body = 'tu nueva clave ahora es: ';
        $body .= $claveNueva;
        $mail->Body = $body; // Mensaje a enviar
        $exito = $mail->Send(); // Envía el correo.

        if ($exito) {
            //echo 'El correo fue enviado correctamente.';
            $this->view->mostrarLogin('Se envio un email con su nueva contraseña');
        }else{
            $pass="Faaku523";
            var_dump(password_hash($pass, PASSWORD_DEFAULT));
        }
    }
    function generarString($input, $strength = 16)
    {
        $input_length = strlen($input);
        $random_string = '';
        for ($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }

        return $random_string;
    }
}
