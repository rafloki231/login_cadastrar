<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-color: darkcyan;
            text-align: center;
            display: flex;
            
            align-items: center;

            font-family: sans-serif;
            

        }
        .content{
            width: 300px;
            height: 250px;

            position: absolute;
            top: 36%;
            left: 40%;

            background-color: darkorange;
            border-radius: 10px;

            padding: 10px;
        }
        input{
            border-radius: 10px;
            padding: 5px;

            text-decoration: none;
            border: solid 2px black;
        }
        .botao{
        background-color: darkorange;
        color: black;

        margin-left: 13px;
        }
        .botao:hover{
            background-color: darkcyan;
            color: white;

        }
        h1{
            position: absolute;
            top: 29%;
            left: 46%;
        }
        .botoes{
            display: inline;

        }
        .codigo{
            margin-top:5px;
        }
    </style>
</head>
<body>
    <h1>login</h1><!-- Titulo -->
    <div class="content">
        <form action="#"  method="post">
           <p>Nome:</p> <input  type="text" name="nome" placeholder="Nome">
            <br>
           <p>Senha:</p> <input  type="password" name="senha" placeholder="Senha">
            <br>
            <br>
                <input class="botao" type="submit" value="login">
                <a href="cadastrar.php">cadastrar</a>
        </form>

            <div class="codigo"><!-- Codigo para verificar o usuario e fazer login -->
                
    <?php

        include_once ("conexao.php");

            //variáveis
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];

            //Código

           

                        
    ?>
            </div>

    </div>



   

</body>
</html>