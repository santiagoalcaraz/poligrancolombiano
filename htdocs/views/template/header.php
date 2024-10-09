<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name='viewport' content='user-scalable=no, width=device-width, initial-scale=1'>
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <title>- Politecnico Grancolombiano</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="views/assets/css/style-home.css">
    <link rel="stylesheet" href="views/assets/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
<?php
session_start();

// Verificar si hay una sesión activa
if (isset($_SESSION['id_usuario'])) {

    if($_SESSION['tipo']==0){
        echo "<style>.avatar-usuario{border:solid 4px #1FB2DE}</style>";
    }else if($_SESSION['tipo']==1){
        echo "<style>.avatar-usuario{border:solid 4px #FF0055}</style>";
    }
    else{
        echo "<style>.avatar-usuario{border:solid 4px #FBAF17}</style>";
    }
    // Si la sesión está iniciada, mostrar este header
    ?>
    <div class="header">
        <div class="contenedor">
            <div class="logo">
                <img src="views/assets/img/Logo.png" alt="">
            </div>
            <div class="iconos seccion-usuario">
                <div class="avatar" style="background-image: url('/views/usuarios/<?php echo $_SESSION['imagen']; ?>')"></div>
                <div class="nombre">
                    <strong class="usuario"><?php echo $_SESSION['nombre']; ?></strong><br>
                    <a href="../cerrar-sesion">Cerrar sesión</a>                    
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    // Si no hay sesión, mostrar este header
    ?>
    <div class="header">
        <div class="contenedor">
            <div class="logo">
                <a href="https://poligrancolombiano.rf.gd/"><img src="views/assets/img/Logo.png" alt=""></a>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="#">Tecnologías</a></li>
                        <li><a href="#">Pregrados</a></li>
                        <li><a href="#">Posgrados</a></li>
                        <li><a href="#">Admisiones</a></li>
                        <li><a href="#">Institución</a></li>
                        <li><a href="#">Noticias</a></li>
                    </ul>
                </nav>
            </div>
            <div class="iconos">
                <a href="/ingresar"><img src="views/assets/img/usuario.svg"></a>
                <a href="#"><img src="views/assets/img/buscar.svg"></a>
            </div>
        </div>
    </div>
    <?php
}
?>
</body>
</html>
