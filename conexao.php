<?php
$host="127.0.0.1";
$username="root";
$password="123456";
$db_name="cadastro";
$tabela="cadastrar_usuario";

$conect = @mysqli_connect($host,$username, $password, $db_name)
or die ("problemas com a conexão do Banco de Dados");

?>
