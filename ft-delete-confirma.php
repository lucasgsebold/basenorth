<?php include_once("cabecalho.php");
      include_once("conexao.php");
      include_once("database.php");

        $conexao = new BancoDeDados('localhost', 'root', '', 'northwind');
        $funcionariosDto = new FuncionariosDto($conexao);

        $idf = $_POST["IDFuncionario"];
        $idt = $_POST["IDTerritorio"];
        $id = $_POST["IDFuncionario"];
        $funcionariot = $funcionariosDto->buscaFuncionarioTerritorio($idf,$idt);
        $funcionario = $funcionariosDto->buscaFuncionario($id);
        ?>
        <form action="ft-delete.php" method="post">
        	<input type="hidden" name="IDFuncionario" value="<?=$funcionariot['IDFuncionario']?>">
          <input type="hidden" name="IDTerritorio" value="<?=$funcionariot['IDTerritorio']?>">
        	<p>Você deseja realmente excluir o Território desse funcionário?</p>
          <ul>
            <li>ID Funcionário: <?=$funcionariot['IDFuncionario']?></li>
            <li>Nome: <?=$funcionario['Nome']?></li>
            <li>Sobrenome: <?=$funcionario['Sobrenome']?></li>
            <li>ID Território: <?=$funcionariot['IDTerritorio']?></li>
          </ul>
          <button class="btn btn-warning">Confirmar</button>
        </form>
