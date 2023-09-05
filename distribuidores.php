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
    <title>Bloemen - Fertilizantes Sustentables | Distribuidores</title>
</head>

<body>

    <?php require_once 'header.php'; ?>

    <main>

        <section class="page-section">
            <article class="page-title">
                <h2 class="uppercase-text">Distribuidores</h2>
            </article>
        </section>

        <section class="mapa-y-detalles">
            <article class="mapa-distribuidores">
                <img src="img/mapa-distribuidores.svg" class="mapa-argentina">
                <img src="img/logo-bloemen-map.png" class="province-img logo-distr-mendoza" id="province-img-1">
                <img src="img/logo-bloemen-map.png" class="province-img logo-distr-rio-negro" id="province-img-2">
                <img src="img/logo-bloemen-map.png" class="province-img logo-distr-san-juan" id="province-img-3">
                <img src="img/logo-bloemen-map.png" class="province-img logo-distr-cordoba" id="province-img-4">
                <img src="img/logo-bloemen-map.png" class="province-img logo-distr-entre-rios" id="province-img-5">
                <img src="img/logo-bloemen-map.png" class="province-img logo-distr-corrientes" id="province-img-6">
                <img src="img/logo-bloemen-map.png" class="province-img logo-distr-tucuman" id="province-img-7">
                <img src="img/logo-bloemen-map.png" class="province-img logo-distr-buenos-aires" id="province-img-8">
                <img src="img/logo-bloemen-map.png" class="province-img logo-distr-misiones" id="province-img-9">
                <img src="img/logo-bloemen-map.png" class="province-img logo-distr-neuquen" id="province-img-10">
                <img src="img/logo-bloemen-map.png" class="province-img logo-distr-chubut" id="province-img-11">
            </article>

            <article class="distribuidores-mendoza province-info" id="province-info-1">
                <img src="img/MENDOZA_AGRODAYSE.png" class="img-distr-mendoza">
                <img src="img/MENDOZA_AGROINNOVA.png" class="img-distr-mendoza">
                <img src="img/MENDOZA_AGRONET.png" class="img-distr-mendoza">
                <img src="img/MENDOZA_FRANCA.png" class="img-distr-mendoza">
                <img src="img/MENDOZA_SIMBIOS.png" class="img-distr-mendoza">
                <img src="img/MENDOZA_TIER.png" class="img-distr-mendoza">
            </article>

            <article class="distribuidores-rionegro province-info" id="province-info-2">
                <img src="img/RIONEGRO_AGROFERTIL.png" class="img-distr-rn">
                <img src="img/RIONEGRO_AGROPECUARIANATALINI.png" class="img-distr-rn">
                <img src="img/RIONEGRO_AGROROCA.png" class="img-distr-rn">
                <img src="img/RIONEGRO_RICARDONATALINI.png" class="img-distr-rn">
                <img src="img/RIONEGRO_TODOAGRO.png" class="img-distr-rn">
            </article>

            <article class="distribuidores-sanjuan province-info" id="province-info-3">
                <img src="img/SANJUAN_AGUAFERTIL.png" class="img-distr-sanjuan">
                <img src="img/SANJUAN_SIMBIOS.png" class="img-distr-sanjuan">
            </article>

            <article class="distribuidores-cordoba province-info" id="province-info-4">
                <img src="img/CORDOBA_AYAX.png" class="img-distr-cordoba">
            </article>

            <article class="distribuidores-entrerios province-info" id="province-info-5">
                <img src="img/ENTRERIOS_MONTARAZ.png" class="img-distr-entrerios">
            </article>

            <article class="distribuidores-corrientes province-info" id="province-info-6">
                <img src="img/CORRIENTES_RAMSES.png" class="img-distr-corrientes">
            </article>

            <article class="distribuidores-tucuman province-info" id="province-info-7">
                <img src="img/TUCUMAN_APUDANDRES.png" class="img-distr-tucuman">
                <img src="img/TUCUMAN_ISASGUILLERMO.png" class="img-distr-tucuman">
                <img src="img/TUCUMAN_TUCAGRO.png" class="img-distr-tucuman">
            </article>

            <article class="distribuidores-bsas province-info" id="province-info-8">
                <img src="img/BSAS_AGROLURO.png" class="img-distr-bsas">
                <img src="img/BSAS_CPD.png" class="img-distr-bsas">
                <img src="img/BSAS_OCTAVIOSEMILLAS.png" class="img-distr-bsas">
                <img src="img/BSAS_TECNOBIO.png" class="img-distr-bsas">
            </article>

            <article class="distribuidores-misiones province-info" id="province-info-9">
                <img src="img/MISIONES_.png" class="img-distr-misiones">
            </article>

            <article class="distribuidores-neuquen province-info" id="province-info-10">
                <img src="img/NEUQUEN_CARLOSASAD.png" class="img-distr-neuquen">
            </article>

            <article class="distribuidores-chubut province-info" id="province-info-11">
                <img src="img/CHUBUT_DEELHOYO.png" class="img-distr-chubut">
            </article>

        </section>

        <div id="cont-whatsapp-fixed">
            <img class="whatsapp-fixed" id="whatsapp-fixed" src="img/whatsapp-fixed.png">
        </div>

    </main>

    <?php require_once 'footer.php'; ?>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const mapArticle = document.querySelector(".mapa-distribuidores");
            const provinceArticles = document.querySelectorAll(".province-info");

            mapArticle.addEventListener("click", function(event) {
                if (event.target.classList.contains("province-img")) {
                    const provinceId = event.target.id.replace("province-img-", "");

                    // Hide all province articles
                    provinceArticles.forEach(article => {
                        article.style.display = "none";
                    });

                    // Display the selected province article
                    const selectedProvinceArticle = document.getElementById("province-info-" + provinceId);
                    if (selectedProvinceArticle) {
                        selectedProvinceArticle.style.display = "block";

                        // Scroll to the selected province article
                        selectedProvinceArticle.scrollIntoView({
                            behavior: "smooth"
                        });
                    }
                }
            });
        });
    </script>

</body>

</html>