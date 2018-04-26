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

                    <td>
                      <form action = "funcionario-update-form.php" method="post">
                          <input type="hidden" name="IDFuncionario"  value="<?=$funcionario['IDFuncionario']?>"/>
                          <button class="btn btn-danger">Update</button>
                    </form>

                        <form action = "funcionario-delete-confirma.php" method="post">
                            <input type="hidden" name="IDFuncionario"  value="<?= $funcionario['IDFuncionario'] ?>"/>
                            <button class="btn btn-danger">Remover</button>
                        </form>
                    </td>
                </tr>
        <?php
            endforeach
        ?>
    </table>
