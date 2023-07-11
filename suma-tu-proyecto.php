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

        <section class="proyecto-tipos">

            <article class="ideas-proyectos">
                <details>
                    <summary>
                        <img src="img/suma-01-ideas-proyectos.png">
                        <h3 class="uppercase-text">Ideas y proyectos</h3>
                    </summary>
                    <form class="form-ideas-proyectos">
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
                </details>
            </article>

            <article class="soluciones-sustentables">
                <details>
                    <summary>
                        <img src="img/suma-02-soluciones.png">
                        <h3 class="uppercase-text">Soluciones sustentables para empresas</h3>
                    </summary>
                    <form class="form-soluciones-sustentables">
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
                </details>
            </article>

            <article class="tu-cv">
                <details>
                    <summary>
                        <img src="img/suma-03-cv.png">
                        <h3 class="uppercase-text">Tu CV</h3>
                    </summary>
                    <form class="form-tu-cv">
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
                </details>
            </article>

            <article class="desarrollo-propuestas">
                <details>
                    <summary>
                        <img src="img/suma-04-desarrollo.png">
                        <h3 class="uppercase-text">Desarrollo de propuestas</h3>
                    </summary>
                    <form class="form-desarrollo-propuestas">
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
                </details>
            </article>

        </section>

    </main>

    <?php require_once 'footer.php'; ?>

</body>

</html>