<?php
session_start();
?>
<div class="banner-seccion-poli"></div>
<div class="seccion-poli">
    <div class="contenedor">
        <div class="panel-sesion">
            <div class="avatar-usuario" style="background-image: url('/views/usuarios/<?php echo $_SESSION['imagen']; ?>')"></div>
            <nav class="nav-menu">
                <a href="../materias" class="active">Materias</a>
                <a href="../certificados">Certificados</a>
                <a href="../noticias">Eventos</a>
            </nav>
        </div>
        <div class="contenido-sesion">
            <p class="mensaje">Materias</p>
            <div class="contenedor-materias">
                <div class="card-materias">
                    <div class="img-card-materia"></div>
                    <div class="info">
                        <div class="notificacion">Notificaciones (32)</div>
                        <div class="titulo"><a href="../detalle-materia">Métodos numéricos</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>