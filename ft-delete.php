<?php
    include_once("conexao.php");
    include_once("database.php");

    $conexao = new BancoDeDados('localhost', 'root', '', 'northwind');
    $funcionariosDto = new FuncionariosDto($conexao);

    $idf = $_POST['IDFuncionario'];
    $idt = $_POST['IDTerritorio'];
    //echo $id;
    $funcionariosDto->removeFuncionarioTerritorio($idf,$idt);

    header("Location: funcionario-territorio-lista.php?removido=true");
    die();
?>
