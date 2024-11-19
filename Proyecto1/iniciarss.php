<!DOCTYPE html>
<html>

<head>
    <title>inicio de sesión</title>
    <style>
        .login-page {
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
        }

        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 40px 0 rgba(0, 0, 0, 0.2), 0 20px 20px 0 rgba(0, 0, 0, 0.24);
            border-radius: 30px;
            border: 2px solid black;
        }

        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
            border: 1px solid black;
            border: 1px solid black;
            border-radius: 10px;
        }

        .form a {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #4c91af;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
            border-radius: 30px;
            text-decoration: none;
        }

        .form a:hover,
        .form a:active,
        .form a:focus {
            background: #4c91af;

        }

        .form .message {
            margin: 15px 0 0;
            color: #000000;
            font-size: 15px;

        }

        .form .message a {
            color: #4c91af;
            text-decoration: none;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }


        .container:before,
        .container:after {
            content: "";
            display: block;
            clear: both;

        }

        h2 {
            text-align: center;
            font-weight: 200;
            font-size: 2em;
            margin-top: 10px;
            color: #34495e;
        }


        .container .info span .fa {
            color: #EF3B3A;
        }

        body {
            background: #00FFFF;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(right, #00FFFF, #6fc2c2);
            background: -moz-linear-gradient(right, #00FFFF, #6fc2c2);
            background: -o-linear-gradient(right, #00FFFF, #6fc2c2);
            background: linear-gradient(to left, #cfffff, #6fc2c2);
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>

<div class="login-page">
    <div class="form">

        <h2>Inicia sesión</h2>
        <form class="login-form">
            <input type="text" placeholder="Usuario" />
            <input type="password" placeholder="Contraseña" />
            <a href="/Proyecto1/Inicio.php">Iniciar sesión</a>
        </form>
    </div>
</div>
</body>

</html>