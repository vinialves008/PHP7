<?php 
require_once 'autoload.php';
/**
* 
*/
abstract class TTable implements ITable
{
		function __toString(){
			return json_encode($this->getObject());
		}
	// Retorna o nome da tabela
	public function getTableName(){
		return strtolower(get_class($this));
	}
	// Retorna o ID da tabela
	public function getTableKeyName()
	{
		return "id".$this->getTableName();
	}
	//Retorna todas as colunas do Objeto
		public function getColumnNames()
		{
			$nameColumns = $this->getColumnsArray();
			return implode(",", $nameColumns);//Retornando uma lista de colunas separadas por vígula
		}
		public function getColumnNamesNotNull(){
			$obj = $this->getObject();
			$obj = $this->OutNullArray($obj);
			return implode(",", $this->getColums($obj));
		}
		// Retorna todas as colunas do Objeto exceto ID
		public function getColumnNamesOutKey()
		{
			$nameColumns = $this->getColumnsArray();
			$key = array_search($this->getTableKeyName(), $nameColumns);// Buscando a chave do ID
			unset($nameColumns[$key]); // Excluindo o ID do array

			return implode(",", $nameColumns);// Retornando uma lista de colunas separadas por vígula sem o ID		
		}
		public function getColumnsArray()
		{
			$obj = $this->getObject();
			return $this->getColums($obj);
		}
		//Retorna todos os atributos em um array inclusive os nulos
		public function getToArrayValues()
		{
			$obj = 	$this->getObject();
			$arrayValues = array();
			foreach ($obj as $key => $value) {
				$arrayValues[":".strtoupper($key)] = $value;
			}
			return $arrayValues;
		}
		//Retorna todos os atributos em um array exceto os nulos
		public function getToArrayValuesNotNull()
		{
			$arrayValues = $this->getToArrayValues();
			$arrayValues = $this->OutNullArray($arrayValues);
			return $arrayValues;
		}
		public function getToArrayKeyValues()
		{
			$array = $this->getToArrayValues();
			$arrayValues = array();
			foreach ($array as $key => $value) {
				array_push($arrayValues, $key);
			}
			return implode(",", $arrayValues);
		}
		public function getToArrayKeyValuesNotNull()
		{
			$array = $this->getToArrayValuesNotNull();
			$arrayValues = array();
			foreach ($array as $key => $value) {
				array_push($arrayValues, $key);
			}
			return implode(",", $arrayValues);
		}
		public function OutNullArray($arrayValues)
		{
			$keys = array_keys($arrayValues, "");
			foreach ($keys as $key => $value) {
				unset($arrayValues[$value]);
			}
			return $arrayValues;
		}
		public function getColums($obj)
		{
			$nameColumns = array();
			foreach ($obj as $key => $value) {
				array_push($nameColumns, $key);
			}
			return $nameColumns;
		}
		public function getUpdateSetValuesNotNull($table)
		{
			$obj = $this->OutNullArray($this->getObject());
			unset($obj[$table->getTableKeyName()]); // Excluindo o ID do array
			$newObj = array();
			foreach ($obj as $key => $value) {
				$newObj[$key] = $key . "=:".strtoupper($key);
			}
			return implode(",", $newObj);
		}
		public function getToArrayUpdateValuesNotNull($table){
			$obj = $this->OutNullArray($this->getObject());
			unset($obj[$table->getTableKeyName()]); // Excluindo o ID do array
			$newObj = array();
			foreach ($obj as $key => $value) {
				$newObj[":".strtoupper($key)] = $value;
			}
			return $newObj;
		}
}

 ?>