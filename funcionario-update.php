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
    $titulocortesia = $_POST["titulocortesia"];
    $datanascimento = $_POST["datanascimento"];
    $dataadmissao = $_POST["dataadmissao"];
    $endereco = $_POST["endereco"];
    $cidade = $_POST["cidade"];
    $regiao = $_POST["regiao"];
    $cep = $_POST["cep"];
    $pais = $_POST["pais"];
    $telefone = $_POST["telefone"];
    $extensao = $_POST["extensao"];
    $notas = $_POST["notas"];
    


    $altera = $funcionariosDto->alteraFuncionario($id, $nome, $sobrenome, $titulo,$titulocortesia,$datanascimento,$dataadmissao,$endereco,$cidade,$regiao,$cep,$pais,$telefone,$extensao,$notas);
    if($altera){
       ?>
        <p class="text-success">O funcionario <?=  $nome, $sobrenome; ?> foi alterado com sucesso!</p>
        <a href="funcionario-lista.php">Voltar</a>
    <?php } else {
        $msg = mysqli_error($conexao->getConexao());
    ?>
        <p class="text-danger">O funcionario <?= $nome, $sobrenome; ?> não foi alterado: <?= $msg ?></p>
    <?php
    }
    ?>

<?php include("rodape.php");?>
