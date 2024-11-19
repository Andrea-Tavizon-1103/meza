<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INVENTEC</title>


    <style>

    /*MENU */
    .men {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      gap: 20px;
      margin: 20px;
    }

    .comida {
      border: 1px solid black;
      padding: 10px;
      margin: 10px;
      float: left;
      width: 200px;
    }

    .comida img {
      max-width: 100%;
      height: auto;
    }

    .comida h2 {
      margin-top: 0;
    }

    .comida p {
      margin-bottom: 0;
    }


    .comida {
      display: flex;
      flex-direction: column;
      align-items: center;
      border: 1px solid black;
      padding: 10px;
      width: 200px;
    }

    .comida img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      margin-bottom: 10px;
    }

    .comida h3 {
      margin: 0;
    }

    .comida p {
      margin: 0;
      font-weight: bold;
    }

    .formulario-container {
      position:absolute;
      top: auto;
      width: 550px;
      height: 500px;
      margin-right: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h3 {
      margin-top: 30px;
      margin-bottom: 20px;
      text-align: center;
    }

    form {
      width: 70%;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="number"],
    input[type="file"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: none;
      border-radius: 3px;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
      font-size: 16px;
      color: #555;
    }

    input[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 3px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #0062cc;
    }





        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'kanit';
}

.contenedor {
    padding: 60px 0;
    width: 90%;
    max-width: 1000px;
    margin: auto;
    overflow: hidden;
}

.titulo {
    color: #73722a;
    font-size: 30px;
    text-align: center;
    margin-bottom: 60px;
}

/* Header */

header {
    width: 100%;
    height: 600px;
    background: #bc4e4e;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, hsla(0, 95%, 50%, 0.459), hsla(236, 45%, 52%, 0.664)), url(img/inventec.png);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, hsla(0, 95%, 50%, 0.459), hsla(234, 45%, 52%, 0.664)), url(img/inventec.png);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background-size: cover;
    background-attachment: fixed;
    position: relative;
}

nav{
    text-align: center;
    padding: 30px 50px 0 0;
}

nav > a{
    color:#fff;
    font-weight: 300;
    text-decoration: none;
    margin-right: 10px;
}

nav > a:hover{
    text-decoration: underline;
}

header .textos-header{
    display: flex;
    height: 430px;
    width: 100%;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}

.textos-header h1{
    font-size: 50px;
    color:#fff;
}

.textos-header h2{
    font-size: 30px;
    font-weight: 300;
    color:#fff;
}

.wave{
    position: absolute;
    bottom: 0;
    width: 100%;
}

/* About us */

main .sobre-nosotros{
    padding: 30px 0 60px 0;
}
.contenedor-sobre-nosotros{
    align-items: center;
    display: flex;
    justify-content: space-evenly;
}

.imagen-about-us{
    width: 30%;
}

.sobre-nosotros .contenido-textos{
    width: 48%;
}

.contenido-textos h3{
    margin-bottom: 15px;
}

.contenido-textos h3 span{
    background: #860606;
    color: #fff;
    border-radius: 50%;
    display: inline-block;
    text-align: center;
    width: 30px;
    height: 30px;
    padding: 2px;
    box-shadow: 0 0 6px 0 rgba(0, 0, 0, .5);
    margin-right: 5px;
}

.contenido-textos p{
    padding: 0px 0px 30px 15px;
    font-weight: 300;
    text-align: justify;
}

/* Galeria */


.portafolio{
    background: #f2f2f2;
}

.galeria-port{
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
}

.imagen-port{
    width: 24%;
    margin-bottom: 10px;
    overflow: hidden;
    position: relative;
    cursor: pointer;
    box-shadow: 0 0 6px 0 rgba(0, 0, 0, .5);
}

.imagen-port > img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.hover-galeria{
    position: absolute;
    width: 100%;
    height: 100%;
    
}

.hover-galeria img{
    width: 50px;
}

.hover-galeria p{
    color: #fff;
}

