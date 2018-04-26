<?php include_once("cabecalho.php"); ?>


<div class="alert alert-success col-md-7" role="alert">
  Operação Concluída com Sucesso!
</div>
<div class="alert alert-info col-md-5" role="alert">
  <strong>Redirecionando Para o Início</strong>
</div>


<?php
	header("refresh:2; url=index.php");
?>