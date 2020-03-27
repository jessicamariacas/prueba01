<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIZZA DELI</title>
    <link rel="icon" href="logopizza.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="pizzadeli.css" rel="stylesheet">

</head>

<body>


    <header class="header">
        <div class="container logo-nav-container">
            <a href="PIZZADELI-home.html" class="logo">Pizzadelli</a>
            <nav class="navigation">
                <ul>
                    <li><a href="PIZZADELI-sucursales.html">SUCURSALES</a></li>
                    <li><a href="PIZZADELI-ofertas.html">OFERTAS</a></li>
                    <li><a href="PIZZADELI-empleos.php">EMPLEOS</a></li>
                    <li><a href="PIZZADELI-nosotros.html">NOSOTROS</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <div class="ofertas">
        <img src="ofertas.png">
        <strong>
            <h1> UNETE A NUESTRO TEAM</h1>
        </strong>
    </div>
    
    <div class="container-raya">
    <P class="mision"> FORMULARIO DE DELIVERY</p>
    <div class="raya1">
    </div>
</div> <br> <br> <br> <br>

    <div class="container">

        <form action="pizzadelli.php" method="POST">
            <div class="form-group">
                <label for="nombre">Ingrese su nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="clave">Ingrese su clave:</label>
                <input type="password" class="form-control" id="clave" name="clave">
            </div>
            <div class="form-group">
                <label for="clave">Ingrese su mail:</label>
                <input type="text" class="form-control" id="mail" name="mail">
            </div>
            <button type="submit" value="enviar" class="btn btn-default">Enviar</button>
        </form>

        <div class="container-raya">
    <P class="emeplos1" style="  font-size: 40px;
        color: rgb(134, 0, 0);
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        margin-left: -200px;
        margin-bottom: 15px;"> VERIFIQUE SUS DATOS </p>
    <div class="rayita" style=" margin-left: -230px;
    background-color: rgb(10, 61, 5);
    height: 3px;
    width: 600px;
    border-radius: 15px;">
    </div>
</div> <br> <br> <br> <BR> 
        <!--*******************************************************************-->

        <form action="pizzadelli2.php" method="POST">
            
            <div class="form-group">
                <label for="mail">Ingrese su mail:</label>
                <input type="text" class="form-control" id="mail" name="mail">
            </div>
            <button type="submit" value="enviar" class="btn btn-default">Verificar</button>
        </form>

        <div class="container-raya">
    <P class="emeplos1" style="  font-size: 40px;
        color: rgb(134, 0, 0);
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        margin-left: -220px;
        margin-bottom: 15px;"> LLENE ESTO SI DESEA MODIFICAR ALGUN DATO </p>
    <div class="rayita" style=" margin-left: -230px;
    background-color: rgb(10, 61, 5);
    height: 3px;
    width: 600px;
    border-radius: 15px;">
    </div>
</div> <br> <br> <br> <BR> <br>
        <!--*******************************************************************-->


        <form action="pizzadelli3.php" method="POST">
            <div class="form-group">
                <label for="mail">Ingrese su mail:</label>
                <input type="text" class="form-control" id="mail" name="mail">
            </div>
            <button type="submit" value="buscar" class="btn btn-default">Modificar</button>
        </form>
        <!--*******************************************************************-->
        <div class="container-raya">
    <P class="emeplos1" style="  font-size: 40px;
        color: rgb(134, 0, 0);
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        margin-left: -220px;
        margin-bottom: 15px;"> SI DESEA ELIMINAR SUS DATOS </p>
    <div class="rayita" style=" margin-left: -230px;
    background-color: rgb(10, 61, 5);
    height: 3px;
    width: 600px;
    border-radius: 15px;">
    </div>
</div> <br> <br> <br> <br>
        <form action="pizzadelli4.php" method="POST">
            <div class="form-group">
                <label for="mail">Ingrese su mail:</label>
                <input type="text" class="form-control" id="mail" name="mail">
            </div>
            <button type="submit" value="buscar" class="btn btn-default">Eliminar</button>
        </form>
    </div>


        <footer class="footer2">
            <div class="container">
                <p>Copyright © 2020 Pizzadeli. Todos los derechos reservados. @jessicamariacas</p>
                <a href="https://www.instagram.com/pizzadelird/"><img src="instagram.png"></a>
                <a href="https://www.facebook.com/Pizzadelird-105173794453651/?modal=admin_todo_tour    "><img src="facebook.png"></a>
                <a href="https://twitter.com/pizzadelird"><img src="gorjeo.png"></a>

            </div>
        </footer>

</body>

</html>