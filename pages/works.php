<?php
// Incluir menú de navegación
include('../navegacion.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Explore the most important works of José Rodríguez, a talented Cinematographer known for capturing stunning visuals and telling compelling stories through his camera. Discover his portfolio of notable projects." />
    <link rel="icon" type="image/x-icon" href="../imagen/logos/logos.ico">
    <title>Works José Rodriguez | Cinematographer</title>
</head>

<body>
    <main>
        <!-- Menu de navegaciòn -->
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
                <h1>Jose J. Rodríguez</h1>
                <h2>Cinematographer</h2>
            </a>
        </div>
        <!-- Mosaico -->
        <br>
        <section class="mosaico">
            <h1 style="font-size:35px; font-family: 'jost' ;color:white; margin-left:15px;">Latest Proyects</h1>
            <!-- Imagen grande -->
            <article class="image-container">

                <div class="proyect">
                    <a href="commercials/vivienda">
                        <img class="lazy-image" src="../imagen/commercial/proyecto18/imagen2.webp"
                            alt="Three young men smiling in a circle with a neon background" Title="Image of vivienda">
                        <div class="overlay2">Banco Bogotá | VIVIENDA <p> Dir. Camilo Matiz <br> Colombo Films</p>
                        </div>
                    </a>
                </div>
                <!-- Columna de imagenes pequeñas -->
                <div class="column">
                    <div class="proyect2">
                        <a href="commercials/nike">
                            <img class="lazy-image" src="../imagen/commercial/proyecto9/imagen1.webp"
                                alt="A sporty girl with crossed arms smiling at the camera" title="Image of nike">
                            <div class="overlay2">NIKE</br>
                                <p> Dir. Javier Signorelli <br> Antiestatico</p>
                            </div>
                        </a>
                    </div>
                    <div class="proyect3">
                        <a href="musicVideo/fashion_fades">
                            <img class="lazy-image" src="../imagen/musical/proyecto5/imagen2.webp"
                                alt="A girl on the phone in the street staring into space"
                                title="Image of Fashion Fades">
                            <div class="overlay2">Fashion Fades <p> Dir. Lucas Borgues <br> Flow Records</p>
                            </div>
                        </a>
                    </div>
                </div>
            </article>
            <!-- Columna de imagenes pequeñas -->
            <article class="image-container">
                <div class="column">
                    <div class="proyect2">
                        <a href="narrative/scum">
                            <img class="lazy-image" src="../imagen/shortfilm/proyecto2/imagen5.webp"
                                alt="A glass-panel door with a worried woman visible behind it" title="Image of scum">
                            <div class="overlay2">SCUM <p> Dir. Elisa Lanzas <br> Escac</p>
                            </div>
                        </a>
                    </div>
                    <div class="proyect3">
                        <a href="commercials/naturals">
                            <img class="lazy-image" src="../imagen/commercial/proyecto12/imagen1.webp"
                                alt="The sea with rocks and a girl lying down watching the view"
                                title="Image of naturals">
                            <div class="overlay2">NATURALS <p> Dir. María Gómez </p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Imagen grande -->
                <div class="proyect">
                    <a href="narrative/recuerdos_en_corchea">
                        <img class="lazy-image" src="../imagen/shortfilm/proyecto4/imagen4.webp"
                            alt="A man looking through the curtain, analyzing something"
                            title="Image of Recuerdos en corchea">
                        <div class="overlay2">Recuerdos en corchea <p> Dir. María Gómez <br> Escac</p>
                        </div>
                    </a>
                </div>
            </article>
            <!-- Imagen grande -->
            <article class="image-container">
                <div class="proyect">
                    <a href="commercials/banca_movil.php">
                        <img class="lazy-image" src="../imagen/commercial/proyecto14/imagen1.webp"
                            alt="A man happily looking at his phone with a colorful and vibrant background"
                            title="Image of Banca movil">
                        <div class="overlay2">Banco Bogotá | Banca Móvil <p> Dir. Camilo Matiz <br> Colombo Films</p>
                        </div>
                    </a>
                </div>
                <!-- Columna de imagenes pequeñas -->
                <div class="column">
                    <div class="proyect2">
                        <a href="commercials/verdes">
                            <img class="lazy-image" src="../imagen/commercial/proyecto17/imagen2.webp"
                                alt="A group of workers wearing safety gear and planning their next step"
                                title="Image of Verdes">
                            <div class="overlay2">Banco Bogotá | VERDES <p> Dir. Camilo Matiz <br> Colombo Films</p>
                            </div>
                        </a>
                    </div>
                    <div class="proyect3">
                        <a href="narrative/late_bloomer">
                            <img class="lazy-image" src="../imagen/shortfilm/proyecto6/imagen2.webp"
                                alt="A girl looking at her reflection in the mirror, where she wears a mask and considers removing it"
                                title="Image of Late Bloomer">
                            <div class="overlay2">Late Bloomer <p> Dir. Jhon Araque <br> Escac</p>
                            </div>
                        </a>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
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