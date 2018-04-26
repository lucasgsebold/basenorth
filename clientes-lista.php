<?php 
    include_once("cabecalho.php");
    include_once("conexao.php");
    include_once("database.php");
?>
  
    <table class="table table-striped table-bordered">
        <tr>
            <td>Nome Da Companhia</td>
            <td>Nome do Contato</td>
            <td>Título do Contato</td>
            <td>Cidade</td>
            <td>Telefone</td>
            <td>Acões</td>
            </tr>
        <?php
            $clientes = listaClientes($conexao);
            foreach ($clientes as $cliente) :
        ?>

                <tr>
                    <td><?=$cliente["NomeCompanhia"]?></td>
                    <td><?=$cliente["NomeContato"]?></td>
                    <td><?=$cliente["TituloContato"]?></td>
                    <td><?=$cliente["Cidade"]?></td>
                    <td><?=$cliente["Telefone"]?></td>
                    
                    <td>
                        <a class="btn btn-danger my-1" href="produto-update-form.php">Update</a>
                        <a class="btn btn-danger" href="produto-delete.php">Delete</a>
                        
                    </td>
                </tr>
        <?php
            endforeach
        ?>
    </table>