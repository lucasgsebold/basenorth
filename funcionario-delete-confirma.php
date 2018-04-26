<?php include_once("cabecalho.php");
      include_once("conexao.php");
      include_once("database.php");

        $conexao = new BancoDeDados('localhost', 'root', '', 'northwind');
        $funcionariosDto = new FuncionariosDto($conexao);

        $id = $_POST["IDFuncionario"];
        $funcionario = $funcionariosDto->buscaFuncionario($id);

        ?>
        <form action="funcionario-delete.php" method="post">
        	<input type="hidden" name="IDFuncionario" value="<?=$funcionario['IDFuncionario']?>">
        	você deseja realmente excluir esse funcionario?<br>
        	nome:<?=$funcionario['Nome']?>

        	<input type="submit" name="confirmar" value="CONFIRMAR">
        </form>
