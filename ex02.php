<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            color: orangered;
            font-family: Arial, Helvetica, sans-serif;
        }
        .link{
            color: white;
            display: inline-block;
            padding: 8px 20px;
            background-color: orangered;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
        .link:hover{
            background-color: blue;
        }
    </style>
</head>
<body>
    <center>
        <img src="imagem/logo_unisuam.png" alt="" srcset=""><br><br>
    </center>
        <fieldset>
        <?php 
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        if($usuario != 23102404 and $senha !='Espetacular1122#'){
            echo "Falha na autenticação";
        }
        else{
            echo "Usuario autenticado com sucesso!";
        }
        ?>
        <br>
        <a href="ex02.html" class="link">Voltar</a>

        </fieldset>
    
</body>
</html>

