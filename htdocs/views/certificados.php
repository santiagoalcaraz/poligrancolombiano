<?php
session_start();
?>
<div class="banner-seccion-poli"></div>
<div class="seccion-poli">
    <div class="contenedor">
        <div class="panel-sesion">
            <div class="avatar-usuario" style="background-image: url('/views/usuarios/<?php echo $_SESSION['imagen']; ?>')"></div>
            <nav class="nav-menu">
                <a href="../materias">Materias</a>
                <a href="../certificados" class="active">Certificados</a>
                <a href="../noticias">Eventos</a>
            </nav>
        </div>
        <div class="contenido-sesion">
            <p class="mensaje">Certficados</p>
            <div class="certificados">
                <ul>
                    <li><a href="">Certificado de estudios</a></li>
                    <li><a href="">Intensidad horaria</a></li>
                    <li><a href="">Paz y salvo</a></li>
                    <li><a href="">Pensum</a></li>
                    <li><a href="">Progreso académico</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>