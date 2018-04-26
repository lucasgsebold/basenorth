<?php
    include_once("cabecalho.php");
    include_once("conexao.php");
    include_once("database.php");

    $conexao = new BancoDeDados('localhost', 'root', '', 'northwind');
    $funcionariosDto = new FuncionariosDto($conexao);

    $id = $_POST['IDFuncionario'];
    $funcionariosDto->removeFuncionario($id);

    header("Location: funcionario-lista.php?removido=true");
    die();
?>

<h1 class="my-4">Deletar</h1>
<form method="get" action="produto-delete-confirma.php">

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Produto ID</label>
      <input name="id" type="text" class="form-control" id="inputEmail4" placeholder="Produto ID">
    </div>
	</div>



   <button type="submit" class="btn btn-danger">Deletar</button>

</form>
