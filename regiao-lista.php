<?php
    include_once("cabecalho.php");
    include_once("conexao.php");
    include_once("database.php");

    $conexao = new BancoDeDados("localhost","root","","northwind");
    $funcionariosDto = new FuncionariosDto($conexao);
?>
<div class="container">
    <table class="table table-striped table-bordered">
        <tr>
            <td>ID Região</td>
            <td>Descrição</td>
            <td>Ação</td>
        </tr>
        <?php
            $regioes = $funcionariosDto->listaRegioes();
            foreach ($regioes as $regiao) :
        ?>

            <tr>
                <td><?=$regiao["IDRegiao"]?></td>
                <td><?=$regiao["DescricaoRegiao"]?></td>

              <td>
                <form action = "regiao-delete-confirma.php" method="post">
                    <input type="hidden" name="IDRegiao" value="<?=$regiao['IDRegiao']?>"/>
                    <button class="btn btn-warning mx-1 my-1">Remover</button>
                </form>
              </td>
            </tr>
        <?php
            endforeach
        ?>
    </table>
