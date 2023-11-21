<?php
$success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $to = "bloemen@bloemen.com.ar"; // Email destinatario
    $subject = "Nuevo email ingresado en web de Bloemen";
    
    // Retrieve the email from the form
    $email = $_POST["email"];
    
    // Message
    $message = "Nuevo email ingresado: " . $email;
    
    // Additional headers
    $headers = "From: <noreply@bloemen.com.ar>";
    
    // Send the email
    $success = mail($to, $subject, $message, $headers);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="scss/style.css?v=1.01">
    <script src="js/main.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5KY9W14R2J"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-5KY9W14R2J');
    </script>
    <title>Bloemen - Fertilizantes Sustentables | Productos</title>
</head>

<body>

    <?php require_once 'header.php'; ?>

    <main>

        <section class="page-section">
            <article class="page-title">
                <h2 class="uppercase-text">Productos</h2>
            </article>
        </section>

        <section class="detalle-productos">
            <details>
                <summary>
                    <picture>
                        <source media="(min-width:1024px)" srcset="img/desktop/foliar-desktop.png">
                        <img class="portadas-productos" src="img/productos-foliar-mobile.png">
                    </picture>
                </summary>
                <article class="productos-foliar">
                    <ul>
                        <li>
                            <details>
                                <summary class="uppercase-text">Aminocorrectores</summary>
                                <p class="descripcion-productos">Son correctores foliares a base de Aminoácidos más el elemento corrector con el agregado de micronutrientes.
                                    Actúan en el crecimiento, activan la fotosíntesis y mejoran la calidad y el rendimiento de los cultivos.</p>
                                <div class="slideshow">
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">AMINO Fe</p><br>
                                            <img src="img/prod-foliar AMINO-Fe.png" alt="Image 1">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_1">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_1">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_1"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_1" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_1"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-01.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">AMINO K</p><br>
                                            <img src="img/prod-foliar-AMINO-K.png" alt="Image 2">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_2">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_2">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_2"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_2" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_2"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-02.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">AMINO Zn-Mn</p><br>
                                            <img src="img/prod-foliar-Amino-ZN_MN.png" alt="Image 3">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_3">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_3">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_3"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_3" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_3"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-03.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">BIOBLOEMEN</p><br>
                                            <img src="img/prod-foliar-BIOBLOEMEN.png" alt="Image 4">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_4">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_4">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_4"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_4" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_4"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-06.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">CORRECTOR AMINO B</p>
                                            <img src="img/prod-foliar-CORRECTOR-AMINO-B.png" alt="Image 5">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_5">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_5">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_5"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_5" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_5"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-12.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">CORRECTOR AMINO Mg</p>
                                            <img src="img/prod-foliar-CORRECTOR-AMINO-Mg.png" alt="Image 6">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_6">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_6">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_6"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_6" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_6"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-15.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">CORRECTOR AMINO Zn</p>
                                            <img src="img/prod-foliar-CORRECTOR-AMINO-Zn.png" alt="Image 7">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_7">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_7">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_7"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_7" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_7"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-14.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">CORRECTOR de Ca</p><br>
                                            <img src="img/prod-foliar-CORRECTOR-DE-Ca-BIOBLOEMEN.png" alt="Image 8">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_8">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_8">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_8"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_8" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_8"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-13.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">CORRECTOR de N</p><br>
                                            <img src="img/prod-foliar-CORRECTOR-DE-N-BIOBLOEMEN.png" alt="Image 9">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_9">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_9">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_9"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_9" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_9"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-16.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">VERDIGER</p><br>
                                            <img src="img/prod-foliar-VERDIGER.png" alt="Image 10">
                                            <figcaption>
                                                <button class="boton-ficha-producto ficha-nodisp">ficha no disponible</button>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">BLONOS</p><br>
                                            <img src="img/BLONOS.png" alt="Image 10-1">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_10">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_10">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_10"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_10" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_10"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-11.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">BLONOS 20N</p><br>
                                            <img src="img/BLONOS 20N.png" alt="Image 10-2">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_11">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_11">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_11"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_11" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_11"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-10.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">PROMOTOR DE CRECIMIENTO FOLIAR</p><br>
                                            <img src="img/PROMOTOR DE CRECIMIENTO FOLIAR.png" alt="Image 10-3">
                                            <figcaption>
                                                <button class="boton-ficha-producto ficha-nodisp">ficha no disponible</button>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <button id="prevButton"><img src="img/prev-arrow.png"></button>
                                    <button id="nextButton"><img src="img/next-arrow.png"></button>
                                </div>
                                <div class="slideshow-amino-desktop">
                                    <div class="slide-amino-desktop">
                                        <figure>
                                            <p class="titulo-producto">AMINO Fe</p><br>
                                            <img src="img/prod-foliar AMINO-Fe.png" alt="Image 1">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_12">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_12">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_12"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_12" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_12"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-01.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">AMINO K</p><br>
                                            <img src="img/prod-foliar-AMINO-K.png" alt="Image 2">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_13">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_13">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_13"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_13" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_13"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-02.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">AMINO Zn-Mn</p><br>
                                            <img src="img/prod-foliar-Amino-ZN_MN.png" alt="Image 3">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_14">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_14">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_14"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_14" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_14"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-03.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-amino-desktop">
                                        <figure>
                                            <p class="titulo-producto">BIOBLOEMEN</p>
                                            <img src="img/prod-foliar-BIOBLOEMEN.png" alt="Image 4">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_15">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_15">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_15"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_15" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_15"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-06.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">CORRECTOR AMINO B</p>
                                            <img src="img/prod-foliar-CORRECTOR-AMINO-B.png" alt="Image 5">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_16">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_16">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_16"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_16" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_16"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-12.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">CORRECTOR AMINO Mg</p>
                                            <img src="img/prod-foliar-CORRECTOR-AMINO-Mg.png" alt="Image 6">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_17">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_17">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_17"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_17" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_17"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-15.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-amino-desktop">
                                        <figure>
                                            <p class="titulo-producto">CORRECTOR AMINO Zn</p>
                                            <img src="img/prod-foliar-CORRECTOR-AMINO-Zn.png" alt="Image 7">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_18">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_18">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_18"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_18" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_18"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-14.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">CORRECTOR de Ca</p>
                                            <img src="img/prod-foliar-CORRECTOR-DE-Ca-BIOBLOEMEN.png" alt="Image 8">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_19">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_19">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_19"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_19" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_19"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-13.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">CORRECTOR de N</p>
                                            <img src="img/prod-foliar-CORRECTOR-DE-N-BIOBLOEMEN.png" alt="Image 9">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_20">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_20">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_20"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_20" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_20"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-16.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>

                                        </figure>
                                    </div>
                                    <div class="slide-amino-desktop">
                                        <figure>
                                            <p class="titulo-producto">VERDIGER</p>
                                            <img src="img/prod-foliar-VERDIGER.png" alt="Image 10">
                                            <figcaption>
                                                <button class="boton-ficha-producto ficha-nodisp">ficha no disponible</button>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">BLONOS</p><br>
                                            <img src="img/BLONOS.png" alt="Image 10-1">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_21">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_21">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_21"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_21" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_21"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-11.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">BLONOS 20N</p><br>
                                            <img src="img/BLONOS 20N.png" alt="Image 10-2">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_22">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_22">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_22"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_22" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_22"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-10.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-amino-desktop">
                                        <figure>
                                            <p class="titulo-producto">PROMOTOR</p><br>
                                            <img src="img/PROMOTOR DE CRECIMIENTO FOLIAR.png" alt="Image 10-3">
                                            <figcaption>
                                                <button class="boton-ficha-producto ficha-nodisp">ficha no disponible</button>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <button id="prevButton-amino-d"><img src="img/prev-arrow.png"></button>
                                    <button id="nextButton-amino-d"><img src="img/next-arrow.png"></button>
                                </div>
                            </details>
                        </li>
                        <li>
                            <details>
                                <summary class="uppercase-text">Maxicorrectores</summary>
                                <p class="descripcion-productos">Son correctores foliares de elevada concentración de nutriente corrector, mejoran el cuajado, la floración
                                    y la calidad de los cultivos.</p>

                                <div class="slideshow-maxicorrectores">
                                    <div class="slide-maxicorrectores">
                                        <figure>
                                            <p class="titulo-producto">MAXIBORO</p><br>
                                            <img src="img/prod-maxi-foliar-MAXIBORO.png" alt="Image 11">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_23">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_23">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_23"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_23" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_23"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-27.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-maxicorrectores">
                                        <figure>
                                            <p class="titulo-producto">MAXICALCIO</p><br>
                                            <img src="img/prod-maxi-foliar-MAXICALCIO.png" alt="Image 2">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_24">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_24">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_24"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_24" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_24"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-28.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <button id="prevButton-maxi"><img src="img/prev-arrow.png"></button>
                                    <button id="nextButton-maxi"><img src="img/next-arrow.png"></button>
                                </div>
                                <div class="lista-productos-foliar" id="galeria-maxicorrectores">
                                    <figure>
                                        <p class="titulo-producto">MAXIBORO</p><br>
                                        <img src="img/prod-maxi-foliar-MAXIBORO.png" alt="Image 11"><br>
                                        <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_25">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_25">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_25"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_25" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_25"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-27.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                    </figure><br>
                                    <figure>
                                        <p class="titulo-producto">MAXICALCIO</p><br>
                                        <img src="img/prod-maxi-foliar-MAXICALCIO.png"><br>
                                        <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_26">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_26">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_26"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_26" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_26"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-28.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                    </figure><br>
                                </div>
                            </details>
                        </li>
                        <li>
                            <details>
                                <summary class="uppercase-text">Fosfitos</summary>
                                <p class="descripcion-productos">Son bioestimulantes con triple acción estimulante.<br>
                                    – Incrementa las defensas naturales de las plantas.<br>
                                    – Reduce las situaciones de estrés.<br>
                                    – Incorpora alto contenido de nutrientes.</p>
                                <div class="slideshow-fosfito">
                                    <div class="slide-fosfito">
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE Ca</p>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE Ca.png" alt="Image 13">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_27">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_27">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_27"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_27" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_27"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-21.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-fosfito">
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE Cu</p>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE Cu.png" alt="Image 14">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_28">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_28">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_28"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_28" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_28"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-22.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-fosfito">
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE Mg</p>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE Mg.png" alt="Image 15">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_29">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_29">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_29"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_29" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_29"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-23.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-fosfito">
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE Mn</p>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE Mn.png" alt="Image 16">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_30">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_30">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_30"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_30" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_30"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-24.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-fosfito">
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE POTASIO</p>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE POTASIO.png" alt="Image 17">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_31">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_31">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_31"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_31" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_31"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-28.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-fosfito">
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE Zn</p>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE Zn.png" alt="Image 18">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_32">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_32">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_32"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_32" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_32"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-26.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-fosfito">
                                        <figure>
                                            <p class="titulo-producto">BLOFOS K</p>
                                            <img src="img/BLOFOS K.png" alt="Image 18-1">
                                            <figcaption>
                                                <button class="boton-ficha-producto ficha-nodisp">ficha no disponible</button>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <button id="prevButton-fosfito"><img src="img/prev-arrow.png"></button>
                                    <button id="nextButton-fosfito"><img src="img/next-arrow.png"></button>
                                </div>
                                <div class="slideshow-fosfito-desktop">
                                    <div class="slide-fosfito-desktop">
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE Ca</p>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE Ca.png" alt="Image 13">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_33">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_33">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_33"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_33" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_33"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-21.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE Cu</p>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE Cu.png" alt="Image 14">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_34">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_34">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_34"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_34" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_34"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-22.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE Mg</p>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE Mg.png" alt="Image 15">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_35">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_35">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_35"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_35" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_35"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-23.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-fosfito-desktop">
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE Mn</p>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE Mn.png" alt="Image 16">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_36">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_36">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_36"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_36" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_36"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-24.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE POTASIO</p>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE POTASIO.png" alt="Image 17">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_37">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_37">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_37"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_37" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_37"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-25.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE Zn</p>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE Zn.png" alt="Image 18">
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_38">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_38">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_38"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_38" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_38"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-26.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-fosfito-desktop">
                                        <figure>
                                            <p class="titulo-producto">BLOFOS K</p>
                                            <img src="img/BLOFOS K.png" alt="Image 18-1">
                                            <figcaption>
                                                <button class="boton-ficha-producto ficha-nodisp">ficha no disponible</button>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <button id="prevButton-fosfito-d"><img src="img/prev-arrow.png"></button>
                                    <button id="nextButton-fosfito-d"><img src="img/next-arrow.png"></button>
                                </div>
                            </details>
                        </li>
                    </ul>
                </article>
            </details>
            <details>
                <summary>
                    <picture>
                        <source media="(min-width:1024px)" srcset="img/desktop/suelo-desktop.png">
                        <img class="portadas-productos" src="img/productos-suelo-mobile.png">
                    </picture>
                </summary>
                <article class="productos-suelo">
                    <ul>
                        <li>
                            <details>
                                <summary class="uppercase-text">Líquidos</summary>
                                <p class="descripcion-productos">
                                    Los fertilizantes orgánicos Líquidos Bloemen, poseen un elevado contenido de materia orgánica, y son elaborados a partir de materias orgánicas de alta calidad, las cuales son sometidas a estrictos procedimientos de compostación, mediante un lento proceso de pre-fermentaciones y fermentaciones aeróbicas bacterianas, siguiendo estrictos controles de verificación de su contenido nutricional, transformando el material orgánico original, en diferentes fracciones y nutrientes totalmente asimilables por las plantas.
                                    Contienen macronutrientes, micronutrientes quelatados, aminoácidos libres, ácidos húmicos micorrizas arbusculares y microorganismos aeróbicos que lo transforman en un fertilizante complejo orgánico y biológico.
                                    Ideales para riego por goteo, fertirriego, chorreado y en riego por manto.
                                </p>
                                <div class="lista-productos-suelo" id="galeria-fol">
                                    <figure>
                                        <p class="titulo-producto">FOL K</p><br>
                                        <img src="img/FOL-K-1000Lts.png" alt="Imagen FOL K"><br>
                                        <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_39">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_39">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_39"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_39" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_39"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-18.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                    </figure><br>
                                    <figure>
                                        <p class="titulo-producto">FOL MIX</p><br>
                                        <img src="img/FOL-MIX-1000Lts.png" alt="Imagen FOL MIX"><br>
                                        <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_40">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_40">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_38"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_40" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_40"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-19.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                    </figure><br>
                                    <figure>
                                        <p class="titulo-producto">FOL SUELO</p><br>
                                        <img src="img/FOL-suelo-1000Lts.png"><br>
                                        <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_41">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_41">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_41"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_41" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_41"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-20.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                </div>
                            </details>
                        </li>
                        <li>
                            <details>
                                <summary class="uppercase-text">Promotor de crecimiento</summary>
                                <p class="descripcion-productos">
                                    Fertilizante biológico que contiene Micorrizas arbusculares, Azospirillum Brasilense,
                                    Pseudomonas fluorescens, ácidos húmicos, micronutrientes quelatados y otros microorganismos benéficos.<br>
                                    – Aumenta la cantidad de raíces y pelos radiculares.<br>
                                    – Incrementa disponibilidad y captación de los nutrientes.<br>
                                    – Aumenta rendimiento, calidad y sanidad de los cultivos.
                                </p>
                                <div class="lista-productos-promotor">
                                    <figure>
                                        <p class="titulo-producto">PROMOTOR DE CRECIMIENTO</p>
                                        <img src="img/PROMOTOR DE CRECIMIENTO.png" alt="Imagen Promotor de Crecimiento"><br>
                                        <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_42">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_42">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_42"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_42" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_42"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-29.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                    </figure><br>
                                </div>
                            </details>
                        </li>
                        <li>
                            <details>
                                <summary class="uppercase-text">Sólidos</summary>
                                <p class="descripcion-productos">
                                    Son fertilizantes completos con alto contenido de materia orgánica y microorganismos benéficos.
                                    Poseen un importante contenido de nutrientes y micronutrientes quelatados.
                                    La forma de pellet permite mecanizar su distribución, realizando una importante reducción de los costos de mano de obra.
                                </p>
                                <!--<div class="lista-productos-solidos">-->
                                <div class="slideshow-solidos">
                                    <div class="slide-solidos">
                                        <figure>
                                            <p class="titulo-producto">BioBloemen</p>
                                            <img src="img/Bolsa-Verde.png" alt="Imagen Bolsa Verde"><br>
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_43">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_43">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_43"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_43" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_43"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-05.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-solidos">
                                        <figure>
                                            <p class="titulo-producto">BioBloemen 15N</p>
                                            <img src="img/Bolsa-Verde.png" alt="Imagen Bolsa Verde"><br>
                                            <figcaption>
                                                <button class="boton-ficha-producto ficha-nodisp">ficha no disponible</button>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-solidos">
                                        <figure>
                                            <p class="titulo-producto">Bloemen</p>
                                            <img src="img/Bolsa-Azul.png" alt="Imagen Bolsa Azul"><br>
                                            <figcaption>
                                                <button class="boton-ficha-producto ficha-nodisp">ficha no disponible</button>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-solidos">
                                        <figure>
                                            <p class="titulo-producto">Bloemen 12</p>
                                            <img src="img/Bolsa-Azul.png" alt="Imagen Bolsa Azul"><br>
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_44">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_44">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_44"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_44" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_44"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-09.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-solidos">
                                        <figure>
                                            <p class="titulo-producto">Bloemen 17N</p>
                                            <img src="img/Bolsa-Azul.png" alt="Imagen Bolsa Azul"><br>
                                            <figcaption>
                                                <button class="boton-ficha-producto ficha-nodisp">ficha no disponible</button>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-solidos">
                                        <figure>
                                            <p class="titulo-producto">Blocompost</p>
                                            <img src="img/Bolsa-Azul.png" alt="Imagen Bolsa Azul"><br>
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_45">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_45">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_45"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_45" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_45"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-08.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <button id="prevButton-solidos"><img src="img/prev-arrow.png"></button>
                                    <button id="nextButton-solidos"><img src="img/next-arrow.png"></button>
                                </div>
                                <div class="slideshow-solidos-desktop">
                                    <div class="slide-solidos-desktop">
                                        <figure>
                                            <p class="titulo-producto">BioBloemen</p>
                                            <img src="img/Bolsa-Verde.png" alt="Imagen Bolsa Verde"><br>
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_46">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_46">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_46"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_46" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_46"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-05.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">BioBloemen 15N</p>
                                            <img src="img/Bolsa-Verde.png" alt="Imagen Bolsa Verde"><br>
                                            <figcaption>
                                                <button class="boton-ficha-producto ficha-nodisp">ficha no disponible</button>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">Bloemen</p>
                                            <img src="img/Bolsa-Azul.png" alt="Imagen Bolsa Azul"><br>
                                            <figcaption>
                                                <button class="boton-ficha-producto ficha-nodisp">ficha no disponible</button>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-solidos-desktop">
                                        <figure>
                                            <p class="titulo-producto">Bloemen 12</p>
                                            <img src="img/Bolsa-Azul.png" alt="Imagen Bolsa Azul"><br>
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_47">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_47">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_47"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_47" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_47"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-09.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">Bloemen 17N</p>
                                            <img src="img/Bolsa-Azul.png" alt="Imagen Bolsa Azul"><br>
                                            <figcaption>
                                                <button class="boton-ficha-producto ficha-nodisp">ficha no disponible</button>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">Blocompost</p>
                                            <img src="img/Bolsa-Azul.png" alt="Imagen Bolsa Azul"><br>
                                            <figcaption>
                                                <!-- Trigger button for the first modal -->
                                                <button class="openModalBtn" data-modal="modal1_48">ver ficha</button>

                                                <!-- First modal with a form -->
                                                <dialog class="modal modal1" id="modal1_48">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal1_48"><img src="img/burger-close.png"></button>
                                                        <p class="uppercase-text">Ingresá tu mail para poder abrir el archivo</p>
                                                        <form action="" method="post" class="emailForm">
                                                            <label for="email"></label>
                                                            <input type="email" id="email" name="email" required><br>
                                                            <button type="submit" class="uppercase-text">Enviar</button>
                                                        </form>
                                                    </div>
                                                </dialog>

                                                <!-- Second modal -->
                                                <dialog id="modal2_48" class="modal-productos">
                                                    <div>
                                                        <button class="closeModalBtn" data-modal="modal2_48"><img src="img/burger-close.png"></button>
                                                        <img class="modal-prod-img" src="img/FICHAS TECNICAS FINALES-08.png">
                                                    </div>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <button id="prevButton-solidos-desktop"><img src="img/prev-arrow.png"></button>
                                    <button id="nextButton-solidos-desktop"><img src="img/next-arrow.png"></button>
                                </div>
                            </details>
                        </li>
                    </ul>
                </article>
            </details>

        </section>

        <div id="cont-whatsapp-fixed">
            <img class="whatsapp-fixed" id="whatsapp-fixed" src="img/whatsapp-fixed.png">
        </div>

    </main>

    <?php require_once 'footer.php'; ?>

</body>

</html>