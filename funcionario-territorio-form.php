<?php
    include_once("cabecalho.php");
    include_once("conexao.php");
    include_once("database.php");

    $conexao = new BancoDeDados("localhost","root","","northwind");
    $funcionariosDto = new FuncionariosDto($conexao);
?>

<div class="container">

<h1 class="my-4 ">Cadastrar Funcionario e Território</h1>

<form method="get" action="funcionario-territorio-add.php">

  <div class="form-row">
    <div class="form-group my-4 mx-3 col-md-3">
      <label for="idfuncionario">Funcionário ID</label>
      <input name="idfuncionario" type="text" class="form-control" id="idfuncionario" >
    </div>
    <div class="form-group my-4 mx-3 col-md-3">
      <label for="idterritorio">Território ID</label>
      <input name="idterritorio" type="text" class="form-control" id="idterritorio" >
    </div>
  </div>

   <button type="submit" class="my-4 mx-3 btn btn-warning">Cadastrar</button>
   <button type="reset" class="my-4 mx-0 btn btn-warning">Limpar</button>

</form>
