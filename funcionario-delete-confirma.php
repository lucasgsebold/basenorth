<?php include_once("cabecalho.php"); 
      include_once("conexao.php"); 
      include_once("database.php"); 

        $conexao = new BancoDeDados('localhost', 'root', '', 'northwind');
        $funcionariosDto = new FuncionariosDto($conexao);

        $id = $_POST["id"];
        $funcionario = $funcionarioDto->buscaFuncionario($id);
?>
Você deseja realmente excluir o produto listado abaixo?
<br />
<form action="funcionario-delete.php" method="post">
<input type="hidden" name="IDFuncionario" value="<?$funcionario['IDFuncionario']?>"/>
<br/>
Nome:<?=$funcionario["nome"]?><br/>
Sobrenome:<?=$funcionario["sobrenome"]?><br/>
Titulo:<?=$funcionario["titulo"]?><br/>
<input type="submit" name="confirma" value="Confirmar"/>
</form>
<?php include("cabecalho.php");

?>