<?php
    include_once("cabecalho.php");
    include_once("conexao.php");
    include_once("database.php");

    $conexao = new BancoDeDados("localhost","root","","northwind");
    $funcionariosDto = new FuncionariosDto($conexao);
?>


<div class="container">
<h1 class="my-4 ">Cadastrar Região</h1>

<form method="get" action="regiao-add.php">

  <div class="form-row">
    <div class="form-group my-4 mx-3 col-md-3">
      <label for="idregiao">Região ID</label>
      <input name="idregiao" type="text" class="form-control" id="idregiao" >
    </div>
    <div class="form-group my-4 mx-3 col-md-3">
      <label for="nome">Nome da Região</label>
      <input name="nome" type="text" class="form-control" id="nome" >
    </div>
  </div>

   <button type="submit" class="my-4 mx-3 btn btn-warning">Cadastrar</button>
   <button type="reset" class="my-4 mx-0 btn btn-warning">Limpar</button>

</form>
