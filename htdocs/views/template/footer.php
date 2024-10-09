<?php
session_start();

// Verificar si hay una sesión activa
if (isset($_SESSION['id_usuario'])) {
    // Si la sesión está iniciada, mostrar este header
?>
    <footer>
        <div class="footer-logo">
            <img src="https://www.poli.edu.co/themes/custom/ptecnico2023/logo-politecnico-grancolombiano-white.svg" alt="Front End Logo Footer">
        </div>
    </footer>
<?php
} else {
    // Si no hay sesión, mostrar este header
?>
    <footer>
        <div class="contenedor">
            <div class="seccion">
                <div>
                    <strong>Contáctenos</strong>
                </div>
                <div>
                    <strong>Línea de Servicio:</strong><br>
                    Línea Gratuita 01 8000 180 779
                </div>
                <div>
                    <strong>Línea de Admisiones:</strong><br>
                    (601) 744 08 94 - 302 2907400<br>
                    Línea gratuita 01 8000 180537
                </div>
                <div>
                    <strong>Digiturno Teams</strong><br>
                    Consulta aqui
                </div>
            </div>
            <div class="seccion">
                <div><strong>Enlaces de Interes</strong></div>
                <ul>
                    <li>¿Quiénes somos?</li>
                    <li>Cartelera de notificaciones</li>
                    <li>Políticas y reglamentos</li>
                    <li>Términos y condiciones</li>
                    <li>Manual gestión PQRSDF y Requerimientos</li>
                    <li>Línea Ética - Buen Gobierno</li>
                    <li>Verificaciones Académicas</li>
                </ul>
            </div>
            <div class="seccion">
                <strong>Certificaciones</strong>
                <img src="views/assets/img/iso-logos.png" style="width: 75%;margin-bottom:20px;margin-top:20px">
                <img src="views/assets/img/logo-footer.png" style="width: 50%;margin-bottom:20px">
                <div class="redes-sociales">
                    <img src="views/assets/img/facebook.png" width="70%">
                    <img src="views/assets/img/twiter.png" width="70%">
                    <img src="views/assets/img/youtube.png" width="70%">
                    <img src="views/assets/img/linkedin.png" width="70%">
                    <img src="views/assets/img/instagram.png" width="70%">
                </div>
            </div>
        </div>
        <script src="views/assets/js/main.js"></script>
    </footer>
<?php
}
?>
</body>

</html>