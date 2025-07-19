<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($titulo) ? $titulo : "José Rodríguez | Cinematographer"; ?></title>
    <meta name="description"
        content="<?php echo isset($descripcion) ? $descripcion : "José Rodríguez es un talentoso Director de Fotografía con una amplia experiencia en la industria cinematográfica. Su trabajo se caracteriza por su atención al detalle y su habilidad para contar historias visuales impactantes."; ?>">


    <?php
    // Detectar cuántas veces retroceder en base a la URL
    $url = $_SERVER['REQUEST_URI'];
    $nivel = substr_count($url, '/'); // Cuenta cuántos '/' hay en la ruta
    
    // Ajusta la base según la profundidad
// Si estás en raíz: nivel 1, en /pages/: 2, en /pages/otra/: 3, etc.
    $base = str_repeat('../', $nivel - 2);

    // Ahora usa $base para los estilos y scripts
    $rutaEstilos1 = $base . "styles/version9.css";
    $rutaEstilos2 = $base . "styles/version9-2.css";
    $rutaEstilos3 = $base . "styles/version9-3.css";
    $rutaContacto = $base . "styles/contact.css";
    $rutaFavicon = $base . "imagen/logos/logos.ico";
    $rutabootstrap = $base . "assets/css/bootstrap.min.css";
    $rutaJs = $base . "assets/js/bootstrap.bundle.min.js";

    ?>


    <!-- Preconexión a Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Preload para Google Fonts -->
    <link rel="preload"
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100&family=DM+Serif+Display:ital@1&family=Jost:wght@300&family=Poiret+One&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link
            href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100&family=DM+Serif+Display:ital@1&family=Jost:wght@300&family=Poiret+One&display=swap"
            rel="stylesheet">
    </noscript>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Tu CSS -->

    <link rel="stylesheet" href="<?php echo $rutaEstilos1; ?>">
    <link rel="stylesheet" href="<?php echo $rutaEstilos2; ?>">
    <link rel="stylesheet" href="<?php echo $rutaEstilos3; ?>">
    <link rel="stylesheet" href="<?php echo $rutaContacto; ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo $rutaFavicon; ?>">
    <link rel="stylesheet" href="<?php echo $rutabootstrap; ?>">
    <script src="<?php echo $rutaJs; ?>" ></script>


    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9S3L8DELVM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-9S3L8DELVM');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M6LF9DZD');
    </script>
    <!-- End Google Tag Manager -->


</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6LF9DZD" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Tu contenido -->