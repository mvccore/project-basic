<?php

class App_Models_Base extends MvcCore_Model
{
	public static function GetAllDbTables () {
		$dbName = self::GetCfg()->dbname;
		
		$select = self::GetDb()->prepare("
			SELECT 
				TABLE_NAME as TableName
			FROM 
				information_schema.TABLES 
			WHERE 
				TABLE_SCHEMA = :dbName
		");
		$select->execute(array('dbName' => $dbName));
		
		$rawResult = $select->fetchAll(PDO::FETCH_ASSOC);
		
		$result = array();
		foreach ($rawResult as $item) $result[] = $item['TableName'];
		return $result;
	}
}