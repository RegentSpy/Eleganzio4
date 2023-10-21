<? php

$conectar = mysqli_connect('localhost','root','', 'pruebacon');

    if(!$conectar){
        echo "No conectado";
    }

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['Mensajes'];

    $sql = "INSERT INTO contacto (Nombre, Correo, Mensajes) VALUES ('$nombre', '$correo', '$mensaje')";

    $ejecutar = mysqli_query($conectar, $sql);

    if(!$ejecutar){
        echo "Hay algun error";
    }else{
        echo "Datos almacenados correctamente";
    }
?>