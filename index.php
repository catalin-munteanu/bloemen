<?php
if (
  isset($_POST['mail'])
  && (isset($_POST['nombre']))
  && (isset($_POST['consulta']))
) {
  $success = false;

  if (
    !empty(strip_tags($_POST['mail'])) &&
    !empty(strip_tags($_POST['nombre'])) &&
    !empty(strip_tags($_POST['consulta']))
  ) {
    $to      = 'bloemen@bloemen.com.ar';
    $subject = 'Mensaje dejado en Formulario de Contacto';
    $message = 'Recibiste un mensaje en tu sitio web con la siguiente informaci&oacute;n:<br>
		Nombre: ' . strip_tags($_POST['nombre']) . '<br>
		Consulta: ' . strip_tags($_POST['consulta']) . '<br>
		Mail: ' . strip_tags($_POST['mail']) . '<br>
		IP: ' . $_SERVER['REMOTE_ADDR'];

    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <noreply@bloemen.com.ar>" . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
      $success = true;
    }
  }
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
  <link rel="stylesheet" href="scss/style.css?v=1.02">
  <script src="js/main.js?v=1.01"></script>
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
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KT9WGR52');
  </script>
  <!-- End Google Tag Manager -->
  <title>Bloemen - Fertilizantes Sustentables</title>
</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KT9WGR52" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php require_once 'header.php'; ?>

  <main>

    <dialog class="modal-promo-enero" open>
      <button class="closeModalBtnPromo" onclick="closeModal()">
        <img src="img/burger-close.png" alt="Close">
      </button>
      <a class="invisibleBtn" href="https://wa.me/542235284000" target="_blank"></a>
      <img class="modal-promo-img" src="img/desktop/PromoWEB-home.png" alt="Promo Image">
    </dialog>

    <section>
      <div class="slideshow-container">
        <div class="mySlides fade">
          <div class="numbertext"></div>
          <picture>
            <source media="(min-width:1024px)" srcset="img/index-1-desktop.webp">
            <img src="img/index-1.webp" style="width:100%">
          </picture>
          <div class="text"></div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext"></div>
          <picture>
            <source media="(min-width:1024px)" srcset="img/index-2-desktop.webp">
            <img src="img/index-2.webp" style="width:100%">
          </picture>
          <div class="text"></div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext"></div>
          <picture>
            <source media="(min-width:1024px)" srcset="img/index-3-desktop.webp">
            <img src="img/index-3.webp" style="width:100%">
          </picture>
          <div class="text"></div>
        </div>

      </div>
      <br>

      <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>

      <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) {
            slideIndex = 1
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex - 1].style.display = "block";
          dots[slideIndex - 1].className += " active";
          setTimeout(showSlides, 3000); // Change image every 3 seconds
        }
      </script>
    </section>

    <section class="nuevos-posteos">
      <!--<h2 class="nuevos-posteos-title">Nuevos <strong class="texto-negrita">posteos</strong></h2>-->
      <article class="container-posteos">
        <img class="img-posteos first-post" src="img/post-a.webp">
        <img class="img-posteos" src="img/post-b.webp">
        <img class="img-posteos" src="img/post-c.webp">
      </article>
    </section>

    <section class="nosotros" id="ancla-nosotros">
      <h2 class="nosotros-title">Nosotros</h2>
      <article>
        <p>Ya en el año 1962 el fundador de la empresa el Dr. JUAN CORNELIO BAKKER, comenzaba a trabajar con distintas materias orgánicas y formulaba los primeros fertilizantes orgánicos, en el año 1964 registraba su primer curasemillas CURASEM 64. A partir de allí fue un continuo proceso de investigación, fabricación y ensayos de nuevos productos, siempre en el área acotada al sudeste de la Prov. de Buenos Aires.</p>
        <p>En el año 1991 con un importante ingreso de capitales se conforma una sociedad comercial, dando nacimiento a QUÍMICA BLOEMENDAAL SRL. A partir de aquí se comienza a trabajar en la elaboración e inscripción en el SENASA de una amplia variedad de formulaciones especiales para los distintos cultivos, y en la comercialización de los productos en todo el país.</p>
        <p>En el año 1998 se comienzan las tratativas de inscripción de los productos, por las distintas certificadoras de producción orgánica. Durante el año 1999 se obtiene la categoría de insumos aprobados para producción orgánica, por las más importantes certificadoras del mercado. Ese mismo año pasamos a formar parte del MAPO (Movimiento Argentino de Producción Orgánica). Dentro del desarrollo de nuevos productos en el año 2000 fuimos los primeros en desarrollar en la Argentina una hidrólisis enzimática de proteínas de origen animal, obteniendo L-alfa-Aminoácidos.</p>
        <p>Actualmente nos encontramos trabajando en compuestos bacteriológicos mediante el desarrollo de distintas cepas de microorganismos benéficos. Hoy comercializamos nuestros productos en todo el país y para todo tipo de cultivos.
          Somos proveedores de las firmas más importantes y exigentes del mercado, a las cuales les agradecemos su confianza en BLOEMEN.</p>
      </article>
    </section>

    <section class="contacto" id="ancla-contacto">
      <h2 class="contacto-title uppercase-text">Contacto</h2>
      <div class="gradient-background">
        <?php
        if (isset($success)) {
          if ($success) {
            echo '<div style="text-align: center;color: #FFFFFF;font-size:24px;font-weight:400;padding: 2em;">Gracias, hemos recibido tu consulta. En breve te estaremos contactando.</h2></article>';
          } else {
            echo '<div style="text-align: center;color: #FFFFFF;font-size:24px;font-weight:400;padding: 2em;">Parece que ha habido un error. Vuelva a intentarlo más tarde.</h2></article>';
          }
        } else {
        ?>
          <form action="#ancla-contacto" method="POST" id="form-contacto">
            <label for="nombre">Nombre/Razón Social</label><br>
            <input type="text" name="nombre" id="nombre" class="nombreForm" required><br>
            <label>Localidad</label><br>
            <input type="text" name="localidad" class="localidadForm" required><br>
            <label>Email</label><br>
            <input type="email" name="mail" id="mail" class="emailForm" required><br>
            <label>Teléfono</label><br>
            <input type="text" name="telefono" class="telefonoForm" required><br>
            <label>Consulta</label><br>
            <textarea name="consulta" id="consulta" class="consultaForm" rows="4" cols="22" maxlength="3000" required></textarea>
            <div class="input-container">
              <input type="submit" value="ENVIAR" aria-label="Enviar" id="botonContacto">
            </div>
          </form>
        <?php
        }
        ?>
        <div class="footer-index">
          <article class="footerInsertado">
            <img src="img/footer-logo.png">
          </article>
          <article class="iconosContacto">
            <a href="https://www.facebook.com/profile.php?id=100088179257884&mibextid=ZbWKwL" target="_blank"><img src="img/icono-fb.png"></a>
            <a href="https://www.linkedin.com/in/fertilizantes-bloemen-a4a4b884" target="_blank"><img src="img/icono-linkedin.png"></a>
            <a href="https://instagram.com/bloemen_fertilizantes" target="_blank"><img src="img/icono-ig.png"></a>
          </article>
        </div>
      </div>
    </section>
    <div id="cont-whatsapp-fixed">
      <a href="https://wa.me/542235284000" target="_blank">
        <img class="whatsapp-fixed" id="whatsapp-fixed" src="img/whatsapp-fixed.png">
      </a>
    </div>
  </main>

</body>

</html>