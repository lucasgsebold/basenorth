<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("database.php");

    $conexao = new BancoDeDados('localhost', 'root', '', 'northwind');
    $funcionariosDto = new FuncionariosDto($conexao);

    $id = $_GET["id"];
    $funcionario = $funcionariosDto->buscaFuncionario($id);

 ?>


<h1 class="my-4 ">Atualizar</h1>

<form method="post" action="funcionario-update.php">
    <input type="hidden" name="id" value="<?$funcionario['id']?>"/>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputPassword4">Atualizar Nome</label>
      <input name="nome" type="text" class="form-control" id="inputPassword4" placeholder="Nome do Funcionario" value="<?=$funcionario['nome']?>"/>
    </div>
  </div>

  <div class="form-row">
	  <div class="form-group col-md-4">
		<label for="inputAddress">Atualizar Sobrenome</label>
		<input name="sobrenome" type="text" class="form-control" id="inputAddress" placeholder="Sobrenome" value="<?=$funcionario['sobrenome']?>"/>
	  </div>

	  <div class="form-group col-md-4">
		<label for="inputAddress2">Atualizar Titulo</label>
		<input name="titulo" type="text" class="form-control" id="inputAddress2" placeholder="Titulo" value="<?=$funcionario['titulo']?>"/>
	  </div>
  </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
   <button type="reset" class="btn btn-danger">Apagar</button>

</form>