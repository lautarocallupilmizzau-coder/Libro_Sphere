<?php
if (isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['direccion']) && isset($_POST['cargo']) ){
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $cargo = $_POST['cargo'];

?>
<h2>Confirmar Registro</h2>
    <form action="alta.php" method="post">
        <div>
            <label for="nombre">Nombre: <?php echo $nombre; ?></label>
            <input type="hidden" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>
</div>

<div>
    <label for="apellidos">Apellidos: <?php echo $apellidos; ?></label>
    <input type="hidden" id="apellidos" name="apellidos" value="<?php echo $apellidos; ?> required>

</div>

<div>
    <label for="direccion">Direccion: <?php echo $direccion; ?></label>
    <input type="hidden" id="direccion" name="direccion" value="<?php echo $direccion; ?> required>
</div>

<div>
    <label for="cargo">Cargo: <?php echo $cargo; ?></label>
    <input type="hidden" id="cargo" name="cargo" value="<?php echo $cargo; ?> required>
</div>
</form>
<?php
} else {
    echo '<h1>Los datos no han sido registrados </h1>';
}
?>