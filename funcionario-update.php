<?php
    include_once("cabecalho.php");
    include_once("conexao.php");
    include_once("database.php");

    $conexao = new BancoDeDados('localhost', 'root', '', 'northwind');
    $funcionariosDto = new FuncionariosDto($conexao);

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $titulo = $_POST["titulo"];

    $altera = $funcionariosDto->alteraFuncionario($id, $nome, $sobrenome, $titulo);
    if($altera){
       ?>
        <p class="text-success">O funcionario <?= $nome; $sobrenome; ?> foi alterado com sucesso!</p>
        <a href="funcionario-lista.php">Voltar</a>
    <?php } else {
        $msg = mysqli_error($conexao->getConexao());
    ?>
        <p class="text-danger">O funcionario <?= $nome; $sobrenome; ?> não foi alterado: <?= $msg ?></p>
    <?php
    }
    ?>

<?php include("rodape.php");?>
