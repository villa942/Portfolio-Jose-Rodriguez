<?php
require ("navegacion.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Director of Photography for commercials, short films, and feature films has over 20 years of experience in the industry, working as a DOP, cinematographer, and gaffer.">
    <title>Jose Rodriguez | Cinematographer</title>
    <link rel="stylesheet" href="styles/principal.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <!-- Preconexión a CDN -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <!-- Carga diferida de CSS de Bootstrap -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    </noscript>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9S3L8DELVM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9S3L8DELVM');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M6LF9DZD');</script>
<!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6LF9DZD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- Video de fondo de pantalla inicial -->
    <video class="fondo" autoplay muted loop>
        <source src="video/fondo/fondo3.mp4" type="video/mp4" alt="Video de fondo de pantalla, de proyecto realizado">
    </video>
    <!-- Titulo de la pagina principal -->
    <section class="titulo">
        <h1>Jose J. Rodríguez</h1>
        <h2>Cinematographer</h2>
    </section>
    <!-- Menú de la pagina principal -->
    <article class="navegacion">
       <div class="redes">
            <!-- Enlace al perfil de Instagram -->
            <a href="https://www.instagram.com/jotarodriguez28/" title="Instagram jotarodriguez28 " target="_blank">
                <img src="imagen/logos/igs.webp" class="ig" title="Follow me in instagram" alt="Logo de Instagram">
            </a>
            <!-- Enlace al perfil de IMDB  -->
            <a href="https://www.imdb.com/name/nm7582176/" title="Perfil en IMDB de jose rodriguez" target="_blank">
                <img src="imagen/logos/imdbwss.webp" title="Follow me in IMDB" alt="Logo de IMDB">
            </a>
        </div>
        <!-- Botones para navegar en la pagina -->
        <nav>
            <ul class="navbar-nav ms-auto text-end">
                <li class="nav-item">
                    <a class="btn btn-outline-light inicio" title="Page Contact" href="pages/contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-light inicio" title="Page with my proyects of Cinematographer" href="pages/works.php">Works</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-light inicio" title="Page About me" href="pages/about-me.php">About Me</a>
                </li>
            </ul>
        </nav>
    </article>
    <script>
  // Animación del título
  gsap.from(".titulo h1", {
    x: 100,
    opacity: 0,
    duration: 1,
    ease: "power3.out"
  });

  gsap.from(".titulo h2", {
    x: -100,
    opacity: 0,
    duration: 1,
    delay: 0.5,
    ease: "power3.out"
  });

  // Animación de la navegación
  gsap.from(".navegacion", {
    y: 50,
    opacity: 0,
    duration: 1.2,
    delay: 1,
    ease: "power2.out"
  });

  // Animación de los íconos sociales
  gsap.from(".navegacion .redes a", {
    opacity: 0,
    y: -20,
    duration: 0.6,
    stagger: 0.2,
    delay: 1.3
  });
</script>

</body>

</html>