<<<<<<< HEAD
<?php  
	
	session_start();
	if($_SESSION['user']=="")
	{
		header('Location:../index.php');
	}

?>

=======
>>>>>>> 1ee566170dc809dbd6e197bd9cac57c1d6740b3f
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>USER</title>
	<meta name="author" content="AZHAR" />
	<!-- Feather Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/feather/style.css">
	<!-- General demo styles & header -->
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<!-- Component styles -->
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/mods.css">
	<link rel="stylesheet" type="text/css" href="user.css">
	<script type="text/javascript" src="../admin/jquery-2.1.4.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
</head>

<body>

	<?php  

		session_start();

		$currentuser = $_SESSION['user'];

		if($_SESSION['user']=='')
		{
			header("Location:index.php");
		}

<<<<<<< HEAD
		echo "<div class='head'>WELCOME &nbsp; <span class='username'>" . $currentuser . "</span></div>";

		require "connectdb.php";
		mysql_select_db("db_tow2015");
=======
		echo "<div class='head'>WELCOME   <span class='username'>" . $currentuser . "</span></div>";

		//UPDATE  `db_b130727cs`.`TUX_PARTICIPANTS` SET  `CORRECTANS` =  '00' WHERE  `TUX_PARTICIPANTS`.`SNO` =2;
		
		require "connectdb.php";
		mysql_select_db("db_b130727cs");
>>>>>>> 1ee566170dc809dbd6e197bd9cac57c1d6740b3f

		$sql = "UPDATE TUX_PARTICIPANTS SET CORRECTANS = '99999999999999999999999999999999999999999999999999' WHERE TID = '$currentuser';";
		$query = mysql_query($sql,$mysql_conn);
		if(!$query)
		{
			echo "ERROR";
		}

		$sql = "UPDATE TUX_PARTICIPANTS SET RESULT = 0 WHERE TID = '$currentuser';";
		$query = mysql_query($sql,$mysql_conn);
		if(!$query)
		{
			echo "ERROR";
		}

		$i=1;
		require "connectdb.php";
<<<<<<< HEAD
		mysql_select_db("db_tow2015");
=======
		mysql_select_db("db_b130727cs");
