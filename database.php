<?php
	class FuncionariosDto{
		private $database;

		public function __construct($conexao){
			$this->database =  $conexao;
		}

		public function listaFuncionarios() {
			$funcionarios = array();
			$sql = "SELECT * FROM funcionarios";
			$resultado = mysqli_query($this->database->getConexao(), $sql);

			while ($funcionario = mysqli_fetch_assoc($resultado)) {
				array_push($funcionarios, $funcionario);
			}
			return $funcionarios;
		}


		public function alteraFuncionario($id, $nome, $sobrenome, $titulo,$titulocortesia,$datanascimento,$dataadmissao,$endereco,$cidade,$regiao,$cep,$pais,$telefone,$extensao,$notas) {
			$sql = "UPDATE funcionarios SET Nome ='{$nome}', Sobrenome ='{$sobrenome}', Titulo='{$titulo}', TituloCortesia='{$titulocortesia}', DataNac='{$datanascimento}',DataAdmissao='{$dataadmissao}',Endereco='{$endereco}',Cidade='{$cidade}',Regiao='{$regiao}',Cep='{$cep}',Pais='{$pais}',TelefoneResidencial='{$telefone}', Extensao='{$extensao}',Notas='$notas' WHERE IDFuncionario = {$id}";
			return mysqli_query($this->database->getConexao(),$sql);
		}

	//----------------------------------------------------------------------------
		public function buscaFuncionario($id) {
			$sql = "SELECT * FROM funcionarios WHERE IDFuncionario = {$id}";
			$resultado = mysqli_query($this->database->getConexao(), $sql);
			return mysqli_fetch_assoc($resultado);
		}


	//----------------------------------------------------------------------------
		//função para remover produtos do banco de dados
		public function removeFuncionario($id) {
			$sql = "DELETE FROM `funcionarios` WHERE `funcionarios`.`IDFuncionario` = {$id}";
			mysqli_query($this->database->getConexao(), $sql);
		}

	//----------------------------------------------------------------------------
		//função para inserir produtos no banco de dados
		public function insereFuncionario($idfuncionario, $sobrenome, $nome, $titulo, $titulocortesia, $datanascimento, $dataadmissao, $endereco, $cidade, $regiao, $cep, $pais, $telefone, $extensao,$notas){

			$sql = "INSERT INTO funcionarios(IDFuncionario,Sobrenome,Nome,Titulo,TituloCortesia,DataNac,DataAdmissao,Endereco,Cidade,Regiao,Cep,Pais,TelefoneResidencial,Extensao,Notas) VALUES ('$idfuncionario','$sobrenome','$nome','$titulo','$titulocortesia','$datanascimento','$dataadmissao','$endereco','$cidade','$regiao','$cep','$pais','$telefone','$extensao','$notas')";
			return mysqli_query($this->database->getConexao(),$sql);
		}

		public function listaRegioes() {
			$regioes = array();
			$sql = "SELECT * FROM regiao";
			$resultado = mysqli_query($this->database->getConexao(), $sql);

			while ($regiao = mysqli_fetch_assoc($resultado)) {
				array_push($regioes, $regiao);
			}
			return $regioes;
		}

		public function listaTerritorios() {
			$territorios = array();
			$sql = "SELECT * FROM territorios";
			$resultado = mysqli_query($this->database->getConexao(), $sql);

			while ($territorio = mysqli_fetch_assoc($resultado)) {
				array_push($territorios, $territorio);
			}
			return $territorios;
		}

		public function listaFuncionarioTerritorios() {
			$funcionarioterritorios = array();
			$sql = "SELECT * FROM funcionarios_territorios tb INNER JOIN territorios t ON tb.IDTerritorio = t.IDTerritorio INNER JOIN funcionarios f ON tb.IDFuncionario = f.IDFuncionario ";
			$resultado = mysqli_query($this->database->getConexao(), $sql);

			while ($funcionarioterritorio = mysqli_fetch_assoc($resultado)) {
				array_push($funcionarioterritorios, $funcionarioterritorio);
			}
			return $funcionarioterritorios;
		}

		public function listaTerritorios2($id) {
			$territorios = array();
			$sql = "SELECT * FROM territorios where IDTerritorio = {$id}";
			$resultado = mysqli_query($this->database->getConexao(), $sql);

			while ($territorio = mysqli_fetch_assoc($resultado)) {
				array_push($territorios, $territorio);
			}
			return $territorios;
		}

		public function listaFuncionarios2($idf) {
			$funcionarios = array();
			$sql = "SELECT * FROM funcionarios where IDFuncionario = {$idf}";
			$resultado = mysqli_query($this->database->getConexao(), $sql);

			while ($funcionario = mysqli_fetch_assoc($resultado)) {
				array_push($funcionarios, $funcionario);
			}
			return $funcionarios;
		}

		public function listaRegioes2($idr) {
			$regioes = array();
			$sql = "SELECT * FROM regiao where IDRegiao = {$idr}";
			$resultado = mysqli_query($this->database->getConexao(), $sql);

			while ($regiao = mysqli_fetch_assoc($resultado)) {
				array_push($regioes, $regiao);
			}
			return $regioes;
		}

		public function buscaRegiao1() {
			$sql = "SELECT DescricaoRegiao FROM regiao Where IDRegiao = 1";
			$resultado = mysqli_query($this->database->getConexao(), $sql);
			return mysqli_fetch_assoc($resultado);
		}

		public function buscaRegiao2() {
			$sql = "SELECT DescricaoRegiao FROM regiao Where IDRegiao = 2";
			$resultado = mysqli_query($this->database->getConexao(), $sql);
			return mysqli_fetch_assoc($resultado);
		}

		public function buscaRegiao3() {
			$sql = "SELECT DescricaoRegiao FROM regiao Where IDRegiao = 3";
			$resultado = mysqli_query($this->database->getConexao(), $sql);
			return mysqli_fetch_assoc($resultado);
		}

		public function buscaRegiao4() {
			$sql = "SELECT DescricaoRegiao FROM regiao Where IDRegiao = 4";
			$resultado = mysqli_query($this->database->getConexao(), $sql);
			return mysqli_fetch_assoc($resultado);
		}

		public function insereFuncionarioTerritorio($idfuncionario, $idterritorio){

			$sql = "INSERT INTO funcionarios_territorios(IDFuncionario,IDTerritorio) VALUES ('$idfuncionario','$idterritorio')";
			return mysqli_query($this->database->getConexao(),$sql);
		}

		public function buscaFuncionarioTerritorio($idf, $idt) {
			$sql = "SELECT * FROM funcionarios_territorios Where IDFuncionario = {$idf} and IDTerritorio = {$idt}";
			$resultado = mysqli_query($this->database->getConexao(), $sql);
			return mysqli_fetch_assoc($resultado);
		}

		public function removeFuncionarioTerritorio($idf,$idt) {
			$sql = "DELETE FROM funcionarios_territorios WHERE IDFuncionario = {$idf} and IDTerritorio = {$idt}";
			mysqli_query($this->database->getConexao(), $sql);
		}

		public function insereRegiao($idregiao,$nome){
			$sql = "INSERT INTO regiao(IDRegiao,DescricaoRegiao) VALUES ('$idregiao','$nome')";
			return mysqli_query($this->database->getConexao(),$sql);
		}

		public function buscaRegiao($id) {
			$sql = "SELECT * FROM regiao WHERE IDRegiao = {$id}";
			$resultado = mysqli_query($this->database->getConexao(), $sql);
			return mysqli_fetch_assoc($resultado);
		}
		public function removeRegiao($id) {
			$sql = "DELETE FROM `regiao` WHERE `regiao`.`IDRegiao` = {$id}";
			mysqli_query($this->database->getConexao(), $sql);
		}

	}
?>
