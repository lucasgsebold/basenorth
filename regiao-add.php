<?php include_once("cabecalho.php");
      include_once("conexao.php");
      include_once("database.php");

	    $conexao = new BancoDeDados('localhost', 'root', '', 'northwind');
		  $funcionariosDto = new FuncionariosDto($conexao);
?>
<?php
		$idregiao =$_GET['idregiao'];
		$nome =$_GET['nome'];

    $adicionar = $funcionariosDto->insereRegiao($idregiao,$nome);
     if($adicionar) {
       ?>
      <script>
           alert("A região foi cadastrada com Sucesso!");
           window.location.href = 'regiao-lista.php';
       </script>

       <?php
       } else {
       ?>
       <script>
           alert("Região não cadastrada!");
           window.location.href = 'regiao-form.php';
       </script>

       <?php
       }
   ?>

<?php
	include("rodape.php");
?>
