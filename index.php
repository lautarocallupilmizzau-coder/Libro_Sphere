<?php
// SERVIDOR: Iniciar o recuperar la sesión existente
session_start();

// SERVIDOR: Control del temporizador de sesión (30 minutos = 1800 segundos)
$tiempoMaximo = 1800;

if (isset($_SESSION['hora_inicio'])) {
    $tiempoTranscurrido = time() - $_SESSION['hora_inicio'];
    if ($tiempoTranscurrido > $tiempoMaximo) {
        // La sesión ha caducado: la limpiamos y la destruimos
        session_unset();
        session_destroy();
        $mensajeError = "La sesión ha caducado por inactividad (30 min).";
    }
}

// SERVIDOR: Procesar el formulario de inicio de sesión cuando se envía
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = isset($_POST['usuario']) ? trim($_POST['usuario']) : '';
    $contrasenia = isset($_POST['contrasenia']) ? trim($_POST['contrasenia']) : '';

    // Validar credenciales requeridas: admin / abcdef
    if ($usuario === 'admin' && $contrasenia === 'abcdef') {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['hora_inicio'] = time(); // Guardamos el momento exacto del login
    } else {
        $mensajeError = "Usuario o contraseña incorrectos.";
    }
}

// SERVIDOR: Procesar el cierre de sesión voluntario
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
}

// Incluimos la cabecera común
include 'includes/cabecera.php';
?>

<section class="completo">
    <article class="centrado">
        <?php if (isset($_SESSION['usuario'])): ?>
            <!-- VISTA: Usuario autenticado -->
            <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h2>
            <p>Has iniciado sesión correctamente.</p>
            
            <div class="formulario-conjunto">
                <a href="NuevoRegistro.php"><button type="button">Ir a Registro de Usuario</button></a>
                <a href="index.php?logout=1"><button type="button">Cerrar Sesión</button></a>
            </div>

        <?php else: ?>
            <!-- VISTA: Formulario de acceso -->
            <h2>Iniciar Sesión</h2>

            <?php if (isset($mensajeError)): ?>
                <p style="color: red;"><?php echo $mensajeError; ?></p>
            <?php endif; ?>

            <form action="index.php" method="post">
                <div class="formulario-conjunto">
                    <label for="usuario">Usuario:</label>
                    <input type="text" id="usuario" name="usuario" required>
                </div>

                <div class="formulario-conjunto">
                    <label for="contrasenia">Contraseña:</label>
                    <input type="password" id="contrasenia" name="contrasenia" required>
                </div>

                <div class="formulario-conjunto">
                    <button type="submit">Entrar</button>
                </div>
            </form>

            <br>
            <p>¿No tienes cuenta? <a href="NuevoRegistro.php">Registrar nuevo usuario</a></p>
        <?php endif; ?>
    </article>
</section>
