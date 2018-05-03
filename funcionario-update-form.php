<?php
    include_once("cabecalho.php");
    include_once("conexao.php");
    include_once("database.php");

    $conexao = new BancoDeDados('localhost', 'root', '', 'northwind');
    $funcionariosDto = new FuncionariosDto($conexao);

    $id = $_POST["IDFuncionario"];
    $funcionario = $funcionariosDto->buscaFuncionario($id);

 ?>


<h1 class="my-4 ">Atualizar Funcionário</h1>

<form method="post" action="funcionario-update.php">
    <input type="hidden" name="id" value="<?=$funcionario['IDFuncionario']?>"/>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="nome">Atualizar Nome</label>
      <input name="nome" type="text" class="form-control" id="nome"  value="<?=$funcionario['Nome']?>"/>
    </div>
    <div class="form-group col-md-4">
      <label for="sobrenome">Atualizar Sobrenome</label>
      <input name="sobrenome" type="text" class="form-control" id="sobrenome" value="<?=$funcionario['Sobrenome']?>"/>
    </div>
    <div class="form-group col-md-4">
      <label for="titulo">Atualizar Titulo</label>
      <input name="titulo" type="text" class="form-control" id="titulo" value="<?=$funcionario['Titulo']?>"/>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="titulocortesia">Atualizar Titulo Cortesia</label>
      <input name="titulocortesia" type="text" class="form-control" id="titulocortesia"  value="<?=$funcionario['TituloCortesia']?>"/>
    </div>
    <div class="form-group col-md-4">
      <label for="datanascimento">Data de Nascimento</label>
      <input name="datanascimento" type="text" class="form-control" id="datanascimento" value="<?=$funcionario['DataNac']?>"/>
    </div>
    <div class="form-group col-md-4">
      <label for="dataadmissao">Data de Admissão</label>
      <input name="dataadmissao" type="text" class="form-control" id="dataadmissao" value="<?=$funcionario['DataAdmissao']?>"/>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="endereco">Atualizar Endereço</label>
      <input name="endereco" type="text" class="form-control" id="endereco"  value="<?=$funcionario['Endereco']?>"/>
    </div>
    <div class="form-group col-md-4">
      <label for="cidade">Atualizar Cidade</label>
      <input name="cidade" type="text" class="form-control" id="cidade" value="<?=$funcionario['Cidade']?>"/>
    </div>
    <div class="form-group col-md-4">
      <label for="regiao">Atualizar Região</label>
      <input name="regiao" type="text" class="form-control" id="regiao" value="<?=$funcionario['Regiao']?>"/>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="cep">Atualizar CEP</label>
      <input name="cep" type="text" class="form-control" id="cep"  value="<?=$funcionario['Cep']?>"/>
    </div>
    <div class="form-group col-md-4">
      <label for="pais">Atualizar Pais</label>
      <input name="pais" type="text" class="form-control" id="pais" value="<?=$funcionario['Pais']?>"/>
    </div>
    <div class="form-group col-md-4">
      <label for="telefone">Atualizar Telefone</label>
      <input name="telefone" type="tel" class="form-control" id="telefone" value="<?=$funcionario['TelefoneResidencial']?>"/>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="extensao">Atualizar Extensão</label>
      <input name="extensao" type="text" class="form-control" id="extensao"  value="<?=$funcionario['Extensao']?>" maxlength="4"/>
    </div>
    <div class="form-group col-md-4">
      <label for="notas">Atualizar Notas</label>
      <input name="notas" type="text" class="form-control" id="notas" value="<?=$funcionario['Notas']?>"/>
    </div>
  </div>

    <button type="submit" class="btn btn-warning">Atualizar</button>
   <button type="reset" class="btn btn-warning">Apagar</button>

</form>
