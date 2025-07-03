<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
    // Variables para redireccionar rutas y definir títulos
    $urlActual = $_SERVER['REQUEST_URI'];
    /* variable para estilos de css */
    $rutaEstilos = ($urlActual != "/") ? "../styles/ultimo2.css" : "";
    
    //<!-- Enlace a Bootstrap JS -->
    $js = ($urlActual !== "/") ? "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js'
    integrity='sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL'
    crossorigin='anonymous' defer></script>" : "";
    $bootstrap = "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'
    integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>" ;
    echo ($urlActual  != "/") ? $bootstrap : "";
    ?>
    <!-- Links para Google fonts y bootstrap -->
   <!-- Preconexión a Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="icon" type="image/x-icon" href="../../imagen/logos/logos.ico">

<!-- Preload para Google Fonts CSS -->
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100&family=DM+Serif+Display:ital@1&family=Jost:wght@300&family=Poiret+One&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100&family=DM+Serif+Display:ital@1&family=Jost:wght@300&family=Poiret+One&display=swap" rel="stylesheet"></noscript>

<!-- Link al archivo CSS de tu sitio web con preload -->
<link rel="stylesheet" href="<?php echo $rutaEstilos; ?>">
    
</head>
<body>
    
</body>