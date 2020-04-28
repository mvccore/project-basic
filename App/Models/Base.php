<?php

namespace App\Models;

class Base extends \MvcCore\Model {

	/**
	 * System config connection index.
	 * @var int
	 */
	protected static $connectionName = 0;

	public static function GetAllDbTables ()
	{
		$dbName = self::GetConfig()->database;

		$select = self::GetConnection()->prepare("
			SELECT
				TABLE_NAME as TableName
			FROM
				information_schema.TABLES
			WHERE
				TABLE_SCHEMA = :dbName
		");
		$select->execute([':dbName' => $dbName]);

		$rawResult = $select->fetchAll(\PDO::FETCH_ASSOC);
		
		$result = [];
		foreach ($rawResult as $item)
			$result[] = $item['TableName'];

		return $result;
	}
}
