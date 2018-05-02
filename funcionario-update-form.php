<?php
    include_once("cabecalho.php");
    include_once("conexao.php");
    include_once("database.php");

    $conexao = new BancoDeDados('localhost', 'root', '', 'northwind');
    $funcionariosDto = new FuncionariosDto($conexao);

    $id = $_POST["IDFuncionario"];
    $funcionario = $funcionariosDto->buscaFuncionario($id);

 ?>


<h1 class="my-4 ">Atualizar</h1>

<form method="post" action="funcionario-update.php">
    <input type="hidden" name="id" value="<?=$funcionario['IDFuncionario']?>"/>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputPassword4">Atualizar Nome</label>
      <input name="nome" type="text" class="form-control" id="nome"  value="<?=$funcionario['Nome']?>"/>
    </div>
  </div>

  <div class="form-row">
	  <div class="form-group col-md-4">
		<label for="inputAddress">Atualizar Sobrenome</label>
		<input name="sobrenome" type="text" class="form-control" id="sobrenome" value="<?=$funcionario['Sobrenome']?>"/>
	  </div>

	  <div class="form-group col-md-4">
		<label for="inputAddress2">Atualizar Titulo</label>
		<input name="titulo" type="text" class="form-control" id="titulo" value="<?=$funcionario['Titulo']?>"/>
	  </div>
  </div>

    <button type="submit" class="btn btn-warning">Atualizar</button>
   <button type="reset" class="btn btn-warning">Apagar</button>

</form>
