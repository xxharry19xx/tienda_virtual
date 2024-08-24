<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->printSection('titulo') ?></title>
     <title>holaa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <p>MENU DEL SISTEMA</p>
                <ul>
                    <li>Productos</li>
                    <li>Usuarios</li>
                    <li>Clientes</li>
                    <li>Pedidos</li>
                    <li>Proveedores</li>
                </ul>
            </div>
            <?php echo $this->printSection('contenido') ?>
            <div class="col-3">
                <p>SEGUNDO MENU DEL SISTEMA</p>
                <ul>
                    <li>Ir a la tienda</li>
                    <li>Cambiar contraseña</li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>