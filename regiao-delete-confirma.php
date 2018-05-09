<?php include_once("cabecalho.php");
      include_once("conexao.php");
      include_once("database.php");

        $conexao = new BancoDeDados('localhost', 'root', '', 'northwind');
        $funcionariosDto = new FuncionariosDto($conexao);

        $id = $_POST["IDRegiao"];
        $regiao = $funcionariosDto->buscaRegiao($id);

        ?>
        <div class="container">
        <form action="regiao-delete.php" method="post">
        	<input type="hidden" name="IDRegiao" value="<?=$regiao['IDRegiao']?>">
        	<p>Você deseja realmente excluir essa região?</p>
          <ul>
            <li>Nome: <?=$regiao['DescricaoRegiao']?></li>
          </ul>
          <button class="btn btn-warning">Confirmar</button>
        </form>
