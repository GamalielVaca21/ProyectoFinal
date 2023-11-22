<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/registro.css">
    <title>Registro</title>
</head>
<body>
    <div id="contenedor">
        <header id="top">
            <a href="#"><h1>Registro</h1></a>
        </header>
        <nav id="flex-nav">
            <ul>
                <li><a href="index.html">Inicio</a></l>
                <li><a href="us.html">Sobre Nosotros</a></li>
                <li><a href="contenido.html">Contenido</a></li>
                <li><a href="registro.php">Registro</a></li>
            </ul>
        </nav>
        <section>
            <p style="font-size: 32px;">Registrate y recomiendanos nuevos temas para agregar <br>en La Historia Desconocida</p>
            <form class="declara" id="contact_form" action="#" method="POST">
                <ul>
                    <li>
                        <label for="nombre">Nombre: </label>
                        <input type="text" name="nombre" placeholder="Ingrese su primer nombre" maxlength="50" required>
                    </li>
                    <li>
                        <label for="ap">Apellido Paterno: </label>
                        <input type="text" name="ap" placeholder="Ingrese su apellido paterno" maxlength="50" required>
                    </li>
                    <li>
                        <label for="email">Correo electrónico: </label>
                        <input type="email" name="email" placeholder="Ingrese su correo electrónico." pattern="[A-Za-z].{10m}" maxlength="80" required>
                    </li>
                    <li class="vertical">
                        <label for="tema" >Tema histórico: </label>
                        <textarea type="text" name="tema" rows="6" columns="30"placeholder="Recomienda un tema del que te gustaría que indagaramos en un futuro" required></textarea>
                    </li>
                    <li>
                        <button class="button" type="submit" value="registrar" name="registrar">Enviar</button>
                    </li>
                </ul>
            </form>
        </section>
        <footer>
            <p>&copy; Gamaliel Vaca Solis Master Web</p>
            <a class="social" href="https://www.reddit.com/user/goodboah21/">
                <img class="mini" src="img/reddite.png" alt="" width="40">
            </a>
            <a class="social" href="https://www.facebook.com/gamaliel.vacasolis/">
                <img class="mini" src="img/facebook.png" alt="" width="40">
            </a>
            <a class="social" href="https://www.youtube.com/channel/UCc8OxnDxnunx7qzOe4PzPAA">
                <img class="mini" src="img/youtubee.png" alt="" width="40">
            </a>
        </footer>
    </div>
</body>
</html>

<?php
    if(isset($_POST['registrar'])){
	    
        $nombre = $_POST["nombre"];
        $apellido = $_POST["ap"];
        $email= $_POST ["email"];
        $tema= $_POST ["tema"];

        try{
            $servidor="localhost";
            $usuario="id20310598_gamaliel21";
            $clave="Hola#12345";
            $baseDeDatos="id20310598_gamaliel";

            $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
            if(!$enlace){
                echo"Error en la conexion con el servidor";
            }


            $insertarDatos = "INSERT INTO historia (nombre, apellido, email,tema) VALUES('$nombre', '$apellido','$email', '$tema')";

            $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
    
            echo '<script>alert("Registro exitoso")</script>'; 
            
        }catch(Exception $e){
            echo "Linea del error: ". $e->getLine();
        }finally{
            $base=null;
        }
    } 

?>