<?php
// Incluir menú de navegación
require ("../../navegacion.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../imagen/logos/logos.ico">
    <link rel="stylesheet" href="../../styles/proyecto.css">
    <title>NIKE | José Rodriguez  | Commercials</title>
</head>

<body class="work-body">
    <main>
        <!-- Menu de navegaciòn -->
        <div class="menu">
            <nav>
            <ul>
                <li><a href="../commercials.php">Commercials</a></li>
                <li><a href="../narrative.php">Narrative</a></li>
                <li><a href="../musicVideos.php">Music Videos</a></li>
                <li><a href="../contact">Contact</a></li>
                <li><a href="../about-me">About Me</a></li>
            </ul>
            </nav>
        </div>
        <!-- Titulo -->
        <div class="titulo2">
            <a href="../../">
                <h1>Jose J. Rodríguez</h1>
                <h2>Cinematographer</h2>
            </a>
        </div>
        <!-- Carousel de imagenes -->
        <section class="container">
            <div id="carouselExampleCaptions" class="carousel slide ">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!-- Titulo del proyecto -->
                        <div class="works-title mt-1">
                            <h1>NIKE</h1>
                            <h2>Dir. Javier Signorelli <br>
                            </h2>
                        </div>
                        <!-- Video del proyecto -->
                        <img src="../../imagen/commercial/proyecto9/imagen1.webp" loading="eager" id="proyecto9"
                            class="d-block w-100 imagen-work" alt="proyecto9">
                        <a class=" btn btn-outline-light reel" style="visibility: hidden;"
                            href="../video/video3.php">Play
                            reel</a>
                        <article class="container">
                            <!-- Carousel de imagenes -->
                            <div class="colunm">
                                <img class="lazy-image" src="../../imagen/commercial/proyecto9/imagen1.webp"
                                    loading="eager" alt="Image 1 of Nike">
                                <img class="lazy-image" src="../../imagen/commercial/proyecto9/imagen2.webp"
                                    loading="eager" alt="Image 2 of Nike">
                                <img class="lazy-image" src="../../imagen/commercial/proyecto9/imagen3.webp"
                                    loading="eager" alt="Image 3 of Nike">
                                <img class="lazy-image" src="../../imagen/commercial/proyecto9/imagen4.webp"
                                    loading="eager" alt="Image 4 of Nike">
                                <img class="lazy-image" src="../../imagen/commercial/proyecto9/imagen5.webp"
                                    loading="eager" alt="Image 5 of Nike">
                                <img class="lazy-image" src="../../imagen/commercial/proyecto9/imagen6.webp"
                                    loading="eager" alt="Image 6 of Nike">
                                <img class="lazy-image" src="../../imagen/commercial/proyecto9/imagen7.webp"
                                    loading="eager" alt="Image 7 of Nike">
                                <img class="lazy-image" src="../../imagen/commercial/proyecto9/imagen8.webp"
                                    loading="eager" alt="Image 8 of Nike">
                                <img class="lazy-image" src="../../imagen/commercial/proyecto9/imagen9.webp"
                                    loading="eager" alt="Image 9 of Nike">
                                <img class="lazy-image" src="../../imagen/commercial/proyecto9/imagen10.webp"
                                    loading="eager" alt="Image 10 of Nike">
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </main>
    <script>document.addEventListener("DOMContentLoaded", function () {
            const images = document.querySelectorAll('.lazy-image');

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'scale(1)'; // Restaurar la escala original
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            images.forEach(image => {
                observer.observe(image);
            });
        });
    </script>
</body>

</html>