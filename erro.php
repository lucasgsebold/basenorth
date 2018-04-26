<?php  include_once("cabecalho.php");  ?>


<div class="alert alert-danger col-md-7" role="alert">
  Ooops! Algo Saiu Errado!   
</div>
<div class="alert alert-info col-md-5" role="alert">
  <strong>Redirecionando Para o Início</strong>
</div>



<?php
	header("refresh:2; url=index.php");
?>