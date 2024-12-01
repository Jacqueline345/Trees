<div class="container my-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white text-center">
            <h2>Agregar Nuevo Árbol</h2>
        </div>
        <form method="POST" action="<?php echo site_url('arbol/register')?>" enctype="multipart/form-data">
           <div class="error">
            <?php echo $error_msg; ?>
           </div>
            <div class="form-group">
                <label for="especie">Especie:</label>
                <input type="text" name="especie" id="especie" required class="form-control"
                    placeholder="Ingrese la especie">
            </div>
            <div class="form-group">
                <label for="nombre_cientifico">Nombre Científico:</label>
                <input type="text" name="nombre_cientifico" id="nombre_cientifico" required class="form-control"
                    placeholder="Ingrese el nombre científico">
            </div>
            <div class="form-group">
                <label for="tamaño">Tamaño:</label>
                <input type="text" name="tamaño" id="tamaño" required class="form-control"
                    placeholder="Ingrese el tamaño">
            </div>
            <div class="form-group">
                <label for="ubicacion_geografica">Ubicación Geográfica:</label>
                <input type="text" name="ubicacion_geografica" id="ubicacion_geografica" required class="form-control"
                    placeholder="Ingrese la ubicación geográfica">
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="text" name="precio" id="precio" required class="form-control"
                    placeholder="Ingrese el precio">
            </div>
            <div class="form-group">
                <label for="foto">Foto del Árbol:</label>
                <input type="file" name="foto" id="foto" accept="image/*" required class="form-control-file">
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Guardar Árbol</button>
                <a href="dashboard.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
</div>