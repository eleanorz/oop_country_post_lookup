<?php 
	require("connection.php");
	session_start();
	/**
	* Prints out facts about a company
	*/
	class Process
	{
		
		function __construct()
		{
			echo "hello";
			die();
			header("Location: index.php");
		}
	}

	$country1=new countryInfo();



?>