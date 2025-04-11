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
                    <a class="nav-link active" href="../resenias/resenias.html">Reseñas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lugaresReservados.php">Lugares Reservados</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<h1>Reservación</h1>
<main class="container-fluid">
    <div class="d-flex flex-wrap justify-content-center">
        <form class="row g-3" method="post" action="reservacionProceso.php">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Télefono</label>
                <input type="number" class="form-control" name="telefono" required>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" name="fecha" required>
            </div>
            <div class="mb-3">
                <label for="hora" class="form-label">Hora de la Reservación</label>
                <input type="time" class="form-control" name="hora" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" name="descripcion" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-3">Reservar</button>
            </div>
        </form>
    </div>
</main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>