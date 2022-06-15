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
            height: 350px;

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
            left: 44%;
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
    <h1>Cadastrar</h1>
    <div class="content">
        <form action="#"  method="post">
           <p>Nome:</p> <input  type="text" name="nome" placeholder="Nome">
            <br>
           <p>Senha:</p> <input  type="password" name="senha" placeholder="Senha">
            <br>
            <p>Email:</p> <input  type="email" name="email" placeholder="Email">
            <br>
            <br>
                <a href='index.php'> Voltar </a>
                <input class="botao" type="submit" value="cadastrar">
        </form>

            <div class="codigo">
                
                <?php

                    include_once ("conexao.php");

                        //variáveis
                        $nome = $_POST['nome'];
                        $senha = $_POST['senha'];
                        $email = $_POST['email'];

                        //Código

                        if (($nome == "") and ($senha == "") and ($email == "")){
                            echo "<p>preencha os campos</p>";
                        } else {
                                $sql = "insert into $tabela (nome, senha, email) values ('$nome', '$senha', '$email')";

                            $result = @mysqli_query ($conect, $sql);
                            
                            if (!$result) {
                            die ('Query inválida: ' . @mysqli_error($conect));
                            } else {
                                @mysqli_close($conect);
                                echo "Registro cadastrado com sucesso!!";
                                exit;
                            }
                        }

                        
                        
                ?>
            </div>

    </div>



   

</body>
</html>