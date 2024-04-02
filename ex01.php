
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            color: white;
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
    <center>
    <img src="imagem/logo_unisuam.png" alt="Logo Unisuam" srcset="">
    </center>
    <fieldset>
        <?php 
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $repeticoes = $_POST['repeticoes'];
            if(empty($nome) and empty($sobrenome) and empty($repeticoes)){
                echo "Por favor preencha os campos!";
            }
            else{
                for($i=1; $i <= $repeticoes; $i++){
                echo "$nome"; echo '<br>';
                echo $sobrenome; echo '<br>';
            }
            }
        ?>
    </fieldset>
            <a href="ex01.html" class="link">Voltar</a>
</body>
</html>


