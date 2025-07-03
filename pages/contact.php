
<?php

// Incluir menú navegación
require("../navegacion.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php'; // Cargar librerías de Composer

// Cargar variables de entorno desde el archivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..'); // Ajusta la ruta si es necesario
$dotenv->load();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $email = htmlspecialchars(trim($_POST['email']));
    $mensaje = htmlspecialchars(trim($_POST['mensaje']));

    if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
        $mail = new PHPMailer(true);
        try {
            // Configuración del servidor SMTP con variables de entorno
            $mail->isSMTP();
            $mail->Host = $_ENV['SMTP_HOST'];
            $mail->SMTPAuth = true;
            $mail->Username = $_ENV['EMAIL_USERNAME']; 
            $mail->Password = $_ENV['EMAIL_PASSWORD']; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = $_ENV['SMTP_PORT'];

            // Configuración del correo
            $mail->setFrom($email, $nombre);
            $mail->addAddress($_ENV['EMAIL_RECIPIENT']); // Destinatario desde .env
            $mail->Subject = "Nuevo mensaje de contacto";
            $mail->Body = "Nombre: $nombre\nCorreo: $email\n\nMensaje:\n$mensaje";

            $mail->send();
            $success = "Mensaje enviado con éxito. ¡Gracias por contactarnos!";
        } catch (Exception $e) {
            $error = "Hubo un error al enviar el mensaje. Inténtalo nuevamente.";
            error_log("Error: " . $mail->ErrorInfo);
        }
    } else {
        $error = "Por favor, completa todos los campos.";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Get in touch with José Rodríguez, a professional videographer specializing in capturing unforgettable moments. Contact him for inquiries, collaborations, or bookings." />
    <link rel="icon" type="image/x-icon" href="../imagen/logos/logos.ico">
    <link rel="stylesheet" href="../styles/contact.css">
    <title>Contact José Rodriguez | Cinematographer</title>
</head>

<body class="contact-body">
    <div class="contact-main">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="commercials.php">Commercials | </a></li>
                    <li><a href="narrative.php"> Narrative | </a></li>
                    <li><a href="musicVideos.php"> Music Videos | </a></li>
                    <li><a href="contact"> Contact | </a></li>
                    <li><a href="about-me"> About Me | </a></li>
                </ul>
            </nav>
        </div>
        <!-- Titulo -->
        <div class="titulo2">
            <a href="../">
                <h1 style="">Jose J. Rodríguez</h1>
                <p style="color:white;">Cinematographer</p>
            </a>
        </div>

        <div class="contacto">
            <h2>Contact</h2>
            <br>
            <P>josejaimerv8025@gmail.com</P>
            <P>+34 685805827</P>
            <br>
            <section class="redes">
                <!-- Enlace al perfil de Instagram -->
                <a href="https://www.instagram.com/jotarodriguez28/" target="_blank">
                    <!-- Logo de Instagram -->
                    <img src="../imagen/logos/igs.webp" class="ig" alt="Logo de Instagram">
                </a>
                <!-- Enlace al perfil de IMDB  -->
                <a href="https://www.imdb.com/name/nm7582176/" target="_blank">
                    <!-- Logo de IMDB -->
                    <img src="../imagen/logos/imdbwss.webp" alt="Logo de Instagram">
                </a>
            </section>
            <!-- Mensaje de éxito o error -->
            <?php if (isset($success))
                echo "<p class='message'>$success</p>"; ?>
            <?php if (isset($error))
                echo "<p class='error'>$error</p>"; ?>

            <!-- Formulario de contacto -->
            <form action="" class="formulario" method="POST">
                <h1 class="font title">Send a message</h1>
                <div class="form-group">
                    <label for="nombre" class="font">Name:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email" class="font">Mail:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="mensaje" class="font">Message:</label>
                    <textarea id="mensaje" name="mensaje" placeholder="Write your message here" required></textarea>
                </div>
                <button type="submit" class="btn btn-outline-light">Send</button>
            </form>

            </footer>
        </div>
    </div>
</body>

</html>