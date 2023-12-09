<?php

class Singleton
{

	private static  $uniqueinstance = null;

	//private Singleton();
	private function __construct()
	{
	}

	public static function getinstance($host, $dbUser, $dbPass, $dbName)
	{
		if (@self::$uniqueinstance == null) {
			// require 'connect.php';
			self::$uniqueinstance =  new mysqli($host, $dbUser, $dbPass, $dbName);
		}
		return self::$uniqueinstance;
	}
}

?>