<?php
session_start();

// Verificar si ya hay una sesión iniciada
if (isset($_SESSION['id_usuario'])) {
    header('Location: /materias');
    exit();
}

// Función para el proceso de autenticación
function login($correo, $contrasena, $conn) {
    // Consulta para verificar usuario, incluyendo la imagen
    $query = "SELECT id_usuario, nombre, contrasena, tipo, imagen FROM usuarios WHERE correo_electronico = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $correo);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Obtener también la imagen del usuario
        $stmt->bind_result($id_usuario, $nombre, $hashed_password, $tipo, $imagen);
        $stmt->fetch();

        // Verificar la contraseña
        // Si la contraseña está cifrada, usa password_verify()
        if ($contrasena === $hashed_password) {  // Si está en texto plano
            // Guardar los datos en la sesión
            $_SESSION['id_usuario'] = $id_usuario;
            $_SESSION['nombre'] = $nombre;
            $_SESSION['tipo'] = $tipo;
            $_SESSION['imagen'] = $imagen;  // Guardar la ruta de la imagen en la sesión

            // Redirigir a materias.php
            header('Location: /materias');
            exit();
        } else {
            return "Contraseña incorrecta.";
        }
    } else {
        return "Usuario no encontrado.";
    }

    $stmt->close();
}

// Lógica de login activada por el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['correo_electronico'];
    $contrasena = $_POST['contrasena'];

    // Llamar a la función login y manejar el resultado
    $error = login($correo, $contrasena, $conn);
}

$conn->close();
?>


<!-- HTML del formulario -->
<div class="contacto">
    <div class="contenedor">
        <img src="views/assets/img/img-registro.png" alt="">
        <div class="formulario">
            <p class="mensaje">Es hora de dar el siguiente<br>paso hacia tu futuro</p>
            <form action="../ingresar" method="POST" class="form form-contacto">
                <input type="text" name="correo_electronico" placeholder="Correo electrónico" required>
                <input type="password" name="contrasena" placeholder="Contraseña" required>
                <!-- Mostrar mensajes de error si existen -->
                <?php if (!empty($error)): ?>
                    <p class="mensaje-error"><?php echo $error; ?></p>
                <?php endif; ?>
                <button type="submit" class="boton-1 btn-full mb-10">Ingresar ahora</button>
                <a href="../registrarse" class="boton-2">¡Quiero registrarme!</a>
            </form>
        </div>
    </div>
</div>
