<html>
<html lang="es">

<head>
    <title>DATOS MODIFICADOS</title>
    <link rel="icon" href="logopizza.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="pizzadeli.css" rel="stylesheet">
</head>

<body>

    <?php

    $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select * from pizzadelli
where mail='$_REQUEST[mail]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
    ?>


<div class="container-empleo">

<div class="row">
    <div class="col-md">
        <div class="card">
            <img class="card-img-top" src="local.png">
            <div class="card-body">

            <form action="pizzadelli3-2.php" method="post">
            <div class="form-group">
                <label for="mail">Ingrese El nuevo mail:</label>
                <input type="text" class="form-control" value="<?php echo $reg['mail'] ?>" id="mail" name="mailnuevo">
            </div>
                <input type="hidden" name="mailviejo" value="<?php echo $reg['mail'] ?>">
            <input type="submit" value="Modificar" class="btn btn-default" style="background-color: #860000; color:white">
        </form>

    <?php
    } else
        echo "No existe dicho mail";
    ?>
                

            </div>
        </div>
    </div>
</body>

</html>