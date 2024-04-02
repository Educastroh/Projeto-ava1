<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <style>
        body{
            background-color: black;
        }
        .nome, .matricula{
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        .imagem{
            width: 200px;
            height: 200px;
            border-radius: 50%;
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
    <center>
        <img src="imagem/logo_unisuam.png" alt="Logo unisuam" class="logo-suam">
    </center>
        <img src="imagem/foto.jpg" alt="Foto Estudante" class="imagem">
        <h3 class="nome">Nome: Carlos Eduardo Castro da Silva</h3>
        <h4 class="matricula">Matricula: 23102404</h4>
        <a href="ex01.html" class="link">Exercicio 1</a>
        <a href="ex02.html" class="link">Exercicio 2</a>
        <a href="ex03.html" class="link">Exercicio 3</a>
</body>
</html>