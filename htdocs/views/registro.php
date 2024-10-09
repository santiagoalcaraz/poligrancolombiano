<?php
session_start();

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $correo_electronico = $_POST['correo_electronico'];
    $telefono = $_POST['telefono'];
    $contrasena = $_POST['contrasena'];
    $repetir_contrasena = $_POST['repetir_contrasena'];
    $imagen = $_FILES['imagen'];

    // Validar que las contraseñas coincidan
    if ($contrasena !== $repetir_contrasena) {
        $error = "Las contraseñas no coinciden.";
    } else {
        // Procesar la imagen
        $target_dir = "";
        $imageFileType = strtolower(pathinfo($imagen["name"], PATHINFO_EXTENSION));

        // Generar un nombre único para la imagen
        $newFileName = uniqid() . '.' . $imageFileType; // Genera un nombre único
        $target_file = $target_dir . $newFileName;

        // Verificar si el archivo es una imagen
        $check = getimagesize($imagen["tmp_name"]);
        if ($check === false) {
            $error = "El archivo no es una imagen válida.";
        } elseif ($imagen["size"] > 5000000) { // 5MB límite
            $error = "Lo sentimos, el archivo es demasiado grande.";
        } elseif (!in_array($imageFileType, ['jpg', 'png', 'jpeg', 'gif'])) {
            $error = "Solo se permiten archivos JPG, JPEG, PNG y GIF.";
        } else {
            // Intentar mover la imagen a la carpeta de destino con el nuevo nombre
            if (move_uploaded_file($imagen["tmp_name"], $target_file)) {
                // Insertar los datos en la base de datos sin encriptar la contraseña
                $stmt = $conn->prepare("INSERT INTO usuarios (nombre, correo_electronico, telefono, contrasena, imagen) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param('sssss', $nombre, $correo_electronico, $telefono, $contrasena, $target_file);

                if ($stmt->execute()) {
                    $success = "Registro completado con éxito. ¡Ahora puedes iniciar sesión!";
                } else {
                    $error = "Error al registrar el usuario.";
                }

                $stmt->close();
            } else {
                $error = "Hubo un error al subir la imagen.";
            }
        }
    }

    $conn->close();
}
?>

<!-- Formulario HTML -->
<div class="contacto">
    <div class="contenedor">
        <img src="views/assets/img/img-registro.png" alt="">
        <div class="formulario">
            <p class="mensaje">Es hora de dar el siguiente<br>paso hacia tu futuro</p>

            <!-- Mostrar mensajes de éxito o error -->
            <?php if (isset($error)): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php elseif (isset($success)): ?>
                <p style="color: green;"><?php echo $success; ?></p>
            <?php endif; ?>

            <form action="../registrarse" method="POST" enctype="multipart/form-data" class="form form-contacto">
                <input type="text" name="nombre" placeholder="Nombre completo" required>
                <input type="email" name="correo_electronico" placeholder="Correo electrónico" required>
                <input type="text" name="telefono" placeholder="Teléfono celular" required>
                <input type="password" name="contrasena" placeholder="Contraseña" required>
                <input type="password" name="repetir_contrasena" placeholder="Repetir contraseña" required>
                Foto de perfil
                <input type="file" name="imagen" required>
                <button type="submit" class="boton-1 btn-full mb-10">Registrarse ahora</button>
            </form>
        </div>
    </div>
</div>
