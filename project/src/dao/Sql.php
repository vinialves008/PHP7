<?php

/**
CREATE TABLE usuario( idusuario int AUTO_INCREMENT not null primary key, 
nome text not null, 
email text not null, 
senha text not null )
*/
class Sql extends PDO{
	
	private $conn;
	private $host = "localhost";
	private $dbname = "exemplo";
	private $user = "root";
	private $senha = "";

	function __construct(){
		$this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->senha);
	}

	private function setParams($statment, $parameters = array()){
		foreach ($parameters as $key => $value) {
			$this->setParam($statment, $key, $value);
		}
	}
	
	private function setParam($statment, $key, $value){
		$statment->bindParam($key, $value);
	}

	public function query($rawQuery, $paramms = array()){
		$stmt = $this->conn->prepare($rawQuery);
		$this->setParams($stmt, $paramms);
		$stmt->execute();

		return $stmt;
	}



}
// $dao = new sql();
// $q = "INSERT INTO usuario(nome, email, senha) values(:NOME,:EMAIL,:SENHA);";
// $params = array(':NOME' => "Bruno Sousa",':EMAIL' => "bruno.sousa@gmail.com", ':SENHA' => "15111991" );

// $dao->query($q, $params);

?>
