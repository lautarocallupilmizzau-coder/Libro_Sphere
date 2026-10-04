<?php
//Servidor : Incluimos la cabecera comun y el archivo de funciones.
include 'includes/cabecera.php';
include 'includes/funciones.php';

//servidor: Recogemos los datos enviados por POST desde confirmarRegistro.php.
$nombre= isset($_POST['nombre']) ? $_POST['nombre'] : '';
$edad = isset($_POST['edad']) ? $_POST['edad'] : '';
$nick = isset($_POST['nick']) ? $_POST['nick'] : '';
//servidor: Comprobamos si la etiqueta nos da (joven) para decidir si mostramos el icono.
$etiquetaEdad = obtenerEtiquetaEdad($edad);
?>

<section class="completo">
    <article class="centrado">
        <h2>Registro Completado</h2>
        <div class="mensaje-exito">
            <p>El usuario <strong><?php echo $nick; ?></strong> ha sido creado satisfactoriamente.</p>
            <?php
            //Servidor: Si el usuario es clasificado como joven, mostramos la imagen/icono
            if ($etiquetaEdad === "(joven)") {
                echo '<div class="icono-joven">';
                echo '<img src="img/icono_joven.png.png" alt="Icono Joven" width="50">';
                echo '</div>';
            }
            ?>
            </div>

            <div class="formulario-conjunto">
                <a href="index.php"><button type="button">Volver al Inicio</button></a>
</div>
</article>
</section>
