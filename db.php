<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "projeto_ifba";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexao" . $conexao->connect_error);
}