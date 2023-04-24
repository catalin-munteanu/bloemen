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
    <title>Bloemen - Fertilizantes Sustentables</title>
</head>

<body>

    <header>
        <img class="logo-bloemen" src="img\logo-bloemen.png">
        <nav>
            <img class="burger-menu" src="img\burger-menu.png">
        </nav>
    </header>

    <main>

        <section class="galeria-presentacion">
            <img class="img-slider" src="img/index-1.png">
        </section>

        <section class="nuevos-posteos">
            <h2 class="nuevos-posteos-title">Nuevos <strong class="texto-negrita">posteos</strong></h2>
            <article class="container-posteos">
                <img class="img-posteos" src="img/nuevos-posteos-1.png">
                <img class="img-posteos" src="img/nuevos-posteos-2.png">
                <img class="img-posteos" src="img/nuevos-posteos-3.png">
            </article>
        </section>

        <section class="nosotros">
            <h2 class="nosotros-title">Nosotros</h2>
            <article>
                <p>Ya en el año 1962 el fundador de la empresa el Dr. JUAN CORNELIO BAKKER, comenzaba a trabajar con distintas materias orgánicas y formulaba los primeros fertilizantes orgánicos, en el año 1964 registraba su primer curasemillas CURASEM 64. A partir de allí fue un continuo proceso de investigación, fabricación y ensayos de nuevos productos, siempre en el área acotada al sudeste de la Prov. de Buenos Aires.</p>
                <p>En el año 1991 con un importante ingreso de capitales se conforma una sociedad comercial, dando nacimiento a QUÍMICA BLOEMENDAAL SRL. A partir de aquí se comienza a trabajar en la elaboración e inscripción en el SENASA de una amplia variedad de formulaciones especiales para los distintos cultivos, y en la comercialización de los productos en todo el país.</p>
                <p>En el año 1998 se comienzan las tratativas de inscripción de los productos, por las distintas certificadoras de producción orgánica. Durante el año 1999 se obtiene la categoría de insumos aprobados para producción orgánica, por las más importantes certificadoras del mercado. Ese mismo año pasamos a formar parte del MAPO (Movimiento Argentino de Producción Orgánica). Dentro del desarrollo de nuevos productos en el año 2000 fuimos los primeros en desarrollar en la Argentina una hidrólisis enzimática de proteínas de origen animal, obteniendo L-alfa-Aminoácidos.</p>
                <p>Actualmente nos encontramos trabajando en compuestos bacteriológicos mediante el desarrollo de distintas cepas de microorganismos benéficos. Hoy comercializamos nuestros productos en todo el país y para todo tipo de cultivos.
                    Somos proveedores de las firmas más importantes y exigentes del mercado, a las cuales les agradecemos su confianza en BLOEMEN.</p>
            </article>
        </section>

        <section class="contacto">
            <h2 class="contacto-title uppercaseText">Contacto</h2>
            <div class="gradient-background">
                <form>
                    <label for="nombre">Nombre/Razón Social</label><br>
                    <input type="text" name="nombre" class="nombreForm" required><br>
                    <label>Localidad</label><br>
                    <input type="text" name="localidad" class="localidadForm" required><br>
                    <label>Email</label><br>
                    <input type="text" name="email" class="emailForm" required><br>
                    <label>Teléfono</label><br>
                    <input type="text" name="telefono" class="telefonoForm" required><br>
                    <label>Consulta</label><br>
                    <textarea name="consulta" class="consultaForm" rows="4" cols="22" maxlength="3000" required></textarea>
                </form>
                <article class="footerInsertado">
                    <img src="img/icono-bloemen.png">
                    <p class="uppercase-text">Química Bloemendaal SRL</p>
                    <p class="uppercase-text">Juan B. Justo 5450</p>
                    <p>Mar del Plata (7600) - Buenos Aires</p>
                    <p>WhatsApp: 223 528 4000</p>
                </article>
                <article class="iconosContacto">
                    <img src="img/icono-fb.png">
                    <img src="img/icono-linkedin.png">
                    <img src="img/icono-ig.png">
                </article>
            </div>
        </section>
    </main>

</body>

</html>