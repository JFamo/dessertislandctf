<?php

function validate($data){
	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	$data = str_replace('\\', '', $data);
  	$data = str_replace('/', '', $data);
  	$data = str_replace("'", '', $data);
  	$data = str_replace(";", '', $data);
  	$data = str_replace("(", '', $data);
  	$data = str_replace(")", '', $data);
  	return $data;
}

if(isset($_POST['flag']) and isset($_POST['solver'])){
	$flag = $_POST['flag'];
	$solver = $_POST['solver'];
	$flag = validate($flag);
	$fid = "j9h29my23sql30bsud98xampp21c328nc89";
	$solver = validate($solver);
	
	require('php/connect.php');
	
	$query= "SELECT value FROM flags WHERE id='$fid'";
	$result = mysqli_query($link, $query);
	if (!$result){
		die('Error: ' . mysqli_error($link));
	}
	$count = mysqli_num_rows($result);
	if($count == 1){
		list($flagValue) = mysqli_fetch_array($result);
		if($flagValue == $flag){
			$query2 = "UPDATE flags SET solvers = CONCAT(solvers, ' $solver') WHERE id='$fid'";
			$result2 = mysqli_query($link, $query2);
			if (!$result2){
				die('Error: ' . mysqli_error($link));
			}
			echo "<nav><h1>Correct Flag!</h1><div id='links'><a href='js91829j0d2018pi2931415jsdaio.php'>Next Challenge</a></nav>";
		}
		else{
			echo "<nav><h1>Incorrect Flag!</h1></nav>";
		}
	}
	else{
		echo "<nav><h1>No Tampering With The Game Itself!</h1></nav>";
	}
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>TheDessertIsland</title>
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Source+Sans+Pro" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<a id='top' class='jump'></a>
		<header>
			<h1>A Structured Meal</h1>
		</header>
		<main>
			<h2><i class="fa fa-birthday-cake"></i> CHALLENGE 4 / 10</h2>
			<p>
				Searching for more structure in my life, I finally followed the exxamples and connected to the world of MySQL. Suddenly, storing all my valuable desserts acquired on this island became infinitely easier. You should try it.
				<a href="https://drive.google.com/file/d/1WRLvwrjH1zaRYy0P822qwOWGTtTyj9mQ/view?usp=sharing" target="_blank"><i class="fa fa-file"></i></a>
			</p>
			<center>
			<form method="POST" class="flagform">
				<p>TSA{<input type="text" maxlength="100" name="flag" placeholder="Flag...">}</p>
				<input type="text" maxlength="15" name="solver" placeholder="Your Name...">
				<input type="submit" class="pinkback" value="Submit">
			</form>
			</center>
		</main>
	</body>
	<footer>
		<span><a class="styledlink" href="https://github.com/Megastardaboss">Joshua Famous</a></span>
		<span>2018</span>
	</footer>
</html>
