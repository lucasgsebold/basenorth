<?php include_once("cabecalho.php");
      include_once("conexao.php");
      include_once("database.php");

	    $conexao = new BancoDeDados('localhost', 'root', '', 'northwind');
		  $funcionariosDto = new FuncionariosDto($conexao);
?>
<?php
		$idfuncionario =$_GET['idfuncionario'];
		$sobrenome =$_GET['sobrenome'];
		$nome =$_GET['nome'];
		$titulo =$_GET['titulo'];
    $titulocortesia = $_GET['titulocortesia'];
    $datanascimento = $_GET['datanascimento'];
    $dataadmissao = $_GET['dataadmissao'];
    $endereco = $_GET['endereco'];
    $cidade = $_GET['cidade'];
    $regiao = $_GET['regiao'];
    $cep = $_GET['cep'];
    $pais = $_GET['pais'];
    $telefone = $_GET['telefone'];
    $extensao = $_GET['extensao'];
    $notas = $_GET['notas'];

    $adicionar = $funcionariosDto->insereFuncionario($idfuncionario, $sobrenome, $nome, $titulo, $titulocortesia, $datanascimento, $dataadmissao, $endereco, $cidade, $regiao, $cep, $pais, $telefone,$extensao,$notas);
     if($adicionar) {
       ?>
      <script>
           alert("O funcionario foi cadastrado com Sucesso!");
           window.location.href = 'funcionario-lista.php';
       </script>

       <?php
       } else {
       ?>
       <script>
           alert("Funcionario não cadastrado!");
           window.location.href = 'funcionario-form.php';
       </script>

       <?php
       }
   ?>

<?php
	include("rodape.php");
?>
