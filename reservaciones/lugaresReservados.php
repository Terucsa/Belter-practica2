<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Postres, dulces">
    <link rel="icon" type="image/x-icon" href="../imagenes/384158.png">
    <meta name="description" content="Conoce los mejores chef de todo Guatemala">

    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Postres</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-personalizado">
    <a class="navbar-brand" href="../index.html">Restaurante Patito</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../personal/personal.html" >Personal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../menu/platos-fuertes.html">Platos Fuertes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../menu/postres.html">Postres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../recetas/recetas-dulces.php">Recetas Dulces</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../recetas/recetas-saladas.php">Recetas Saladas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../resenias/resenias.html">Reseñas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="lugaresReservados.php">Lugares Reservados</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<h1>Reservaciones</h1>
<main class="container-fluid">
    <div class="d-flex flex-wrap justify-content-center">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Fecha</th>
                <th scope="col">Hora</th>
                <th scope="col">Descripcion</th>
            </tr>
            </thead>
            <tbody>
        <?php

        $archivo = fopen("archivos/reservaciones.txt", "r");
        $num = 1;
        if ($archivo) {
            while (($linea = fgets($archivo)) !== false) {
               $datos_reserva = explode(',', trim($linea));
               $nombre = $datos_reserva[0];
               $telefono = $datos_reserva[1];
               $fecha = $datos_reserva[2];
               $hora = $datos_reserva[3];
               $descripcion = $datos_reserva[4];
               echo <<<END
                    <tr>
                      <th scope="row">$num</th>
                      <td>$nombre</td>
                      <td>$telefono</td>
                      <td>$fecha</td>
                      <td>$hora</td>
                      <td>$descripcion</td>
                    </tr>
                END;
               $num++;
            }
            fclose($archivo);
        }

        ?>

            </tbody>
        </table>
    </div>
</main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>
