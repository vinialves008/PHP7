<?php 


/**
* 
*/
class CrudController extends Controller
{
	public function select($table, $id)
		{
			$crudSql = new CrudSql();
			$res = $crudSql->select($table->getFieldsName(), $table->getTableName(), $table->getNamekey() ,$id);
			//json_encode($res);
			if (count($res)>0) {
				$table = $table->newTable($res[0]);
			}
			//echo $table;
		return $table;
		}
		public function selects($table)
		{
				$crudSql = new CrudSql();
				$res = $crudSql->selects($table->getFieldsName(), $table->getTableName());
				//echo json_encode($res);
				$tables = array();

				if (count($res)>0) {
					foreach ($res as $key => $value) {
						array_push($tables, $value);
					}	
				}
		return $tables;
		}
}

// $ControllerUsuario = new ControllerUsuario();
	// $usuario = new Usuario();
	// $users = $ControllerUsuario->select($usuario,2);

	// echo $users;
?>