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

    mysqli_query($conexion, "update pizzadelli
set mail='$_REQUEST[mailnuevo]'
where mail='$_REQUEST[mailviejo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    ?>
    <div class="container-empleo">

<div class="row">
    <div class="col-md">
        <div class="card">
            <img class="card-img-top" src="local.png">
            <div class="card-body">
                <h4 class="card-title">Bienvenid@ a Nuestra familia</h4>

                <a href="PIZZADELI-home.html" class="btn btn-primary" style="background-color: #860000">Volver a pagina principal</a>
            </div>
        </div>
    </div>


</div>
</div>
</body>

</html>