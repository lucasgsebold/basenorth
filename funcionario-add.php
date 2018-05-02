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

    $adicionar = $funcionariosDto->insereFuncionario($idfuncionario, $sobrenome, $nome, $titulo);
     if($adicionar) {
       ?>
      <script>
           alert("A região foi cadastrada com Sucesso!");
           window.location.href = 'funcionario-lista.php';
       </script>

       <?php
       } else {
       ?>
       <script>
           alert("Produto não cadastrado!");
           window.location.href = 'funcionario-form.php';
       </script>

       <?php
       }
   ?>





<?php
	include("rodape.php");
?>
