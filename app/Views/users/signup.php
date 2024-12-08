<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-12 col-md-8 col-lg-6">
        <div class="jumbotron bg-white p-5 rounded shadow">
            <h1 class="display-5 text-center">Signup</h1>
            <p class="lead text-center">Complete el formulario para registrarse</p>
            <hr class="my-4">
            <!-- Signup form -->
            <form method="post" action="<?php echo site_url('user/register')?>" enctype="multipart/form-data">
                <div class="error">
                    <?php echo $error_msg; ?>
                </div>
            <div class="form-group">
                    <label for="first-name">Nombre</label>
                    <input id="first-name" class="form-control" type="text" name="firstName" required>
                </div>
                <div class="form-group">
                    <label for="last-name">Apellido</label>
                    <input id="last-name" class="form-control" type="text" name="lastName" required>
                </div>
                <div class="form-group">
                    <label for="phone-number">Número de Teléfono</label>
                    <input id="phone-number" class="form-control" type="text" name="phoneNumber" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input id="username" class="form-control" type="email" name="username" required>
                </div>
                <div class="form-group">
                    <label for="address">Dirección</label>
                    <input id="address" class="form-control" type="text" name="address" required>
                </div>
                <div class="form-group">
                    <label for="country">País</label>
                    <select id="country" class="form-control" name="country" required>
                        <?php foreach ($country as $id => $country): ?>
                            <option value="<?php echo htmlspecialchars($id); ?>">
                                <?php echo htmlspecialchars($country); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input id="password" class="form-control" type="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-4">Registrarse</button>
                <a href="index.php?" class="btn btn-secondary btn-block mt-4">Cancelar</a>
            </form>
        </div>
    </div>
</div>