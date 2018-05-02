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


		public function alteraFuncionario($id, $nome, $sobrenome, $titulo) {
			$sql = "UPDATE funcionarios SET Nome ='{$nome}', Sobrenome ='{$sobrenome}', Titulo='{$titulo}' WHERE IDFuncionario = {$id}";
			return mysqli_query($this->database->getConexao(),$sql);
		}

	//----------------------------------------------------------------------------
		public function buscaFuncionario($id) {
			$sql = "SELECT IDFuncionario, Sobrenome, Nome, Titulo FROM funcionarios WHERE IDFuncionario = {$id}";
			$resultado = mysqli_query($this->database->getConexao(), $sql);
			return mysqli_fetch_assoc($resultado);
		}


	//----------------------------------------------------------------------------
		//função para remover produtos do banco de dados
		public function removeFuncionario($id) {
			$sql = "DELETE * from funcionarios where IDFuncionario = {$id}";
			mysqli_query($this->database->getConexao(), $sql);
		}

	//----------------------------------------------------------------------------
		//função para inserir produtos no banco de dados
		public function insereFuncionario($idfuncionario, $sobrenome, $nome, $titulo){

			$sql = "INSERT INTO funcionarios(IDFuncionario,Sobrenome,Nome,Titulo) VALUES ('$idfuncionario','$sobrenome','$nome','$titulo')";
			return mysqli_query($this->database->getConexao(),$sql);
		}
	}
?>
