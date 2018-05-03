<?php
    include_once("cabecalho.php");
    include_once("conexao.php");
    include_once("database.php");

    $conexao = new BancoDeDados("localhost","root","","northwind");
    $funcionariosDto = new FuncionariosDto($conexao);
?>



<h1 class="my-4 ">Cadastrar</h1>

<form method="get" action="funcionario-add.php">

  <div class="form-row">
    <div class="form-group my-4 mx-3 col-md-3">
      <label for="idfuncionario">Funcionário ID</label>
      <input name="idfuncionario" type="text" class="form-control" id="idfuncionario" >
    </div>
    <div class="form-group my-4 mx-3 col-md-3">
      <label for="sobrenome">Sobrenome</label>
      <input name="sobrenome" type="text" class="form-control" id="sobrenome" >
    </div>
    <div class="form-group mx-3  my-4 col-md-3">
    <label for="nome">Nome</label>
    <input name="nome" type="text" class="form-control" id="nome" >
    </div>
  </div>

  <div class="form-row">
    <div class="form-group mx-3 my-4 col-md-3">
		<label for="titulo">Titulo</label>
		<input name="titulo" type="text" class="form-control" id="titulo" >
	  </div>
    <div class="form-group mx-3  my-4 col-md-3">
    <label for"titulocortesia">Titulo de Cortesia</label>
    <input name="titulocortesia" type="text" class="form-control" id="titulocortesia" >
    </div>
    <div class="form-group mx-3 my-4 col-md-3">
    <label for="datanascimento">Data de Nascimento</label>
    <input name="datanascimento" type="date" class="form-control" id="datanascimento" >
    </div>
  </div>

  <div class="form-row">
	  <div class="form-group mx-3  my-4 col-md-3">
		<label for"dataadmissao">Data de Admissão</label>
		<input name="dataadmissao" type="date" class="form-control" id="dataadmissao" >
	  </div>
    <div class="form-group mx-3 my-4 col-md-3">
		<label for="endereco">Endereço</label>
		<input name="endereco" type="text" class="form-control" id="endereco" >
	  </div>
    <div class="form-group mx-3 my-4 col-md-3">
    <label for="cidade">Cidade</label>
    <input name="cidade" type="text" class="form-control" id="cidade" >
    </div>
  </div>
  <div class="form-row">
    <div class="form-group mx-3  my-4 col-md-3">
    <label for"regiao">Região</label>
    <input name="regiao" type="text" class="form-control" id="regiao" >
    </div>
    <div class="form-group mx-3 my-4 col-md-3">
    <label for="cep">CEP</label>
    <input name="cep" type="text" class="form-control" id="cep">
    </div>
    <div class="form-group mx-3 my-4 col-md-3">
    <label for="pais">Pais</label>
    <input name="pais" type="text" class="form-control" id="pais" >
    </div>
  </div>
  <div class="form-row">
    <div class="form-group mx-3  my-4 col-md-3">
    <label for"telefone">Telefone</label>
    <input name="telefone" type="tel" class="form-control" id="telefone" >
    </div>
    <div class="form-group mx-3 my-4 col-md-3">
    <label for="extensao">Extensão</label>
    <input name="extensao" type="text" class="form-control" id="extensao" maxlength="4">
    </div>
    <div class="form-group mx-3 my-4 col-md-3">
    <label for="notas">Notas</label>
    <input name="notas" type="text" class="form-control" id="notas" >
    </div>
  </div>

   <button type="submit" class="my-4 mx-3 btn btn-warning">Cadastrar</button>
   <button type="reset" class="my-4 mx-0 btn btn-warning">Limpar</button>

</form>
