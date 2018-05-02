
<?php include_once("cabecalho.php");?>



<h1 class="my-4 ">Cadastrar</h1>

<form method="get" action="funcionario-add.php">

  <div class="form-row">
    <div class="form-group my-4 mx-3 col-md-4">
      <label for="idfuncionario">Funcionário ID</label>
      <input name="idfuncionario" type="text" class="form-control" id="idfuncionario" >
    </div>

    <div class="form-group my-4 mx-3 col-md-4">
      <label for="sobrenome">Sobrenome</label>
      <input name="sobrenome" type="text" class="form-control" id="sobrenome" >
    </div>
  </div>

  <div class="form-row">
	  <div class="form-group mx-3  my-4 col-md-4">
		<label for="nome">Nome</label>
		<input name="nome" type="text" class="form-control" id="nome" >
	  </div>

    <div class="form-group mx-3 my-4 col-md-4">
		<label for="titulo">Titulo</label>
		<input name="titulo" type="text" class="form-control" id="titulo" >
	  </div>
  </div>
  

   <button type="submit" class="my-4 mx-3 btn btn-warning">Cadastrar</button>
   <button type="reset" class="my-4 mx-0 btn btn-warning">Limpar</button>

</form>
