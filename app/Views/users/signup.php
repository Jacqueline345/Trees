<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<div class="container-fluid">
    <div class="jumbotron">
        <h1 class="display-4">Signup</h1>
        <p class="lead">This is the signup process</p>
        <hr class="my-4">
    </div>
    <!-- Signup form -->
    <form method="post" action="<?php echo site_url('user/register') ?>" enctype="multipart/form-data">
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
                <?php
                foreach ($country as $country) {
                    echo "<option value=\"{$country['id']}\">{$country['name']}</option>";
                }
                ?>
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
</body>

</html>