.imagen-port:hover .hover-galeria{
    transform: scale(1);
}

/* Clients */

.cards{
    display: flex;
    justify-content: space-evenly;
}

.cards .card{
    background: #220686;
    display: flex;
    width: 46%;
    height: 200px;
    align-items: center;
    justify-content: space-evenly;
    border-radius: 5px;
    box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.6);
}

.cards .card img{
    width: 100px;
    height: 100px;
    object-fit: cover;
    border: 3px solid #fff;
    border-radius: 50%;
    display: block;
}

.cards .card > .contenido-texto-card{
    width: 60%;
    color: #fff;
}

.cards .card > .contenido-texto-card p{
    font-weight: 300;
    padding-top: 5px;
}

/*  Our team */

.about-services{
    background: #f2f2f2;
    padding-bottom: 30px;
}


.servicio-cont{
    display:flex;
    justify-content: space-between;
    align-items: center;
}

.servicio-ind{
    width: 28%;
    text-align: center;
}

.servicio-ind img{
    width: 90%;
}

.servicio-ind h3{
    margin: 10px 0;
}

.servicio-ind p{
    font-weight: 300;
    text-align: justify;
}

/* footer */

footer{
    background: #7a2222;
    padding: 60px 0 30px 0;
    margin: auto;
    overflow: hidden;
}

.contenedor-footer{
    display: flex;
    width: 90%;
    justify-content: space-evenly;
    margin: auto;
    padding-bottom: 50px;
    border-bottom: 1px solid #ccc;
}

.content-foo{
    text-align: center;
}

.content-foo h4{
    color: #fff;
    border-bottom: 3px solid #d32020;
    padding-bottom: 5px;
    margin-bottom: 10px;
}

.content-foo p{
    color: #ccc;
}

.titulo-final{
    text-align: center;
    font-size: 24px;
    margin: 20px 0 0 0;
    color: #9e9797;
}

