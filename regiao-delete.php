<?php
    include_once("conexao.php");
    include_once("database.php");

    $conexao = new BancoDeDados('localhost', 'root', '', 'northwind');
    $funcionariosDto = new FuncionariosDto($conexao);

    $id = $_POST['IDRegiao'];
    //echo $id;
    $funcionariosDto->removeRegiao($id);

    header("Location: regiao-lista.php?removido=true");
    die();
?>
