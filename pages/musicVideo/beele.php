<?php

$titulo = "BEELE | Music Video | José Rodríguez Cinematographer";
$descripcion = "Music Video by José Rodríguez Cinematographer. Explore the latest project BEELE, showcasing exceptional cinematography and storytelling.";
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
                            <h1>Beele</h1>
                            <h2>Dir. Carlos Rodríguez <br>
                                Carc Pro </h2>
                        </div>
                        <!-- Video del proyecto -->
                        <video class=" " src="../../video/musical/proyecto11.mp4" autoplay controls loop></video>
                        <a class=" btn btn-outline-light reel" style="visibility: hidden;"
                            href="../video/video1.php">Play
                            reel</a>
                        <article class="container ">
                            <!-- Carousel de imagenes -->
                            <div class="colunm">
                                <img class="lazy-image" src="../../imagen/musical/proyecto11/imagen1.webp"
                                    loading="eager" alt="Image 1 of BEELE ">
                                <img class="lazy-image" src="../../imagen/musical/proyecto11/imagen2.webp"
                                    loading="eager" alt="Image 2 of BEELE">
                                <img class="lazy-image" src="../../imagen/musical/proyecto11/imagen3.webp"
                                    loading="eager" alt="Image 3 of BEELE">
                                <img class="lazy-image" src="../../imagen/musical/proyecto11/imagen4.webp"
                                    loading="eager" alt="Image 4 of BEELE">
                                <img class="lazy-image" src="../../imagen/musical/proyecto11/imagen5.webp"
                                    loading="eager" alt="Image 5 of BEELE">
                                <img class="lazy-image" src="../../imagen/musical/proyecto11/imagen6.webp"
                                    loading="eager" alt="Image 6 of BEELE">
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