@media screen and (max-width:900px){
    header{
        background-position: center;
    }

    .contenedor-sobre-nosotros{
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .sobre-nosotros .contenido-textos{
        width: 90%;
    }

    .imagen-about-us{
        width: 90%;
    }

    /* Galeria */

    .imagen-port{
        width: 44%;
    }

    /* Clientes */

    .cards{
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .cards .card{
        width: 90%;
    }

    .cards .card:first-child{
        margin-bottom: 30px;
    }

    /* servicios */

    .servicio-cont{
        justify-content: center;
        flex-direction: column;
    }

    .servicio-ind{
        width: 100%;
        text-align: center;
    }

    .servicio-ind:nth-child(1), .servicio-ind:nth-child(2){
        margin-bottom: 60px;
    }

    .servicio-ind img{
        width: 90%;
    }
}
    </style>


    <link rel="shortcut icon" href="img/inventec.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&display=swap" rel="stylesheet">
</head>

<body>
<header>
        <nav>
            
            <a href="#" onclick="Nuevo()">Nuevo</a>
            <a href="#" onclick="Modificar()">Modificar</a>
            <a href="#" onclick="Eliminar()">Eliminar</a>
            <a href="Inicio.php">Refrescar</a>
            <a href="login.php">Login</a>

        </nav>
        <section class="textos-header">
            <h1>INVENTEC </h1>
            <h2>registro de llegada</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
  <main>
    <?php
    $bd = mysqli_connect("localhost", "root", "");
    mysqli_select_db($bd, "horario");
    $consulta = "SELECT * FROM regllegada";
    $resultado = mysqli_query($bd, $consulta);
    // Mostrar los resultados
    while ($fila = mysqli_fetch_assoc($resultado)) {
      echo "<div class='comida'>";
      echo "<p>" . "id: " . $fila['id'] . "</p>";
      echo "<p>" . $fila['nombre'] . "</p>";
      echo "<p>" . $fila['hora'] . "</p>";
      echo "<p>" . $fila['departamento'] . "</p>";
      echo "</div>";
    }
    ?>



    <script>
      function Nuevo() {
        document.getElementById("Nuevo").style.display = "block";
        document.getElementById("Modificar").style.display = "none";
        document.getElementById("Eliminar").style.display = "none";
      }
      function Modificar() {
        document.getElementById("Nuevo").style.display = "none";
        document.getElementById("Modificar").style.display = "block";
        document.getElementById("Eliminar").style.display = "none";
      }
      function Eliminar() {
        document.getElementById("Nuevo").style.display = "none";
        document.getElementById("Modificar").style.display = "none";
        document.getElementById("Eliminar").style.display = "block";
      }


      // Obtener los elementos del DOM
      var blur = document.querySelector(".blur");
      var loginContainer = document.querySelector(".login-container");
      var content = document.querySelector(".content");

      // Ocultar el contenedor de inicio de sesión y el fondo borroso cuando se envía el formulario
      document.querySelector("form").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevenir que se envíe el formulario
        blur.style.display = "none";
        loginContainer.style.display = "none";
        content.style.display = "block";
      });

      var isLoggedIn = false;

      // Comprobar si el usuario ha iniciado sesión
      if (isLoggedIn) {
        // Mostrar el contenido
        document.querySelector(".content").style.display = "block";
      }
    </script>
  </main>
  <?php

  $host = "localhost";
  $user = "root";
  $password = "";
  $database = "horario";

  $conn = mysqli_connect($host, $user, $password, $database);

  if (isset($_POST['nuevo'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $hora = $_POST['hora'];
    $departamento = $_POST['departamento'];
    $sql = "INSERT INTO regllegada (id, nombre, hora, departamento) VALUES ('$id', '$nombre','$hora', '$departamento')";
    mysqli_query($conn, $sql);
  }

  if (isset($_POST['modificar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $hora = $_POST['hora'];
    $departamento = $_POST['departamento'];
    $sql = "UPDATE regllegada SET nombre='$nombre', hora='$hora', departamento='$departamento' WHERE id='$id'";
    mysqli_query($conn, $sql);
  }

  if (isset($_POST['eliminar'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM regllegada WHERE id='$id'";
    mysqli_query($conn, $sql);
  }

  ?>

  <div id="Nuevo" style="display: none;" class="formulario-container">
    <h3>nuevo Producto</h3>
    <form method="post" enctype="multipart/form-data">
      <label>id:</label>
      <input type="number" name="id"><br>
      <label>nombre:</label>
      <input type="text" name="nombre"><br>
      <label>hora:</label>
      <input type="number" step="" name="hora"><br>
      <label>departamento:</label>
      <input type="text" step="" name="departamento"><br>
      <input type="submit" name="nuevo" value="Guardar">
    </form>
  </div>

  <!-- Agregar formulario para modificar elementos existentes en la tabla "catalogo" -->
  <div id="Modificar" style="display: none;" class="formulario-container">
    <h3>Modificar Producto</h3>
    <form method="post" enctype="multipart/form-data">
      <label>id:</label>
      <input type="number" name="id"><br>
      <label>nombre:</label>
      <input type="text" name="nombre"><br>
      <label>hora:</label>
      <input type="number" step="" name="hora"><br>
      <label>departamento:</label>
      <input type="text" step="" name="departamento"><br>
      <input type="submit" name="modificar" value="Guardar">
    </form>
  </div>

  <!-- Agregar formulario para eliminar elementos existentes en la tabla "catalogo" -->
  <div id="Eliminar" style="display: none;" class="formulario-container">
    <h3>Eliminar Producto</h3>
    <form method="post">
      <label>id:</label>
      <input type="number" name="id"><br>
      <input type="submit" name="eliminar" value="Eliminar">
    </form>
  </div>
  

  
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4></h4>
                <p></p>
            </div>
            <div class="content-foo">
                <h4></h4>
                <p></p>
            </div>
            <div class="content-foo">
                <h4></h4>
                <p></p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; INVENTEC | Emmanuel Rivera</h2>
  


</body>
</html>