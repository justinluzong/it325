<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<style>body{font-family: 'Roboto', sans-serif;}</style>
	<link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">
	<title>Random Password Generator | Justin Luzong</title>
</head>

<body>
<header role="banner">
	<body background="images/backgrounds/playstation-pattern.png">
	</br>
	<h1 align="center">Random Password Generator</h1>
</header>

<main role="main">
</br>
<form method="POST" align="center">
	<center><input type="submit" value="Generate Password" name="submit">
	</br></br>
	<?php
		if(isset($_POST["submit"])){
			$charset = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
			$generated_password = substr(str_shuffle($charset),0,10);
		}
		if(isset($generated_password)){
			echo '<center>'.$generated_password.'</center>';
		}
	?>
</form>
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