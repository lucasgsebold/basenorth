<?php 
    include_once("cabecalho.php");
    include_once("conexao.php");
    include_once("database.php");
?>


<table class="table table-striped table-bordered">
    <tr>
        <td>ID Fornecedor</td>
        <td>Companhia</td>
        <td>Nome Contato</td>
        <td>Título de Contato</td>
        <td>Cidade</td>
        <td>Telefone</td>

        <td>Ações</td>

    </tr>
    <?php
        $fornecedores = listarFornecedores($conexao);
        foreach ($fornecedores as $fornecedor):
    ?>

    <tr>
            <td><?=$fornecedor["IDFornecedor"]?></td>
            <td><?=$fornecedor["NomeCompanhia"]?></td>
            <td><?=$fornecedor["NomeContato"]?></td>
            <td><?=$fornecedor["TItuloContato"]?></td>
            <td><?=$fornecedor["Cidade"]?></td>
            <td><?=$fornecedor["Telefone"]?></td>




        <td>
            <a href="#" class="btn btn-danger my-1">Update</a>
            <a href="#" class="btn btn-danger">Delete</a>

        </td>
    </tr>

    <?php
      endforeach
    ?>

</table>
