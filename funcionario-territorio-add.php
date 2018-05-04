<?php include_once("cabecalho.php");
      include_once("conexao.php");
      include_once("database.php");

	    $conexao = new BancoDeDados('localhost', 'root', '', 'northwind');
		  $funcionariosDto = new FuncionariosDto($conexao);
?>
<?php
		$idfuncionario =$_GET['idfuncionario'];
		$idterritorio =$_GET['idterritorio'];

    $adicionar = $funcionariosDto->insereFuncionarioTerritorio($idfuncionario,$idterritorio);
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
