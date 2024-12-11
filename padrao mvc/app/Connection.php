<?php

namespace App;

class Connection
{

	public static function getDb()
	{
		try {

			$conn = new \PDO(
				"pgsql:host=dpg-cnjd0k7109ks73bnovg0-a.oregon-postgres.render.com;dbname=b_invest_coin;charset=utf8",
				"user_sa",
				"eTpizNFkxoc2IY2jtUTQruSu8KlA92RB"
			);

			return $conn;
			
		} catch (\PDOException $e) {
			return "Error to connect to database";
		}
	}
}
