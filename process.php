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
			if(isset($_POST['action']) AND $_POST['action'] == 'checkInfo'){
				$countrySelect=mysql_real_escape_string($_POST['option1']);
			}
			header("Location: index.php");
		}
	}

	$country1=new Process();



?>