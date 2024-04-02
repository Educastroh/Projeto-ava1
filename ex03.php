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
            padding: 10px 20px;
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
    <center><img src="imagem/logo_unisuam.png" alt="Logo Unisuam"><br></center>
    <fieldset>
    <?php 
    $massa=$_POST['massa'];
    $volume=$_POST['volume'];
    $densidade = $massa/$volume;
    echo"O valor da densidade é ".$densidade; echo"<br>"; echo"<br>";
    ?>
    <a href="ex03.html" class="link">Voltar</a>
    </fieldset>
</body>
</html>