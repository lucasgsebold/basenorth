<?php
    include_once("cabecalho.php");
    include_once("conexao.php");
    include_once("database.php");

    $conexao = new BancoDeDados("localhost","root","","northwind");
    $funcionariosDto = new FuncionariosDto($conexao);
?>

    <table class="table table-striped table-bordered">
        <tr>
            <td>ID Região</td>
            <td>Descrição</td>
        </tr>
        <?php
            $regioes = $funcionariosDto->listaRegioes();
            foreach ($regioes as $regiao) :
        ?>

            <tr>
                <td><?=$regiao["IDRegiao"]?></td>
                <td><?=$regiao["DescricaoRegiao"]?></td>
            </tr>
        <?php
            endforeach
        ?>
    </table>
