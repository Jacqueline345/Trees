<div class="container my-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-success text-white text-center py-4">
            <h2 class="mb-0"><?php echo htmlspecialchars($tree['especie']); ?></h2>
            <p class="mb-0"><small>Nombre Científico:
                    <?php echo htmlspecialchars($tree['nombre_cientifico']); ?></small></p>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Tamaño:</strong>
                    <span><?php echo htmlspecialchars($tree['tamaño']); ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Ubicación Geográfica:</strong>
                    <span><?php echo htmlspecialchars($tree['ubicacion_geografica']); ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Estado:</strong>
                    <span><?php echo htmlspecialchars($tree['estado']); ?></span>
                </li>
            </ul>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <a href="editDetails.php?id=<?php echo $treeId; ?>" class="btn btn-primary mx-2">Editar Árbol</a>
            <a href="seeFriends.php" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>