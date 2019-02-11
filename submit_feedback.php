<html lang="en">
<head>
	<title>Feedback Response Message | Justin Luzong</title>
</head>

<body>
<?php

$date = date('Y-m-d');
$time = date('H:i');
$name = $_REQUEST["name"];
$comment = $_REQUEST["comment"];
$email = $_REQUEST["email"];
$siterating = $_REQUEST["siterating"];

$flag = 0;
$likedcount = 0;
$accesscount = 0;

$sitedesign = NULL;
$links = NULL;
$easeofuse = NULL;
$images = NULL;
$sourcecode = NULL;

foreach($_REQUEST['liked'] as $liked){
if($liked == "sitedesign"){
	$sitedesign = "sitedesign";
	$likedcount = 1;
}

if($liked == "links"){
	$links = "links";
	$likedcount = 1;
}

if($liked == "easeofuse"){
	$easeofuse = "easeofuse";
	$likedcount = 1;
}

if($liked == "images"){
	$images = "images";
	$likedcount = 1;
}

if($liked == "sourcecode"){
	$sourcecode = "sourcecode";
	$likedcount = 1;
}
}

if(isset($_REQUEST['accessfeedback'])){
	$accessfeedback = $_REQUEST['accessfeedback'];
	$accessfeedback = trim($accessfeedback);
	$accesscount = 1;
}
else{
	$accessfeedback = NULL;
}


$name = trim($name);
$comment = trim($comment);
$email = trim($email);
$siterating = trim($siterating);

if(empty($name)){
 $flag=1;
 echo "Please enter your Name.</br>";
}
if(empty($comment)){
 $flag=1;
 echo "Please enter a Comment.</br>";
}
if(empty($email)){
 $flag=1;
 echo "Please enter your Email.</br>";
}
if($likedcount==0){
 $flag=1;
 echo "Please select something you Liked.</br>";
}
if($accesscount==0){
 $flag=1;
 echo "Please select a Site Reference.</br>";
}
if(empty($siterating)){
 $flag=1;
 echo "Please select a Site Rating.</br>";
}

if($flag==0){
		$data = "\n$date, $time\n$name\n$email\nComment: $comment\nLiked: $sitedesign $links $easeofuse $images $sourcecode\nSite Reference: $accessfeedback\nSite Rating: $siterating\r\n";
                $file = "feedback-entries.txt";

                $fp = fopen($file, "a") or die("Couldn't open $file for writing!");
                fwrite($fp, $data) or die("Couldn't write values to file!");
                fclose($fp);   //close the data file

                echo "Thank you for your feedback!</br>";
		echo '<a href="feedback-entries.txt">View Feedback Entries</a>';
}
?>

</body>
</html>