<?php

$titulo = "Contact José Rodriguez | Cinematographer";
$descripcion = "Get in touch with José Rodríguez, a professional videographer specializing in capturing unforgettable moments. Contact him for inquiries, collaborations, or bookings.";

// Incluir menú navegación
require("../navegacion.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php'; // Cargar librerías de Composer

// Cargar variables de entorno desde el archivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../'); // Ajusta la ruta si es necesario
$dotenv->load();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $email = htmlspecialchars(trim($_POST['email']));
    $mensaje = htmlspecialchars(trim($_POST['mensaje']));

    $recaptcha_secret = $_ENV['RECAPTCHA_SECRET_KEY'];
    $recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

    // Validar CAPTCHA
    if (empty($recaptcha_response)) {
        $error = "Please verify that you are not a robot.";
    } else {
        $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
        $response_data = json_decode($verify);

        if (!$response_data->success) {
            $error = "Verification failed. Please check the captcha box.";
        }
    }

    // Solo enviar el correo si no hay errores
    if (!isset($error) && !empty($nombre) && !empty($email) && !empty($mensaje)) {
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
            $success = "Message sent successfully. Thanks for contacting me!";
        } catch (Exception $e) {
            $error = "There was an error sending the message. Please try again.";
            error_log("Error: " . $mail->ErrorInfo);
        }
    } elseif (!isset($error)) {
        $error = "Please complete all fields.";
    }
}

?>
<main>
    <!-- Menu de navegaciòn -->
    <div class="menu">
        <nav>
            <ul>
                <li><a href="commercials.php">Commercials </a></li>
                <li><a href="narrative.php"> Narrative </a></li>
                <li><a href="musicVideos.php"> Music Videos </a></li>
                <li><a href="contact"> Contact </a></li>
                <li><a href="about-me"> About Me </a></li>
            </ul>
        </nav>
    </div>
    <!-- Titulo -->
    <div class="titulo2">
        <a href="../">
            <h1>Jose J. Rodríguez</h1>
            <h2>Cinematographer</h2>
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
            <div class="g-recaptcha" data-sitekey="<?= $_ENV['RECAPTCHA_SITE_KEY'] ?>"></div>

            <button type="submit" class="btn btn-outline-light">Send</button>
        </form>
        </footer>
    </div>
</main>
</body>

</html>