<?php

require_once 'autoload.php';
	/**
	* 
	*/
	class Usuario extends TTable{
		
		private $idusuario;
		private $nome;
		private $email;
		private $senha;


		public function getObject()
		{
			return get_object_vars($this);
		}
		public function getPK()
		{
			return $this->getIdusuario();
		}
		public function getNome(): String{
			return $this->nome;
		}
		public function getIdusuario(): String{
			return $this->idusuario;
		}
		public function getEmail(): String{
			return $this->email;
		}
		public function getSenha(): String{
			return $this->senha;
		}
		public function setNome($nome){
			$this->nome = $nome;
		}
		public function setIdusuario($idusuario){
			$this->idusuario = $idusuario;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function setSenha($senha){
			$this->senha = $senha;
		}
	}
?>