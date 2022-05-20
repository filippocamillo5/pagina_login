<?php

//DOIS MODOS POSSÍVEIS: LOCAL e PRODUÇÃO
$modo = 'local';

if($modo == 'local'){
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "login";
}

if($modo == 'producao'){
    $servidor = "";
    $usuario = "";
    $senha = "";
    $banco = "";
}

try{
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Banco conectado com sucesso!";
}catch(PDOexception $erro){
    echo "Falha ao se conectar com o banco";
}

function limparPost($dados){
    $dados = trim($dados);
    $dados = stripslashes($dados);
    $dados = htmlspecialchars($dados);
    return $dados;
}

?>