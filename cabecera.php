<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Obtener el nombre del archivo actual para mostrarlo en el cuadro gris
$pagina_actual = basename($_SERVER['PHP_SELF']);
?>
<link rel="stylesheet" href="styles.css">

<header class="header">
    <div class="logo-contenedor">
        <img src="/VC1/img/logo.png.png" alt="Logo LibroSphere">
        <div class="logo-texto">
            <h1>LibroSphere</h1>
            <p>Tu biblioteca en línea</p>
        </div>
    </div>
    
    <div style="text-align: right;">
        <div class="etiqueta-pagina"><?php echo $pagina_actual; ?></div>
        <div class="info_sesion">
            <?php if (isset($_SESSION['usuario'])): ?>
                user: <?php echo $_SESSION['usuario']; ?> | hora inicio: <?php echo is_numeric($_SESSION['hora_inicio']) ? date('H:i', $_SESSION['hora_inicio']) : $_SESSION['hora_inicio']; ?>
            <?php endif; ?>
        </div>
    </div>
</header>
