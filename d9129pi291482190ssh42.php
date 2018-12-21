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
	$fid = "d9129pi291482190ssh42";
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
			echo "<nav><h1>Correct Flag!</h1><div id='links'><a href='ema231490n340e213r32.php'>Next Challenge</a></nav>";
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
		<link href="https://www.youtube.com/watch?v=WtS6HROl9Rs">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<a id='top' class='jump'></a>
		<header>
			<h1>I Baked You A Pie</h1>
		</header>
		<main>
			<h2><i class="fa fa-birthday-cake"></i> CHALLENGE 6 / 10</h2>
			<p>
				It goes without saying that the one kind of pie you desire more than any other is raspberry. U have absolutely nix in life without it. So, naturally, your first step should be some sort of secure remote login. To the pi.

				<!-- You remember your roots! 68.80.238.29 -->
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
		<span><script>	console.log("cakepop"); </script><a class="styledlink" href="https://github.com/Megastardaboss/aCoolDessertSSH">Joshua Famous</a></span>
		<span>2018</span>
	</footer>
</html>
