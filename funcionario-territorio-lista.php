<?php
    include_once("cabecalho.php");
    include_once("conexao.php");
    include_once("database.php");

    $conexao = new BancoDeDados("localhost","root","","northwind");
    $funcionariosDto = new FuncionariosDto($conexao);
?>

    <table class="table table-striped table-bordered">
        <tr>
            <td>ID Funcionário</td>
            <td>Nome Funcionário</td>
            <td>ID Território</td>
            <td>Nome Território</td>
            <td>Açoes</td>
        </tr>
        <?php
            $funcionarioterritorios = $funcionariosDto->listaFuncionarioTerritorios();
            foreach ($funcionarioterritorios as $funcionarioterritorio) :
        ?>

            <tr>
                <td><?=$funcionarioterritorio["IDFuncionario"]?></td>
        <?php
          $idf=$funcionarioterritorio["IDFuncionario"];
               $funcionarios = $funcionariosDto->listaFuncionarios2($idf);
               foreach ($funcionarios as $funcionario):
        ?>
                <td><?=$funcionario["Nome"]?></td>
        <?php
              endforeach
        ?>



                <td><?=$funcionarioterritorio["IDTerritorio"]?></td>
        <?php
            $id=$funcionarioterritorio["IDTerritorio"];
            $territorios = $funcionariosDto->listaTerritorios2($id);
            foreach ($territorios as $territorio):
        ?>
                <td><?=$territorio["DescricaoTerritorio"]?></td>
              <?php
                  endforeach
              ?>
                <td>
                  <form action = "ft-delete-confirma.php" method="post">
                      <input type="hidden" name="IDTerritorio" value="<?=$funcionarioterritorio['IDTerritorio']?>"/>
                      <input type="hidden" name="IDFuncionario"  value="<?=$funcionarioterritorio['IDFuncionario']?>"/>
                      <button class="btn btn-warning">Remover</button>
                  </form>
                </td>
              </tr>
        <?php
            endforeach
        ?>
    </table>
