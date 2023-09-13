<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

if (
	isset($_POST['tipo'])
	&& isset($_POST['nombre'])
	&& isset($_POST['localidad'])
	&& isset($_POST['mail'])
	&& isset($_POST['consulta'])
	&& isset($_POST['telefono'])
) {
	$success = false;

	if (
		!empty(strip_tags($_POST['tipo'])) &&
		!empty(strip_tags($_POST['nombre'])) &&
		!empty(strip_tags($_POST['localidad'])) &&
		!empty(strip_tags($_POST['mail'])) &&
		!empty(strip_tags($_POST['consulta'])) &&
		!empty(strip_tags($_POST['telefono']))
	) {
		// Create a PHPMailer instance
		$mail = new PHPMailer;

		// Sender and recipient email addresses
		$mail->setFrom('noreply@bloemen.com.ar', 'No Reply');
		$mail->addAddress('bloemen@bloemen.com.ar', 'Bloemen');

		// Email subject and message
		$mail->Subject = 'Mensaje dejado en Formulario de Contacto - ' . strip_tags($_POST['tipo']);
		$mail->msgHTML('Recibiste un mensaje en tu sitio web con la siguiente información:<br>
			Nombre: ' . strip_tags($_POST['nombre']) . '<br>
			Localidad: ' . strip_tags($_POST['localidad']) . '<br>
			Mail: ' . strip_tags($_POST['mail']) . '<br>
			Consulta: ' . strip_tags($_POST['consulta']) . '<br>
			Teléfono: ' . strip_tags($_POST['telefono']) . '<br>
			IP: ' . $_SERVER['REMOTE_ADDR']);

		// Check if files were uploaded
		if (!empty($_FILES['archivo']['tmp_name'])) {
			$archivo = $_FILES['archivo'];
			$nombre = $archivo['name'];
			$tipo = $archivo['type'];
			$nombre_temporal = $archivo['tmp_name'];
			$size = $archivo['size'];

			// Check file type (you can customize this)
			if (
				$tipo == 'application/pdf' ||
				$tipo == 'application/msword' ||
				(strpos($tipo, 'image/') === 0) // Check if it's an image
			) {
				// Read file contents
				$file_contents = file_get_contents($nombre_temporal);
				$base64_encoded = base64_encode($file_contents);

				// Add the file as an attachment to the email
				$mail->addStringAttachment($file_contents, $nombre);
			}
		}

		// Send the email using the server's default mail configuration
		if ($mail->send()) {
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
	<link rel="stylesheet" href="scss/style.css?v=1.01">
	<script src="js/main.js"></script>
	<title>Bloemen - Fertilizantes Sustentables | Sumá tu proyecto</title>
</head>

<body>

	<?php require_once 'header.php'; ?>

	<main>

		<section class="page-section">
			<?php
			if (isset($success)) {
				if ($success) {
					echo '<div style="text-align: center;font-size:24px;font-weight:400;padding: 2em;">Gracias, hemos recibido tu consulta. En breve te estaremos contactando.</div>';
				} else {
					echo '<div style="text-align: center;font-size:24px;font-weight:400;padding: 2em;">Parece que ha habido un error. Vuelva a intentarlo más tarde.</div>';
				}
			}
			?>
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
						<form method="POST" id="form-ideas-proyectos" class="form-ideas-proyectos" enctype="multipart/form-data">
							<input type="hidden" name="tipo" value="Ideas y proyectos">
							<label for="nombre">Nombre/Razón Social</label><br>
							<input type="text" name="nombre" id="nombre-ideas" class="nombreForm" required><br>
							<label>Localidad</label><br>
							<input type="text" name="localidad" class="localidadForm" required><br>
							<label>Email</label><br>
							<input type="email" name="mail" id="mail-ideas" class="emailForm" required><br>
							<label>Teléfono</label><br>
							<input type="text" name="telefono" class="telefonoForm" required><br>
							<label>Consulta</label><br>
							<textarea name="consulta" id="consulta-ideas" class="consultaForm" rows="4" cols="22" maxlength="3000" required></textarea>
							<div class="input-container">
								<label id="archivos-contacto-ideas">CARGAR ARCHIVOS
									<input type="file" name="archivo">
								</label>
								<input type="submit" value="ENVIAR" aria-label="Enviar" id="boton-contacto-ideas">
							</div>
						</form>
				</details>
			</article>

			<article class="soluciones-sustentables">
				<details>
					<summary>
						<img src="img/suma-02-soluciones.png">
						<h3 class="uppercase-text">Soluciones sustentables para empresas</h3>
					</summary>
						<form method="POST" id="form-soluciones-sust" class="form-soluciones-sustentables" enctype="multipart/form-data">
							<input type="hidden" name="tipo" value="Soluciones sustentables para empresas">
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
								<label id="archivos-contacto-soluciones">CARGAR ARCHIVOS
									<input type="file" name="archivo">
								</label>
								<input type="submit" value="ENVIAR" aria-label="Enviar" id="boton-contacto-soluciones">
							</div>
						</form>
				</details>
			</article>

			<article class="tu-cv">
				<details>
					<summary>
						<img src="img/suma-03-cv.png">
						<h3 class="uppercase-text">Tu CV</h3>
					</summary>
					<form method="POST" id="form-cv" class="form-tu-cv" enctype="multipart/form-data">
						<input type="hidden" name="tipo" value="Tu CV">
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
							<label id="archivos-contacto-cv">CARGAR ARCHIVOS
								<input type="file" name="archivo">
							</label>
							<input type="submit" value="ENVIAR" aria-label="Enviar" id="boton-contacto-cv">
						</div>
					</form>
				</details>
			</article>

			<article class="desarrollo-propuestas">
				<details>
					<summary>
						<img src="img/suma-04-desarrollo.png">
						<h3 class="uppercase-text">Desarrollo de propuestas</h3>
					</summary>
					<form method="POST" id="form-desarrollo-proy" class="form-desarrollo-propuestas" enctype="multipart/form-data">
						<input type="hidden" name="tipo" value="Desarrollo de propuestas">
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
							<label id="archivos-contacto-desarrollo">CARGAR ARCHIVOS
								<input type="file" name="archivo">
							</label>
							<input type="submit" value="ENVIAR" aria-label="Enviar" id="boton-contacto-desarrollo">
						</div>
					</form>
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