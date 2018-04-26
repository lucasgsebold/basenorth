<?php
    include_once("conexao.php");
    include_once("database.php");

    $conexao = new BancoDeDados('localhost', 'root', '', 'northwind');
    $funcionariosDto = new FuncionariosDto($conexao);

    $id = $_POST['IDFuncionario'];
    //echo $id;
    $funcionariosDto->removeFuncionario($id);

    header("Location: funcionario-lista.php?removido=true");
    die();
?>
