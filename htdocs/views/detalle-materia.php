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
            <p class="mensaje">Métodos numéricos</p>
            <div class="contenedor-detalle-materia">
                <div class="titulo">Calificaciones</div>
                <table>
                    <thead>
                        <tr>
                            <td>Fecha</td>
                            <td>Actividad</td>
                            <td>Observaciones</td>
                            <td>Calificación</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01/09/2024</td>
                            <td>Evaluación incial</td>
                            <td>Sin comentarios</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>01/09/2024</td>
                            <td>Evaluación incial</td>
                            <td>Sin comentarios</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>01/09/2024</td>
                            <td>Evaluación incial</td>
                            <td>Sin comentarios</td>
                            <td>50</td>
                        </tr>
                    </tbody>
                </table>
                <div class="titulo">Próximas actividades</div>
                <table>
                    <thead>
                        <tr>
                            <td>Fecha</td>
                            <td>Actividad</td>
                            <td>Observaciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01/09/2024</td>
                            <td>Evaluación incial</td>
                            <td>Sin comentarios</td>
                        </tr>
                        <tr>
                            <td>01/09/2024</td>
                            <td>Evaluación incial</td>
                            <td>Sin comentarios</td>
                        </tr>
                        <tr>
                            <td>01/09/2024</td>
                            <td>Evaluación incial</td>
                            <td>Sin comentarios</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>