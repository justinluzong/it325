<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<style>body{font-family: 'Roboto', sans-serif;}</style>
	<link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">
	<title>Loop Table | Justin Luzong</title>
</head>

<body>
<header role="banner">
	<body background="images/backgrounds/playstation-pattern.png">
	</br>
	<h1 align="center">Loop Table</h1>
</header>

<main role="main">
</br>

<?php
$cols = 13;
$rows = 13;

echo "<center><table border=\"1\">";
	echo'<th> </th>';
	for($h = 1; $h < $cols; $h++){
		echo'<th bgcolor="red">'.$h.'</th>';
	}
	for($r = 1; $r < $rows; $r++){
		echo'<tr>';
		echo'<td bgcolor="red"><center><b>'.$r.'</b></center></td>';
			for($c = 1; $c < $cols; $c++)
				echo'<td><center>'.$c*$r.'</center></td>';
				echo'</tr>';
	}
echo"</table></center>";
?>

	</br></br>
	<center><p><a href="assignment6.html">Back to Assignment 6</a></p></center>
</main>

<footer role="contentinfo">
	</br>
	<center><a href="index.html">Home Page</a></center>
	</br>
	<center><small>&copy; 2017 Justin Luzong</small></center>
	</br>
</footer>

</body>
</html>