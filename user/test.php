<?php  
<<<<<<< HEAD
	
	session_start();
	if($_SESSION['user']=="")
	{
		header('Location:../index.php');
	}

?>

<?php  

		require "connectdb.php";
		mysql_select_db("db_tow2015");
=======

		require "connectdb.php";
		mysql_select_db("db_b130727cs");
>>>>>>> 1ee566170dc809dbd6e197bd9cac57c1d6740b3f
		$sql = "SELECT * FROM TUX_QUESTIONS;";
		$query = mysql_query($sql,$mysql_conn);
		if(!$query)
		{
			die("Error in getting questions...Try again later...".mysql_error());
		}
		$row = mysql_fetch_assoc($query);
		while($row = mysql_fetch_assoc($query))
		{
			echo $row['QNO']; echo "<br>";
			echo $row['QUESTION'];
		}		

	?>