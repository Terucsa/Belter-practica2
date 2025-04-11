<?php
class Reservaciones {
    public function reservacion($datos) {
        if ( !is_dir('archivos') ) {
            mkdir('archivos');
        }

        $archivo = fopen("archivos/reservaciones.txt", "a");
        $contenido = $datos['nombre'] . "," . $datos['telefono'] . ",".
            $datos['fecha'] . "," . $datos['hora'] . "," . $datos['descripcion'] . "\n";
        fwrite($archivo, $contenido);
        fclose($archivo);

        return true;
    }
}

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $nombre_cliente = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $descripcion = $_POST['descripcion'];

    $datos_cliente = array(
        'nombre' => $nombre_cliente,
        'telefono' => $telefono,
        'fecha' => $fecha,
        'hora' => $hora,
        'descripcion' => $descripcion
    );

    $objeto_reservacion = new Reservaciones();
    $reservacion = $objeto_reservacion->reservacion($datos_cliente);

    if ( $reservacion ) {
        echo "<script>alert('Guardado exitoso'); window.location.href='reservacion.php';</script>";
    }

}