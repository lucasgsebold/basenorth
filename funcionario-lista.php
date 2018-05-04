<?php
    include_once("cabecalho.php");
    include_once("conexao.php");
    include_once("database.php");

    $conexao = new BancoDeDados("localhost","root","","northwind");
    $funcionariosDto = new FuncionariosDto($conexao);
?>

    <table class="table table-striped table-bordered">
        <tr>
            <td>IDFuncionário</td>
            <td>Sobrenome</td>
            <td>Nome</td>
            <td>Título</td>
            <td>Título Cortesia</td>
            <td>Data Nascimento</td>
            <td>Data Admissão</td>
            <td>Endereço</td>
            <td>Cidade</td>
            <td>Região</td>
            <td>CEP</td>
            <td>Pais</td>
            <td>Telefone</td>
            <td>Foto</td>
            <td>Ações</td>
        </tr>
        <?php
            $funcionarios = $funcionariosDto->listaFuncionarios();
            foreach ($funcionarios as $funcionario) :
        ?>

            <tr>
                <td><?=$funcionario["IDFuncionario"]?></td>
                <td><?=$funcionario["Sobrenome"]?></td>
                <td><?=$funcionario["Nome"]?></td>
                <td><?=$funcionario["Titulo"]?></td>
                <td><?=$funcionario["TituloCortesia"]?></td>
                <td><?=$funcionario["DataNac"]?></td>
                <td><?=$funcionario["DataAdmissao"]?></td>
                <td><?=$funcionario["Endereco"]?></td>
                <td><?=$funcionario["Cidade"]?></td>
                <td><?=$funcionario["Regiao"]?></td>
                <td><?=$funcionario["Cep"]?></td>
                <td><?=$funcionario["Pais"]?></td>
                <td><?=$funcionario["TelefoneResidencial"]?></td>
                <td><?phpecho ?><img src="data:image/jpeg;base64<?php $funcionario['Foto'] ?>" /></td>

                <td>
                  <form action = "funcionario-update-form.php" method="post">
                      <input type="hidden" name="IDFuncionario"  value="<?=$funcionario['IDFuncionario']?>"/>
                      <button class="btn btn-warning">Atualizar</button>
                  </form>

                  <form action = "funcionario-delete-confirma.php" method="post">
                      <input type="hidden" name="IDFuncionario" value="<?=$funcionario['IDFuncionario']?>"/>
                      <button class="btn btn-warning">Remover</button>
                  </form>
                </td>
              </tr>
        <?php
            endforeach
        ?>
    </table>
