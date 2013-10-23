<!-- Create a page that displays information per country. This should be done in OOP.Create a class Country to be able to extract records from the database. Use the world database attached at the Handouts section.

Important Guidelines

Make sure you have process.php but in it create a class called Process that handles all the requests and prints out the necessary data in json. You'll most likely have to create an instance of this class and invoke a method using this instance.
Have the codes connect to the database but in connection.php, create a new class called Database that connects to the database. You can have Process class either extend the Database class or have it create a new instance of Database class for Process Class to use.
Except the Process class, avoid any methods in your classes that generate any html. Instead of having methods in your classes generate html output, just return information/arrays for your codes (index.php or whatever that renders the html) to use that data and render the data as html.
Use Ajax for this assignment (if possible)
TROUBLESHOOTING: If your JSON encoded data is not working it is almost certainly because the MySQL character set for this particular database isn't UTF8. This is because characters from different nationalities sometimes use a different character set. The fix is simple. In your database page, after the $db_connection variable is declared, just insert the line.

       mysql_query('SET CHARACTER SET utf8');
This will allow all the data you query and return from the database to be nicely formatted as UTF8! -->

<?php 
	session_start();
	require("connection.php");
	$query_for_dropdown="SELECT * FROM country ORDER by LocalName ASC;";

?>

<html>
	<head>
		<title>World Factz!</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

		<script type="text/javascript">
		$(document).ready(function(){
		});
		</script>
	</head>
	<body>

		<?php 

		$countries=fetch_all($query_for_dropdown);

		echo "<form action='process.php' method='post'>
			<select style='width:75px' name='dropdown'>";

		foreach ($countries as $key => $value) {
			echo "<option value='".$value['Code']."'>".$value['Name']."</option>";
		}
		echo "</select>
			<input type = 'submit' value = 'checkInfo'>
		</form>";
		

		// 	/**
		// 	 * Class retrieves information from a database about each country
		// 	 */
		// 	 class Country
		// 	 {
			 	
		// 	 	function __construct(argument)
		// 	 	{
		// 	 		# code...
		// 	 	}
		// 	 }

		?>

	</body>
</html>