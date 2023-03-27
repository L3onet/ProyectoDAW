<?php

class Database{
	public static function connect(){
		$db = new mysqli('localhost', 'sac', '7ekUhN[yGLULTO]6', 'sac');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}

