<?php
if (
    isset($_POST['mail-ideas'])
    && (isset($_POST['nombre-ideas']))
    && (isset($_POST['consulta-ideas']))
) {
    $success = false;

    if (
        !empty(strip_tags($_POST['mail-ideas'])) &&
        !empty(strip_tags($_POST['nombre-ideas'])) &&
        !empty(strip_tags($_POST['consulta-ideas']))
    ) {
        $to      = 'catalinapampin@gmail.com';
        $subject = 'Mensaje dejado en Formulario de Contacto';
        $message = 'Recibiste un mensaje en tu sitio web con la siguiente informaci&oacute;n:<br>
		Nombre: ' . strip_tags($_POST['nombre-ideas']) . '<br>
		Consulta: ' . strip_tags($_POST['consulta-ideas']) . '<br>
		Mail: ' . strip_tags($_POST['mail-ideas']) . '<br>
		IP: ' . $_SERVER['REMOTE_ADDR'];

        $headers  = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: <bloemen5450@gmail.com>" . "\r\n";

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
    <link rel="stylesheet" href="scss/style.css">
    <script src="js/main.js"></script>
    <title>Bloemen - Fertilizantes Sustentables | Productos</title>
</head>

<body>

    <?php require_once 'header.php'; ?>

    <main>

        <section class="page-section">
            <article class="page-title">
                <h2 class="uppercase-text">Sumá tu proyecto</h2>
            </article>
        </section>

        <section class="proyecto-tipos" id="proyecto-tipos">

            <article class="ideas-proyectos">
                <details>
                    <summary>
                        <img src="img/suma-01-ideas-proyectos.png">
                        <h3 class="uppercase-text">Ideas y proyectos</h3>
                    </summary>
                    <?php
                    if (isset($success)) {
                        if ($success) {
                            echo '<div style="text-align: center;color: #FFFFFF;font-size:24px;font-weight:400;padding: 2em;">Gracias, hemos recibido tu consulta. En breve te estaremos contactando.</h2></article>';
                        } else {
                            echo '<div style="text-align: center;color: #FFFFFF;font-size:24px;font-weight:400;padding: 2em;">Parece que ha habido un error. Vuelva a intentarlo más tarde.</h2></article>';
                        }
                    } else {
                    ?>
                        <form action="#proyecto-tipos" method="POST" id="form-ideas-proyectos" class="form-ideas-proyectos">
                            <label for="nombre">Nombre/Razón Social</label><br>
                            <input type="text" name="nombre-ideas" id="nombre-ideas" class="nombreForm" required><br>
                            <label>Localidad</label><br>
                            <input type="text" name="localidad" class="localidadForm" required><br>
                            <label>Email</label><br>
                            <input type="email" name="mail-ideas" id="mail-ideas" class="emailForm" required><br>
                            <label>Teléfono</label><br>
                            <input type="text" name="telefono" class="telefonoForm" required><br>
                            <label>Consulta</label><br>
                            <textarea name="consulta-ideas" id="consulta-ideas" class="consultaForm" rows="4" cols="22" maxlength="3000" required></textarea>
                            <div class="input-container">
                                <input type="submit" value="ENVIAR" aria-label="Enviar" id="boton-contacto-ideas">
                                <button id="archivos-contacto-ideas">CARGAR ARCHIVOS</button>
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                </details>
            </article>

            <article class="soluciones-sustentables">
                <details>
                    <summary>
                        <img src="img/suma-02-soluciones.png">
                        <h3 class="uppercase-text">Soluciones sustentables para empresas</h3>
                    </summary>
                    <?php
                    if (isset($success)) {
                        if ($success) {
                            echo '<div style="text-align: center;color: #FFFFFF;font-size:24px;font-weight:400;padding: 2em;">Gracias, hemos recibido tu consulta. En breve te estaremos contactando.</h2></article>';
                        } else {
                            echo '<div style="text-align: center;color: #FFFFFF;font-size:24px;font-weight:400;padding: 2em;">Parece que ha habido un error. Vuelva a intentarlo más tarde.</h2></article>';
                        }
                    } else {
                    ?>
                        <form action="#proyecto-tipos" method="POST" id="form-soluciones-sust" class="form-soluciones-sustentables">
                            <label for="nombre">Nombre/Razón Social</label><br>
                            <input type="text" name="nombre" id="nombre-soluciones" class="nombreForm" required><br>
                            <label>Localidad</label><br>
                            <input type="text" name="localidad" class="localidadForm" required><br>
                            <label>Email</label><br>
                            <input type="email" name="mail" id="mail-soluciones" class="emailForm" required><br>
                            <label>Teléfono</label><br>
                            <input type="text" name="telefono" class="telefonoForm" required><br>
                            <label>Consulta</label><br>
                            <textarea name="consulta" id="consulta-soluciones" class="consultaForm" rows="4" cols="22" maxlength="3000" required></textarea>
                            <div class="input-container">
                                <input type="submit" value="ENVIAR" aria-label="Enviar" id="boton-contacto-soluciones">
                                <button id="archivos-contacto-soluciones">CARGAR ARCHIVOS</button>
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                </details>
            </article>

            <article class="tu-cv">
                <details>
                    <summary>
                        <img src="img/suma-03-cv.png">
                        <h3 class="uppercase-text">Tu CV</h3>
                    </summary>
                    <?php
                    if (isset($success)) {
                        if ($success) {
                            echo '<div style="text-align: center;color: #FFFFFF;font-size:24px;font-weight:400;padding: 2em;">Gracias, hemos recibido tu consulta. En breve te estaremos contactando.</h2></article>';
                        } else {
                            echo '<div style="text-align: center;color: #FFFFFF;font-size:24px;font-weight:400;padding: 2em;">Parece que ha habido un error. Vuelva a intentarlo más tarde.</h2></article>';
                        }
                    } else {
                    ?>
                        <form action="#proyecto-tipos" method="POST" id="form-cv" class="form-tu-cv">
                            <label for="nombre">Nombre/Razón Social</label><br>
                            <input type="text" name="nombre" id="nombre-cv" class="nombreForm" required><br>
                            <label>Localidad</label><br>
                            <input type="text" name="localidad" class="localidadForm" required><br>
                            <label>Email</label><br>
                            <input type="email" name="mail" id="mail-cv" class="emailForm" required><br>
                            <label>Teléfono</label><br>
                            <input type="text" name="telefono" class="telefonoForm" required><br>
                            <label>Consulta</label><br>
                            <textarea name="consulta" id="consulta-cv" class="consultaForm" rows="4" cols="22" maxlength="3000" required></textarea>
                            <div class="input-container">
                                <input type="submit" value="ENVIAR" aria-label="Enviar" id="boton-contacto-cv">
                                <button id="archivos-contacto-cv">CARGAR ARCHIVOS</button>
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                </details>
            </article>

            <article class="desarrollo-propuestas">
                <details>
                    <summary>
                        <img src="img/suma-04-desarrollo.png">
                        <h3 class="uppercase-text">Desarrollo de propuestas</h3>
                    </summary>
                    <?php
                    if (isset($success)) {
                        if ($success) {
                            echo '<div style="text-align: center;color: #FFFFFF;font-size:24px;font-weight:400;padding: 2em;">Gracias, hemos recibido tu consulta. En breve te estaremos contactando.</h2></article>';
                        } else {
                            echo '<div style="text-align: center;color: #FFFFFF;font-size:24px;font-weight:400;padding: 2em;">Parece que ha habido un error. Vuelva a intentarlo más tarde.</h2></article>';
                        }
                    } else {
                    ?>
                        <form action="#proyecto-tipos" method="POST" id="form-desarrollo-proy" class="form-desarrollo-propuestas">
                            <label for="nombre">Nombre/Razón Social</label><br>
                            <input type="text" name="nombre" id="nombre-desarrollo" class="nombreForm" required><br>
                            <label>Localidad</label><br>
                            <input type="text" name="localidad" class="localidadForm" required><br>
                            <label>Email</label><br>
                            <input type="email" name="mail" id="mail-desarrollo" class="emailForm" required><br>
                            <label>Teléfono</label><br>
                            <input type="text" name="telefono" class="telefonoForm" required><br>
                            <label>Consulta</label><br>
                            <textarea name="consulta" id="consulta-desarrollo" class="consultaForm" rows="4" cols="22" maxlength="3000" required></textarea>
                            <div class="input-container">
                                <input type="submit" value="ENVIAR" aria-label="Enviar" id="boton-contacto-desarrollo">
                                <button id="archivos-contacto-desarrollo">CARGAR ARCHIVOS</button>
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                </details>
            </article>

        </section>

        <div id="cont-whatsapp-fixed">
            <img class="whatsapp-fixed" id="whatsapp-fixed" src="img/whatsapp-fixed.png">
        </div>

    </main>

    <?php require_once 'footer.php'; ?>

</body>

</html>