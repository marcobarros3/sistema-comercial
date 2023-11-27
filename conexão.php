<?php 
// dados necessários para conexão com o SGBD
$servidor = "localhost";
$login ="root";
$senha = "root";
$banco = "sistema";

// conectando no banco de dados
$conexao = mysqli_connect($servidor,$login,$senha,$banco);

//dados do formulário
$user = $_POST ['user'];
$user = $_POST ['Sexo'];
$user = $_POST ['Login'];
$user = $_POST ['Senha'];
$user = $_POST ['Setor'];

print_r($_POST);
//variável que recebe a instrução insert
$insert = "INSERT INTO"

?>