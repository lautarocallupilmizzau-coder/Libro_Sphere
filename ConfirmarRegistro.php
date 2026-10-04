<?php
// SERVIDOR: Incluimos la cabecera comun y el archivo de funciones reutilizables.
include __DIR__ .'/includes/cabecera.php';
include __DIR__ .'/includes/funciones.php';
// SERVIDOR : Recogemos los datos enviados por POST desde el formulario de registro.
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$edad = isset($_POST['edad']) ? $_POST['edad'] : '';
$nick = isset($_POST['nick']) ? $_POST['nick'] : '';
$contrasenia = isset($_POST['contrasenia']) ? $_POST['contrasenia'] : '';
// SERVIDOR: Corroboramos si coresponden al llamado, la función joven, como senior.
$etiquetaEdad= obtenerEtiquetaEdad($edad);
?>
<section class="completo">
<article class="centrado">
    <h2>Confirmar Datos del Registro</h2>
    <form action="crearRegistro.php" method="post">
        <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
        <input type="hidden" name="edad" value="<?php echo $edad; ?>">
        <input type="hidden" name="nick" value="<?php echo $nick; ?>">
        <input type="hidden" name="contrasenia" value="<?php echo $contrasenia; ?>">

       

<div class="formulario-conjunto">
    <label>Nombre: <?php echo $nombre; ?></label>
</div>

<div class="formulario-conjunto">
    <label>Edad: <?php echo $edad . " " .$etiquetaEdad; ?></label>
</div>

<div class="formulario-conjunto">
    <label>Nick: <?php echo $nick; ?></label>
</div>

<div class="formulario-conjunto">
    <label>Contraseña: *****</label>
</div>

<div class="formulario-conjunto">
    <!-- Boton confirmar: envia los datos a crearRegistro.php -->
     <button type="submit">Confirmar</button>
     <!--Boton cancelar: reenvia los datos de vuelta a NuevoRegistro.php mediante formaction -->
     <button type="submit" formaction="NuevoRegistro.php">Cancelar</button>
</div>
</form>
</article>
</section>