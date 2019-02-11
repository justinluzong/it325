<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<style>body{font-family: 'Roboto', sans-serif;}</style>
	<link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">
	<title>Login Page | Justin Luzong</title>
      
      <style>
         .form-signin {
            max-width: 330px;
            margin: 0 auto;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
         }
         
         h1{
            text-align: center;
         }
      </style>
      
   </head>
	
   <body>
      
<header role="banner">
	<body background="images/backgrounds/playstation-pattern.png">
	</br>
</header>

	<h1>Login Page</h1>
	</br> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'student' && 
                  $_POST['password'] == '12345') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'student';
                  
                  $msg = 'Welcome!';
               }else {
                  $msg = 'Wrong username or password.';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post" align="center">
            <center><h4 class = "form-signin-heading"><?php echo $msg; ?></h4></center>
            <center><input type = "text" class = "form-control" 
               name = "username" placeholder = "username = student" 
               required autofocus></center></br>
            <center><input type = "password" class = "form-control"
               name = "password" placeholder = "password = 12345" required></center></br>
            <center><button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button></center>
         </form>

	</br></br>		
        <center><a href = "logout.php" tite = "Logout">Click here to clear login session.</center>
         
      </div> 
      
	</br></br></br>
	<center><p><a href="assignment6.html">Back to Assignment 6</a></p></center>

<footer role="contentinfo">
	</br>
	<center><a href="index.html">Home Page</a></center>
	</br>
	<center><small>&copy; 2017 Justin Luzong</small></center>
	</br>
</footer>

</body>
</html>