>>>>>>> 1ee566170dc809dbd6e197bd9cac57c1d6740b3f
		$sql = "SELECT * FROM TUX_QUESTIONS ORDER BY QNO;";
		$query = mysql_query($sql,$mysql_conn);
		if(!$query)
		{
			die("Error in getting questions...Try again later...".mysql_error());
		}
		//$row = mysql_fetch_array($query);

		echo '<div class="container">';
		echo '<section class="slider">';
		
			while($row = mysql_fetch_assoc($query))
			{
				if($i==1)
				{
					echo '<div class="slide slide--current" data-content="content-' . $i . '">';
<<<<<<< HEAD
					echo '<h2 class="slide__title"> Question - ' . $row['QNO'] . '</h2>';
					echo '<div class="slide__mover">';
					echo '<div class="zoomer flex-center" style="display: list-item">';

						echo "<div class='qstatement'>";
						echo '<h2 class="slide__title' . $i . '">' . $row['QUESTION'] . '</h2><br>';
						echo "</div>";

						echo '<p class="options"> <b>A)</b> ' . $row['OPTA'] . '</p><br>';
						echo '<p class="options"> <b>B)</b> ' . $row['OPTB'] . '</p><br>';
						echo '<p class="options"> <b>C)</b> ' . $row['OPTC'] . '</p><br>';
						echo '<p class="options"> <b>D)</b> ' . $row['OPTD'] . '</p><br>';
						echo '<form id="formid' . $i . '" name="formname' . $i . '" class="queform">';
						echo '<center>ANSWER &nbsp; <select class="selectans" id="forcolor' . $i . '" name="question' . $i . '" placeholder="ANSWER' . $i . '"><br>';
=======
					echo '<h2 class="slide__title"> Question Number - ' . $row['QNO'] . '</h2>';
					echo '<div class="slide__mover">';
					echo '<div class="zoomer flex-center" style="display: list-item">';

						echo '<h2 class="slide__title"> QUESTION - STATEMENT : ' . $row['QUESTION'] . '</h2><br>';
						echo '<p class="options"> OPT - A :' . $row['OPTA'] . '</p><br>';
						echo '<p class="options"> OPT - B :' . $row['OPTB'] . '</p><br>';
						echo '<p class="options"> OPT - C :' . $row['OPTC'] . '</p><br>';
						echo '<p class="options"> OPT - D :' . $row['OPTD'] . '</p><br>';
						echo '<form id="formid' . $i . '" name="formname' . $i . '" class="queform">';
						echo '<select class="selectans" id="forcolor' . $i . '" name="question' . $i . '" placeholder="ANSWER' . $i . '"><br>';
>>>>>>> 1ee566170dc809dbd6e197bd9cac57c1d6740b3f
						echo '<option value="A">A</option><br>';
						echo '<option value="B">B</option><br>';
						echo '<option value="C">C</option><br>';
						echo '<option value="D">D</option><br>';
						echo '</select><br><br>';
<<<<<<< HEAD
						echo '<input type="submit" name="submitname' . $i . '" id="' . $row['QNO'] . '" value="SUBMIT THIS ANSWER" class="submitans"></center>';
=======
						echo '<input type="submit" name="submitname' . $i . '" id="' . $row['QNO'] . '" value="SUBMIT" class="submitans">';
>>>>>>> 1ee566170dc809dbd6e197bd9cac57c1d6740b3f
						echo '</form>';

					echo '</div></div></div>';
				}
				else
				{
					echo '<div class="slide" data-content="content-' . $i . '">';
<<<<<<< HEAD
					echo '<h2 class="slide__title"> QUESTION - ' . $row['QNO'] . '</h2>';
					echo '<div class="slide__mover">';
					echo '<div class="zoomer flex-center" style="display: list-item">';

						echo "<div class='qstatement'>";
						echo '<h2 class="slide__title' . $i . '">' . $row['QUESTION'] . '</h2><br>';
						echo "</div>";

						echo '<p class="options"> <b>A)</b> ' . $row['OPTA'] . '</p><br>';
						echo '<p class="options"> <b>B)</b> ' . $row['OPTB'] . '</p><br>';
						echo '<p class="options"> <b>C)</b> ' . $row['OPTC'] . '</p><br>';
						echo '<p class="options"> <b>D)</b> ' . $row['OPTD'] . '</p><br>';
						echo '<form id="formid' . $i . '" name="formname' . $i . '" class="queform">';
						echo '<center>ANSWER &nbsp; <select class="selectans" id="forcolor' . $i . '" name="question' . $i . '" placeholder="ANSWER' . $i . '"><br>';
=======
					echo '<h2 class="slide__title"> QUESTION NUMBER - ' . $row['QNO'] . '</h2>';
					echo '<div class="slide__mover">';
					echo '<div class="zoomer flex-center" style="display: list-item">';

						echo '<h2 class="slide__title"> QUESTION - STATEMENT : ' . $row['QUESTION'] . '</h2><br>';
						echo '<p class="options"> OPT - A :' . $row['OPTA'] . '</p><br>';
						echo '<p class="options"> OPT - B :' . $row['OPTB'] . '</p><br>';
						echo '<p class="options"> OPT - C :' . $row['OPTC'] . '</p><br>';
						echo '<p class="options"> OPT - D :' . $row['OPTD'] . '</p><br>';
						echo '<form id="formid' . $i . '" name="formname' . $i . '" class="queform">';
						echo '<select class="selectans" id="forcolor' . $i . '" name="question' . $i . '" placeholder="ANSWER' . $i . '"><br>';
>>>>>>> 1ee566170dc809dbd6e197bd9cac57c1d6740b3f
						echo '<option value="A">A</option><br>';
						echo '<option value="B">B</option><br>';
						echo '<option value="C">C</option><br>';
						echo '<option value="D">D</option><br>';
						echo '</select><br><br>';
<<<<<<< HEAD
						echo '<input type="submit" name="submitname' . $i . '" id="' . $row['QNO'] . '" value="SUBMIT THIS ANSWER" class="submitans"></center>';
=======
						echo '<input type="submit" name="submitname' . $i . '" id="' . $row['QNO'] . '" value="SUBMIT" class="submitans">';
>>>>>>> 1ee566170dc809dbd6e197bd9cac57c1d6740b3f
						echo '</form>';

					echo '</div></div></div>';
				}
				$i=$i+1;
			}
<<<<<<< HEAD
=======

			//last div for submit button

			echo '<div class="slide" data-content="content-' . $i . '">';
			//echo '<h2 class="slide__title"> QUESTION NUMBER - ' . $row['QNO'] . '</h2>';
			echo '<div class="slide__mover">';
			echo '<div class="zoomer flex-center" style="display: list-item">';

				echo '<form action="result.php" method="POST">';
				echo '<input type="submit" value="FINISH TEST">';
				echo "</form>";

			echo '</div></div></div>';
