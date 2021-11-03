<?php
namespace Controllers;
use MVC\Router;
use Model;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class ContactoController{

public static function contacto(Router $router){
switch ($_POST['seleccion']) {
    case '1':
        $correo = "ci@costagrande.tecnm.mx";
        break;
    case '2':
        $correo = "gtv@costagrande.tecnm.mx";
        break;
    case '3':
        $correo = "se@costagrande.tecnm.mx";
        break;
        case '4':
        $correo = "extra@costagrande.tecnm.mx";
        break;
        case '5':
        $correo = "dep@costagrande.tecnm.mx";
        break;
}
require "../vendor/autoload.php";

//Crear la instancia
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                     
    $mail->isSMTP();                                            //Usar SMTP para enviar el correo
    $mail->Host       = 'smtp.gmail.com';                     //Servidor SMTP de gmail
    $mail->SMTPAuth   = true;                                   //Activar autentificacion 
    $mail->Username   = 'ITCGPlataformadigital@gmail.com';                     //Datos de autentificacion
    $mail->Password   = 'IT.95yQn1';                              
    $mail->Port       = 587;                                    //Puerto a utilizar

    //Email receptor
    $mail->setFrom('ITCGPlataformadigital@gmail.com', $_POST['nombre']);
    //Email receptor
    $mail->addAddress($correo);    

    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Mensaje de contacto';
    $mail->Body    = '<b>Telefono: </b>'.$_POST['telefono']." <br><b>Correo: </b>".$_POST['email']." <br><b>Asunto:</b> ". $_POST['mensaje'];

    $mail->send();

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




   header('Location: index.php');

    }
}   