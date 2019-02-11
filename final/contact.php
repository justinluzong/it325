<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="/images/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/images/favicon/favicon-16x16.png" sizes="16x16">
	<title>Contact Me | Justin Luzong</title>

	<style>
	.portfolio-bg{
    		background-image: url("/images/backgrounds/portfolio-bg.jpg");
    		height: 1000px;
   		position: relative;

  		background-position: center;
    		background-repeat: no-repeat;
   		background-size: cover;
	}
	</style>

</head>

<body> 
<header role="banner">
<a href="/final/index.html"><img src="/images/final-banner.jpg" id="banner"></a>
<div class="navbar">
<ul class="nav-ul">
  <li class="nav-li"><a href="/final/index.html">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Work Experience</a>
    <div class="dropdown-content">
      <a href="/final/experience/employment.html">Employment</a>
      <a href="/final/experience/volunteer.html">Volunteer Work</a>
      <a href="/final/experience/projects.html">Other Projects</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Education</a>
    <div class="dropdown-content">
      <a href="/final/education/courses.html">Courses</a>
      <a href="/final/education/academic-work.html">Academic Work</a>
    </div>
  </li>
  <li class="nav-li"><a href="/final/skills.html">Skills</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Portfolio</a>
    <div class="dropdown-content">
      <a href="/final/portfolio/design.html">Graphic Design</a>
      <a href="/final/portfolio/photography.html">Photography</a>
      <a href="/final/portfolio/videography.html">Videography</a>
    </div>
  </li>
  <li class="nav-li"><a href="/final/awards.html">Awards</a></li>
  <li class="nav-li"><a href="https://raw.githubusercontent.com/justinluzong/it325/master/final/contact.php">Contact Me</a></li>
</ul>
</div>
</header>

<div class="portfolio-bg">
<main role="main">
	</br></br>
	<div class="header1">Contact Me</div><br/>

	<div class="main-info">

	  <form method="post" action="contact.php">


        <p>First Name: <input type="text" name="first_name" /> Last Name: <input type="text" name="last_name" /></p>
        <p>Email Address: <input type="text" name="email" size="50" /></p>
        <p>Street Address: <input type="text" name="address" size="50" /></p>
        <p>City: <input type="text" name="city" size="30" /> 
        State:           <select name="state">
            <option value=""></option>
	    <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="DC">Washington D.C.</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
          </select></p>
        <p>Zip: <input type="text" name="zip" size="10" /> Country: <input type="text" name="country" size="10" /></p>
        <p>Phone: <input type="text" name="phone" size="40" /></p>
        <p>Comments or Questions:<br />
        <textarea name="comments" rows="5" cols="50"></textarea></p>

        <p class="form-buttons">
          <input type="submit" name="Submit" value="Submit" />
          <input type="reset" name="Reset" value="Reset" />
        </p>

<?php
if($_POST){
	$date = date('Y-m-d');
	$time = date('H:i');

if(!isset($first_name)){
	$first_name = $_POST["first_name"];
}
if(!isset($last_name)){
	$last_name = $_POST["last_name"];
}
if(!isset($email)){
	$email = $_POST["email"];
}
if(!isset($address)){
	$address = $_POST["address"];
}
if(!isset($city)){
	$city = $_POST["city"];
}
if(!isset($state)){
	$state = $_POST["state"];
}
if(!isset($zip)){
	$zip = $_POST["zip"];
}
if(!isset($country)){
	$country = $_POST["country"];
}
if(!isset($phone)){
	$phone = $_POST["phone"];
}
if(!isset($comments)){
	$comments = $_POST["comments"];
}

$first_name = trim($first_name);
$last_name = trim($last_name);
$email = trim($email);
$address = trim($address);
$city = trim($city);
$state = trim($state);
$zip = trim($zip);
$country = trim($country);
$phone = trim($phone);
$comments = trim($comments);

if(empty($first_name)){
 echo "Please enter your First Name.</br>";
}
if(empty($last_name)){
 echo "Please enter your Last Name.</br>";
}
if(empty($email)){
 echo "Please enter your Email.</br>";
}
if(empty($address)){
 echo "Please enter your Address.</br>";
}
if(empty($city)){
 echo "Please enter your City.</br>";
}
if(empty($state)){
 echo "Please enter your State.</br>";
}
if(empty($zip)){
 echo "Please enter your Zip Code.</br>";
}
if(empty($country)){
 echo "Please enter your Country.</br>";
}
if(empty($phone)){
 echo "Please enter you Phone Number.</br>";
}
if(empty($comments)){
 echo "Please enter a Comment.</br>";
}
else{
		$data = "\n$date, $time\n$first_name $last_name\nEmail:$email\nPhone Number: $phone\n$address\n$city, $state $zip $country\nComment: $comments\r\n";
                $file = "entries.txt";
                $fp = fopen($file, "a") or die("Couldn't open $file for writing!");
                fwrite($fp, $data) or die("Couldn't write values to file!");
                fclose($fp);   //close the data file
                echo "Thank you for your submission!";
}
}
?>

      </form>


	</div>
</main>

<footer role="contentinfo">
	<div class="footer">&copy; 2017 Justin Luzong</div>
</footer>
</div>
</body>
</html>
