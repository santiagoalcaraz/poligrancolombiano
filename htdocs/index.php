<?php
session_start();

$servername = "sql102.infinityfree.com";
$username = "if0_37345445";
$password = "KFdZ3PZ2eOyhj2";
$dbname = "if0_37345445_poli";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Incluir header
include 'views/template/header.php';

function getURLPath()
{
    if (isset($_GET['url'])) {
        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        return explode('/', $url);
    }
    return [];
}

$urlSegments = getURLPath();

// Páginas que requieren autenticación
$pagesRequiringAuth = ['certificados', 'materias', 'detalle-materia', 'noticias'];

if (isset($urlSegments[0])) {
    $page = $urlSegments[0];

    // Si la página requiere autenticación y no hay sesión iniciada, redirigir a ingresar
    if (in_array($page, $pagesRequiringAuth) && !isset($_SESSION['id_usuario'])) {
        header('Location: /ingresar');
        exit();
    }

    // Cargar la vista correspondiente
    switch ($page) {
        case 'cerrar-sesion':
            include 'logout.php';
            break;
        case 'certificados':
            include 'views/certificados.php';
            break;
        case 'materias':
            include 'views/materias.php';
            break;
        case 'detalle-materia':
            include 'views/detalle-materia.php';
            break;
        case 'noticias':
            include 'views/noticias.php';
            break;
        case 'ingresar':
            include 'views/ingreso.php';
            break;
        case 'registrarse':
            include 'views/registro.php';
            break;
        default:
            include 'views/home.php'; // Página por defecto
            break;
    }
} else {
    include 'views/home.php'; // Si no hay una URL, cargar la página de inicio
}

// Incluir footer
include 'views/template/footer.php';
