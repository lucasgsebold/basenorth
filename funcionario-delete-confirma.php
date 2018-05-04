<?php include_once("cabecalho.php");
      include_once("conexao.php");
      include_once("database.php");

        $conexao = new BancoDeDados('localhost', 'root', '', 'northwind');
        $funcionariosDto = new FuncionariosDto($conexao);

        $id = $_POST["IDFuncionario"];
        $funcionario = $funcionariosDto->buscaFuncionario($id);

        ?>
        <div class="container">
        <form action="funcionario-delete.php" method="post">
        	<input type="hidden" name="IDFuncionario" value="<?=$funcionario['IDFuncionario']?>">
        	<p>Você deseja realmente excluir esse funcionário?</p>
          <ul>
            <li>Nome: <?=$funcionario['Nome']?></li>
            <li>Sobrenome: <?=$funcionario['Sobrenome']?></li>
            <li>Titulo: <?=$funcionario['Titulo']?></li>
          </ul>
          <button class="btn btn-warning">Confirmar</button>
        </form>
