<?php
    class BancoDeDados{
        private $conexao;
        public function __construct($host, $user, $pass, $base){
            $this->conexao = mysqli_connect($host, $user, $pass, $base);
        }
        public function getConexao(){
            return $this->conexao;
        }
    }
