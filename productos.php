<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="scss/style.css">
    <script src="js/main.js"></script>
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
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-1">
                                                    <img class="modal-prod-img" src="img/ft-01-amino-fe.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">AMINO K</p><br>
                                            <img src="img/prod-foliar-AMINO-K.png" alt="Image 2">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-2">
                                                    <img class="modal-prod-img" src="img/ft-02-amino-k.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">AMINO Zn-Mn</p><br>
                                            <img src="img/prod-foliar-Amino-ZN_MN.png" alt="Image 3">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-3">
                                                    <img class="modal-prod-img" src="img/ft-03-amino-zn-mn.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">BIOBLOEMEN</p><br>
                                            <img src="img/prod-foliar-BIOBLOEMEN.png" alt="Image 4">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-3">
                                                    <img class="modal-prod-img" src="img/ft-04-aminoacidos.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">CORRECTOR AMINO B</p>
                                            <img src="img/prod-foliar-CORRECTOR-AMINO-B.png" alt="Image 5">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-5">
                                                    <img class="modal-prod-img" src="img/ft-05-corrector-amino-b.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">CORRECTOR AMINO Mg</p>
                                            <img src="img/prod-foliar-CORRECTOR-AMINO-Mg.png" alt="Image 6">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-6">
                                                    <img class="modal-prod-img" src="img/ft-06-corrector-mg.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">CORRECTOR AMINO Zn</p>
                                            <img src="img/prod-foliar-CORRECTOR-AMINO-Zn.png" alt="Image 7">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-7">
                                                    <img class="modal-prod-img" src="img/ft-07-corrector-amino-zn.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">CORRECTOR de Ca</p><br>
                                            <img src="img/prod-foliar-CORRECTOR-DE-Ca-BIOBLOEMEN.png" alt="Image 8">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-8">
                                                    <img class="modal-prod-img" src="img/ft-08-corrector-ca.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide">
                                        <figure>
                                            <p class="titulo-producto">CORRECTOR de N</p><br>
                                            <img src="img/prod-foliar-CORRECTOR-DE-N-BIOBLOEMEN.png" alt="Image 9">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-9">
                                                    <img class="modal-prod-img" src="img/ft-09-corrector-n.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
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
                                    <button id="prevButton"><img src="img/prev-arrow.png"></button>
                                    <button id="nextButton"><img src="img/next-arrow.png"></button>
                                </div>
                                <div class="slideshow-amino-desktop">
                                    <div class="slide-amino-desktop">
                                        <figure>
                                            <p class="titulo-producto">AMINO Fe</p><br>
                                            <img src="img/prod-foliar AMINO-Fe.png" alt="Image 1">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-1">
                                                    <img class="modal-prod-img" src="img/ft-01-amino-fe.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">AMINO K</p><br>
                                            <img src="img/prod-foliar-AMINO-K.png" alt="Image 2">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-2">
                                                    <img class="modal-prod-img" src="img/ft-02-amino-k.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">AMINO Zn-Mn</p><br>
                                            <img src="img/prod-foliar-Amino-ZN_MN.png" alt="Image 3">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-3">
                                                    <img class="modal-prod-img" src="img/ft-03-amino-zn-mn.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-amino-desktop">
                                        <figure>
                                            <p class="titulo-producto">BIOBLOEMEN</p>
                                            <img src="img/prod-foliar-BIOBLOEMEN.png" alt="Image 4">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-3">
                                                    <img class="modal-prod-img" src="img/ft-04-aminoacidos.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">CORRECTOR AMINO B</p>
                                            <img src="img/prod-foliar-CORRECTOR-AMINO-B.png" alt="Image 5">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-5">
                                                    <img class="modal-prod-img" src="img/ft-05-corrector-amino-b.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">CORRECTOR AMINO Mg</p>
                                            <img src="img/prod-foliar-CORRECTOR-AMINO-Mg.png" alt="Image 6">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-6">
                                                    <img class="modal-prod-img" src="img/ft-06-corrector-mg.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-amino-desktop">
                                        <figure>
                                            <p class="titulo-producto">CORRECTOR AMINO Zn</p>
                                            <img src="img/prod-foliar-CORRECTOR-AMINO-Zn.png" alt="Image 7">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-7">
                                                    <img class="modal-prod-img" src="img/ft-07-corrector-amino-zn.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">CORRECTOR de Ca</p>
                                            <img src="img/prod-foliar-CORRECTOR-DE-Ca-BIOBLOEMEN.png" alt="Image 8">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-8">
                                                    <img class="modal-prod-img" src="img/ft-08-corrector-ca.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">CORRECTOR de N</p>
                                            <img src="img/prod-foliar-CORRECTOR-DE-N-BIOBLOEMEN.png" alt="Image 9">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-9">
                                                    <img class="modal-prod-img" src="img/ft-09-corrector-n.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
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
                                <div class="lista-productos-foliar" id="galeria-maxicorrectores">
                                    <figure>
                                        <p class="titulo-producto">MAXIBORO</p><br>
                                        <img src="img/prod-maxi-foliar-MAXIBORO.png" alt="Image 11">
                                        <figcaption>
                                            <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                            <dialog class="modal-prod" id="modal-prod-11">
                                                <img class="modal-prod-img" src="img/ft-11-maxiboro.png">
                                                <button class="boton-ficha-producto close-boton-prod">
                                                    <img src="img/burger-close.png" alt="Cerrar">
                                                </button>
                                            </dialog>
                                        </figcaption>
                                    </figure><br>
                                    <figure>
                                        <p class="titulo-producto">MAXICALCIO</p><br>
                                        <img src="img/prod-maxi-foliar-MAXICALCIO.png">
                                        <figcaption>
                                            <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                            <dialog class="modal-prod" id="modal-prod-12">
                                                <img class="modal-prod-img" src="img/ft-12-maxicalcio.png">
                                                <button class="boton-ficha-producto close-boton-prod">
                                                    <img src="img/burger-close.png" alt="Cerrar">
                                                </button>
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
                                            <p class="titulo-producto">FOSFITO DE Ca</p><br>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE Ca.png" alt="Image 13">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-13">
                                                    <img class="modal-prod-img" src="img/ft-13-fosfito-ca.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-fosfito">
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE Cu</p><br>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE Cu.png" alt="Image 14">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-14">
                                                    <img class="modal-prod-img" src="img/ft-14-fosfito-cu.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-fosfito">
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE Mg</p><br>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE Mg.png" alt="Image 15">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-15">
                                                    <img class="modal-prod-img" src="img/ft-15-fosfito-mg.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-fosfito">
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE Mn</p><br>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE Mn.png" alt="Image 16">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-16">
                                                    <img class="modal-prod-img" src="img/ft-16-fosfito-mn.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-fosfito">
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE POTASIO</p><br>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE POTASIO.png" alt="Image 17">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-17">
                                                    <img class="modal-prod-img" src="img/ft-17-fosfito-potasio.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-fosfito">
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE Zn</p><br>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE Zn.png" alt="Image 18">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-18">
                                                    <img class="modal-prod-img" src="img/ft-18-fosfito-zn.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <button id="prevButton-fosfito"><img src="img/prev-arrow.png"></button>
                                    <button id="nextButton-fosfito"><img src="img/next-arrow.png"></button>
                                </div>
                                <div class="slideshow-fosfito-desktop">
                                    <div class="slide-fosfito-desktop">
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE Ca</p><br>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE Ca.png" alt="Image 13">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-13">
                                                    <img class="modal-prod-img" src="img/ft-13-fosfito-ca.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE Cu</p><br>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE Cu.png" alt="Image 14">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-14">
                                                    <img class="modal-prod-img" src="img/ft-14-fosfito-cu.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE Mg</p><br>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE Mg.png" alt="Image 15">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-15">
                                                    <img class="modal-prod-img" src="img/ft-15-fosfito-mg.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="slide-fosfito-desktop">
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE Mn</p><br>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE Mn.png" alt="Image 16">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-16">
                                                    <img class="modal-prod-img" src="img/ft-16-fosfito-mn.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE POTASIO</p><br>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE POTASIO.png" alt="Image 17">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-17">
                                                    <img class="modal-prod-img" src="img/ft-17-fosfito-potasio.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
                                            </figcaption>
                                        </figure>
                                        <figure>
                                            <p class="titulo-producto">FOSFITO DE Zn</p><br>
                                            <img src="img/prod-fosfito-foliar-FOSFITO DE Zn.png" alt="Image 18">
                                            <figcaption>
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-18">
                                                    <img class="modal-prod-img" src="img/ft-18-fosfito-zn.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
                                                </dialog>
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
                                            <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                            <dialog class="modal-prod" id="modal-prod-19">
                                                <img class="modal-prod-img" src="img/ft-19-fol-k.png">
                                                <button class="boton-ficha-producto close-boton-prod">
                                                    <img src="img/burger-close.png" alt="Cerrar">
                                                </button>
                                            </dialog>
                                        </figcaption>
                                    </figure><br>
                                    <figure>
                                        <p class="titulo-producto">FOL MIX</p><br>
                                        <img src="img/FOL-MIX-1000Lts.png" alt="Imagen FOL MIX"><br>
                                        <figcaption>
                                            <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                            <dialog class="modal-prod" id="modal-prod-20">
                                                <img class="modal-prod-img" src="img/ft-20-fol-mix.png">
                                                <button class="boton-ficha-producto close-boton-prod">
                                                    <img src="img/burger-close.png" alt="Cerrar">
                                                </button>
                                            </dialog>
                                        </figcaption>
                                    </figure><br>
                                    <figure>
                                        <p class="titulo-producto">FOL SUELO</p><br>
                                        <img src="img/FOL-suelo-1000Lts.png"><br>
                                        <figcaption>
                                            <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                            <dialog class="modal-prod" id="modal-prod-21">
                                                <img class="modal-prod-img" src="img/ft-21-fol-suelo.png">
                                                <button class="boton-ficha-producto close-boton-prod">
                                                    <img src="img/burger-close.png" alt="Cerrar">
                                                </button>
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
                                        <p class="titulo-producto">PROMOTOR DE CRECIMIENTO</p><br>
                                        <img src="img/PROMOTOR DE CRECIMIENTO.png" alt="Imagen Promotor de Crecimiento"><br>
                                        <figcaption>
                                            <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                            <dialog class="modal-prod" id="modal-prod-22">
                                                <img class="modal-prod-img" src="img/ft-22-promotor.png">
                                                <button class="boton-ficha-producto close-boton-prod">
                                                    <img src="img/burger-close.png" alt="Cerrar">
                                                </button>
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
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-23">
                                                    <img class="modal-prod-img" src="img/ft-23-biobloemen.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
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
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-24">
                                                    <img class="modal-prod-img" src="img/ft-24-bloemen-12.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
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
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-24">
                                                    <img class="modal-prod-img" src="img/ft-25-blocompost.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
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
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-23">
                                                    <img class="modal-prod-img" src="img/ft-23-biobloemen.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
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
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-24">
                                                    <img class="modal-prod-img" src="img/ft-24-bloemen-12.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
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
                                                <button class="boton-ficha-producto open-boton-prod">ver ficha</button>
                                                <dialog class="modal-prod" id="modal-prod-24">
                                                    <img class="modal-prod-img" src="img/ft-25-blocompost.png">
                                                    <button class="boton-ficha-producto close-boton-prod">
                                                        <img src="img/burger-close.png" alt="Cerrar">
                                                    </button>
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