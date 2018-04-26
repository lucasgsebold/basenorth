<?php 
    include_once("cabecalho.php");
    include_once("conexao.php");
    include_once("database.php");
?>



<table class="table table-striped table-bordered">
<tr>
    <td>ID Categoria</td>
    <td>Nome</td>
    <td>Descrição</td>
    <td>Acões</td>
    </tr>
<?php
    $categorias = listaCategorias($conexao);
    foreach ($categorias as $categoria) :
?>

        <tr>
            <td><?=$categoria["IDCategoria"]?></td>
            <td><?=$categoria["NomeCategoria"]?></td>
            <td><?=$categoria["Descricao"]?></td>
           
            
            <td>
                <a class="btn btn-danger" href="produto-update-form.php">Update</a>
                <a class="btn btn-danger" href="produto-delete.php">Delete</a>
                
            </td>
        </tr>
<?php
    endforeach
?>
</table>












