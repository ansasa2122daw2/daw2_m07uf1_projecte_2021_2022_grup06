<?php
    session_start();
    $_SESSION['usuario'] = 'Pedro';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }
        p{
            font-weight: bold;
        }
        #cerrar{
            padding: 10vh;
            text-decoration: none;
            color: black;
        }
        #cerrar:hover{
            color:red;
        }
        
    </style>
</head>
<body>
    <p>USUARI <?php echo $usuario?></p>
    <a href="">Visualització llista de llibres disponibles</a>
    <a href="usuariPersonal.php">Visualització dades personal</a>
    <a id="cerrar" href="">Cerrar sesión</a>
</body>
</html>