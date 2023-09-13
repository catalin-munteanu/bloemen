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
    <title>Bloemen - Fertilizantes Sustentables | Cultivos</title>
</head>

<body>

    <?php require_once 'header.php'; ?>

    <main>

        <section class="page-section">
            <article class="page-title">
                <h2 class="uppercase-text">Cultivos</h2>
            </article>
        </section>

        <section class="detalle-cultivos">
            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-1">
                    <img class="img-cultivo" src="img/24-ajo-act.png">
                    <p class="uppercase-text nombre-cultivo">Ajo</p>
                </button>
                <dialog class="modal" id="modal-1">
                    <picture>
                        <source media="(min-width:768px)" srcset="img/ficha-ajo.png">
                        <img class="modal-img" src="img/ficha-ajo-movil.png">
                    </picture>
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-2">
                    <img class="img-cultivo" src="img/25-algodon-act.png">
                    <p class="uppercase-text nombre-cultivo">Algodón</p>
                </button>
                <dialog class="modal" id="modal-2">
                    <picture>
                        <source media="(min-width:768px)" srcset="img/ficha-algodon.png">
                        <img class="modal-img" src="img/ficha-algodon-movil.png">
                    </picture>
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-3">
                    <img class="img-cultivo" src="img/26-brocoli-act.png">
                    <p class="uppercase-text nombre-cultivo">Brócoli</p>
                </button>
                <dialog class="modal" id="modal-3">
                    <img class="modal-img" src="img/ficha-brocoli.png">
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-4">
                    <img class="img-cultivo" src="img/27-cania-act.png">
                    <p class="uppercase-text nombre-cultivo">Caña de azúcar</p>
                </button>
                <dialog class="modal" id="modal-4">
                    <picture>
                        <source media="(min-width:768px)" srcset="img/ficha-cania.png">
                        <img class="modal-img" src="img/ficha-cania-movil.png">
                    </picture>
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-5">
                    <img class="img-cultivo" src="img/28-cebada-act.png">
                    <p class="uppercase-text nombre-cultivo">Cebada</p>
                </button>
                <dialog class="modal" id="modal-5">
                    <picture>
                        <source media="(min-width:768px)" srcset="img/ficha-cebada.png">
                        <img class="modal-img" src="img/ficha-cebada-movil.png">
                    </picture>
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-6">
                    <img class="img-cultivo" src="img/29-cebolla-act.png">
                    <p class="uppercase-text nombre-cultivo">Cebolla</p>
                </button>
                <dialog class="modal" id="modal-6">
                    <picture>
                        <source media="(min-width:768px)" srcset="img/ficha-cebolla.png">
                        <img class="modal-img" src="img/ficha-cebolla-movil.png">
                    </picture>
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-7">
                    <img class="img-cultivo" src="img/30-citricos-act.png">
                    <p class="uppercase-text nombre-cultivo">Cítricos</p>
                </button>
                <dialog class="modal" id="modal-7">
                    <picture>
                        <source media="(min-width:768px)" srcset="img/ficha-citricos.png">
                        <img class="modal-img" src="img/ficha-citricos-movil.png">
                    </picture>
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-8">
                    <img class="img-cultivo" src="img/31-girasol-act.png">
                    <p class="uppercase-text nombre-cultivo">Girasol</p>
                </button>
                <dialog class="modal" id="modal-8">
                    <picture>
                        <source media="(min-width:768px)" srcset="img/ficha-girasol.png">
                        <img class="modal-img" src="img/ficha-girasol-movil.png">
                    </picture>
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-9">
                    <img class="img-cultivo" src="img/32-kiwi-act.png">
                    <p class="uppercase-text nombre-cultivo">Kiwi</p>
                </button>
                <dialog class="modal" id="modal-9">
                    <picture>
                        <source media="(min-width:768px)" srcset="img/ficha-kiwi.png">
                        <img class="modal-img" src="img/ficha-kiwi-movil.png">
                    </picture>
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-10">
                    <img class="img-cultivo" src="img/33-maiz-act.png">
                    <p class="uppercase-text nombre-cultivo">Maíz</p>
                </button>
                <dialog class="modal" id="modal-10">
                    <img class="modal-img" src="img/ficha-maiz.png">
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-11">
                    <img class="img-cultivo" src="img/34-manzana-act.png">
                    <p class="uppercase-text nombre-cultivo">Manzana</p>
                </button>
                <dialog class="modal" id="modal-11">
                    <img class="modal-img" src="img/ficha-manzana.png">
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-12">
                    <img class="img-cultivo" src="img/35-olivos-act.png">
                    <p class="uppercase-text nombre-cultivo">Olivos</p>
                </button>
                <dialog class="modal" id="modal-12">
                    <img class="modal-img" src="img/ficha-olivos.png">
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-13">
                    <img class="img-cultivo" src="img/36-papa-act.png">
                    <p class="uppercase-text nombre-cultivo">Papa</p>
                </button>
                <dialog class="modal" id="modal-13">
                    <img class="modal-img" src="img/ficha-papa.png">
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-14">
                    <img class="img-cultivo" src="img/37-pasturas-act.png">
                    <p class="uppercase-text nombre-cultivo">Pasturas</p>
                </button>
                <dialog class="modal" id="modal-14">
                    <img class="modal-img" src="img/ficha-pasturas.png">
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-15">
                    <img class="img-cultivo" src="img/38-pera-act.png">
                    <p class="uppercase-text nombre-cultivo">Pera</p>
                </button>
                <dialog class="modal" id="modal-15">
                    <img class="modal-img" src="img/ficha-pera.png">
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-16">
                    <img class="img-cultivo" src="img/39-poroto-act.png">
                    <p class="uppercase-text nombre-cultivo">Poroto</p>
                </button>
                <dialog class="modal" id="modal-16">
                    <img class="modal-img" src="img/ficha-poroto.png">
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-17">
                    <img class="img-cultivo" src="img/40-soja-act.png">
                    <p class="uppercase-text nombre-cultivo">Soja</p>
                </button>
                <dialog class="modal" id="modal-17">
                    <img class="modal-img" src="img/ficha-soja.png">
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-18">
                    <img class="img-cultivo" src="img/41-tabaco-act.png">
                    <p class="uppercase-text nombre-cultivo">Tabaco</p>
                </button>
                <dialog class="modal" id="modal-18">
                    <picture>
                        <source media="(min-width:768px)" srcset="img/ficha-tabaco.png">
                        <img class="modal-img" src="img/ficha-tabaco-movil.png">
                    </picture>
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-19">
                    <img class="img-cultivo" src="img/42-tomate-act.png">
                    <p class="uppercase-text nombre-cultivo">Tomate</p>
                </button>
                <dialog class="modal" id="modal-19">
                    <img class="modal-img" src="img/ficha-tomate.png">
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-20">
                    <img class="img-cultivo" src="img/43-trigo-act.png">
                    <p class="uppercase-text nombre-cultivo">Trigo</p>
                </button>
                <dialog class="modal" id="modal-20">
                    <picture>
                        <source media="(min-width:768px)" srcset="img/ficha-trigo.png">
                        <img class="modal-img" src="img/ficha-trigo-movil.png">
                    </picture>
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-21">
                    <img class="img-cultivo" src="img/44-vid-act.png">
                    <p class="uppercase-text nombre-cultivo">Vid</p>
                </button>
                <dialog class="modal" id="modal-21">
                    <img class="modal-img" src="img/ficha-vid.png">
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-22">
                    <img class="img-cultivo" src="img/45-yerba-act.png">
                    <p class="uppercase-text nombre-cultivo">Yerba mate</p>
                </button>
                <dialog class="modal" id="modal-22">
                    <img class="modal-img" src="img/ficha-yerba.png">
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

            <div class="un-cultivo">
                <button class="button open-button" data-modal="modal-23">
                    <img class="img-cultivo" src="img/46-zana-act.png">
                    <p class="uppercase-text nombre-cultivo">Zanahoria</p>
                </button>
                <dialog class="modal" id="modal-23">
                    <img class="modal-img" src="img/ficha-zana.png">
                    <button class="button close-button">
                        <img src="img/burger-close.png" alt="Cerrar">
                    </button>
                </dialog>
            </div>

        </section>

        <div id="cont-whatsapp-fixed">
          <img class="whatsapp-fixed" id="whatsapp-fixed" src="img/whatsapp-fixed.png">
        </div>

    </main>

    <?php require_once 'footer.php'; ?>

</body>

</html>