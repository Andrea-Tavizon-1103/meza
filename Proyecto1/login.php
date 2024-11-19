<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INVENTEC</title>


    <style>
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

        body {
                margin: 0 auto;
                background-position:center;
                background-size: contain;
        }

        .menu {
                position: sticky;
                top: 0;
                background-color:#330033;
                padding:1px 0px 1px 0px;
                color:white;
                margin: 0 auto;
                overflow: hidden;
        }
        .menu a {
                float: left;
                color: white;
                text-align: center;
                padding: 10px 12px;
                text-decoration: none;
                font-size: 20px;
        }
        .menu-log {
                right: auto;
                float: right;
        }
        .body_sec {
                padding-top: 30px;
                padding-left: 10px;
                padding-bottom: 20px;
        }
        footer {
	            float: right;
	            background: #330033;
	            color: white;
	            text-align: center;
	            width: 100%;
	            padding-top: 10px;
	            height: 40px;
	            color: #FFFFFF;
	            font-family: kanit;
	            font-size: 1em;
                    position: fixed;
                    bottom: 0;
}
        #boton{
        width: 60px;
        height: 30px;
        background-color: black;
            color: white;
    }
    #caja1{
        display: block;
        background-color:width;
        margin: 10px;
        float: center;

    }

    </style>
</head>
<body>
<div class="nav">
                <center>
                <a href="Inicio.php">inicio</a>
                <div class="menu-log">
                </center>  
                </div>
        </div>
        <p align="center"><img src="img/usuario.png" width="300" height="300"></p>
        <div id="caja1">
        <form action="reslogin.php" method="POST"><center>
            <label><b>LOGIN</b></label>
            <br><br>
            <input type="password" name="usuario" id="usuario" placeholder="Ingrese su usuario" >
            <br></br>
            <input type="password" name="contrasena" id="contrasena" placeholder="Ingresa su contraseña" >
            <br></br>
            <input id="boton" type="submit" value="Enviar"></input>
        </form></center>
</div>

        

</body>
</html>