>>>>>>> 1ee566170dc809dbd6e197bd9cac57c1d6740b3f
	
	?>
	

	<script type="text/javascript">

		$('.queform').submit(function(e){
		    e.preventDefault();
		});

		$(".submitans").click(function(){

			var questionno = $(this).attr('id');
			var questionans = $("#forcolor"+questionno+" option:selected").attr('value'); 
			//var questionans = $(this).parent().siblings().find(".queform").attr("name");
			//console.log(questionno);
			//console.log(questionans);

<<<<<<< HEAD
			$("#list"+questionno+" a").css("color","lime");
			$("#list"+questionno+" a").css("font-weight","bold");
=======
			$("#list"+questionno+" a").css("color","green");
>>>>>>> 1ee566170dc809dbd6e197bd9cac57c1d6740b3f

			$.ajax({
				type: "POST",
				url: "checkans.php",
				data: 
				{ 
					'questionno' : questionno,
					'selectedans' : questionans
				}

				}).done(function(data)
				{
					//alert("success");
					var result = data;
					//console.log(result);
					//alert(result);
				});
		})

	</script>
			
	<nav class="slider__nav">
		<button id="moveleft" class="button button--nav-prev"><i class="icon icon--arrow-left"></i><span class="text-hidden"></span></button>
		<button style="display : none" class="button button--zoom"><i class="icon icon--zoom"></i><span class="text-hidden">View details</span></button>
		<button id="moveright" class="button button--nav-next"><i class="icon icon--arrow-right"></i><span class="text-hidden"></span></button>
	</nav>

	</section>

	<?php  

		echo '<section class="content">';

		while($i>0)
		{
			echo '<div class="content__item" id="content-' . $i . '">';
			echo '<div class="content__item-inner">';
			echo '</div></div>';
			$i=$i-1;
		}

	?>			
		
			<button class="button button--close"><i class="icon icon--circle-cross"></i><span class="text-hidden">Close content</span></button>
		</section>

	</div>

<<<<<<< HEAD
	<div id="sidemenu1">
=======
	<div id="sidemenu">
>>>>>>> 1ee566170dc809dbd6e197bd9cac57c1d6740b3f
			
		<ul>
			<?php 

				$i=1;

				$sql = "SELECT QNO FROM TUX_QUESTIONS ORDER BY QNO;";
				$query = mysql_query($sql,$mysql_conn);
				if(!$query)
				{
					die("Error in getting questions...Try again later...".mysql_error());
				}	
				while($row = mysql_fetch_assoc($query))
				{
					echo '<li id="list' . $i . '"> <a href="#0">  Q : ' . $row['QNO'] . '</a>  </li>';
					$i=$i+1;
<<<<<<< HEAD
					if($i==16)
					{
						break;
					}
				}

			?>
		</ul>

	</div>	

	<div id="sidemenu2">
			
		<ul>
			<?php 

				$i=1;

				$sql = "SELECT QNO FROM TUX_QUESTIONS ORDER BY QNO;";
				$query = mysql_query($sql,$mysql_conn);
				if(!$query)
				{
					die("Error in getting questions...Try again later...".mysql_error());
				}	
				while($row = mysql_fetch_assoc($query))
				{
					if($i>=16)
					{
						echo '<li id="list' . $i . '"> <a href="#0">  Q : ' . $row['QNO'] . '</a>  </li>';
					}
					$i=$i+1;
				}

				//echo '<li id="list' . $i . '"> <a href="#0"> SUBMIT </a>  </li>';
=======
				}

				echo '<li id="list' . $i . '"> <a href="#0"> SUBMIT </a>  </li>';
>>>>>>> 1ee566170dc809dbd6e197bd9cac57c1d6740b3f

			?>
		</ul>

	</div>	

<<<<<<< HEAD
	<div id="sidemenu3">

		<form action="round2rules.php" method="POST">
			<input type="submit" value="SUBMIT ALL AND PROCEED TO PART B">
		</form>
  	
  	</div>

=======
>>>>>>> 1ee566170dc809dbd6e197bd9cac57c1d6740b3f
	<?php  

		//session_unset();
		//session_destroy();

	?>
	
	<script src="js/classie.js"></script>
	<script src="js/dynamics.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>