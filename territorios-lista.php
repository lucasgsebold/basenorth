<?php
    include_once("cabecalho.php");
    include_once("conexao.php");
    include_once("database.php");

    $conexao = new BancoDeDados("localhost","root","","northwind");
    $funcionariosDto = new FuncionariosDto($conexao);
?>

    <table class="table table-striped table-bordered">
        <tr>
            <td>ID Território</td>
            <td>Descrição</td>
            <td>ID Região</td>
            <td>Nome da Região</td>
        </tr>
        <?php
            $territorios = $funcionariosDto->listaTerritorios();
            foreach ($territorios as $territorio) :
        ?>

            <tr>
                <td><?=$territorio["IDTerritorio"]?></td>
                <td><?=$territorio["DescricaoTerritorio"]?></td>
                <td><?=$territorio["IDRegiao"]?></td>

            <?php
              $idr=$territorio["IDRegiao"];
              $regioes = $funcionariosDto->listaRegioes2($idr);
              foreach ($regioes as $regiao):
            ?>
            <td><?=$regiao["DescricaoRegiao"]?></td>
          <?php
            endforeach
          ?>
              </tr>
        <?php
            endforeach
        ?>
    </table>
