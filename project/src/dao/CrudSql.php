<?php 

require_once 'autoload.php';

/**
* 
*/
class CrudSql extends Sql
{
	public function insert($table)
	{
		
		$q = "INSERT INTO ".$table->getTableName()."(".$table->getColumnNamesNotNull().") values(".$table->getToArrayKeyValuesNotNull().");";
		//echo $q;
		$this->query($q, $table->getToArrayValuesNotNull());

	}
	public function delete($table)
	{
		$q = "DELETE FROM ".$table->getTableName()." where ".$table->getTableKeyName()." = ".$table->getPK().";";
		$this->query($q);
	}
	public function selects($table)
	{
		$q = "SELECT ".$table->getColumnNames()." FROM ". $table->getTableName() .";";
		$res = $this->query($q);
		$ret = $res->fetchAll(PDO::FETCH_ASSOC);
		return $ret;
	}
	public function select($table)
	{
		$q = "SELECT ".$table->getColumnNames()." FROM ". $table->getTableName() ." WHERE ".$table->getTableKeyName(). " = ".$table->getPK().";";
		$res = $this->query($q);
		$ret = $res->fetchAll(PDO::FETCH_ASSOC);
		return $ret;
	}
	public function update($table)
	{
		$q = "UPDATE ".$table->getTableName() ." SET ".$table->getUpdateSetValuesNotNull($table)." WHERE ".$table->getTableKeyName(). " = ".$table->getPK().";";

		$arrayupdate = $table->getToArrayUpdateValuesNotNull($table);
		//print_r($arrayupdate);
		$this->query($q, $arrayupdate);
	}

}


?>