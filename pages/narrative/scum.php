<?php

$titulo = "SCUM | Short Film | José Rodríguez Cinematographer";
$descripcion = "Short Film by José Rodríguez Cinematographer. Explore the latest project SCUM, showcasing exceptional cinematography and storytelling.";
// Incluir menú de navegación
require ("../../navegacion.php");
?>


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
                            <h1>SCUM</h1>
                            <h2>Dir. Elisa Lanzas <br>
                                Escac </h2>
                        </div>
                        <!-- Video del proyecto -->
                        <video class=" " src="../../video/shortfilms/proyecto3.mp4" autoplay controls loop></video>
                        <a class=" btn btn-outline-light reel" style="visibility: hidden;"
                            href="../video/video1.php">Play
                            reel</a>
                        <article class="container ">
                            <!-- Carousel de imagenes -->
                            <div class="colunm">
                                <img class="lazy-image" src="../../imagen/shortfilm/proyecto2/imagen5.webp"
                                    loading="eager" alt="Image 1 of SCUM">
                                <img class="lazy-image" src="../../imagen/shortfilm/proyecto2/imagen6.webp"
                                    loading="eager" alt="Image 2 of SCUM">
                                <img class="lazy-image" src="../../imagen/shortfilm/proyecto2/imagen1.webp"
                                    loading="eager" alt="Image 3 of SCUM">
                                <img class="lazy-image" src="../../imagen/shortfilm/proyecto2/imagen2.webp"
                                    loading="eager" alt="Image 4 of SCUM">
                                <img class="lazy-image" src="../../imagen/shortfilm/proyecto2/imagen3.webp"
                                    loading="eager" alt="Image 5 of SCUM">
                                <img class="lazy-image" src="../../imagen/shortfilm/proyecto2/imagen4.webp"
                                    loading="eager" alt="Image 6 of SCUM">
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