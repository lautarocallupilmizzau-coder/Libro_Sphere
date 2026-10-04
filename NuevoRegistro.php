<?php include 'includes/cabecera.php'; ?>

<main class="contenido-principal">
    <h2>Alta Usuario</h2>
    
    <form action="ConfirmarRegistro.php" method="POST">
        <div class="form-grupo">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        
        <div class="form-grupo">
            <label for="edad">Edad</label>
            <input type="number" id="edad" name="edad" required>
        </div>
        
        <div class="form-grupo">
            <label for="nick">Nick</label>
            <input type="text" id="nick" name="nick" maxlength="8" required>
        </div>
        
        <div class="form-grupo">
            <label for="clave">Contraseña</label>
            <input type="password" id="clave" name="clave" maxlength="5" required>
        </div>
        
        <div class="botones-contenedor">
            <button type="submit" class="btn-negro">Aceptar</button>
            <a href="index.php" class="btn-negro">Cancelar</a>
        </div>
    </form>
</main>

<hr class="separador-punteado">