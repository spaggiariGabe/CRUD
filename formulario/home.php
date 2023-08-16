<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(32, 170, 194), rgb(62, 145, 87));
            text-align: center;
            color: aliceblue;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgb(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: aliceblue;
            border: 3px solid rgb(65, 224, 252);
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: rgb(29, 227, 253);
        }
    </style>
</head>
<body>
    <br><br><br><br><br><br><br><br><br><br>
    <h2>Faça Login para administrar os cadastros ou cadastre-se:</h2>
    <br><br>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastro</a>
    </div>
</body>
</html>