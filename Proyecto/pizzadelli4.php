<html>
<html lang="es">

<head>
    <title>DATOS ELIMINADOS</title>
    <link rel="icon" href="logopizza.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="pizzadeli.css" rel="stylesheet">
</head>

<body>
    

<div class="container-empleo">

<div class="row">
    <div class="col-md">
        <div class="card">
            <img class="card-img-top" src="local.png">
            <div class="card-body">
                <h4 class="card-title"><?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select codigo from pizzadelli
where mail='$_REQUEST[mail]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
        mysqli_query($conexion, "delete from pizzadelli where mail='$_REQUEST[mail]'") or
            die("Problemas en el select:" . mysqli_error($conexion));
        echo "Se efectuó el borrado de todo el registro.";
    } else {
        echo "No existe un registro con ese mail.";
    }
    mysqli_close($conexion);
    ?></h4>

                <a href="PIZZADELI-home.html" class="btn btn-primary" style="background-color: #860000">Volver a pagina principal</a>
            </div>
        </div>
    </div>


</div>
</div>
</body>

</html>