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
                <a href="../certificados">Certificados</a>
                <a href="../noticias" class="active">Eventos</a>
            </nav>
        </div>
        <div class="contenido-sesion">
            <p class="mensaje">Últimas noticias y novedades</p>
            <div class="card">
                <div class="img-card-noticia"></div>
                <div class="info">
                    <div class="fecha">4 Octubre de 2024</div>
                    <div class="titulo">Reconocimiento Internacional para Profesores Poli en el Encuentro AECA 2024</div>
                    <div class="texto">La profesora Marthe Inés Moreno y el Profesor Fernán Alonso Cardona, adscritos a la <strong>Escuela de Contabilidad...</strong></div>
                </div>
            </div>
            <div class="card">
                <div class="img-card-noticia"></div>
                <div class="info">
                    <div class="fecha">06 de Septiembre de 2024</div>
                    <div class="titulo">Estudiantes POLI obtuvieron el premio Plata en el Effie College Colombia</div>
                    <div class="texto">Estudiantes POLI obtuvieron el premio Plata en el Effie College Colombia Estudiantes POLI obtuvieron el premio Plata en el Effie College Colombia</div>
                </div>
            </div>
        </div>
    </div>
</div>